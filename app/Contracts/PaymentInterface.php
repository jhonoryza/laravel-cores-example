<?php

namespace App\Contracts;

interface PaymentInterface
{
    public function createPayment(): string;

    public function cancelPayment(): string;
}
