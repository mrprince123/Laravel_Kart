@extends('Layout.main')

@push('title')
    <title>Checkout</title>
@endpush

@section('main-section')
    {{-- <h1>Checkout Page</h1> --}}

    {{-- Show the Model for Order Placed  --}}


    <div class="bg-slate-100">

        <div class="w-2/3 m-auto pt-10 pb-10  rounded-2xl flex justify-center">

            @php
                $totalPrice = 0;
            @endphp
            {{-- For showing all the Products  --}}
            <div class="flex flex-col drop-shadow-2xl w-1/2">
                @foreach ($carts as $value)
                    <div class="bg-white m-2 rounded-2xl">
                        @php
                            $product = App\Models\product::find($value->product_id);
                        @endphp

                        @if ($product)
                            <div class="flex p-2 gap-2">
                                {{-- <img class="w-1/3" src="{{ $product->image }}" alt=""> --}}
                                <img class="w-1/3 h-48 object-cover rounded-2xl"
                                    src="{{ asset('storage/' . $product->images) }}" alt="">

                                <div class="flex flex-col justify-center">
                                    <h3 class="font-medium text-black text-xl">{{ $product->name }}</h3>
                                    <p class="font-normal">{{ $product->description }}</p>
                                    <p>Price: {{ $product->price }}</p>
                                    @php
                                        $totalPrice = $totalPrice + $product->price;
                                    @endphp
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

                {{-- Address Details --}}
                <div class="m-2 p-2 bg-slate-300 rounded-2xl">
                    <h3 class="font-medium text-xl">Your Address</h3>
                    <p>Enter Your Details with Address Information</p>
                    <form action="" method="POST" class="flex flex-col gap-2 mt-5">
                        @csrf
                        <input type="text" class="rounded-2xl" required placeholder="Your Name">
                        <input type="email" class="rounded-2xl" required placeholder="Email">
                        <input type="text" class="rounded-2xl" required placeholder="Your Address">
                        <input type="text" class="rounded-2xl" required placeholder="Your State">
                        <input type="number" class="rounded-2xl" required placeholder="Your PinCode">
                        <input type="submit" class="text-white rounded-2xl p-2 font-medium bg-black" value="Add Address">
                    </form>

                </div>


                {{-- Payment Method  --}}
                <div class="m-2 p-2 bg-slate-300  rounded-2xl">
                    <h1 class="font-medium text-xl">Payment Method</h1>
                    {{-- <p>Cash On Dilivery</p> --}}
                    <li class="text-blue-500">Cash On Delivery</li>
                    <button class="text-black w-full rounded-2xl mt-2 p-2 font-medium bg-slate-100"
                        onclick="alert('Payment Method Confirm')">Confirm Payment Method</button>
                </div>

                {{-- Final Checkout --}}
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
                    <button data-modal-target="default-modal" data-modal-toggle="default-modal" type="button"
                        class="text-black mt-5 bg-slate-100 p-2 font-medium w-full rounded-2xl">Final Checkout</button>
                </div>

            </div>
        </div>
    </div>

    <!-- Main modal -->
    <div id="default-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative text-center bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal body -->
                <div class="p-4 md:p-5 space-y-4">
                    <img class="h-24 m-auto"
                        src="https://res.cloudinary.com/sniperdocs/image/upload/v1708451342/tick-removebg-preview_tnuqer.png"
                        alt="">
                    <h1 class="font-medium text-xl">Order Placed Successfully</h1>
                    <h1 class="font-medium text-lg text-green-500">₹ {{ $totalPrice - $totalPrice / 10 }}</h1>

                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                        Your order has been placed Successfully you will get SMS on your mobile phone soon. Thanks for
                        shoping with us.
                    </p>
                </div>
                <!-- Modal footer -->
                <div
                    class="flex items-center justify-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <a href="{{ url('/') }}">
                        <button data-modal-hide="default-modal" type="button"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Go
                            Back Home Page
                        </button>
                    </a>

                </div>
            </div>
        </div>
    </div>
@endsection
