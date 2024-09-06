<?php

// src/BudPayServiceProvider.php

namespace BudPay;

use Illuminate\Support\ServiceProvider;

class BudPayServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(BudPayService::class, function ($app) {
            return new BudPayService();
        });
    }

    public function boot()
    {
        // Optionally publish the configuration file
        $this->publishes([
            __DIR__ . '/../config/budpay.php' => config_path('budpay.php'),
        ], 'config');
    }
}
