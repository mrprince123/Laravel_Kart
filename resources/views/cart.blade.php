@extends('Layout.main')

@push('title')
    <title>Home</title>
@endpush

@section('main-section')
    <div>
        @php
            $totalPrice = 0;
        @endphp
        @foreach ($carts as $value)
            <div class="bg-slate-200 w-1/2 m-4">
                @php
                    $product = App\Models\products::find($value->product_id);

                @endphp


                @if ($product)
                    <div class="flex p-2 gap-2">
                        <img class="w-1/3" src="{{ $product->image }}" alt="">
                        <div>
                            <h3 class="font-medium text-black text-xl">{{ $product->name }}</h3>
                            <p class="font-normal">{{ $product->description }}</p>
                            <p>Price: {{ $product->price }}</p>
                            @php
                                $totalPrice = $totalPrice + $product->price;
                            @endphp

                            <form action="{{ url('/cart') }}/{{ $value->cart_id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-black text-white font-medium p-2">Remove From Cart</button>
                            </form>
                        </div>

                    </div>
                @else
                    <p>Product details not found</p>
                @endif
            </div>
        @endforeach

        {{-- Showing total Price of the Product  --}}
        <div class="bg-slate-200 mb-20 p-4">
            <div>
                <div class="flex items-center justify-between">
                    <h3 class="font-medium text-xl">Subtotal</h3>
                    <span class="font-medium text-blue-500 text-2xl">₹{{ $totalPrice }}</span>
                </div>
                <p class="">Shipping and taxes calculated at checkout</p>
            </div>
            <button class="text-white mt-3 bg-black font-medium p-2">Checkout</button>
        </div>
    </div>
@endsection
