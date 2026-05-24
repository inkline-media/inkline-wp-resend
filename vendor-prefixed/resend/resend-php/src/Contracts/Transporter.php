<?php

namespace ResendWP\Resend\Contracts;

use ResendWP\Resend\Exceptions\ErrorException;
use ResendWP\Resend\Exceptions\TransporterException;
use ResendWP\Resend\Exceptions\UnserializableResponse;
use ResendWP\Resend\ValueObjects\Transporter\Payload;

interface Transporter
{
    /**
     * Sends a request to the Resend API.
     *
     * @return array<array-key, mixed>
     *
     * @throws ErrorException|TransporterException|UnserializableResponse
     */
    public function request(Payload $payload): array;
}
