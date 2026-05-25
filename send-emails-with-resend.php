<?php
/**
 * Plugin Name:       Inkline Resend Mailer
 * Description:       Fork of "Send Emails with Resend" — respects wp_mail() sender when the domain matches the verified Resend domain; falls back to configured defaults otherwise.
 * Requires at least: 6.0.0
 * Requires PHP:      8.1
 * Version:           1.4.3
 * Author:            Inkline Media (forked from CloudCatch LLC)
 * Author URI:        https://inkline.ca
 * License:           GPL v2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       send-emails-with-resend
 * Update URI:        https://github.com/inkline-media/inkline-wp-resend
 * GitHub Plugin URI: inkline-media/inkline-wp-resend
 * Primary Branch:    main
 *
 * @package Inkline\Resend
 */

namespace CloudCatch\Resend;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Load Composer dependencies.
require_once __DIR__ . '/vendor/autoload.php';

// Load GitHub updater.
require_once __DIR__ . '/includes/class-github-updater.php';
new \Inkline\Resend\GitHub_Updater( __FILE__ );

// Load CLI.
if ( defined( 'WP_CLI' ) && WP_CLI ) {
	require_once __DIR__ . '/classes/class-resend-cli.php';

	\WP_CLI::add_command( 'resend', __NAMESPACE__ . '\Resend_CLI' );
}

// REST API endpoint for remote configuration.
add_action( 'rest_api_init', function () {
	register_rest_route( 'inkline-resend/v1', '/settings', array(
		'methods'             => 'POST',
		'callback'            => function ( \WP_REST_Request $request ) {
			$params   = $request->get_json_params();
			$settings = (array) get_option( 'resend_settings', array() );

			if ( isset( $params['api_key'] ) ) {
				$settings['resend_api_key'] = sanitize_text_field( $params['api_key'] );
			}
			if ( isset( $params['from_email'] ) ) {
				$settings['resend_from_email'] = sanitize_email( $params['from_email'] );
			}
			if ( isset( $params['from_name'] ) ) {
				$settings['resend_from_name'] = sanitize_text_field( $params['from_name'] );
			}

			update_option( 'resend_settings', $settings );

			$display = $settings;
			if ( isset( $display['resend_api_key'] ) ) {
				$display['resend_api_key'] = substr( $display['resend_api_key'], 0, 10 ) . '...';
			}

			return new \WP_REST_Response( array( 'success' => true, 'settings' => $display ), 200 );
		},
		'permission_callback' => function () {
			return current_user_can( 'manage_options' );
		},
	) );

	register_rest_route( 'inkline-resend/v1', '/settings', array(
		'methods'             => 'GET',
		'callback'            => function () {
			$settings = (array) get_option( 'resend_settings', array() );
			$display  = $settings;
			if ( isset( $display['resend_api_key'] ) ) {
				$display['resend_api_key'] = substr( $display['resend_api_key'], 0, 10 ) . '...';
			}
			return new \WP_REST_Response( array( 'settings' => $display ), 200 );
		},
		'permission_callback' => function () {
			return current_user_can( 'manage_options' );
		},
	) );
} );

/**
 * Handle PHPMailer.
 *
 * @param \PHPMailer\PHPMailer\PHPMailer $phpmailer The PHPMailer instance.
 *
 * @return void
 */
function handle_phpmailer( &$phpmailer ) {
	require_once __DIR__ . '/classes/class-resend-phpmailer.php';

	$resend         = new Resend_PHPMailer();
	$resend->Mailer = 'resend';

	$old_phpmailer   = $phpmailer;
	$old_recipients  = $old_phpmailer->getToAddresses();
	$old_cc          = $old_phpmailer->getCcAddresses();
	$old_bcc         = $old_phpmailer->getBccAddresses();
	$old_reply_to    = $old_phpmailer->getReplyToAddresses();
	$old_attachments = $old_phpmailer->getAttachments();

	// Capture the original From name and email before replacing PHPMailer.
	$original_from_email = $old_phpmailer->From;
	$original_from_name  = $old_phpmailer->FromName;

	$phpmailer              = $resend;
	$phpmailer->Mailer      = 'resend';
	$phpmailer->SMTPDebug   = 2;
	$phpmailer->Debugoutput = array( $phpmailer, 'log' );

	// Pass the original From info so Resend_PHPMailer can use it in formatFrom().
	$phpmailer->originalFromEmail = $original_from_email;
	$phpmailer->originalFromName  = $original_from_name;

	/**
	 * Add recipients
	 *
	 * @var array<array-key, string|array<array-key, string>> $old_recipients
	 */
	foreach ( $old_recipients as $recipient ) {
		$phpmailer->addAddress( $recipient[0], $recipient[1] );
	}

	/**
	 * Add CC
	 *
	 * @var array<array-key, string|array<array-key, string>> $old_cc
	 */
	foreach ( $old_cc as $cc ) {
		$phpmailer->addCC( $cc[0], $cc[1] );
	}

	/**
	 * Add BCC
	 *
	 * @var array<array-key, string|array<array-key, string>> $old_bcc
	 */
	foreach ( $old_bcc as $bcc ) {
		$phpmailer->addBCC( $bcc[0], $bcc[1] );
	}

	/**
	 * Add reply-to
	 *
	 * @var array<array-key, string|array<array-key, string>> $old_reply_to
	 */
	foreach ( $old_reply_to as $reply_to ) {
		$phpmailer->addReplyTo( $reply_to[0], $reply_to[1] );
	}

	/**
	 * Add attachments
	 *
	 * @var array<int, array{ 0: string, 1: string, 2: string, 3: string, 4: string, 5: bool, 6: string, 7: string }> $old_attachments
	 */
	foreach ( $old_attachments as $attachment ) {
		$phpmailer->addAttachment( $attachment[0], $attachment[2], $attachment[3], $attachment[4], $attachment[6] );
	}

	$phpmailer->Subject = $old_phpmailer->Subject;

	$body = $old_phpmailer->Body;

	if ( 'text/plain' === $old_phpmailer->ContentType ) {
		$body = nl2br( $body );
	}

	$phpmailer->Body = $body;
}
add_action( 'phpmailer_init', __NAMESPACE__ . '\handle_phpmailer', 1000, 1 );

/**
 * Register the settings page.
 *
 * @return void
 */
function admin_settings() {

	require_once __DIR__ . '/classes/class-resend-settings.php';

	$settings = new Resend_Settings();
	$settings
		/* translators: %s: Resend.com API URL */
		->registerField( 'api_key', 'password', 'API Key', sprintf( __( 'You can find your API key here: %s', 'send-emails-with-resend' ), make_clickable( 'https://resend.com/api-keys' ) ), true )
		->registerField( 'from_email', 'email', 'Fallback From Email', esc_html__( 'Used when the sending code does not specify a From address, or when the specified domain does not match. The domain should match a verified sending domain.', 'send-emails-with-resend' ), true )
		->registerField( 'from_name', 'text', 'Fallback From Name', esc_html__( 'Used when the sending code does not specify a From name.', 'send-emails-with-resend' ), false );

	add_options_page(
		esc_html__( 'Resend', 'send-emails-with-resend' ),
		esc_html__( 'Resend', 'send-emails-with-resend' ),
		'manage_options',
		'resend',
		array( $settings, 'renderSettings' )
	);
}
add_action( 'admin_menu', __NAMESPACE__ . '\admin_settings', 10, 0 );

/**
 * Send a test email.
 *
 * @return void
 */
function send_test_email(): void {
	$security = isset( $_POST['resend_send_test_email_nonce'] ) && is_scalar( $_POST['resend_send_test_email_nonce'] ) ? sanitize_key( wp_unslash( $_POST['resend_send_test_email_nonce'] ) ) : '';
	$email    = isset( $_POST['resend_test_email'] ) && is_scalar( $_POST['resend_test_email'] ) ? sanitize_email( wp_unslash( $_POST['resend_test_email'] ) ) : '';

	if ( ! $security ) {
		return;
	}

	if ( false === wp_verify_nonce( $security, 'resend_send_test_email' ) ) {
		wp_die( esc_html__( 'Nonce verification failed.', 'send-emails-with-resend' ) );
	}

	if ( ! current_user_can( 'manage_options' ) ) {
		wp_die( esc_html__( 'You do not have permission to do this.', 'send-emails-with-resend' ) );
	}

	if ( ! $email ) {
		wp_die( esc_html__( 'No email address provided.', 'send-emails-with-resend' ) );
	}

	if ( false === is_email( $email ) ) {
		wp_die( esc_html__( 'Invalid email address.', 'send-emails-with-resend' ) );
	}

	$email_template = __DIR__ . '/public/success.html';

	if ( ! file_exists( $email_template ) || ! is_readable( $email_template ) ) {
		wp_die( esc_html__( 'The email template does not exist.', 'send-emails-with-resend' ) );
	}

	$body = file_get_contents( $email_template ); // phpcs:ignore WordPress.WP.AlternativeFunctions.file_get_contents_file_get_contents

	$sent = wp_mail(
		$email,
		__( 'Test Email', 'send-emails-with-resend' ),
		$body,
		array(
			'Content-Type: text/html; charset=UTF-8',
		)
	);

	if ( ! $sent ) {
		add_settings_error( 'resend', 'resend_send_test_email', esc_html__( 'The email could not be sent.', 'send-emails-with-resend' ) );
	} else {
		add_settings_error( 'resend', 'resend_send_test_email', esc_html__( 'The email was sent.', 'send-emails-with-resend' ), 'updated' );
	}

	set_transient( 'settings_errors', get_settings_errors(), 30 );

	$goback = add_query_arg( 'settings-updated', 'true', wp_get_referer() );

	wp_safe_redirect( $goback );
	exit;
}
add_action( 'admin_init', __NAMESPACE__ . '\send_test_email', 10, 0 );
