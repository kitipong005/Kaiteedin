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
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'facebook' => [
        'client_id' => env('FB_APP','2288028404846812'),         // Your Facebook Client ID
        'client_secret' => env('FB_APP','58f3df1eba2aab08c667d5beac6db54a'), // Your Facebook Client Secret
        'redirect' => 'http://127.0.0.1:8000/login/facebook/callback',
    ],

    'google' => [
        'client_id' => env('GOOGLE_CLIENT_ID','275629934260-loqql7stqmdrlrcap2la481htj5g3eku.apps.googleusercontent.com'),         // Your google Client ID
        'client_secret' => env('GOOGLE_CLIENT_SECRET','82RBF3dPzsJqmIWGJM4EZSEt'), // Your google Client Secret
        'redirect' => 'http://localhost:8000/login/google/callback',
    ],
    
];
