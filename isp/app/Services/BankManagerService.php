<?php

namespace App\Services;

use App\Interfaces\BankManagerAccount;

class BankManagerService implements BankManagerAccount {
    public function viewBalance() {
        // Implement view balance for bank managers
        echo "Bank Manager Account view balance";
    }

    public function approveLoan($loanAmount) {
        // Implement loan approval for bank managers
        echo "Bank Manager Account approving loan";
    }

    public function manageInterestRate($rate) {
        // Implement interest rate management for bank managers
        echo "Managing interest rate from bank managers";
    }
}
