<!-- resources/views/product.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row py-2">
            <div class="col-md-6">
                <img src="{{ $product->image_url }}" class="img-fluid" alt="{{ $product->name }}">
            </div>
            <div class="col-md-6">
                <h1 class="display-4">{{ $product->name }}</h1>
                <p class="lead">{{ $product->description }}</p>
                <p class="card-text">Stan magazynowy: {{ $product->stock }}</p>
                <h3 class="text-success">${{ number_format($product->price, 2) }}</h3>
                <p><strong>Category:</strong> {{ $product->category->name ?? 'Uncategorized' }}</p>
                <form action="{{ route('cart.add', $product->id) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-primary btn-lg mt-3">Do koszyka</button>
                </form>
            </div>
        </div>

        <div class="row py-4">
            <div class="col col-sm-6"></div>

            <!-- RATING -->
            <div class="col col-sm-3">
                <h2>Oceny</h2>
                @if($product->ratings->isEmpty())
                    <p>Brak ocen.</p>
                @else
                    <ul>
                        @foreach($product->ratings as $rating)
                            <li>{{ $rating->user->name }}: {{ $rating->rating }} gwiazdek</li>
                        @endforeach
                    </ul>
                @endif
                <p><strong>Średnia ocen:</strong> {{ $averageRating ?? 'Brak ocen' }}</p>
                <div class="col-md-6">
                    <form action="{{ route('ratings.store') }}" method="post">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <select name="rating">
                            <option value="1">1 - Poor</option>
                            <option value="2">2 - Fair</option>
                            <option value="3">3 - Good</option>
                            <option value="4">4 - Very Good</option>
                            <option value="5">5 - Excellent</option>
                        </select>
                        <button type="submit" class="btn btn-secondary">Oceń</button>
                    </form>
                </div>
            </div>

            <!-- COMMENT -->
            <div class="col col-sm-3">
                <h2>Komentarze</h2>
                @if($product->comments->isEmpty())
                    <p>Brak komentarzy.</p>
                @else
                    <ul>
                        @foreach($product->comments as $comment)
                            <li>{{ $comment->user->name }}: {{ $comment->message }}</li>
                        @endforeach
                    </ul>
                @endif

                <div class="col-md-6">
                    <form action="{{ route('comments.store') }}" method="post">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <textarea name="message" rows="3" placeholder="Komentarz..."></textarea>
                        <button type="submit" class="btn btn-secondary">Dodaj komentarz</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
