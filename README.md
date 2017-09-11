Pin Payments Wrapper for Laravel 5.+
=====================================

This is a wrapper using the noetix/pin-php library for the Pin Payments API. It creates a service provider and facade for autoloading into laravel.

How to Install
---------------

### Laravel 5.+

1.  Install the `nikjaysix/laravel-pinpayments` package

    ```shell
    $ composer require nikjaysix/laravel-pinpayments
    ```

2. Update `config/app.php` to activate the LaravelPinPayments package

    ```php
    # Add `LaravelPinPaymentsServiceProvider` to the `providers` array
    'providers' => array(
        ...
        NikJaySix\LaravelPinPayments\LaravelPinPaymentsServiceProvider::class,
    )

    # Add the `LaravelPinPaymentsFacade` to the `aliases` array
    'aliases' => array(
        ...
        'PinPayments' => NikJaySix\LaravelPinPayments\LaravelPinPaymentsFacade::class
    )
    ```

3.  Generate a PinPayments config file

    ```shell
    $ php artisan vendor:publish
    ```

4.  Update `app/config/chargify.php` with your Pin Payments API credentials

    ```php
    return array(
        'key' => ''
    );
    ```
    
Example Usage
---------------

