<?php

namespace App\Http\Controllers;

use App\Models\carts;
use App\Models\Contact;
use App\Models\orders;
use App\Models\products;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function view()
    {
        return view('Admin.admin');
    }

    public function product()
    {
        $products = products::all();
        $data = compact('products');
        return view('Admin.product')->with($data);
    }

    public function createProductView()
    {
        return view('Admin.createProduct');
    }

    public function createProduct(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'description' => 'required',
                'price' => 'required',
                'image' => 'required'
            ]
        );

        // echo "<pre>";
        // print_r($request->all());
        // echo "</pre>";

        $products = new products;
        $products->name = $request['name'];
        $products->description = $request['description'];
        $products->price = $request['price'];
        $products->image = $request['image'];
        $products->save();

        echo "Product Created";


        // Now Redirect Anywhere
        return redirect('/admin/product');
    }

    public function contact()
    {
        $contacts = Contact::all();
        $data = compact('contacts');
        return view('Admin.contact')->with($data);
    }

    public function users()
    {
        $users = User::all();
        $data = compact('users');
        return view('Admin.user')->with($data);
    }


    public function orders()
    {
        $orders = orders::all();
        $data = compact('orders');
        return view('Admin.order')->with($data);
    }

    public function carts()
    {
        $carts = carts::all();
        $data = compact('carts');
        return view('Admin.cart')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}