<!-- resources/views/product.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ $product->image_url }}" class="img-fluid" alt="{{ $product->name }}">
            </div>
            <div class="col-md-6">
                <h1 class="display-4">{{ $product->name }}</h1>
                <p class="lead">{{ $product->description }}</p>
                <h3 class="text-success">${{ number_format($product->price, 2) }}</h3>
                <form action="{{ route('cart.add', $product->id) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-primary btn-lg mt-3">Add to Cart</button>
                </form>
            </div>
        </div>
    </div>
@endsection
