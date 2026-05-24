<?php

use ResendWP\GuzzleHttp\Client as GuzzleClient;
use ResendWP\Resend\Client;
use ResendWP\Resend\Transporters\HttpTransporter;
use ResendWP\Resend\ValueObjects\ApiKey;
use ResendWP\Resend\ValueObjects\Transporter\BaseUri;
use ResendWP\Resend\ValueObjects\Transporter\Headers;

class ResendWP_Resend
{
    /**
     * The current SDK version.
     */
    public const VERSION = '1.1.0';

    /**
     * Creates a new ResendWP_Resend Client with the given API key.
     */
    public static function client(string $apiKey): Client
    {
        $apiKey = ApiKey::from($apiKey);
        $baseUri = BaseUri::from(getenv('RESEND_BASE_URL') ?: 'api.resend.com');
        $headers = Headers::withAuthorization($apiKey);

        $client = new GuzzleClient();
        $transporter = new HttpTransporter($client, $baseUri, $headers);

        return new Client($transporter);
    }
}
