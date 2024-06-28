<!-- resources/views/orders.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        @if($orders->isEmpty())
            <p>Nie masz zamówień</p>
        @else
            <h1>Twoje zamówienia</h1>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Total Price</th>
                    <th>Status</th>
                    <th>Date</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($orders as $order)
                    <tr>
                        <td>{{ $order->id }}</td>
                        <td>${{ number_format($order->total_price, 2) }}</td>
                        <td>{{ $order->status }}</td>
                        <td>{{ $order->created_at->format('d-m-Y') }}</td>
                        <td><a href="{{ route('order.show', $order->id) }}" class="btn btn-primary">Szczegóły</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
