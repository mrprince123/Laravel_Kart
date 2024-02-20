<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function view()
    {
        $user = auth()->user();
        return view('profile', compact('user'));
    }
}
