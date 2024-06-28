<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
        $cart = session()->get('cart', []);

        // Przekształć tablicę na kolekcję obiektów
        $cartItems = collect($cart)->map(function($item) {
            return (object) $item;
        });

        return view('checkout', compact('cartItems'));
    }

    public function placeOrder(Request $request)
    {
        // Validate and process the order here

        // Clear the cart
        session()->forget('cart');
        return redirect()->route('home')->with('success', 'Zamówienie zostało złożone!');
    }
}
