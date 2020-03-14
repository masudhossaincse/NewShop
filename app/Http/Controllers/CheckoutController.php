<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Shipping;
use App\Order;
use App\Payment;
use App\OrderDetail;
use Illuminate\Support\Facades\Session;
use Mail;
use Cart;

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
        // return $data;

        Mail::send('front-end.mails.confirmation-mail', $data, function($message) use ($data) {
            $message->to($data['email']);
            $message->subject('confirmation mail');
        });

        return redirect('/checkout/shipping');
    }

    public function customerLoginCheck(Request $request)
    {
        $customer = Customer::where('email', $request->email)->first();
        
        if (password_verify($request->password, $customer->password)) {
            echo 'Password is valid!';
        } else {
            echo 'Invalid password.';
        }
    }


    public function shippingForm()
    {
        $customer = Customer::find(Session::get('customerId'));
        return view('front-end.checkout.shipping', ['customer'=>$customer]);
    }

    public function saveShippingInfo(Request $request)
    {
        $shipping = new Shipping();
        $shipping->full_name = $request->full_name;
        $shipping->email = $request->email;
        $shipping->phone_number = $request->phone_number;
        $shipping->address = $request->address;
        $shipping->save();

        Session::put('shippingId', $shipping->id);
        return redirect('/checkout/payment');
    }
    public function paymentForm()
    {
        return view('front-end.checkout.payment');
    }

    public function newOrder(Request $request)
    {
        $paymentType = $request->payment_type;
        if($paymentType == 'Cash') {
            $order = new Order();
            $order->customer_id = Session::get('customerId');
            $order->shipping_id = Session::get('shippingId');
            $order->order_total = Session::get('orderTotal');
            $order->save();

            $payment = new Payment();
            $payment->order_id = $order->id;
            $payment->payment_type = $paymentType;
            $payment->save();


            $cartProducts = Cart::content();
            foreach ($cartProducts as $cartProduct) {
                $orderDetail = new OrderDetail();
                $orderDetail->order_id = $order->id;
                $orderDetail->product_id = $cartProduct->id;
                $orderDetail->product_name = $cartProduct->name;
                $orderDetail->product_price = $cartProduct->price;
                $orderDetail->product_quantity = $cartProduct->qty;
                $orderDetail->save();

                Cart::destroy();

                return redirect('/complete/order');
            }

        } elseif($paymentType == 'Paypal') {

        } elseif ($paymentType == 'BKash') {

        }
    }
    public function completeOrder()
    {
        return 'success';
    }
}
