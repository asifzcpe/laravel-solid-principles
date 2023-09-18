<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to your application's "home" route.
     *
     * Typically, users are redirected here after authentication.
     *
     * @var string
     */
    public const HOME = '/home';

    /**
     * Define your route model bindings, pattern filters, and other route configuration.
     */
    public function boot(): void
    {

        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });

        $this->routes(function () {
            Route::middleware('api')
                ->prefix('api')
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->group(base_path('routes/web.php'));
        });

        //Here is the logic to bind route params to respective class to intentiate gateway classes

        Route::bind('gateway', function ($gateway) {
            // Define the namespace where your payment gateway classes reside.
            $namespace = 'App\\Components\\PaymentGateways\\';

            // Create the fully qualified class name based on the route parameter.
            $className = $namespace . Str::studly($gateway) . 'PaymentGateway';

            // Check if the class exists.
            if (class_exists($className)) {
                // Instantiate the class dynamically.
                return app()->make($className);
            }
            // Handle the case when the provided $gateway parameter does not correspond to a valid class.
            return abort(404); // Or any other appropriate action.
        });
    }
}
