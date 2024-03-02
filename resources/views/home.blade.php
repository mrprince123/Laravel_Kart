@extends('Layout.main')

@push('title')
    <title>Home</title>
@endpush

@section('main-section')
    <div>

        <div class="flex items-center w-2/3 m-auto mt-20 mb-20">
            <div class="w-1/2 m-2 p-2">
                <h1 class="font-semibold text-5xl">Discover endless treasures,</h1>
                <h1 class="font-semibold text-5xl">Everything here.</h1>

                <p class="mt-4 font-medium">only on Laraval <span class="font-bold text-xl">Kart</span></p>
                <div class="mt-4">
                    <a href="{{ url('/product') }}"> <button class="bg-black text-white font-medium p-2">Shop
                            Now</button></a>
                    <a href="{{ url('/about') }}"> <button class="bg-slate-100 text-black font-medium p-2">See
                            About</button></a>
                </div>
            </div>
            <img class="w-1/2 h-96 m-2 object-cover"
                src="https://cdn.pixabay.com/photo/2019/12/16/20/25/shopping-4700185_960_720.jpg" alt="">
        </div>


        <div class="w-4/5 m-auto">
            <h1 class="font-semibold text-black mb-10 text-center text-4xl">Our new Products collection</h1>

            {{-- Electronic  --}}
            <div>
                <h1 class="font-semibold text-black mb-5  text-3xl">Electronics</h1>
                <div class="grid grid-cols-5 gap-4 mb-20">
                    @php $count=0; @endphp
                    @foreach ($products as $value)
                        @if ($value->cat_id == 1)
                            @if ($count < 5)
                                <div class="bg-slate-100 m-2 p-2 flex flex-col">
                                    <img class="w-full h-2/3 object-cover" src="{{ asset('storage/' . $value->images) }}"
                                        alt="">
                                    <h3 class="mt-2 font-medium">{{ $value->price }} <span
                                            class="bg-black text-white text-sm font-medium p-1">10% off</span></h3>
                                    <h1>{{ $value->name }}</h1>
                                    <p>{{ $value->cat_id }}</p>

                                    <p>{{ $value->description }}</p>
                                    <div class="flex gap-2 w-full mt-auto">
                                        <a href="{{ url('/product') }}/{{ $value->product_id }}"><button
                                                class="bg-slate-400 p-1 font-medium text-black">View Full</button></a>
                                        {{-- <a href=""><button class="bg-black p-1 font-medium text-white">Add To Cart</button></a> --}}
                                        <a
                                            href="{{ route('cart.add', ['productId' => $value->id, 'userId' => Auth::id()]) }}"><button
                                                class="bg-black p-1 font-medium text-white">Add To Cart</button></a>

                                    </div>
                                </div>
                                @php  $count++;  @endphp
                            @endif
                        @endif
                    @endforeach
                </div>
            </div>

            {{-- Clothes  --}}
            <div>
                <h1 class="font-semibold text-black mb-5  text-3xl">Clothes</h1>
                <div class="grid grid-cols-5 gap-4 mb-20">
                    @php $count=0; @endphp
                    @foreach ($products as $value)
                        @if ($value->cat_id == 2)
                            @if ($count < 5)
                                <div class="bg-slate-100 m-2 p-2 flex flex-col">
                                    <img class="w-full h-2/3 object-cover" src="{{ asset('storage/' . $value->images) }}"
                                        alt="">
                                    <h3 class="mt-2 font-medium">{{ $value->price }} <span
                                            class="bg-black text-white text-sm font-medium p-1">10% off</span></h3>
                                    <h1>{{ $value->name }}</h1>
                                    <p>{{ $value->cat_id }}</p>

                                    <p>{{ $value->description }}</p>
                                    <div class="flex gap-2 w-full mt-auto">
                                        <a href="{{ url('/product') }}/{{ $value->product_id }}"><button
                                                class="bg-slate-400 p-1 font-medium text-black">View Full</button></a>
                                        {{-- <a href=""><button class="bg-black p-1 font-medium text-white">Add To Cart</button></a> --}}
                                        <a
                                            href="{{ route('cart.add', ['productId' => $value->id, 'userId' => Auth::id()]) }}"><button
                                                class="bg-black p-1 font-medium text-white">Add To Cart</button></a>

                                    </div>
                                </div>
                                @php  $count++;  @endphp
                            @endif
                        @endif
                    @endforeach
                </div>
            </div>

            {{-- Food  --}}
            <div>
                <h1 class="font-semibold text-black mb-5  text-3xl">Food</h1>
                <div class="grid grid-cols-5 gap-4 mb-20">
                    @php $count=0; @endphp
                    @foreach ($products as $value)
                        @if ($value->cat_id == 3)
                            @if ($count < 5)
                                <div class="bg-slate-100 m-2 p-2 flex flex-col">
                                    <img class="w-full h-2/3 object-cover" src="{{ asset('storage/' . $value->images) }}"
                                        alt="">
                                    <h3 class="mt-2 font-medium">{{ $value->price }} <span
                                            class="bg-black text-white text-sm font-medium p-1">10% off</span></h3>
                                    <h1>{{ $value->name }}</h1>
                                    <p>{{ $value->cat_id }}</p>

                                    <p>{{ $value->description }}</p>
                                    <div class="flex gap-2 w-full mt-auto">
                                        <a href="{{ url('/product') }}/{{ $value->product_id }}"><button
                                                class="bg-slate-400 p-1 font-medium text-black">View Full</button></a>
                                        {{-- <a href=""><button class="bg-black p-1 font-medium text-white">Add To Cart</button></a> --}}
                                        <a
                                            href="{{ route('cart.add', ['productId' => $value->id, 'userId' => Auth::id()]) }}"><button
                                                class="bg-black p-1 font-medium text-white">Add To Cart</button></a>

                                    </div>
                                </div>
                                @php  $count++;  @endphp
                            @endif
                        @endif
                    @endforeach
                </div>
            </div>

            {{-- Mobile --}}
            <div>
                <h1 class="font-semibold text-black mb-5  text-3xl">Mobiles</h1>
                <div class="grid grid-cols-5 gap-4 mb-20">
                    @php $count=0; @endphp
                    @foreach ($products as $value)
                        @if ($value->cat_id == 4)
                            @if ($count < 5)
                                <div class="bg-slate-100 m-2 p-2 flex flex-col">
                                    <img class="w-full h-2/3 object-cover" src="{{ asset('storage/' . $value->images) }}"
                                        alt="">
                                    <h3 class="mt-2 font-medium">{{ $value->price }} <span
                                            class="bg-black text-white text-sm font-medium p-1">10% off</span></h3>
                                    <h1>{{ $value->name }}</h1>
                                    <p>{{ $value->cat_id }}</p>

                                    <p>{{ $value->description }}</p>
                                    <div class="flex gap-2 w-full mt-auto">
                                        <a href="{{ url('/product') }}/{{ $value->product_id }}"><button
                                                class="bg-slate-400 p-1 font-medium text-black">View Full</button></a>
                                        {{-- <a href=""><button class="bg-black p-1 font-medium text-white">Add To Cart</button></a> --}}
                                        <a
                                            href="{{ route('cart.add', ['productId' => $value->id, 'userId' => Auth::id()]) }}"><button
                                                class="bg-black p-1 font-medium text-white">Add To Cart</button></a>

                                    </div>
                                </div>
                                @php  $count++;  @endphp
                            @endif
                        @endif
                    @endforeach
                </div>
            </div>

            {{-- Stationary  --}}
            <div>
                <h1 class="font-semibold text-black mb-5  text-3xl">Stationary</h1>
                <div class="grid grid-cols-5 gap-4 mb-20">
                    @php $count=0; @endphp
                    @foreach ($products as $value)
                        @if ($value->cat_id == 5)
                            @if ($count < 5)
                                <div class="bg-slate-100 m-2 p-2 flex flex-col">
                                    <img class="w-full h-2/3 object-cover" src="{{ asset('storage/' . $value->images) }}"
                                        alt="">
                                    <h3 class="mt-2 font-medium">{{ $value->price }} <span
                                            class="bg-black text-white text-sm font-medium p-1">10% off</span></h3>
                                    <h1>{{ $value->name }}</h1>
                                    <p>{{ $value->cat_id }}</p>

                                    <p>{{ $value->description }}</p>
                                    <div class="flex gap-2 w-full mt-auto">
                                        <a href="{{ url('/product') }}/{{ $value->product_id }}"><button
                                                class="bg-slate-400 p-1 font-medium text-black">View Full</button></a>
                                        {{-- <a href=""><button class="bg-black p-1 font-medium text-white">Add To Cart</button></a> --}}
                                        <a
                                            href="{{ route('cart.add', ['productId' => $value->id, 'userId' => Auth::id()]) }}"><button
                                                class="bg-black p-1 font-medium text-white">Add To Cart</button></a>

                                    </div>
                                </div>
                                @php  $count++;  @endphp
                            @endif
                        @endif
                    @endforeach
                </div>
            </div>

            {{-- Others  --}}
            <div>
                <h1 class="font-semibold text-black mb-5  text-3xl">Others</h1>
                <div class="grid grid-cols-5 gap-4 mb-20">
                    @php $count=0; @endphp
                    @foreach ($products as $value)
                        @if ($value->cat_id == 6)
                            @if ($count < 5)
                                <div class="bg-slate-100 m-2 p-2 flex flex-col">
                                    <img class="w-full h-2/3 object-cover" src="{{ asset('storage/' . $value->images) }}"
                                        alt="">
                                    <h3 class="mt-2 font-medium">{{ $value->price }} <span
                                            class="bg-black text-white text-sm font-medium p-1">10% off</span></h3>
                                    <h1>{{ $value->name }}</h1>
                                    <p>{{ $value->cat_id }}</p>

                                    <p>{{ $value->description }}</p>
                                    <div class="flex gap-2 w-full mt-auto">
                                        <a href="{{ url('/product') }}/{{ $value->product_id }}"><button
                                                class="bg-slate-400 p-1 font-medium text-black">View Full</button></a>
                                        {{-- <a href=""><button class="bg-black p-1 font-medium text-white">Add To Cart</button></a> --}}
                                        <a
                                            href="{{ route('cart.add', ['productId' => $value->id, 'userId' => Auth::id()]) }}"><button
                                                class="bg-black p-1 font-medium text-white">Add To Cart</button></a>

                                    </div>
                                </div>
                                @php  $count++;  @endphp
                            @endif
                        @endif
                    @endforeach
                </div>
            </div>


        </div>



    </div>
@endsection
