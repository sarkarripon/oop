<?php

namespace App\Controller\Classes;

use App\Controller\Interfaces\LoginInterface;
use App\Controller\Interfaces\PaymentInterface;

class Paypal Implements PaymentInterface, LoginInterface
{
    public function login(): string
    {
        return "Login to Paypal".PHP_EOL;
    }

    public function pay(): string
    {
        return "Pay with Paypal".PHP_EOL;
    }
    public function processPayment(): string
    {
        $loginResult = $this->login();
        $payResult = $this->pay();

        return $loginResult . $payResult;
    }
}