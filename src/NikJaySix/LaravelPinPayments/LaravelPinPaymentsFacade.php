<?php
namespace NikJaySix\LaravelPinPayments;

use Illuminate\Support\Facades\Facade;

class LaravelPinPaymentsFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'pinpayments';
    }
}