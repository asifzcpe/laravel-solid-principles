<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\PaymentGateway;
use App\CreditCardPaymentGateway;
use App\PaypalPaymentGateway;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
