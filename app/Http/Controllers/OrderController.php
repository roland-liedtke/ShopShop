<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
//        // Pobierz zamówienia zalogowanego użytkownika
//        $orders = auth()->user()->orders;
//        \Log::info('Orders data:', $orders->toArray());
//
//        return view('orders', compact('orders'));
        $user = auth()->user();

        if (!$user) {
            return redirect()->route('login'); // Upewnij się, że użytkownik jest zalogowany
        }

        $orders = $user->orders;

        // Debugowanie
        \Log::info('User ID:', ['id' => $user->id]);
        \Log::info('Orders data:', $orders ? $orders->toArray() : []);

        return view('orders', compact('orders'));
    }

    public function show($id)
    {
        $order = Order::findOrFail($id);
        return view('order', compact('order'));
    }
}
