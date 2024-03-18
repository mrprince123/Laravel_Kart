<?php

namespace App\Http\Controllers;

use App\Models\carts;
use Illuminate\Http\Request;
use App\Models\order_items;
use App\Models\orders;
use App\Models\product;
use Illuminate\Support\Facades\Auth;
use Razorpay\Api\Api;

class CheckoutController extends Controller
{

    public function index()
    {
        $user = auth()->user();
        $orders = $user->orders;
        return view('orders', compact('orders'));
    }

    public function view()
    {
        $user = auth()->user();
        $carts = $user->carts;
        $address = $user->address;
        return view('checkout', compact('user', 'carts', 'address'));
    }

    public function finalCheckout(Request $request)
    {
        $userId = Auth::id();

        // Validate incoming request data
        $validatedData = $request->validate([
            'total_amount' => 'required|numeric|min:0',
            'address_id' => 'required|exists:addresses,id',
            'payment_method' => 'required|in:cod,online',
        ]);

        // Create a new order
        $order = new orders();
        $order->user_id = $userId;
        $order->total_amount = $validatedData['total_amount'];
        $order->address_id = $validatedData['address_id'];
        $order->payment_method = $validatedData['payment_method'];
        // By default, order_status is 'pending', and payment_status is null
        $order->save();

        // echo $cartItems;
        // $cartItems = carts::all();
        $cartItems = carts::where('user_id', $userId)->get();

        // Create order items for each item in the cart
        foreach ($cartItems as $cartItem) {
            $orderItem = new order_items();
            $orderItem->order_id = $order->id;
            $orderItem->product_id = $cartItem['product_id']; // Adjust this according to your cart item structure
            $orderItem->quantity = $cartItem['quantity']; // Adjust this according to your cart item structure
            $product = product::find($cartItem['product_id']);
            $orderItem->price = $product->price; // You may need to adjust this depending on your cart item structure
            $orderItem->save();
        }

        // $api = new Api(config('services.razorpay.key'), config('services.razorpay.secret'));
        // $razorpayOrder = $api->order->create([
        //     'receipt'=>'order_receipt_id',
        //     'amount'=>$validatedData['total_amount'] * 100, // amount in paisa
        //     'currency'=>'INR',
        //     'payment_capture'=>1 // auto capture
        // ]);

        // $order->razorpay_order_id = $razorpayOrder->id;
        // $order->save();

        // return redirect()->route('razorpay.payment', ['orderId'=> $razorpayOrder->id]);

        return redirect('/orders');
    }

    public function show(orders $order)
    {
        // Ensure the authenticated user can only view their own orders
        if ($order->user_id !== Auth::id()) {
            abort(403); // Forbidden
        }

        // Pass the order to the view
        return view('orders.show', compact('order'));
    }

    public function showAllOrderItem()
    {
        $user = auth()->user();
        // Retrieve order items associated with the orders of the authenticated user
        $orderItems = order_items::whereIn('order_id', $user->orders->pluck('id'))->get();

        // Pass the order items to the view for rendering
        return view('orderItems', compact('orderItems'));
    }
}
