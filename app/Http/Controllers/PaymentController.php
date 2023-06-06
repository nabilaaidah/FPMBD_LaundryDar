<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function showPaymentForm($customerId){
        return view('paymentform', ['customerId' => $customerId]);
    }

    public function showPaymentTotal($customerId){
        return view('paymenttotal', ['customerId' => $customerId]);
    }

    public function processPaymentForm(Request $req, $customerId){

    }
}
