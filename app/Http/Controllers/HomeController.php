<?php

namespace App\Http\Controllers;

use App\Models\products;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $products = products::all();
        $data = compact('products');
        return view('home')->with($data);
    }


    public function success()
    {
        return view('successful');
    }

    
}
