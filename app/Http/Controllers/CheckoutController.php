<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use Session;
use App\Shipping;
use App\Order;
use App\Payment;
use App\OrderDetail;
use Cart;
use Mail;
use DB;

class CheckoutController extends Controller
{
    public function showShippingForm() {
        $customerId = Session::get('customerId');
        // dd($customerId);
        $customerById = Customer::where('id', $customerId)->first();
        // dd($customerById);
        return view('frontend.shipping', ['customerById' => $customerById]);
    }

    public function saveShippingInfo(Request $request) {
        $shipping = new Shipping();
        $shipping->fullName = $request->fullName;
        $shipping->emailAddress = $request->emailAddress;
        $shipping->phoneNumber = $request->phoneNumber;
        $shipping->address = $request->address;
        $shipping->save();
        $shippingId = $shipping->id;
        Session::put('shippingId', $shippingId);
        return redirect('/checkout/payment');
    }

    public function showPaymentForm() {
        return view('frontend.payment');
    }

    public function saveOrderInfo(Request $request) {
        
        // dd($request);
        
            
        $paymentType = $request->paymentType;
        if ($paymentType == 'cashOnDelivery') {
            $order = new Order();
            $order->customerId = Session::get('customerId');
            $order->shippingId = Session::get('shippingId');
            $order->orderTotal = Session::get('orderTotal');
            $order->save();
            $orderId = $order->id;
            Session::put('orderId', $orderId);
            
            $payment = new Payment();
            $payment->orderId = Session::get('orderId');
            $payment->paymentType = $paymentType;
            $payment->save();


            // $orderDetail = new OrderDetail();
            $cartProducts = Cart::Content();
            // dd($cartProducts);
            $data=[];

            foreach ($cartProducts as $cartProduct) {

                // $orderDetail->orderId = Session::get('orderId');
                // $orderDetail->productId = $cartProduct->id;
                // $orderDetail->productName = $cartProduct->name;
                // $orderDetail->productPrice = $cartProduct->price;
                // $orderDetail->productQuantity = $cartProduct->qty;
                // $orderDetail->save();

                $data[] = [
                'orderId' => Session::get('orderId'),
                'productId' => $cartProduct->id,
                'productName' => $cartProduct->name,
                'productPrice' => $cartProduct->price,
                'productQuantity' => $cartProduct->qty
                ];

                 
            }
            // dd($data);
            DB::table('order_details')->insert($data);
            
                   
            
            
 		    
            // dd('Hello');
            return redirect('/checkout/customer-order');
        } else if ($paymentType == 'bkash') {
            return 'Under construction bkash payment type. please use cash on delivary';
        } else if ($paymentType == 'paypal') {
            return 'Under construction paypal payment type. please use cash on delivary';
        }
    }

    public function customerOrder() {
        return view('frontend.customer_order');
    }
}
