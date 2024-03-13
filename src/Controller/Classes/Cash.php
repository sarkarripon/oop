<?php

namespace App\Controller\Classes;

use App\Controller\Interfaces\PaymentInterface;

class Cash implements PaymentInterface
{

    public function pay(): string
    {
        return "Pay with cash";
    }
    public function processPayment(): string
    {
        return $this->pay();
    }
}