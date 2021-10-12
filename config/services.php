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

    'google' => [
        'client_id' => '989781792972-ssvrpipa5lrhcvq35gk9kse18fa2qoi0.apps.googleusercontent.com', //USE FROM Google DEVELOPER ACCOUNT
        'client_secret' => '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', //USE FROM Google DEVELOPER ACCOUNT
        'redirect' => 'http://127.0.0.1:8000/google/callback/'
    ],

    'facebook' => [
        'client_id' => '251956066861844',
        'client_secret' => 'c514b5fc70668498d57a21ac5d70fe3b',
        'redirect' => 'http://127.0.0.1:8000/facebook/callback',
      ]

];
