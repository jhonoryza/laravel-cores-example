<?php

namespace App\Services;

use App\Contracts\PaymentInterface;

class OvoService implements PaymentInterface
{
    public function createPayment(): string
    {
        return 'create payment from ovo';
    }

    public function cancelPayment(): string
    {
        return 'cancel payment from ovo';
    }
}
