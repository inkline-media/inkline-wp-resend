<?php

namespace ResendWP\Resend\Service;

use ResendWP\Resend\ApiKey;
use ResendWP\Resend\Audience;
use ResendWP\Resend\Broadcast;
use ResendWP\Resend\Collection;
use ResendWP\Resend\Contact;
use ResendWP\Resend\ContactProperty;
use ResendWP\Resend\Contacts\Topic as ContactTopic;
use ResendWP\Resend\Contracts\Transporter;
use ResendWP\Resend\Domain;
use ResendWP\Resend\Email;
use ResendWP\Resend\Emails\Attachment;
use ResendWP\Resend\Emails\Receiving;
use ResendWP\Resend\Resource;
use ResendWP\Resend\Segment;
use ResendWP\Resend\Template;
use ResendWP\Resend\Topic;
use ResendWP\Resend\Webhook;

abstract class Service
{
    /**
     * @var array<string, \ResendWP\Resend\Resource>
     */
    protected $mapping = [
        'api-keys' => ApiKey::class,
        'attachments' => Attachment::class,
        'audiences' => Audience::class,
        'broadcasts' => Broadcast::class,
        'contacts' => Contact::class,
        'contact-properties' => ContactProperty::class,
        'contact-topics' => ContactTopic::class,
        'domains' => Domain::class,
        'receiving' => Receiving::class,
        'emails' => Email::class,
        'segments' => Segment::class,
        'templates' => Template::class,
        'topics' => Topic::class,
        'webhooks' => Webhook::class,
    ];

    /**
     * Create a service instance with the given transporter.
     */
    public function __construct(
        protected readonly Transporter $transporter
    ) {
        //
    }

    /**
     * Create a new resource for the given  with the given attributes.
     */
    protected function createResource(string $resourceType, array $attributes)
    {
        $class = isset($this->mapping[$resourceType]) ? $this->mapping[$resourceType] : Resource::class;

        if (isset($attributes['data']) && is_array($attributes['data'])) {
            foreach ($attributes['data'] as $key => $value) {
                $attributes['data'][$key] = $class::from($value);
            }

            return Collection::from($attributes);
        } else {
            return $class::from($attributes);
        }
    }
}
