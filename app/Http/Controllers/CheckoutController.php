<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function view()
    {
        // return view('checkout');

        $user = auth()->user();
        $carts = $user->carts;
        $data = compact('carts');
        return view('checkout')->with($data);
    }

    public function showCheckoutDetails()
    {
       
    }
}
