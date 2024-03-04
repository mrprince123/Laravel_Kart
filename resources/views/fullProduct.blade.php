@extends('Layout.main')

@push('title')
    <title>Full Product Details</title>
@endpush

@section('main-section')
    {{-- <h1>Full Product Details</h1> --}}

    <div class="bg-slate-100 pt-20 pb-20">

        <div class="w-2/3 flex m-auto drop-shadow-2xl rounded-2xl bg-white gap-4 p-4">
           
            <div class="w-2/5">
                <img class="rounded-2xl" src="{{ asset('storage/' . $products->images) }}" alt="">

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

                        @switch($products->cat_id)
                            @case(1)
                                <p class="w-2/3 text-justify">Electronics permeate modern life, powering devices from smartphones to
                                    medical equipment. Leveraging
                                    electrons, they process, transmit, and store information, driving progress across industries.
                                    Advancements like AI and IoT redefine possibilities, promising breakthroughs in healthcare and
                                    beyond. Yet, electronic waste challenges sustainability. </p>
                                <img class="w-1/3 object-cover"
                                    src="https://cdn.pixabay.com/photo/2018/01/27/18/45/wallkman-3111922_1280.jpg" alt="">
                            @break

                            @case(2)
                                <p class="w-2/3 text-justify">The world of clothing is a diverse landscape, encompassing various
                                    styles, materials, and
                                    functions. From haute couture to everyday wear, clothes reflect cultural norms, personal
                                    expression, and practical needs. Fashion trends come and go, but the timeless necessity of
                                    clothing remains, shaping identities and bridging societal divides through fabric and design.
                                </p>
                                <img class="w-1/3 object-cover"
                                    src="https://plus.unsplash.com/premium_photo-1673481600920-72fa9fc062cc?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                    alt="">
                            @break

                            @case(3)
                                <p class="w-2/3 text-justify">Food, a cornerstone of human existence, spans cultures and traditions,
                                    offering sustenance, pleasure, and communal bonding. From exotic delicacies to comforting
                                    staples, it caters to diverse tastes and nutritional needs. Culinary innovation continually
                                    evolves, blending tradition with modernity, creating an endless array of flavors and experiences
                                    to tantalize the senses. </p>
                                <img class="w-1/3 object-cover"
                                    src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                    alt="">
                            @break;
                            @case(4)
                                <p class="w-2/3 text-justify">Mobile technology revolutionizes communication, entertainment, and
                                    productivity, shrinking the world into a palm-sized device. Smartphones integrate apps, internet
                                    access, and powerful hardware, shaping daily routines and connecting billions globally. From
                                    social media to gaming, mobile devices redefine convenience, accessibility, and the very essence
                                    of modern living in an interconnected digital age.</p>
                                <img class="w-1/3 object-cover"
                                    src="https://images.unsplash.com/photo-1567581935884-3349723552ca?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                    alt="">
                            @break;
                            @case(5)
                                <p class="w-2/3 text-justify">
                                    Stationery, an essential tool for organization and expression, ranges from sleek pens to
                                    decorative paper. Whether jotting down notes or crafting heartfelt letters, it bridges the gap
                                    between digital and analog worlds. From classic designs to modern innovations, stationery
                                    continues to inspire creativity and elevate the art of communication in everyday life. </p>
                                <img class="w-1/3 object-cover"
                                    src="https://images.unsplash.com/photo-1568871391149-449702439177?q=80&w=2116&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                    alt="">
                            @break;
                            @case(6)
                                <p class="w-2/3 text-justify">The "others" category encompasses a vast array of diverse topics and
                                    interests that defy easy classification. From esoteric hobbies to niche communities, it
                                    celebrates individuality and curiosity. This category serves as a melting pot of unique
                                    passions, fostering exploration, connection, and the celebration of the wonderfully
                                    unconventional aspects of human existence.</p>
                                <img class="w-1/3 object-cover"
                                    src="https://images.unsplash.com/photo-1500995617113-cf789362a3e1?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                    alt="">
                            @break;

                            @default
                        @endswitch



                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
