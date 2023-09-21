<?php
// app/Pipelines/OrderPlacementPipeline.php

namespace App\Pipelines;

use App\Actions\PaymentAction;
use App\Actions\CalculateDiscountAction;
use App\Actions\UpdateInventoryAction;
use App\Actions\SendEmailConfirmationAction;
use App\Actions\GeneratePDFInvoiceAction;
use App\Actions\LogOrderDetailsAction;
use Closure;

class OrderPlacementPipeline
{
    protected $pipes = [];

    public function __construct()
    {
        // Define the sequence of actions in the pipeline
        $this->pipes = [
            PaymentAction::class,
            CalculateDiscountAction::class,
            UpdateInventoryAction::class,
            SendEmailConfirmationAction::class,
            LogOrderDetailsAction::class,
            GeneratePDFInvoiceAction::class,
        ];
    }

    public function execute($request)
    {
        $data = [];

        foreach ($this->pipes as $pipe) {
            $result = app($pipe)->execute($data, $request);

            // Store the result in the data array
            $data[$pipe] = $result;
        }

        return $data;
    }
}
