<?php
// app/PayPalPaymentGateway.php
namespace App\Components\PaymentGateways;

use App\Components\PaymentGateways\PaymentGateway;

class PaypalPaymentGateway extends PaymentGateway
{
    public function processPayment($amount)
    {
        // PayPal payment specific logic
        $paypalFee = $this->calculatePayPalFee($amount);

        // Call the parent class's processPayment method to execute common logic
        $result = parent::processPayment($amount + $paypalFee);

        // Additional PayPal specific logic can be added here if necessary

        return $result;
    }

    protected function calculatePayPalFee($amount)
    {
        // Calculate and return PayPal processing fee
        return $amount * 0.02; // 2% fee as an example
    }
}
