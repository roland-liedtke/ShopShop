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

<nav class="navbar navbar-expand-lg navbar-light bg-dark" style="background-color: black !important">

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
                    <a class="nav-link" href="{{ route('login') }}"><span class="text-white">Logowanie</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}"><span class="text-white">Rejestracja</span></a>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('orders.index') }}"><span class="text-white">Zamówienia</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('cart.index') }}"><span class="text-white">Koszyk</span></a>
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

<main>

    @yield('content')


    <!-- IMAGE -->
    <div>
        <img src="https://rolandliedtke.me/ChairShop/pattern.png" alt="pattern" style="max-width: 100%">
    </div>

</main>

@include("layouts.footer")


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
