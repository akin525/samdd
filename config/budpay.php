<?php
// config/budpay.php

return [
    'secret_key' => env('BUDPAY_SECRET_KEY'),
    'signature_hmac' => env('BUDPAY_HMAC_SIGNATURE'),


    'providers' => [
        // Other Service Providers
        BudPay\BudPayServiceProvider::class,
    ],

];
