<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    'bca' => [
        'id' => env('BCA_CLIENT_ID'),
        'key' => env('BCA_API_KEY'),
        'api_secret' => base64_decode(env('BCA_API_SECRET')),
        'client_secret' => base64_decode(env('BCA_CLIENT_SECRET')),
        'url' => [
            'oauth_token'     => env('BCA_OAUTH_URL'),
            'validate_account' => env('BCA_VALIDATE_ACCOUNT_URL'),
        ],
    ],
];
