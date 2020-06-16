<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, SparkPost and others. This file provides a sane default
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

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'facebook' => [
        'client_id' => '121872319242913',
        'client_secret' => '5110821494bba07b3581f9659857acb8',
        'redirect' => 'http://localhost:8000/callback/facebook',
    ],

    'google' => [
        'client_id' => '560026993713-1hds3n9ud5alk6rbq7htbnar12d9klti.apps.googleusercontent.com',
        'client_secret' => 'yg5uhplCKfkqNSIW-pwBr11r',
        'redirect' => 'http://localhost:8000/callback/google',
    ],

];
