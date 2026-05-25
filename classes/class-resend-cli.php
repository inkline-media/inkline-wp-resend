<?php
/**
 * Resend WP_CLI class.
 *
 * @package CloudCatch\Resend
 */

namespace CloudCatch\Resend;

/**
 * Manages Resend email configuration.
 */
class Resend_CLI extends \WP_CLI_Command {

	/**
	 * Configure Resend settings.
	 *
	 * ## OPTIONS
	 *
	 * [--api-key=<key>]
	 * : The Resend API key.
	 *
	 * [--from-email=<email>]
	 * : Fallback From email address.
	 *
	 * [--from-name=<name>]
	 * : Fallback From name.
	 *
	 * ## EXAMPLES
	 *
	 *     wp resend setup --api-key=re_xxx --from-email=noreply@example.com --from-name='My Site'
	 *
	 * @param array $args       Positional arguments.
	 * @param array $assoc_args Associative arguments.
	 */
	public function setup( $args, $assoc_args ) {
		$settings = (array) get_option( 'resend_settings', array() );

		$changed = false;

		if ( isset( $assoc_args['api-key'] ) ) {
			$settings['resend_api_key'] = sanitize_text_field( $assoc_args['api-key'] );
			$changed = true;
		}

		if ( isset( $assoc_args['from-email'] ) ) {
			$settings['resend_from_email'] = sanitize_email( $assoc_args['from-email'] );
			$changed = true;
		}

		if ( isset( $assoc_args['from-name'] ) ) {
			$settings['resend_from_name'] = sanitize_text_field( $assoc_args['from-name'] );
			$changed = true;
		}

		if ( ! $changed ) {
			\WP_CLI::error( 'No settings provided. Use --api-key, --from-email, and/or --from-name.' );
			return;
		}

		update_option( 'resend_settings', $settings );

		\WP_CLI::success( 'Resend settings updated.' );

		$display = $settings;
		if ( isset( $display['resend_api_key'] ) ) {
			$display['resend_api_key'] = substr( $display['resend_api_key'], 0, 10 ) . '...';
		}
		\WP_CLI\Utils\format_items( 'table', array( $display ), array_keys( $display ) );
	}

	/**
	 * Display current Resend settings.
	 *
	 * ## EXAMPLES
	 *
	 *     wp resend status
	 *
	 * @param array $args       Positional arguments.
	 * @param array $assoc_args Associative arguments.
	 */
	public function status( $args, $assoc_args ) {
		$settings = (array) get_option( 'resend_settings', array() );

		if ( empty( $settings ) || ( count( $settings ) === 1 && isset( $settings[0] ) && $settings[0] === '' ) ) {
			\WP_CLI::warning( 'Resend is not configured. Run: wp resend setup --api-key=... --from-email=... --from-name=...' );
			return;
		}

		$display = $settings;
		if ( isset( $display['resend_api_key'] ) && strlen( $display['resend_api_key'] ) > 10 ) {
			$display['resend_api_key'] = substr( $display['resend_api_key'], 0, 10 ) . '...';
		}
		\WP_CLI\Utils\format_items( 'table', array( $display ), array_keys( $display ) );
	}

	/**
	 * Send a test email.
	 *
	 * ## OPTIONS
	 *
	 * [--to=<email>]
	 * : Recipient email. Defaults to admin email.
	 *
	 * [--from=<from>]
	 * : Optional From header (e.g. 'Name <email@domain.com>') to test fallback logic.
	 *
	 * ## EXAMPLES
	 *
	 *     wp resend send_test
	 *     wp resend send_test --to=test@example.com
	 *     wp resend send_test --to=test@example.com --from='Sales <sales@example.com>'
	 *
	 * @param array $args       Positional arguments.
	 * @param array $assoc_args Associative arguments.
	 */
	public function send_test( $args, $assoc_args ) {
		$recipient = isset( $assoc_args['to'] ) ? sanitize_email( $assoc_args['to'] ) : (string) get_option( 'admin_email' );

		if ( ! is_email( $recipient ) ) {
			\WP_CLI::error( 'Invalid recipient email.' );
			return;
		}

		$subject = 'Resend Test Email';
		$message = 'This is a test email sent via the Inkline Resend Mailer plugin (WP-CLI).';
		$headers = array();

		if ( isset( $assoc_args['from'] ) ) {
			$headers[] = 'From: ' . $assoc_args['from'];
		}

		$sent = wp_mail( $recipient, $subject, $message, $headers );

		if ( ! $sent ) {
			\WP_CLI::error( 'Email not sent.' );
		}

		\WP_CLI::success( "Test email sent to {$recipient}." );
	}
}
