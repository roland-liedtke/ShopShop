<!-- resources/views/home.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Witamy w naszym sklepie</h1>
        <div class="row">
            @foreach($products as $product)
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ $product->image_url }}" class="card-img-top" alt="{{ $product->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">{{ $product->description }}</p>
                            <p class="card-text">{{ $product->price }} PLN</p>
                            <a href="{{ route('product.show', $product->id) }}" class="btn btn-primary">Szczegóły</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
