<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\BankController;

Route::get('/customer', [BankController::class, 'customerActions'])->name('customer-actions');
Route::get('/teller', [BankController::class, 'tellerActions'])->name('teller-actions');
Route::get('/manager', [BankController::class, 'managerActions'])->name('manager-actions');
