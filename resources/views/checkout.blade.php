<!-- resources/views/checkout.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Podsumowanie zamówienia</h1>
        <div class="row">
            <div class="col-md-6">
                <h4>Produkty w koszyku</h4>
                <ul class="list-group">
                    @foreach($cartItems as $item)
                        <li class="list-group-item">
                            <div>{{ $item->name }} - {{ $item->quantity }} x {{ $item->price }} PLN</div>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-6">
                <h4>Adres do wysyłki</h4>
                <form action="{{ route('order.place') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="address">Adres</label>
                        <input type="text" class="form-control" id="address" name="address" required>
                    </div>
                    <div class="form-group">
                        <label for="city">Miasto</label>
                        <input type="text" class="form-control" id="city" name="city" required>
                    </div>
                    <div class="form-group">
                        <label for="zip">Kod pocztowy</label>
                        <input type="text" class="form-control" id="zip" name="zip" required>
                    </div>
                    <div class="form-group">
                        <label for="country">Kraj</label>
                        <input type="text" class="form-control" id="country" name="country" required>
                    </div>
                    <button type="submit" class="btn btn-success">Złóż zamówienie</button>
                </form>
            </div>
        </div>
    </div>
@endsection
