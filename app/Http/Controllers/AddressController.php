<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\User;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function index()
    {
        $address = Address::all();
        $data = compact('address');
        return view('checkout')->with($data);
    }

    public function showUserAddress()
    {
        $user = auth()->user();
        $address = $user->addresses;
        return view('checkout', compact('user', 'address'));
    }

    public function create(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone'=>'required',
            'address' => 'required',
            'state' => 'required',
            'pincode' => 'required'
        ]);

        $user = auth()->user();

        $address = new Address();
        $address->name = $request['name'];
        $address->email = $request['email'];
        $address->phone = $request['phone'];
        $address->address = $request['address'];
        $address->state = $request['state'];
        $address->pincode = $request['pincode'];
        $address->user_id = $user->id;
        $address->save();

        // Redirect to the Checkout Page only
        return redirect('/checkout');
    }

    public  function deleteAddress($id)
    {

        $address = Address::find($id);

        if (is_null($address)) {
            // Return the checkout page
            return redirect('/');
        } else {
            $address->delete();
        }
    }
}
