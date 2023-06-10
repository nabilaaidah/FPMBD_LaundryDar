<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\TransactionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Home customer
Route::get('/customer/home', [CustomerController::class, 'showhome'])->name('customer.home');

//About
Route::get('/customer/home/about', [CustomerController::class, 'showabout'])->name('customer.about');

//Profile Customer
Route::get('/customer/home/profilecust', [CustomerController::class, 'showprofilecust'])->name('customer.profilecust');

//Logout
Route::get('/customer/home/logoutcut', [CustomerController::class, 'showlogoutcust'])->name('customer.logout');

//Contact
Route::get('/customer/home/contact', [CustomerController::class, 'showcontact'])->name('customer.contact');

// Login
Route::get('/customer/login', [CustomerController::class, 'showlogin']);
Route::post('/customer/login', [CustomerController::class, 'login'])->name('customer.login');

// Customer
Route::get('/customer/register', [CustomerController::class, 'show']);
Route::post('/customer/register', [CustomerController::class, 'store'])->name('customer.store');


// Employee


// Transaction
Route::get('/transaction/{customerId}/orderform', [TransactionController::class, 'showorderform']);
Route::post('/transaction/{customerId}/orderform', [TransactionController::class, 'processorderform'])->name('transaction.processorderform');

// Payment
Route::get('/payment/{customerId}/information/total', [PaymentController::class, 'showPaymentTotal'])->name('payment.paymenttotal');
Route::get('/payment/{customerId}/information', [PaymentController::class, 'showpaymentform'])->name('payment.forminfo');
Route::post('/payment/{customerId}/information', [PaymentController::class, 'processPaymentForm'])->name('payment.processpaymentform');

Route::get('/expense/update-timestamps', [TransactionController::class, 'updateTimestamps']);
