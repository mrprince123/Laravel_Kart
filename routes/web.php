<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProfileController;

//Auth Controller
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register_view'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

// Home and About
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/success', [HomeController::class, 'success'])->name('successful');
Route::get('/about', [AboutController::class, 'view'])->name('about');

// This is for the Product 
Route::get('/product', [ProductsController::class, 'view']);
Route::get('/product/{id}', [ProductsController::class, 'show']);

// This is for the Contact
Route::get('/contact', [ContactController::class, 'view']);


// This is for the Cart
Route::get('/cart', [CartController::class, 'view'])->name('cart.index');
Route::get('/cart/add/{productId}', [CartController::class, 'addProduct'])->name('cart.add');
Route::delete('/cart/{cartId}', [CartController::class, 'removeFromCart'])->name('cart.remove');

// This is for the Profile Page
Route::get('/profile', [ProfileController::class, 'view']);

// This is for the Checkout Page 
Route::get('/checkout', [CheckoutController::class, 'view']);


Route::group(['middleware' => 'auth'], function () {
    // Admin Routes
    // Route::get('/admin', [AdminController::class, 'view'])->name('admin');
    Route::get('/admin', [AdminController::class, 'index'])->name('home');
    Route::get('/admin/product', [AdminController::class, 'product'])->name('product');
    Route::get('/admin/createProductView', [AdminController::class, 'createProductView']);
    Route::post('/admin/createProduct', [AdminController::class, 'createProduct']);

    // Admin Users Routes
    Route::get('/admin/users', [AdminController::class, 'users'])->name('users');
    Route::get('/admin/deleteUsers/{id}', [AdminController::class, 'deleteUser'])->name('deleteUsers');



    // Admin Contact Routes
    Route::get('/admin/contact', [AdminController::class, 'contact'])->name('contact');
    Route::get('/admin/contact/delete/{id}', [AdminController::class, 'deleteContact'])->name('contactDelete');

    // Admin Orders Routes
    Route::get('/admin/order', [AdminController::class, 'orders'])->name('order');

    // Admin Product Routes
    Route::post('/admin/product', [AdminController::class, 'createProduct']);
    Route::get('/admin/deleteProduct/{id}', [AdminController::class, 'deleteProduct'])->name('deleteProduct');

    // Admin Carts Routes
    Route::get('/admin/carts', [AdminController::class, 'carts']);

    // Only send contac when login 
    Route::post('/contact', [ContactController::class, 'create']);
});
