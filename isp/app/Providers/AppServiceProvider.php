<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider {
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register() {
        //
        $this->app->bind(
            \App\Interfaces\CustomerAccount::class,
            \App\Services\CustomerService::class
        );

        $this->app->bind(
            \App\Interfaces\BankTellerAccount::class,
            \App\Services\BankTellerService::class
        );

        $this->app->bind(
            \App\Interfaces\BankManagerAccount::class,
            \App\Services\BankManagerService::class
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot() {
        //
    }
}
