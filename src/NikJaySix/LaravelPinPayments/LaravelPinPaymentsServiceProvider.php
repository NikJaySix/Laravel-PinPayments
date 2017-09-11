<?php
namespace NikJaySix\LaravelPinPayments;

use Illuminate\Support\ServiceProvider;
use Pin\Handler;
use Config;

class LaravelPinPaymentsServiceProvider extends ServiceProvider {

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes(array(
            __DIR__ . '/pinpayments.php' => config_path('pinpayments.php')
        ), 'config');

        $this->mergeConfigFrom(__DIR__ . '/pinpayments.php', 'pinpayments');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {

        $this->app->bind('pinpayments', function ($app) {

            $pin = new Handler(config('pinpayments'));

            return $pin;

        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array('pinpayments');
    }

}