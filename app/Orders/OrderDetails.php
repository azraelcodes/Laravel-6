<?php

namespace App\Orders;

use App\Billing\PaymentGatewayContract;

class OrderDetails
{
    private $paymentgateway;

    public function __construct(PaymentGatewayContract $paymentgateway)
    {
        $this->paymentgateway = $paymentgateway;
    }

    public function all()
    {
        $this->paymentgateway->setDiscount(500);

        return [
            'name' => 'Coby',
            'Address' => '232 Pilapil St.',
        ];
    }
}
