<?php

namespace App\Services;

use App\Interfaces\BankTellerAccount;

class BankTellerService implements BankTellerAccount {
    public function viewBalance() {
        // Implement view balance for bank tellers
        echo "Viewing Bank Teller Account balance";
    }

    public function makeDeposit($amount) {
        // Implement deposit for bank tellers
        echo "Depositing Bank Teller Account balance";
    }

    public function makeWithdrawal($amount) {
        // Implement withdrawal for bank tellers
        echo "Withdrawing balance as Bank Teller Account";
    }

    public function approveLoan($loanAmount) {
        // Implement loan approval for bank tellers
        echo "Approving loan Bank Teller Account";
    }
}
