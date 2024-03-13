<?php

namespace App\Controller\Classes;

use App\Controller\Interfaces\PaymentInterface;

class BuyProduct
{
    public function pay(PaymentInterface $paymentType): string
    {
       return $paymentType->processPayment();

    }


}