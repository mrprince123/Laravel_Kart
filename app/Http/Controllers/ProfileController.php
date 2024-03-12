<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function view()
    {
        $user = auth()->user();
        $address = $user->address;
        return view('profile', compact('user', 'address'));
    }
}
