<?php

namespace App\Http\Controllers;

use App\Models\carts;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    // Send the Data of Cart for each users (cart will be different for each user.)
    public function view()
    {
        $user = auth()->user();
        $carts = $user->carts;
        $data = compact('carts');
        return view('cart')->with($data);
    }

    public function quantityUpdate(Request $request, $cartItemId)
    {
    
        $request ->validate([
            'quantity'=>'required|integer|min:1'
        ]);

        // Find the cart item based on the $cartId
        $cartItem = carts::find($cartItemId);


        // Check if the cart item exists
        if (!$cartItem) {
            // Handle the case where the cart item is not found
            return redirect()->back()->with('error', 'Cart item not found');
        }

        // Update the quantity of the cart item
        $cartItem->quantity = $request['quantity'];
        $cartItem->save();

        return redirect()->back()->with('success', 'Quantity updated successfully');
    }


    // Add Product to cart
    public function addProduct(Request $request, $productId)
    {
        // Get the user ID of the authenticated user
        $userId = Auth::id();

        // Check if the user is authenticated
        if (!$userId) {
            // Handle the case where the user is not authenticated
            return response()->json(['error' => 'User not authenticated'], 401);
        }

        // Find the product with the given product ID
        $product = product::find($productId);

        // Check if the product exists
        if (!$product) {
            // Handle the case where the product does not exist
            return response()->json(['error' => 'Product not found'], 404);
        }

        // Check if the product already exists in the user's cart
        $existingCartItem = carts::where('user_id', $userId)
            ->where('product_id', $productId)
            ->first();

        if ($existingCartItem) {
            // Product already exists in the cart, return a message
            return redirect('/cart')->with('error', 'Oops!! Product already exists in the cart');
        }

        // Now, you can add the product to the user's cart
        // You may have a Cart model or service to handle this logic
        // For example, assuming you have a Cart model:
        $cartItem = carts::create([
            'user_id' => $userId,
            'product_id' => $productId,
            // You might also include other details like quantity, price, etc.
        ]);


        // return redirect('/cart');
        return redirect('/cart')->with('success', 'Product added to cart successfully');
    }

    public function removeFromCart($cartId)
    {
        // Get the authenticated user ID
        $userId = Auth::id();

        // Find the cart item belonging to the authenticated user
        $cartItem = carts::where('id', $cartId)->where('user_id', $userId)->first();

        // Check if the cart item exists
        if (!$cartItem) {
            return response()->json(['error' => 'Cart item not found'], 404);
        }

        // Delete the cart item
        $cartItem->delete();

        // return response()->json(['message' => 'Item removed from cart successfully'], 200);

        return redirect('/cart');
    }
}
