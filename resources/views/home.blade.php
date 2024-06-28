<!-- resources/views/home.blade.php -->

@extends('layouts.app')

@section('content')
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="https://rolandliedtke.me/ChairShop/chair1.png" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://rolandliedtke.me/ChairShop/chair2.png" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://rolandliedtke.me/ChairShop/chair3.png" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="container py-4">
        <h1 class="text-center py-5">Witamy w naszym sklepie</h1>
        <div class="row">
            @foreach($products as $product)
                <div class="col-md-4 py-2">
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
