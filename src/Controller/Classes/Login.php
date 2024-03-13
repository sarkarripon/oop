<?php

namespace App\Controller\Classes;

use App\Controller\Interfaces\LoginInterface;

class Login Implements LoginInterface
{
    public function login()
    {
        return "Logged in successfully";
    }

}