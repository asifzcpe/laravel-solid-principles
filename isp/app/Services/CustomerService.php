<?php

namespace App\Services;

use App\Interfaces\CustomerAccount;

class CustomerService implements CustomerAccount {
    public function viewBalance() {
        // Implement view balance for customers
        echo "I am viewing customer balance";
    }

    public function makeDeposit($amount) {
        // Implement deposit for customers
        echo "I am making deposit to customer balance";
    }

    public function makeWithdrawal($amount) {
        // Implement withdrawal for customers
        echo "I am making withdrawal to customer balance";
    }
}
