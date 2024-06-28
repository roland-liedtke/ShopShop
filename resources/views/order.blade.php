@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h2 class="mb-4">Order #{{ $order->id }}</h2>

        <div class="card">
            <div class="card-header">
                Order Details
            </div>
            <div class="card-body">
                <h5 class="card-title">Total Price: ${{ number_format($order->total_price, 2) }}</h5>
                <p class="card-text">Status: {{ $order->status }}</p>
                <p class="card-text">Order Date: {{ $order->created_at->format('d-m-Y') }}</p>
                <a href="{{ route('orders.index') }}" class="btn btn-primary">Back to Orders</a>
            </div>
        </div>
    </div>
@endsection
