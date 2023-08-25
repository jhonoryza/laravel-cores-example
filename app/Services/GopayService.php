<?php

namespace App\Services;

use App\Contracts\PaymentInterface;

class GopayService implements PaymentInterface
{

    public function createPayment(): string
    {
        return 'create payment from gopay';
    }

    public function cancelPayment(): string
    {
        return 'cancel payment from gopay';
    }
}
