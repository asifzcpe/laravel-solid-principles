<?php

// app/CreditCardPaymentGateway.php
namespace App\Components\PaymentGateways;

use App\Components\PaymentGateways\PaymentGateway;

class CreditCardPaymentGateway extends PaymentGateway
{
    public function processPayment($amount)
    {
        // Credit card payment specific logic
        $creditCardFee = $this->calculateCreditCardFee($amount);

        // Call the parent class's processPayment method to execute common logic
        $result = parent::processPayment($amount + $creditCardFee);

        // Additional credit card specific logic can be added here if necessary

        return $result;
    }

    protected function calculateCreditCardFee($amount)
    {
        // Calculate and return credit card processing fee
        return $amount * 0.03; // 3% fee as an example
    }
}
