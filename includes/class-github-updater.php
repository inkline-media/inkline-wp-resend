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
	 * How long (seconds) to cache the GitHub response.
	 */
	private const CACHE_TTL = 43200; // 12 hours

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

		add_filter( 'pre_set_site_transient_update_plugins', array( $this, 'check_update' ) );
		add_filter( 'plugins_api', array( $this, 'plugin_info' ), 20, 3 );
		add_filter( 'upgrader_post_install', array( $this, 'post_install' ), 10, 3 );
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
			set_transient( self::TRANSIENT, '', self::CACHE_TTL );
			return null;
		}

		$body = json_decode( wp_remote_retrieve_body( $response ), true );

		if ( empty( $body['tag_name'] ) ) {
			set_transient( self::TRANSIENT, '', self::CACHE_TTL );
			return null;
		}

		set_transient( self::TRANSIENT, $body, self::CACHE_TTL );

		return $body;
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

		$release = $this->fetch_release();

		if ( ! $release ) {
			return $transient;
		}

		$remote_version = ltrim( $release['tag_name'], 'vV' );

		if ( version_compare( $remote_version, $this->version, '<=' ) ) {
			return $transient;
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
			return $transient;
		}

		$transient->response[ $this->basename ] = (object) array(
			'slug'        => dirname( $this->basename ),
			'plugin'      => $this->basename,
			'new_version' => $remote_version,
			'url'         => $release['html_url'],
			'package'     => $zip_url,
			'icons'       => array(),
			'banners'     => array(),
		);

		return $transient;
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
}
