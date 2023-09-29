<?php

namespace App\Interfaces;

interface BankTellerAccount {
    public function viewBalance();
    public function makeDeposit($amount);
    public function makeWithdrawal($amount);
    public function approveLoan($loanAmount);
}
