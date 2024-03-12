@extends('Layout.main')

@push('title')
    <title>Orders Items</title>
@endpush

@section('main-section')
    {{-- show the Orders Items --}}
    <div class="bg-white w-1/2 m-auto mt-10 mb-10">
        <h1 class="text-center text-xl font-bold mb-4">Order Items</h1>
        @foreach ($orderItems as $orderItem)
            <div class="bg-slate-100 p-2 m-2 rounded-xl drop-shadow-xl flex ">
                {{-- Fetch and display product details --}}
                @php
                    $product = App\Models\Product::findOrFail($orderItem->product_id);
                @endphp
                <div class="">
                    <img class="h-32 object-cover w-48 rounded-xl" class="rounded-xl" src="{{ asset('storage/' . $product->images) }}"
                        alt="Product Image">
                    <p class="font-medium text-center">{{ $product->name }}</p>
                </div>
                <div class="p-2">
                    <p>Order ID:{{ $orderItem->id }}</p>
                    <p>desc: {{ $product->description }}</p>
                    <p>Quantity: {{ $orderItem->quantity }}</p>
                    <p>One Product Price : {{ $orderItem->price }}</p>
                    <p>Order Date : {{ $orderItem->created_at }}</p>
                </div>

            </div>
        @endforeach
    </div>
@endsection
