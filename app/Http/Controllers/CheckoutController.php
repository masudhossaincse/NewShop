<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use Illuminate\Support\Facades\Session;
use Mail;

class CheckoutController extends Controller
{
    public function index()
    {
        return view('front-end.checkout.checkout-content');
    }
    public function customerSignUp(Request $request)
    {
        $customer = new Customer();
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->password = $request->password;
        $customer->mobile_number = $request->mobile_number;
        $customer->address = $request->address;
        $customer->save();

        $customerId = $customer->id;
        Session::put('customerId', $customerId);
        Session::put('customerName', $customer->name);


        $data = $customer->toArray();
        return $data;

        Mail::send('front-end.mails.confirmation-mail', $data, function($message) use ($data) {
            $message->to($data['email']);
            $message->subject('confirmation mail');
        });




        return redirect('/checkout/shipping');
    }
}
