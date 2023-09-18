<?php
// app/Http/Controllers/CheckoutController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Components\PaymentGateways\PaymentGateway;

class CheckoutController extends Controller
{
    public function processPayment(Request $request, PaymentGateway $gateway)
    {
        // Common checkout logic

        $amount = 100; // Example amount

        // Process payment using the provided gateway
        $result = $gateway->processPayment($amount);

        return view('checkout', ['result' => $result]);
    }
}
