<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interfaces\CustomerAccount;
use App\Interfaces\BankTellerAccount;
use App\Interfaces\BankManagerAccount;

class BankController extends Controller {
    public function customerActions(CustomerAccount $customer) {
        // Handle customer interactions with bank accounts
        $customer->viewBalance();
        $customer->makeDeposit(10);
        $customer->makeWithdrawal(5);
    }

    public function tellerActions(BankTellerAccount $teller) {
        // Handle bank teller interactions with bank accounts
        $teller->viewBalance();
        $teller->makeDeposit(10);
        $teller->makeWithdrawal(3);
        $teller->approveLoan(5);
    }

    public function managerActions(BankManagerAccount $manager) {
        // Handle bank manager interactions with bank accounts
        $manager->viewBalance();
        $manager->approveLoan(10);
        $manager->manageInterestRate(2);
    }
}
