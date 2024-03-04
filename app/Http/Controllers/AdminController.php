<?php

namespace App\Http\Controllers;

use App\Models\carts;
use App\Models\Contact;
use App\Models\orders;
use App\Models\product;
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


    public function index()
    {
        $products = product::all();
        $contacts = Contact::all();
        $users = User::all();
        $orders = orders::all();
        $carts = carts::all();

        return view('Admin.home', compact('products', 'contacts', 'users', 'orders', 'carts'));
    }


    public function product()
    {
        $products = product::all();
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
                'category' => 'required|exists:category,id',
                'images' => 'required|image|mimes:jpeg,png,jpg',
            ]
        );

        // Here I have use the helper function 
        // echo "<pre>";
        // print_r($request->all());
        // echo "</pre>";

        // pre($request->all());
        // die;

        // Store the Image in the 
        $imagePath = $request->file('images')->store('images', 'public');

        $products = new product();
        $products->name = $request['name'];
        $products->description = $request['description'];
        $products->price = $request['price'];
        $products->cat_id = $request->input('category');
        $products->images = $imagePath;
        $products->save();

        echo "Product Created";


        // Now Redirect Anywhere
        return redirect('/admin/product');
    }

    // For Deleting the Products
    public function deleteProduct($id)
    {
        $products = product::find($id);
        if (!is_null($products)) {
            $products->delete();
        }
        return redirect('/admin/product');
    }

    // For Viewing all the Contacts
    public function contact()
    {
        $contacts = Contact::all();
        $data = compact('contacts');
        return view('Admin.contact')->with($data);
    }

    // for Delete Contact 
    public function deleteContact($id)
    {
        $contacts = Contact::find($id);
        if (!is_null($contacts)) {
            $contacts->delete();
        }
        return redirect('/admin/contact');
    }

    // Show all the Users
    public function users()
    {
        $users = User::all();
        $data = compact('users');
        return view('Admin.user')->with($data);
    }

    // Delete the User
    public function deleteUser($id)
    {
        $users = User::find($id);
        if (!is_null($users)) {
            $users->delete();
        }

        return redirect('/admin/users');
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
    

    
}
