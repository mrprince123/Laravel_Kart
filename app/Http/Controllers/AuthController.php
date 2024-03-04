<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;



class AuthController extends Controller
{
    public function index()
    {
        return view('Auth.login');
    }

    // Login Logic 
    public function login(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Redirect to Home
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect('');
        }

        return redirect('login')->withErrors('Login are not valid');
    }

    public function register_view()
    {
        return view('Auth.register');
    }

    // Register Logic 
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        // Redirect to Home
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect('');
        }

        return redirect('register')->withErrors('Error');
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect('');
    }
}
