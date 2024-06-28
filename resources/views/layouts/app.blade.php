<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <!-- Logo -->
    <div class="col-sm-2">
        <div class="logo pull-left">
            <a class="navbar-brand" href="{{ route('home') }}"><img src="https://rolandliedtke.me/ChairShop/logo.png" height="40" alt="" style="max-height: 50px"/></a>
        </div>
    </div>

    <!-- LOGIN -->
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Logowanie</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">Rejestracja</a>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('orders.index') }}">Zamówienia</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('cart.index') }}">Koszyk</a>
                </li>
                <li class="nav-item">
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    <a class="nav-link" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Wyloguj
                    </a>
                </li>
            @endguest
        </ul>
    </div>
</nav>

<main class="py-4">

    @yield('content')


    <!-- IMAGE -->
    <div class="py-4">
        <img src="https://rolandliedtke.me/ChairShop/pattern.png" alt="pattern" style="max-width: 100%">
    </div>

</main>

@include("layouts.footer")

</body>
</html>
