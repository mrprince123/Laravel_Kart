@extends('Layout.main')

@push('title')
    <title>Full Product Details</title>
@endpush

@section('main-section')
    {{-- <h1>Full Product Details</h1> --}}

    <div class="w-1/2 m-auto bg-slate-200 p-2 mt-10 mb-10">
        <img src="{{ asset('storage/' . $products->images) }}" alt="">

        <h1>{{ $products->name }}</h1>
        <p>Description: {{ $products->description }}</p>
        <p>Price: ${{ $products->price }}</p>
        <div class="flex gap-2 w-full mt-auto">
            <a href=""><button class="bg-slate-400 p-1 font-medium text-black">Buy Now</button></a>
            {{-- <a href=""><button class="bg-black p-1 font-medium text-white">Add To Cart</button></a> --}}
            <a href="{{ route('cart.add', ['productId' => $products->id, 'userId' => Auth::id()]) }}"><button
                    class="bg-black p-1 font-medium text-white">Add To Cart</button></a>

        </div>
    </div>
@endsection
