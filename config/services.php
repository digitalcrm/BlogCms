<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
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

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
        'webhook' => [
            'secret' => env('STRIPE_WEBHOOK_SECRET'),
            'tolerance' => env('STRIPE_WEBHOOK_TOLERANCE', 300),
        ],
    ],

    'twitter' => [
        'client_id' => 'JClwIf7SQldNnJt30YElxb3HC',
        'client_secret' => 'I4ukEBPsdoagIvVhfols3DMMfaZr1KqKYiPqFhmQ6mHIsfcZGk',
        'redirect' => 'http://127.0.0.1:8000/login/twitter/callback',
    ],

    'facebook' => [
        'client_id' => '807785832976061',
        'client_secret' => 'c71e9760406d1e7a1ca4e95778e7c48e',
        'redirect' => 'http://localhost:8000/login/facebook/callback',
    ],

    'google' => [
        'client_id' => '1076971130211-opg9d2hhh8li13jd4htbpei3r20g2fmb.apps.googleusercontent.com',
        'client_secret' => 'ygVEXWGJcygD7LPVVc-28HPF',
        'redirect' => 'http://localhost:8000/login/google/callback',
    ],

    'github' => [
        'client_id' => 'e5234fbbc8baa2ba8029' ,
        'client_secret' => '3373e1004adb8438ca3f7093061f9df660002c05' ,
        'redirect' => 'http://localhost:8000/login/github/callback',
    ],
];
