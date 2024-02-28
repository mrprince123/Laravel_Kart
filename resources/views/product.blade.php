@extends('Layout.main')

@push('title')
    <title>Home</title>
@endpush


@section('main-section')
    {{-- <h1>Products List</h1> --}}

    {{-- <p>Show all the Products</p> --}}

    <div class="flex w-4/5 m-auto mb-20 mt-20 justify-evenly flex-wrap">
        @foreach ($products as $value)
            <div class="bg-slate-100 w-1/4 m-2 p-2 flex flex-col">
                <img class="w-full h-2/3 object-cover" src="{{ asset('storage/'.$value->image) }}" alt="Product Image">
                <h3 class="mt-2 font-medium">{{ $value->price }} <span class="bg-black text-white text-sm font-medium p-1">10%
                        off</span></h3>
                <h1>{{ $value->name }}</h1>
                <p>{{ $value->description }}</p>
                <div class="flex gap-2 w-full mt-auto">
                    <a href="{{ url('/product') }}/{{ $value->product_id }}"><button
                            class="bg-slate-400 p-1 font-medium text-black">View Full</button></a>
                    <a href="{{ route('cart.add', ['productId' => $value->product_id, 'userId' => Auth::id()]) }}"><button
                            class="bg-black p-1 font-medium text-white">Add To Cart</button></a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
