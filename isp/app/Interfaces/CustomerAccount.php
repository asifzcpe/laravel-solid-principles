<?php

namespace App\Interfaces;

interface CustomerAccount {
    public function viewBalance();
    public function makeDeposit($amount);
    public function makeWithdrawal($amount);
}
