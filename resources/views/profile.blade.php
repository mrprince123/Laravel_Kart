@extends('Layout.main')

@push('title')
    <title>Profile</title>
@endpush

@section('main-section')
    <div class="w-1/2 bg-slate-100 m-auto mb-20 mt-20 drop-shadow-2xl rounded-xl p-1">

        <div class="bg-slate-300 rounded-xl m-2 p-2 flex flex-col items-center">
            <img class="h-40 rounded-2xl object-contain"
                src="https://cdn.pixabay.com/photo/2017/08/02/23/58/people-2574170_1280.jpg" alt="">
            <h1 class="font-medium">Name: {{ $user->name }}</h1>
            <h1>Email: {{ $user->email }}</h1>
        </div>

        <div class="bg-slate-300 rounded-xl m-2 p-2">
            <h1 class="font-medium text-xl m-2">Saved Address</h1>
            @foreach ($address as $address)
                <div class="p-2 m-2 rounded-xl drop-shadow-xl">
                    <p class="font-medium">Name :{{ $address->name }}</p>
                    <p>Email :{{ $address->email }}</p>
                    <p>Phone :{{ $address->phone }}</p>
                    <p>Address :{{ $address->address }}</p>
                    <p>State :{{ $address->state }}</p>
                    <p>Pincode :{{ $address->pincode }}</p>
                </div>
            @endforeach
        </div>



        <div class="bg-slate-300 m-2 rounded-xl p-2">
            <h1 class="font-medium text-xl m-2">Show Orders Details</h1>
            <div class="w-full">
                <a href="{{ url('/orders') }}"><button class="bg-black text-white p-2 font-medium rounded-lg m-2">Show
                        Orders</button></a>
                <a href="{{ url('/orders/items') }}"><button class="bg-black text-white p-2 font-medium rounded-lg m-2">Show
                        Orders
                        Items</button></a>
            </div>

        </div>


    </div>
@endsection
