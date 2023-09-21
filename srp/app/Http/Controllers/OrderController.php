<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pipelines\OrderPlacementPipeline;

class OrderController extends Controller
{
    private $orderPlacementPipeline;

    public function __construct(OrderPlacementPipeline $orderPlacementPipeline)
    {
        $this->orderPlacementPipeline = $orderPlacementPipeline;
    }

    public function placeOrder(Request $request)
    {
        // Validate order data
        // $this->validateOrderData($request);

        // Initial data (empty in this example)
        $data = [];

        // Execute the order placement pipeline, passing the request and initial data
        $processedData = $this->orderPlacementPipeline->execute($data, $request);
        dd($processedData);
        if ($processedData['paymentStatus'] !== 'success') {
            return redirect()->back()->with('error', 'Payment failed');
        }

        echo "Order Placement";

        // return redirect()->route('order.success')->with('success', 'Order placed successfully');
    }
}
