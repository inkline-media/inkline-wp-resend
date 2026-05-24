<?php

namespace ResendWP\Resend\Exceptions;

use Exception;
use ResendWP\Psr\Http\Client\ClientExceptionInterface;

class TransporterException extends Exception
{
    /**
     * Create a new Transporter exception.
     */
    public function __construct(ClientExceptionInterface $exception)
    {
        parent::__construct($exception->getMessage(), 0, $exception);
    }
}
