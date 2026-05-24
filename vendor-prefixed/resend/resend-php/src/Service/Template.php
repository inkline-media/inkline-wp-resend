<?php

namespace ResendWP\Resend\Service;

use ResendWP\Resend\ValueObjects\Transporter\Payload;

class Template extends Service
{
    /**
     * Retrieve a template with the given ID.
     *
     * @see https://resend.com/docs/api-reference/templates/get-template
     */
    public function get(string $id): \ResendWP\Resend\Template
    {
        $payload = Payload::get('templates', $id);

        $result = $this->transporter->request($payload);

        return $this->createResource('templates', $result);
    }

    /**
     * Create a new template.
     *
     * @see https://resend.com/docs/api-reference/templates/create-template
     */
    public function create(array $parameters, array $options = []): \ResendWP\Resend\Template
    {
        $payload = Payload::create('templates', $parameters);

        $result = $this->transporter->request($payload);

        return $this->createResource('templates', $result);
    }

    /**
     * List all templates.
     *
     * @param array{'limit'?: int, 'before'?: string, 'after'?: string} $options
     * @return \ResendWP\Resend\Collection<\ResendWP\Resend\Template>
     *
     * @see https://resend.com/docs/api-reference/templates/list-templates
     */
    public function list(array $options = []): \ResendWP\Resend\Collection
    {
        $payload = Payload::list('templates', $options);

        $result = $this->transporter->request($payload);

        return $this->createResource('templates', $result);
    }

    /**
     * Update a template with the given ID.
     *
     * @see https://resend.com/docs/api-reference/templates/update-template
     */
    public function update(string $id, array $parameters): \ResendWP\Resend\Template
    {
        $payload = Payload::update('templates', $id, $parameters);

        $result = $this->transporter->request($payload);

        return $this->createResource('templates', $result);
    }

    /**
     * Remove a template with the given ID.
     *
     * @see https://resend.com/docs/api-reference/templates/delete-template
     */
    public function remove(string $id): \ResendWP\Resend\Template
    {
        $payload = Payload::delete('templates', $id);

        $result = $this->transporter->request($payload);

        return $this->createResource('templates', $result);
    }

    /**
     * Publish a template with the given ID.
     *
     * @see https://resend.com/docs/api-reference/templates/publish-template
     */
    public function publish(string $id): \ResendWP\Resend\Template
    {
        $payload = Payload::publish('templates', $id);

        $result = $this->transporter->request($payload);

        return $this->createResource('templates', $result);
    }

    /**
     * Duplicate a template with the given ID.
     *
     * @see https://resend.com/docs/api-reference/templates/duplicate-template
     */
    public function duplicate(string $id): \ResendWP\Resend\Template
    {
        $payload = Payload::duplicate('templates', $id);

        $result = $this->transporter->request($payload);

        return $this->createResource('templates', $result);
    }
}
