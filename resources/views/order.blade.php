@extends('layouts.app')

@section('content')
    <div class="container mt-5 py-4">
        <h2 class="mb-4">Zamówienie nr #{{ $order->id }}</h2>

        <div class="card">
            <div class="card-header">
                Szczegóły zamówienia
            </div>
            <div class="card-body">
                <h5 class="card-title">Suma: ${{ number_format($order->total, 2) }}</h5>
                <p class="card-text">Status: {{ $order->status }}</p>
                <p class="card-text">Data zamówienia: {{ $order->created_at->format('d-m-Y') }}</p>
            </div>
            <div class="card-body">
                <h5 class="card-title">Adres dostawy:</h5>
                <p class="card-text">Adres: {{$order->shipping_address}}</p>
                <p class="card-text">Miasto: {{$order->shipping_country}}</p>
                <p class="card-text">Kod: {{$order->shipping_zip}}</p>
                <p class="card-text">Kraj: {{$order->shipping_country}}</p>
                <a href="{{ route('orders.index') }}" class="btn btn-primary">Powrót</a>
            </div>
        </div>
    </div>
@endsection
