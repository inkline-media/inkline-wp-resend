<?php
/**
 * Resend PHPMailer class.
 *
 * @package CloudCatch\Resend
 */

namespace CloudCatch\Resend;

use ResendWP\Monolog\Logger;
use ResendWP\Monolog\Handler\StreamHandler;
use ResendWP_Resend as Resend;
use ResendWP\Resend\Client;

/**
 * Resend PHPMailer class.
 */
class Resend_PHPMailer extends \PHPMailer\PHPMailer\PHPMailer {

	/**
	 * The logger.
	 *
	 * @var ?Logger
	 */
	protected $logger;

	/**
	 * The Resend instance.
	 *
	 * @var ?Client
	 */
	protected $resend;

	/**
	 * Original From email captured from the PHPMailer instance before replacement.
	 *
	 * @var string
	 */
	public $originalFromEmail = '';

	/**
	 * Original From name captured from the PHPMailer instance before replacement.
	 *
	 * @var string
	 */
	public $originalFromName = '';

	/**
	 * Resend_PHPMailer constructor.
	 *
	 * @param bool|null $exceptions The exceptions.
	 */
	public function __construct( $exceptions = null ) {
		$this->setupLogger();

		parent::__construct( $exceptions );
	}

	/**
	 * Initialize the Resend client.
	 *
	 * @return Client
	 */
	public function resend() {
		if ( ! $this->resend ) {
			$settings = $this->getSettings();

			$this->resend = Resend::client( (string) $settings['api_key'] );
		}

		return $this->resend;
	}

	/**
	 * Initialize the logger.
	 *
	 * @return void
	 */
	protected function setupLogger(): void {
		if ( ! $this->logger ) {
			$this->logger = new Logger( 'resend' );

			$this->logger->pushHandler(
				new StreamHandler(
					wp_upload_dir()['basedir'] . '/resend/resend.log',
					100
				)
			);

			// Allow third parties to push additional handlers, etc.
			do_action_ref_array( 'resend_logger', array( &$this->logger ) );
		}
	}

	/**
	 * Build the "From" header using fallback logic.
	 *
	 * 1. From Name:  Always respect the original wp_mail() / plugin value.
	 *                Fall back to settings only when the original is empty or
	 *                is WordPress's default "WordPress".
	 * 2. From Email: Use the original if its domain matches the fallback
	 *                domain from settings (verified Resend domain). Otherwise
	 *                fall back to the settings value to avoid delivery failure.
	 *
	 * @return string  Formatted "Name <email>" or bare email.
	 */
	protected function formatFrom(): string {
		$settings = $this->getSettings();

		$fallback_email = (string) $settings['from_email'];
		$fallback_name  = (string) $settings['from_name'];

		// --- Resolve From Email ---
		$from_email = $fallback_email; // default

		if ( ! empty( $this->originalFromEmail ) ) {
			$original_domain = strtolower( substr( strrchr( $this->originalFromEmail, '@' ), 1 ) );
			$fallback_domain = strtolower( substr( strrchr( $fallback_email, '@' ), 1 ) );

			if ( $original_domain === $fallback_domain ) {
				// Domain matches the verified sending domain — keep the original.
				$from_email = $this->originalFromEmail;
			}
			// Otherwise: domain doesn't match, use fallback to avoid bounce.
		}

		// --- Resolve From Name ---
		$from_name = $fallback_name; // default

		$wp_default_name = 'WordPress';

		if (
			! empty( $this->originalFromName )
			&& $this->originalFromName !== $wp_default_name
		) {
			// The sending code explicitly set a name — respect it.
			$from_name = $this->originalFromName;
		}

		// --- Format ---
		if ( empty( $from_name ) ) {
			return $from_email;
		}

		return sprintf( '%s <%s>', $from_name, $from_email );
	}

	/**
	 * Format the PHPMailer recipients.
	 *
	 * @param string $type The recipient type.
	 *
	 * @throws \Exception If the recipient type is invalid.
	 *
	 * @return array
	 */
	protected function formatRecipients( $type = 'to' ): array {
		$recipients = array();

		if ( ! property_exists( $this, $type ) ) {
			throw new \Exception( 'Invalid recipient type.' );
		}

		/** @var array<array-key, string|array<array-key, string>> $property */
		$property = $this->$type;

		foreach ( $property as $recipient ) {
			if ( is_array( $recipient ) ) {
				$recipients[] = $recipient[0];
			} else {
				$recipients[] = $recipient;
			}
		}

		return $recipients;
	}

	/**
	 * Format the PHPMailer attachments.
	 *
	 * @return array<array-key, array<string, string>>
	 */
	protected function formatAttachments(): array {
		$attachments = array();

		foreach ( $this->attachment as $attachment ) {
			/**
			 * @var array{
			 *     0: string,
			 *     1: string,
			 *     2: string,
			 *     3: string,
			 *     4: string,
			 *     5: bool,
			 *     6: string,
			 *     7: string
			 * } $attachment
			 */
			$content = $attachment[0];

			if ( ! $attachment[5] ) {
				$content = $this->encodeFile( $attachment[0] );
			}

			$attachments[] = array(
				'content'  => $content,
				'filename' => $attachment[1],
				'type'     => $attachment[4],
			);
		}

		return $attachments;
	}

	/**
	 * Check if the email was sent successfully.
	 *
	 * @param array $email The response from Resend.
	 * @return bool
	 */
	protected function emailSuccessful( array $email ): bool {
		if ( isset( $email['id'] ) ) {
			return true;
		}

		return false;
	}

	/**
	 * Resend the email.
	 *
	 * @param string $header The email header.
	 * @param string $body   The email body.
	 *
	 * @throws \PHPMailer\PHPMailer\Exception To be sent back to PHPMailer to catch.
	 *
	 * @return bool
	 */
	protected function resendSend( string $header, string $body ): bool {
		try {
			$email = $this->resend()->emails->send(
				array(
					'from'        => $this->formatFrom(),
					'subject'     => $this->Subject,
					'html'        => $this->Body,
					'to'          => $this->formatRecipients(),
					'bcc'         => $this->formatRecipients( 'bcc' ),
					'cc'          => $this->formatRecipients( 'cc' ),
					'reply_to'    => $this->formatRecipients( 'ReplyTo' ),
					'attachments' => $this->formatAttachments(),
				)
			)->toArray();
		} catch ( \Exception $e ) {
			$email = array(
				'message' => $e->getMessage(),
			);
		}

		if ( ! $this->emailSuccessful( $email ) ) {
			throw new \PHPMailer\PHPMailer\Exception( esc_html( (string) $email['message'] ) );
		}

		return true;
	}

	/**
	 * Log the error.
	 *
	 * @param string $message The log message.
	 * @param int    $level  The PHPMailer debug level.
	 * @return void
	 */
	protected function log( $message, $level ) {
		$this->logger->error( $message );
	}

	/**
	 * Get Resend settings.
	 *
	 * @return array<array-key, mixed>
	 */
	protected function getSettings(): array {
		$default_settings = array(
			'api_key'    => '',
			'from_email' => '',
			'from_name'  => '',
		);

		$settings = (array) get_option( 'resend_settings', $default_settings );

		return wp_parse_args( $settings, $default_settings );
	}
}
