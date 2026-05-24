<?php

namespace ResendWP\Resend\Service\Emails;

use ResendWP\Resend\Contracts\Transporter;
use ResendWP\Resend\Service\Emails\Receiving\Attachment;
use ResendWP\Resend\Service\Service;
use ResendWP\Resend\ValueObjects\Transporter\Payload;

class Receiving extends Service
{
    public Attachment $attachments;

    /**
     * Create a new email receiving service instance with the given transport.
     */
    public function __construct(Transporter $transporter)
    {
        $this->attachments = new Attachment($transporter);

        parent::__construct($transporter);
    }

    /**
     * Retrieve an inbound email with the given ID.
     *
     * @see https://resend.com/docs/api-reference/emails/retrieve-inbound-email
     */
    public function get(string $id): \ResendWP\Resend\Emails\Receiving
    {
        $payload = Payload::get('emails/receiving', $id);

        $result = $this->transporter->request($payload);

        return $this->createResource('receiving', $result);
    }

    /**
     * List all inbound emails.
     *
     * @param array{'limit'?: int, 'before'?: string, 'after'?: string} $options
     * @return \ResendWP\Resend\Collection<\ResendWP\Resend\Emails\Receiving>
     *
     * @see https://resend.com/docs/api-reference/emails/list-inbound-emails
     */
    public function list(array $options = []): \ResendWP\Resend\Collection
    {
        $payload = Payload::list('emails/receiving', $options);

        $result = $this->transporter->request($payload);

        return $this->createResource('receiving', $result);
    }
}
