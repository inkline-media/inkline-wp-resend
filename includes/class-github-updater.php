<?php
/**
 * GitHub-based plugin auto-updater.
 *
 * Checks the GitHub Releases API for new versions and surfaces them
 * through WordPress's built-in plugin update UI.
 *
 * @package Inkline\Resend
 */

namespace Inkline\Resend;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class GitHub_Updater {

	/**
	 * GitHub org/repo slug.
	 */
	private const REPO = 'inkline-media/inkline-wp-resend';

	/**
	 * How long (seconds) to cache a successful GitHub response.
	 */
	private const CACHE_TTL = 43200; // 12 hours

	/**
	 * How long (seconds) to cache a failed GitHub response.
	 * Shorter so retries happen sooner after transient network issues.
	 */
	private const FAIL_CACHE_TTL = 3600; // 1 hour

	/**
	 * Transient key used for caching.
	 */
	private const TRANSIENT = 'inkline_resend_gh_update';

	/**
	 * Full path to the main plugin file.
	 *
	 * @var string
	 */
	private string $plugin_file;

	/**
	 * Plugin basename (e.g. "inkline-wp-resend/send-emails-with-resend.php").
	 *
	 * @var string
	 */
	private string $basename;

	/**
	 * Current plugin version from the header.
	 *
	 * @var string
	 */
	private string $version;

	/**
	 * Constructor.
	 *
	 * @param string $plugin_file Absolute path to the main plugin file.
	 */
	public function __construct( string $plugin_file ) {
		$this->plugin_file = $plugin_file;
		$this->basename    = plugin_basename( $plugin_file );

		if ( ! function_exists( 'get_plugin_data' ) ) {
			require_once ABSPATH . 'wp-admin/includes/plugin.php';
		}

		$plugin_data   = get_plugin_data( $plugin_file, false, false );
		$this->version = $plugin_data['Version'] ?? '0.0.0';

		// Primary update hook — injects into the update_plugins transient.
		add_filter( 'pre_set_site_transient_update_plugins', array( $this, 'check_update' ) );

		// Update URI hook (WP 5.8+) — provides update data via the Update URI header.
		add_filter( 'update_plugins_github.com', array( $this, 'update_uri_check' ), 10, 4 );

		// Plugin information modal ("View details" link).
		add_filter( 'plugins_api', array( $this, 'plugin_info' ), 20, 3 );

		// Post-install: rename extracted folder to match expected slug.
		add_filter( 'upgrader_post_install', array( $this, 'post_install' ), 10, 3 );

		// Prevent wp.org from ever checking for our forked slug.
		add_filter( 'http_request_args', array( $this, 'exclude_from_wporg' ), 5, 2 );
	}

	/**
	 * Fetch the latest release from GitHub (cached).
	 *
	 * @return array|null  Release data or null on failure.
	 */
	private function fetch_release(): ?array {
		$cached = get_transient( self::TRANSIENT );

		if ( false !== $cached ) {
			return $cached ?: null;
		}

		$url = sprintf( 'https://api.github.com/repos/%s/releases/latest', self::REPO );

		$response = wp_remote_get( $url, array(
			'headers' => array(
				'Accept'     => 'application/vnd.github.v3+json',
				'User-Agent' => 'Inkline-Resend-Updater/' . $this->version,
			),
			'timeout' => 10,
		) );

		if ( is_wp_error( $response ) || 200 !== wp_remote_retrieve_response_code( $response ) ) {
			// Cache failures for a shorter period so retries happen sooner.
			set_transient( self::TRANSIENT, '', self::FAIL_CACHE_TTL );
			return null;
		}

		$body = json_decode( wp_remote_retrieve_body( $response ), true );

		if ( empty( $body['tag_name'] ) ) {
			set_transient( self::TRANSIENT, '', self::FAIL_CACHE_TTL );
			return null;
		}

		set_transient( self::TRANSIENT, $body, self::CACHE_TTL );

		return $body;
	}

	/**
	 * Build the update object used by WordPress.
	 *
	 * @return object|null  Update data or null if no update available.
	 */
	private function build_update_object(): ?object {
		$release = $this->fetch_release();

		if ( ! $release ) {
			return null;
		}

		$remote_version = ltrim( $release['tag_name'], 'vV' );

		if ( version_compare( $remote_version, $this->version, '<=' ) ) {
			return null;
		}

		$zip_url = $release['zipball_url'] ?? '';

		// Prefer an attached .zip asset if one exists.
		foreach ( $release['assets'] ?? array() as $asset ) {
			if ( str_ends_with( $asset['name'], '.zip' ) ) {
				$zip_url = $asset['browser_download_url'];
				break;
			}
		}

		if ( empty( $zip_url ) ) {
			return null;
		}

		return (object) array(
			'slug'        => dirname( $this->basename ),
			'plugin'      => $this->basename,
			'new_version' => $remote_version,
			'url'         => $release['html_url'],
			'package'     => $zip_url,
			'icons'       => array(),
			'banners'     => array(),
		);
	}

	/**
	 * Inject update info into the transient if a newer version exists.
	 *
	 * @param object $transient The update_plugins transient.
	 * @return object
	 */
	public function check_update( $transient ) {
		if ( empty( $transient->checked ) ) {
			return $transient;
		}

		$update = $this->build_update_object();

		if ( $update ) {
			$transient->response[ $this->basename ] = $update;
		}

		return $transient;
	}

	/**
	 * Handle the Update URI filter (WP 5.8+).
	 *
	 * Fired by the `update_plugins_github.com` filter when WordPress
	 * processes plugins with `Update URI: https://github.com/...`.
	 *
	 * @param array|false $update     The plugin update data. False if no update.
	 * @param array       $plugin_data Plugin header data.
	 * @param string      $plugin_file Plugin file path relative to plugins dir.
	 * @param string[]    $locales     Installed locales.
	 * @return array|false
	 */
	public function update_uri_check( $update, $plugin_data, $plugin_file, $locales ) {
		if ( $plugin_file !== $this->basename ) {
			return $update;
		}

		$obj = $this->build_update_object();

		if ( ! $obj ) {
			return $update;
		}

		return array(
			'slug'        => $obj->slug,
			'version'     => $obj->new_version,
			'url'         => $obj->url,
			'package'     => $obj->package,
		);
	}

	/**
	 * Supply plugin information for the "View details" modal.
	 *
	 * @param false|object|array $result The result object or array.
	 * @param string             $action The API action.
	 * @param object             $args   Plugin arguments.
	 * @return false|object
	 */
	public function plugin_info( $result, $action, $args ) {
		if ( 'plugin_information' !== $action ) {
			return $result;
		}

		if ( dirname( $this->basename ) !== ( $args->slug ?? '' ) ) {
			return $result;
		}

		$release = $this->fetch_release();

		if ( ! $release ) {
			return $result;
		}

		$remote_version = ltrim( $release['tag_name'], 'vV' );

		return (object) array(
			'name'          => 'Inkline Resend Mailer',
			'slug'          => dirname( $this->basename ),
			'version'       => $remote_version,
			'author'        => '<a href="https://inkline.ca">Inkline Media</a>',
			'homepage'      => 'https://github.com/' . self::REPO,
			'download_link' => $release['zipball_url'] ?? '',
			'sections'      => array(
				'description' => 'Fork of "Send Emails with Resend" that respects wp_mail() sender when the domain matches the verified Resend sending domain.',
				'changelog'   => nl2br( esc_html( $release['body'] ?? '' ) ),
			),
			'requires'      => '6.0.0',
			'requires_php'  => '8.1',
			'tested'        => '6.9',
		);
	}

	/**
	 * After the zip is extracted, rename the folder to match the expected plugin slug.
	 *
	 * GitHub's zipball creates a folder like "inkline-media-inkline-wp-resend-abc1234".
	 * WordPress expects "inkline-wp-resend" (matching the installed folder name).
	 *
	 * @param bool  $response   Installation response.
	 * @param array $hook_extra Extra data from the upgrader.
	 * @param array $result     Installation result data.
	 * @return bool|WP_Error
	 */
	public function post_install( $response, $hook_extra, $result ) {
		if ( ! isset( $hook_extra['plugin'] ) || $hook_extra['plugin'] !== $this->basename ) {
			return $response;
		}

		global $wp_filesystem;

		$proper_dir = WP_PLUGIN_DIR . '/' . dirname( $this->basename );

		// Move extracted folder to the correct location.
		$wp_filesystem->move( $result['destination'], $proper_dir );
		$result['destination'] = $proper_dir;

		// Re-activate the plugin.
		activate_plugin( $this->basename );

		return $response;
	}

	/**
	 * Exclude this plugin from wp.org update checks.
	 *
	 * Belt-and-suspenders alongside Update URI — ensures the forked
	 * plugin's text domain never triggers a wp.org lookup.
	 *
	 * @param array  $args HTTP request arguments.
	 * @param string $url  The request URL.
	 * @return array
	 */
	public function exclude_from_wporg( $args, $url ) {
		if ( false === strpos( $url, 'api.wordpress.org/plugins/update-check' ) ) {
			return $args;
		}

		if ( ! isset( $args['body']['plugins'] ) ) {
			return $args;
		}

		$plugins = json_decode( $args['body']['plugins'], true );

		if ( isset( $plugins['plugins'][ $this->basename ] ) ) {
			unset( $plugins['plugins'][ $this->basename ] );
		}

		if ( isset( $plugins['active'] ) && is_array( $plugins['active'] ) ) {
			$plugins['active'] = array_values(
				array_filter( $plugins['active'], function ( $p ) {
					return $p !== $this->basename;
				} )
			);
		}

		$args['body']['plugins'] = wp_json_encode( $plugins );

		return $args;
	}
}
