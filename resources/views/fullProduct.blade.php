@extends('Layout.main')

@push('title')
    <title>Full Product Details</title>
@endpush

@section('main-section')
    {{-- <h1>Full Product Details</h1> --}}

    <div class="bg-slate-100 pt-5 pb-20">

        <div class="w-2/3 flex m-auto bg-white gap-4 p-4">
            <div class="w-2/5">
                <img src="{{ asset('storage/' . $products->images) }}" alt="">

                <div class="flex gap-2 mt-5 w-full">
                    <a href="" class="w-1/2"><button class="bg-slate-400 p-3 w-full font-medium text-black">Buy
                            Now</button></a>
                    {{-- <a href=""><button class="bg-black p-1 font-medium text-white">Add To Cart</button></a> --}}
                    <a class="w-1/2"
                        href="{{ route('cart.add', ['productId' => $products->id, 'userId' => Auth::id()]) }}"><button
                            class="bg-black p-3 w-full font-medium text-white">Add To Cart</button></a>
                </div>

            </div>



            <div class="w-3/5">
                <h1 class="font-medium text-lg">{{ $products->name }}</h1>
                <p>Description: {{ $products->description }}</p>
                <p class="font-medium text-green-500">Special Price</p>
                <p class="text-2xl font-medium">₹{{ $products->price }}</p>


                <div class="mt-10">
                    <h2 class="font-medium text-lg">Available Offers</h2>
                    <ul>
                        <li><span class="font-medium">Bank Offer </span> ₹25* instant discount for the 1st Flipkart Order
                            using
                            Flipkart UPI</li>
                        <li><span class="font-medium">Bank Offer </span> 5% Cashback on Flipkart Axis Bank Card</li>
                        <li><span class="font-medium">Special Offer </span> Get extra 30% off (price inclusive of
                            cashback/coupon)
                        </li>
                        <li><span class="font-medium">Partner Offer </span> Sign-up for Flipkart Pay Later & get free Times
                            Prime
                            Benefits worth ₹10,000*</li>
                        <li><span class="font-medium">Laravel Kart Offer </span> Start using thie app and share with friends
                            to
                            get
                            extra ₹100 off on all orders</li>
                    </ul>
                </div>




                <div class="mt-10">
                    <h2 class="font-medium text-2xl mb-2">Product Description</h2>
                    <div class="flex gap-3 w-full">
                        <img class="w-1/3 object-cover" src="{{ asset('storage/' . $products->images) }}" alt="">
                        <p class="w-2/3 text-justify">Electronics permeate modern life, powering devices from smartphones to
                            medical equipment. Leveraging
                            electrons, they process, transmit, and store information, driving progress across industries.
                            Advancements like AI and IoT redefine possibilities, promising breakthroughs in healthcare and
                            beyond. Yet, electronic waste challenges sustainability.</p>
                    </div>
                    <div class="flex gap-3 w-full mt-10">
                        <p class="w-2/3 text-justify">Electronics permeate modern life, powering devices from smartphones to
                            medical equipment. Leveraging
                            electrons, they process, transmit, and store information, driving progress across industries.
                            Advancements like AI and IoT redefine possibilities, promising breakthroughs in healthcare and
                            beyond. Yet, electronic waste challenges sustainability. </p>
                        <img class="w-1/3 object-cover"
                            src="https://cdn.pixabay.com/photo/2018/01/27/18/45/wallkman-3111922_1280.jpg" alt="">

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
