<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Razorpay\Api\Api;

class PaymentsController extends Controller
{
    public function index()
    {
        return view('pages/payment');
    }
    public function payment(Request $request)
    {
        $input = $request->all();
        
        $api = new Api($_ENV['RAZORPAY_KEY'], $_ENV['RAZORPAY_SECRET']);
        $payment = $api->payment->fetch($input['razorpay_payment_id']);

        if(count($input) && !empty($input['razorpay_payment_id'])){
            try {
                $response = $api->payment->fetch($input['razorpay_payment_id'])->capture(array('amount'=>$payment['amount']));
            } catch (Exception $e) {
                return $e->getMessage();
                Session::put('error',$e->getMessage());
                return redirect()->back();
            }
        }
        Session::put('success',"Successful!");
        return redirect()->back();
    }
}
