@extends('Layout.main')

@push('title')
    <title>Products</title>
@endpush


@section('main-section')
    {{-- <h1>Products List</h1> --}}

    {{-- <p>Show all the Products with Category wise</p> --}}

    <div class="bg-white">

        <div class="w-4/5 m-auto mt-10  mb-10">
            <h1 class="font-semibold text-black mb-10 text-center text-4xl">Our new Products collection</h1>


            {{-- Categories Circle --}}
            <div class="flex gap-4 mb-10">
                <div class="w-1/6 drop-shadow-2xl">
                    <div class="border-6 h-48 bg-blue-500 p-4 rounded-full">
                        <img class="rounded-full w-full h-full object-cover"
                            src="https://cdn.pixabay.com/photo/2018/01/27/18/45/wallkman-3111922_1280.jpg" alt="">
                    </div>
                    <h3 class="font-medium mt-2 text-lg text-center">Electronic</h3>
                </div>

                <div class="w-1/6 drop-shadow-2xl">
                    <div class="border-6 h-48 bg-pink-500 p-4 rounded-full">
                        <img class="rounded-full w-full h-full object-cover"
                            src="https://cdn.pixabay.com/photo/2014/08/26/21/48/sweatshirts-428607_960_720.jpg"
                            alt="">
                    </div>
                    <h3 class="font-medium mt-2 text-lg text-center">Clothes</h3>
                </div>

                <div class="w-1/6 drop-shadow-2xl">
                    <div class="border-6 h-48 bg-red-500 p-4 rounded-full">
                        <img class="rounded-full w-full h-full object-cover"
                            src="https://cdn.pixabay.com/photo/2014/11/05/15/57/salmon-518032_960_720.jpg" alt="">
                    </div>
                    <h3 class="font-medium mt-2 text-lg text-center">Foods</h3>
                </div>


                <div class="w-1/6 drop-shadow-2xl">
                    <div class="border-6 h-48 bg-orange-500 p-4 rounded-full">
                        <img class="rounded-full w-full h-full object-cover"
                            src="https://cdn.pixabay.com/photo/2016/09/10/17/18/book-1659717_1280.jpg" alt="">
                    </div>
                    <h3 class="font-medium mt-2 text-lg text-center">Stationary</h3>
                </div>


                <div class="w-1/6 drop-shadow-2xl">
                    <div class="border-6 h-48 bg-yellow-500 p-4 rounded-full">
                        <img class="rounded-full w-full h-full object-cover"
                            src="https://cdn.pixabay.com/photo/2014/08/05/10/30/iphone-410324_1280.jpg" alt="">
                    </div>
                    <h3 class="font-medium mt-2 text-lg text-center">Mobiles</h3>
                </div>


                <div class="w-1/6 drop-shadow-2xl">
                    <div class="border-6 h-48 bg-slate-400 p-4 rounded-full">
                        <img class="rounded-full w-full h-full object-cover"
                            src="https://cdn.pixabay.com/photo/2017/01/08/13/58/cube-1963036_960_720.jpg" alt="">
                    </div>
                    <h3 class="font-medium mt-2 text-lg text-center">Others</h3>
                </div>

            </div>

            {{-- Electronic  --}}
            <div>
                <h1 class="font-semibold text-black mb-5  text-3xl">Electronics</h1>
                <div class="grid grid-cols-5 gap-4 mb-20">
                    @php $count=0; @endphp
                    @foreach ($products as $value)
                        @if ($value->cat_id == 1)
                            {{-- @if ($count < 5) --}}
                            <div class="bg-slate-100 rounded-2xl drop-shadow-2xl m-2 p-2 flex flex-col">
                                <img class="w-full rounded-2xl h-48 object-cover"
                                    src="{{ asset('storage/' . $value->images) }}" alt="">

                                <div class="flex gap-2 mt-2 items-center">
                                    <h3 class="mt-2 font-medium text-red-500 line-through">{{ $value->price }} </h3>
                                    <span class="bg-black text-white w-fit text-sm font-medium p-1">10% off</span>
                                </div>

                                @php $finalPrice = ($value->price - $value->price / 10); @endphp
                                <h3 class="mt-1 font-bold text-xl text-green-500 ">₹{{ $finalPrice }}</h3>
                                <h1 class="font-medium text-lg">{{ $value->name }}</h1>
                                <p class="mb-2">{{ $value->description }}</p>
                                <div class="flex gap-2 w-full justify-evenly mt-auto">
                                    <a class="w-1/2" href="{{ url('/product') }}/{{ $value->id }}"><button
                                            class="bg-slate-400 rounded-xl w-full p-1 font-medium text-black">View
                                            Full</button></a>
                                    <a class="w-1/2"
                                        href="{{ route('cart.add', ['productId' => $value->id, 'userId' => Auth::id()]) }}"><button
                                            class="bg-black w-full rounded-lg p-1 font-medium text-white">Add To
                                            Cart</button></a>
                                </div>
                            </div>
                            @php  $count++;  @endphp
                            {{-- @endif --}}
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
                                <div class="bg-slate-100 rounded-2xl drop-shadow-2xl m-2 p-2 flex flex-col">
                                    <img class="w-full rounded-2xl h-48 object-cover"
                                        src="{{ asset('storage/' . $value->images) }}" alt="">



                                    <div class="flex gap-2 mt-2 items-center">
                                        <h3 class="mt-2 font-medium text-red-500 line-through">{{ $value->price }} </h3>
                                        <span class="bg-black text-white w-fit text-sm font-medium p-1">10% off</span>
                                    </div>

                                    @php $finalPrice = ($value->price - $value->price / 10); @endphp
                                    <h3 class="mt-1 font-bold text-xl text-green-500 ">₹{{ $finalPrice }}</h3>
                                    {{-- <p>{{ $value->cat_id }}</p> --}}
                                    <p class="mb-2">{{ $value->description }}</p>
                                    <div class="flex gap-2 w-full justify-evenly mt-auto">
                                        <a class="w-1/2" href="{{ url('/product') }}/{{ $value->id }}"><button
                                                class="bg-slate-400 rounded-xl w-full p-1 font-medium text-black">View
                                                Full</button></a>
                                        <a class="w-1/2"
                                            href="{{ route('cart.add', ['productId' => $value->id, 'userId' => Auth::id()]) }}"><button
                                                class="bg-black w-full rounded-lg p-1 font-medium text-white">Add To
                                                Cart</button></a>

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
                <h1 class="font-semibold text-black mb-5  text-3xl">Foods</h1>
                <div class="grid grid-cols-5 gap-4 mb-20">
                    @php $count=0; @endphp
                    @foreach ($products as $value)
                        @if ($value->cat_id == 3)
                            @if ($count < 5)
                                <div class="bg-slate-100 rounded-2xl drop-shadow-2xl m-2 p-2 flex flex-col">
                                    <img class="w-full rounded-2xl h-48 object-cover"
                                        src="{{ asset('storage/' . $value->images) }}" alt="">


                                    <div class="flex gap-2 mt-2 items-center">
                                        <h3 class="mt-2 font-medium text-red-500 line-through">{{ $value->price }} </h3>
                                        <span class="bg-black text-white w-fit text-sm font-medium p-1">10% off</span>
                                    </div>

                                    @php $finalPrice = ($value->price - $value->price / 10); @endphp
                                    <h3 class="mt-1 font-bold text-xl text-green-500 ">₹{{ $finalPrice }}</h3>
                                    {{-- <p>{{ $value->cat_id }}</p> --}}
                                    <p class="mb-2">{{ $value->description }}</p>
                                    <div class="flex gap-2 w-full justify-evenly mt-auto">
                                        <a class="w-1/2" href="{{ url('/product') }}/{{ $value->id }}"><button
                                                class="bg-slate-400 rounded-xl w-full p-1 font-medium text-black">View
                                                Full</button></a>
                                        <a class="w-1/2"
                                            href="{{ route('cart.add', ['productId' => $value->id, 'userId' => Auth::id()]) }}"><button
                                                class="bg-black w-full rounded-lg p-1 font-medium text-white">Add To
                                                Cart</button></a>

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
                <h1 class="font-semibold text-black mb-5  text-3xl">Mobile</h1>
                <div class="grid grid-cols-5 gap-4 mb-20">
                    @php $count=0; @endphp
                    @foreach ($products as $value)
                        @if ($value->cat_id == 4)
                            @if ($count < 5)
                                <div class="bg-slate-100 rounded-2xl drop-shadow-2xl m-2 p-2 flex flex-col">
                                    <img class="w-full rounded-2xl h-48 object-cover"
                                        src="{{ asset('storage/' . $value->images) }}" alt="">


                                    <div class="flex gap-2 mt-2 items-center">
                                        <h3 class="mt-2 font-medium text-red-500 line-through">{{ $value->price }} </h3>
                                        <span class="bg-black text-white w-fit text-sm font-medium p-1">10% off</span>
                                    </div>

                                    @php $finalPrice = ($value->price - $value->price / 10); @endphp
                                    <h3 class="mt-1 font-bold text-xl text-green-500 ">₹{{ $finalPrice }}</h3>
                                    {{-- <p>{{ $value->cat_id }}</p> --}}
                                    <p class="mb-2">{{ $value->description }}</p>
                                    <div class="flex gap-2 w-full justify-evenly mt-auto">
                                        <a class="w-1/2" href="{{ url('/product') }}/{{ $value->id }}"><button
                                                class="bg-slate-400 rounded-xl w-full p-1 font-medium text-black">View
                                                Full</button></a>
                                        <a class="w-1/2"
                                            href="{{ route('cart.add', ['productId' => $value->id, 'userId' => Auth::id()]) }}"><button
                                                class="bg-black w-full rounded-lg p-1 font-medium text-white">Add To
                                                Cart</button></a>

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
                                <div class="bg-slate-100 rounded-2xl drop-shadow-2xl m-2 p-2 flex flex-col">
                                    <img class="w-full rounded-2xl h-48 object-cover"
                                        src="{{ asset('storage/' . $value->images) }}" alt="">


                                    <div class="flex gap-2 mt-2 items-center">
                                        <h3 class="mt-2 font-medium text-red-500 line-through">{{ $value->price }} </h3>
                                        <span class="bg-black text-white w-fit text-sm font-medium p-1">10% off</span>
                                    </div>

                                    @php $finalPrice = ($value->price - $value->price / 10); @endphp
                                    <h3 class="mt-1 font-bold text-xl text-green-500 ">₹{{ $finalPrice }}</h3>
                                    {{-- <p>{{ $value->cat_id }}</p> --}}
                                    <p class="mb-2">{{ $value->description }}</p>
                                    <div class="flex gap-2 w-full justify-evenly mt-auto">
                                        <a class="w-1/2" href="{{ url('/product') }}/{{ $value->id }}"><button
                                                class="bg-slate-400 rounded-xl w-full p-1 font-medium text-black">View
                                                Full</button></a>
                                        <a class="w-1/2"
                                            href="{{ route('cart.add', ['productId' => $value->id, 'userId' => Auth::id()]) }}"><button
                                                class="bg-black w-full rounded-lg p-1 font-medium text-white">Add To
                                                Cart</button></a>

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
                                <div class="bg-slate-100 rounded-2xl drop-shadow-2xl m-2 p-2 flex flex-col">
                                    <img class="w-full rounded-2xl h-48 object-cover"
                                        src="{{ asset('storage/' . $value->images) }}" alt="">


                                    <div class="flex gap-2 mt-2 items-center">
                                        <h3 class="mt-2 font-medium text-red-500 line-through">{{ $value->price }} </h3>
                                        <span class="bg-black text-white w-fit text-sm font-medium p-1">10% off</span>
                                    </div>

                                    @php $finalPrice = ($value->price - $value->price / 10); @endphp
                                    <h3 class="mt-1 font-bold text-xl text-green-500 ">₹{{ $finalPrice }}</h3>
                                    {{-- <p>{{ $value->cat_id }}</p> --}}
                                    <p class="mb-2">{{ $value->description }}</p>
                                    <div class="flex gap-2 w-full justify-evenly mt-auto">
                                        <a class="w-1/2" href="{{ url('/product') }}/{{ $value->id }}"><button
                                                class="bg-slate-400 rounded-xl w-full p-1 font-medium text-black">View
                                                Full</button></a>
                                        <a class="w-1/2"
                                            href="{{ route('cart.add', ['productId' => $value->id, 'userId' => Auth::id()]) }}"><button
                                                class="bg-black w-full rounded-lg p-1 font-medium text-white">Add To
                                                Cart</button></a>

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
