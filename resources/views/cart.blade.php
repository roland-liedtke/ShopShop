<!-- resources/views/cart.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <h1 class="py-4">Twój koszyk</h1>
        @if(session('cart'))
            <div class="row">
                @foreach(session('cart') as $id => $details)
                    <div class="col-md-4">
                        <div class="card">
                            <img src="{{ $details['image'] }}" class="card-img-top" alt="{{ $details['name'] }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $details['name'] }}</h5>
                                <p class="card-text">{{ $details['price'] }} PLN</p>
                                <p class="card-text">Ilość: {{ $details['quantity'] }}</p>
                                <form action="{{ route('cart.remove', $id) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Usuń</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="row">
                <h1 class="py-4">Podsumowanie koszyka</h1>
                <table class="table">
                    <thead>
                    <tr>
                        <th>Produkt</th>
                        <th>Ilość</th>
                        <th>Cena jednostkowa</th>
                        <th>Łączna cena</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php $total = 0; @endphp
                    @foreach(session('cart') as $id => $details)
                        @php $total += $details['price'] * $details['quantity']; @endphp
                        <tr>
                            <td>{{ $details['name'] }}</td>
                            <td>{{ $details['quantity'] }}</td>
                            <td>{{ $details['price'] }} zł</td>
                            <td>{{ $details['price'] * $details['quantity'] }} zł</td>
                        </tr>
                    @endforeach
                    <tr>
                        <td colspan="3" class="text-right"><strong>Razem</strong></td>
                        <td><strong>{{ $total }} zł</strong></td>
                    </tr>
                    </tbody>
                </table>
                <div class="mt-3">
                    <a href="{{ route('checkout') }}" class="btn btn-success">Przejdź do płatności</a>
                </div>
            </div>
        @else
            <p>Twój koszyk jest pusty</p>
        @endif
    </div>
@endsection
