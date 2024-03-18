@extends('Layout.main')

@push('title')
    <title>Cart</title>
@endpush

@section('main-section')
    <div class="bg-slate-100">

        {{-- if Product already exists  --}}
        @if (session('error'))
            <div class="alert alert-danger text-center w-fit m-auto rounded-xl">
                <p class="bg-white drop-shadow-xl p-2 font-medium text-yellow-400">{{ session('error') }}</p>
            </div>
        @endif

        <div class="w-2/3 m-auto pt-10 pb-10  rounded-2xl flex justify-center">

            @php
                $totalPrice = 0;
            @endphp
            {{-- For showing all the Products  --}}
            <div class="flex flex-col drop-shadow-2xl w-1/2">
                @foreach ($carts as $cartItem)
                    <div class="bg-white m-2 rounded-2xl">
                        @php
                            $product = App\Models\product::find($cartItem->product_id);
                        @endphp

                        @if ($product)
                            <div class="flex p-2 gap-2">
                                <img class="w-1/3 h-48 object-cover rounded-2xl"
                                    src="{{ asset('storage/' . $product->images) }}" alt="">

                                <div class="flex flex-col justify-center">
                                    <h3 class="font-medium text-black text-xl">{{ $product->name }}</h3>
                                    <p class="font-normal">{{ $product->description }}</p>
                                    <p>Price: {{ $product->price * $cartItem->quantity }}</p>
                                    @php
                                        $totalPrice = $totalPrice + $product->price * $cartItem->quantity;
                                    @endphp
                                    <p class="mt-2 font-medium">Quantity:</p>
                                    <div class="mt-1 mb-2 w-1/2 ">
                                        <form class="flex gap-1 justify-evenly items-center"
                                            action="{{ url('cart/') }}/{{ $cartItem->id }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <button type="submit" name="quantity" value="{{ $cartItem->quantity - 1 }}"
                                                class="font-bold text-xl text-center border-2 rounded-md border-slate-500 w-full">-</button>
                                            <span class="font-medium text-xl text-center">{{ $cartItem->quantity }}</span>
                                            <button type="submit" name="quantity" value="{{ $cartItem->quantity + 1 }}"
                                                class="font-bold text-xl text-center border-2 rounded-md border-slate-500 w-full">+</button>
                                        </form>
                                    </div>
                                    <form action="{{ url('/cart') }}/{{ $cartItem->id }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="bg-black mt-2 rounded-md text-white font-medium p-2">Remove From
                                            Cart</button>
                                    </form>
                                </div>

                            </div>
                        @else
                            <p>Product details not found</p>
                        @endif


                    </div>
                @endforeach
            </div>

            {{-- Showing total Price of the Product  --}}

            <div class="bg-white h-fit rounded-2xl drop-shadow-2xl w-1/3 m-2">
                <div class="m-2 p-2">
                    <h3 class="font-medium text-xl">Coupon Code</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Id incidunt dicta asperiores nesciunt
                        veritatis
                        delectus! Esse odit perferendis aperiam</p>

                    <div class="flex flex-col gap-2 mt-5">
                        <input type="text" class="rounded-2xl" placeholder="Coupon Code">
                        <button class="text-white rounded-2xl p-2 font-medium bg-black">Apply</button>
                    </div>

                </div>

                <div class="bg-slate-400 rounded-2xl p-2 m-2">
                    <h1 class="font-medium text-xl">Cart Total</h1>
                    <div class="flex mt-5 justify-between">
                        <p>Cart Subtotal</p>
                        <p>{{ $totalPrice }}</p>
                    </div>
                    <div class="flex justify-between">
                        <p>Discount</p>
                        <p>10%</p>
                    </div>
                    <div class="flex justify-between">
                        <h2 class="font-medium text-lg">Cart Total</h2>
                        <h1 class="font-medium text-lg">₹ {{ $totalPrice - $totalPrice / 10 }}</h1>
                    </div>
                    <a href="{{ url('/checkout') }}">
                        <button class="text-black mt-5 bg-slate-100 p-2 font-medium w-full rounded-2xl">Checkout</button>

                    </a>
                </div>

            </div>
        </div>
    </div>
@endsection
