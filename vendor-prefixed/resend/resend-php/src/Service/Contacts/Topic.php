<?php

namespace ResendWP\Resend\Service\Contacts;

use ResendWP\Resend\Service\Service;
use ResendWP\Resend\ValueObjects\Transporter\Payload;

class Topic extends Service
{
    /**
     * Retrieve a list of topics subscriptions for a contact.
     *
     * @param array{'limit'?: int, 'before'?: string, 'after'?: string} $options
     * @return \ResendWP\Resend\Collection<\ResendWP\Resend\Contacts\Topic>
     *
     * @see https://resend.com/docs/api-reference/contacts/get-contact-topics
     */
    public function get(string $contactId): \ResendWP\Resend\Collection
    {
        $payload = Payload::list("contacts/$contactId/topics");

        $result = $this->transporter->request($payload);

        return $this->createResource('contact-topics', $result);
    }

    /**
     * Update topic subscriptions for a contact.
     *
     * @see https://resend.com/docs/api-reference/contacts/update-contact-topics
     */
    public function update(string $contactId, array $parameters): \ResendWP\Resend\Contact
    {
        $payload = Payload::update('contacts', "$contactId/topics", $parameters);

        $result = $this->transporter->request($payload);

        return $this->createResource('contacts', $result);
    }
}
