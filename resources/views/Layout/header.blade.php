<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @stack('title')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/bbfa8b511e.js" crossorigin="anonymous"></script>
    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css"  rel="stylesheet" /> --}}
</head>

<body>

    <div class="flex bg-slate-200 p-4 justify-between items-center ">
        <a href="{{ url('/') }}">
            <h1 class="font-medium text-2xl">Laravel <span class="font-bold">Kart</h1>
        </a>

        <div>
            <a href="{{ url('/') }}" class="font-medium m-2">Home</a>

            <a href="{{ url('/about') }}" class="font-medium m-2">About</a>
            <a href="{{ url('/contact') }}" class="font-medium m-2">Contact</a>
            <a href="{{ url('/product') }}" class="font-medium m-2">Products</a>

            @guest <!-- If the user is not authenticated -->
                <a href="{{ url('/login') }}"><button class="bg-black p-2 font-medium text-white">Login</button></a>
                <a href="{{ url('/register') }}"><button class="bg-black p-2 font-medium text-white">Register</button></a>
            @else
                <a href="{{ url('/cart') }}" class="font-medium m-2"><i class="fas fa-cart-plus"></i></a>

                <!-- If the user is authenticated -->
                <form action="{{ route('logout') }}" method="GET" class="inline">
                    @csrf
                    <a href="{{ url('/profile') }}" class="font-medium m-2"><i class="far fa-user-circle"></i></a>
                    <button type="submit" class="bg-black p-2 font-medium text-white">Logout</button>
                </form>

            @endguest

            {{-- <a href="{{ url('/login') }}"><button class="bg-black p-2 font-medium text-white">Login</button></a>
            <a href="{{ url('/register') }}"><button class="bg-black p-2 font-medium text-white">Register</button></a>
            <a href="{{ route('logout') }}"><button class="bg-black p-2 font-medium text-white">Logout</button></a> --}}
        </div>
    </div>
