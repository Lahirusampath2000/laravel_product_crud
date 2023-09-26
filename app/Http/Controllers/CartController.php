<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class CartController extends Controller
{
    public function addToCart($productId)
{
    // Find the product by ID
    $product = Product::findOrFail($productId);

    // Get the current cart from the session or create an empty one
    $cart = session()->get('cart', []);

    // Add the product to the cart
    if (isset($cart[$productId])) {
        $cart[$productId]['quantity']++;
    } else {
        $cart[$productId] = [
            'product' => $product,
            'quantity' => 1,
            
        ];
    }

    // Store the updated cart in the session
    session()->put('cart', $cart);

    //return back()->with('success', 'Product added to cart.');
    return redirect()->route('cart')->with('success', 'Product added to cart.');
    
}

    public function showCart()
{
        // Retrieve the cart data from the session
        $cart = session()->get('cart', []);

        // Calculate the total price of items in the cart (you can modify this logic as needed)
        $totalCartPrice = 0;
        foreach ($cart as $item) {
            $totalCartPrice += $item['product']->price * $item['quantity'];
        }

        // Return the cart view with cart data and total price
        return view('cart', compact('cart', 'totalCartPrice'));
        //return redirect()->route('cart')->with('success', 'Product added to cart.');
}

    public function removeFromCart($productId){

        $cart = session()->get('cart', []);

        if (isset($cart[$productId])) {
            // Remove the product from the cart
            unset($cart[$productId]);

            // Update the cart data in the session
            session()->put('cart', $cart);

            // Redirect back to the cart page with a success message
            return redirect()->route('cart')->with('success', 'Product removed from cart.');
        }

        // If the product is not found in the cart, redirect back to the cart page with an error message
        return redirect()->route('cart')->with('error', 'Product not found in cart.');
    
    }

    public function checkout(){
        $cart = session()->get('cart', []);

    // Calculate the total price of items in the cart (you can modify this logic as needed)
        $totalCartPrice = 0;
        foreach ($cart as $item) {
            $totalCartPrice += $item['product']->price * $item['quantity'];
        }

        // Pass the cart and totalCartPrice variables to the checkout view
        return view('checkout', compact('cart', 'totalCartPrice'));
        }
}
