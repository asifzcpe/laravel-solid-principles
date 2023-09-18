<?php

namespace App\Components\PaymentGateways;

class PaymentGateway
{
    public function processPayment($amount)
    {
        // Common payment processing logic
        $transactionId = $this->generateTransactionId();
        $this->logPayment($transactionId, $amount);

        return "Processed a payment of $$amount with Transaction ID: $transactionId";
    }

    protected function generateTransactionId()
    {
        // Generate a unique transaction ID
        return uniqid();
    }

    protected function logPayment($transactionId, $amount)
    {
        // Log payment details
        // Example: Log to a database or external service
    }
}
