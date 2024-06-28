<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


// =============== INFO =================== //
// Route::get( uri: '/', function() ) - po wywołaniu metody get() na adres '/' -> wykonaj function()
// Route::get( uri: '/', [Controller, 'function'] ) - po wejściu na '/' -> wywołuje function() z Controllera
// return view( view: 'frontend.home' ) - zwróć widok -> resources/views/frontend/home.blade.php



// ====== PUBLIC ROUTES ====== //
// ====== HOME ========= //
Route::get('/', [HomeController::class, 'index'])->name('home');
// ====== PRODUCT ====== //
Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');
// ====== CART ========= //
Route::post('/cart/add/{id}', [CartController::class, 'add'])->name('cart.add');
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');


// ===== PROTECTED ROUTES ===== //
Route::middleware('auth')->group(function () {
    // === PROFILE === //
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // ===== CHECKOUT ===== //
    Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
    // ===== ORDER ===== //
    Route::post('/order/place', [CheckoutController::class, 'placeOrder'])->name('order.place');
    Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
    Route::get('/order/{id}', [OrderController::class, 'show'])->name('order.show');
});

// ==== DASHBOARD ==== //
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
