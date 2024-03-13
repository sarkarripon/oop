<?php

namespace App\Controller\Classes;

use App\Controller\Interfaces\PaymentInterface;

class Card implements PaymentInterface
{
    public function pay(): string
    {
        return "Pay with card";
    }
    public function processPayment(): string
    {
        return $this->pay();
    }

}