<?php

namespace ResendWP\Resend\Service\Contacts;

use ResendWP\Resend\Service\Service;
use ResendWP\Resend\ValueObjects\Transporter\Payload;

class Segment extends Service
{
    public function add(string $contact, string $segmentId): \ResendWP\Resend\Segment
    {
        $payload = Payload::create("contacts/$contact/segments/$segmentId", []);

        $result = $this->transporter->request($payload);

        return $this->createResource('segments', $result);
    }

    /**
     * Retrieve a list of segments for the given contact ID.
     *
     * @param array{'limit'?: int, 'before'?: string, 'after'?: string} $options
     * @return \ResendWP\Resend\Collection<\ResendWP\Resend\Segment>
     *
     * @see https://resend.com/docs/api-reference/contacts/list-contact-segments
     */
    public function list(string $contactId, array $options = []): \ResendWP\Resend\Collection
    {
        $payload = Payload::list("contacts/$contactId/segments", $options);

        $result = $this->transporter->request($payload);

        return $this->createResource('segments', $result);
    }

    public function remove(string $contact, string $segmentId): \ResendWP\Resend\Segment
    {
        $payload = Payload::delete("contacts/$contact/segments", $segmentId);

        $result = $this->transporter->request($payload);

        return $this->createResource('segments', $result);
    }
}
