<?php

namespace App\Http\Controllers;

use App\Models\Order;
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
        // Pobierz zalogowanego użytkownika
        $user = auth()->user();

        $cart = session()->get('cart', []);


        if (!$user) {
            \Log::error('User not logged in');
            return redirect()->route('login'); // Upewnij się, że użytkownik jest zalogowany
        }

        // Oblicz sumę produktów w koszyku
        $totalAmount = collect($cart)->sum(function ($item) {
            return $item['price'] * $item['quantity'];
        });

        // Stwórz nowe zamówienie
        $order = new Order();
        $order->user_id = $user->id;
        $order->total = $totalAmount;
        $order->shipping_address = $_POST['address'];
        $order->shipping_city = $_POST['city'];
        $order->shipping_zip = $_POST['zip'];
        $order->shipping_country = $_POST['country'];
        $order->status = "pending";
        $order->save();

        // Wyczyść koszyk po złożeniu zamówienia
        session()->forget('cart');

        // Przekierowanie lub zwrócenie odpowiedzi
        return redirect()->route('orders.index')->with('success', 'Order placed successfully!');
    }
}
