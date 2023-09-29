<?php

namespace App\Interfaces;

interface BankManagerAccount {
    public function viewBalance();
    public function approveLoan($loanAmount);
    public function manageInterestRate($rate);
}
