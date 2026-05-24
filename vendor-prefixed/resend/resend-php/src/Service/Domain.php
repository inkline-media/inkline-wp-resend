<?php

namespace ResendWP\Resend\Service;

use ResendWP\Resend\ValueObjects\Transporter\Payload;

class Domain extends Service
{
    /**
     * Retrieve a domain with the given ID.
     *
     * @see https://resend.com/docs/api-reference/domains/get-domain
     */
    public function get(string $id): \ResendWP\Resend\Domain
    {
        $payload = Payload::get('domains', $id);

        $result = $this->transporter->request($payload);

        return $this->createResource('domains', $result);
    }

    /**
     * Add a new domain.
     *
     * @see https://resend.com/docs/api-reference/domains/create-domain#body-parameters
     */
    public function create(array $parameters): \ResendWP\Resend\Domain
    {
        $payload = Payload::create('domains', $parameters);

        $result = $this->transporter->request($payload);

        return $this->createResource('domains', $result);
    }

    /**
     * List all domains.
     *
     * @param array{'limit'?: int, 'before'?: string, 'after'?: string} $options
     * @return \ResendWP\Resend\Collection<\ResendWP\Resend\Domain>
     *
     * @see https://resend.com/docs/api-reference/domains/list-domains
     */
    public function list(array $options = []): \ResendWP\Resend\Collection
    {
        $payload = Payload::list('domains', $options);

        $result = $this->transporter->request($payload);

        return $this->createResource('domains', $result);
    }

    /**
     * Update a domain with the given ID.
     *
     * @see https://resend.com/docs/api-reference/domains/update-domain
     */
    public function update(string $id, array $parameters): \ResendWP\Resend\Domain
    {
        $payload = Payload::update('domains', $id, $parameters);

        $result = $this->transporter->request($payload);

        return $this->createResource('domains', $result);
    }

    /**
     * Remove a domain with the given ID.
     *
     * @see https://resend.com/docs/api-reference/domains/delete-domain#path-parameters
     */
    public function remove(string $id): \ResendWP\Resend\Domain
    {
        $payload = Payload::delete('domains', $id);

        $result = $this->transporter->request($payload);

        return $this->createResource('domains', $result);
    }

    /**
     * Verify a domain with the given ID.
     *
     * @see https://resend.com/docs/api-reference/domains/verify-domain#path-parameters
     */
    public function verify(string $id): \ResendWP\Resend\Domain
    {
        $payload = Payload::verify('domains', $id);

        $result = $this->transporter->request($payload);

        return $this->createResource('domains', $result);
    }
}
