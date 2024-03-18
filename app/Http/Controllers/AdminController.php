<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Admin;
use App\Models\carts;
use App\Models\Contact;
use App\Models\order_items;
use App\Models\orders;
use App\Models\product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{

    // Show Admin Login
    public function showAdminLogin()
    {
        return view('Admin.Auth.login');
    }

    // Show Admin Register
    public function showAdminRegister()
    {
        return  view('Admin.Auth.register');
    }

    // Post Admin Login Data
    public function adminLogin(Request $request)
    {

        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);


        // Retrieve the admin record based on the provided email
        $admin = Admin::where('email', $credentials['email'])->first();

        if (!$admin || !Hash::check($credentials['password'], $admin->password)) {
            // Invalid email or password
            return redirect()->back()->withErrors(['email' => 'Invalid email or password']);
        }

        // Passwords match, attempt to log in the admin
        Auth::guard('admin')->login($admin);


        // Redirect to admin dashboard
        return redirect('/admin');
    }

    // Post Admin Register Data
    public function adminRegister(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email|unique:admins',
                'password' => 'required'
            ]
        );

        $admin = new Admin();
        $admin->name = $request['name'];
        $admin->email = $request['email'];
        $admin->password = Hash::make($request->password);
        // $admin->password = $request['password'];
        $admin->save();

        // Log in the newly register admin
        Auth::guard('admin')->login($admin);

        // Now Redirect to Admin
        return redirect('/admin');
    }

    // Admin Logout
    public function logoutAdmin()
    {
        Auth::guard('admin')->logout();
        Session::flush();
        return redirect('/admin/login');
    }

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

    public function orderItems()
    {
        $ordersItems = order_items::all();
        $data = compact('ordersItems');
        return view('Admin.orderItems')->with($data);
    }

    public function deleteOrders($id){
        $order = orders::find($id);
        if(!is_null($order)){
            $order->delete();
        }

        return redirect('/admin/order');

    }

    public function carts()
    {
        $carts = carts::all();
        $data = compact('carts');
        return view('Admin.cart')->with($data);
    }

    public function address()
    {
        $address = Address::all();
        $data = compact('address');
        return view('Admin.address')->with($data);
    }

    public function addressDelete($id)
    {
        $address = Address::find($id);
        if (!is_null($address)) {
            $address->delete();
        }

        return redirect('/admin/address');
    }
}
