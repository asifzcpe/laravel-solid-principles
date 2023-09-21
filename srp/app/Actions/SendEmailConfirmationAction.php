<?php
// app/Actions/SendEmailConfirmationAction.php

namespace App\Actions;

class SendEmailConfirmationAction
{
    public function execute($data, $request)
    {
        // Email sending logic
        // Simulated logic for demonstration purposes

        // In a real application, send an order confirmation email to the customer
        // Example: Mail::to($request->user()->email)->send(new OrderConfirmationMail());
        // $data['emailConfirmationStatus'] = "Email sent successfully";

        return "Email confirmation email sent successfully";
    }
}
