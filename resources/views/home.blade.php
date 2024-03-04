@extends('Layout.main')

@push('title')
    <title>Home</title>
@endpush

@section('main-section')
    <div>


        <div class="w-4/5 m-auto">

            <div id="default-carousel" class="relative w-full mt-10 mb-10" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                    <!-- Item 1 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="https://res.cloudinary.com/sniperdocs/image/upload/v1709573956/BEST_Toy_store_for_your_kid_yi70cm.png"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 3 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="https://images.unsplash.com/photo-1622520091645-dd18afac7fdb?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 4 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="https://images.unsplash.com/photo-1600106526538-d5b27e95438c?q=80&w=2128&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 5 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="https://images.unsplash.com/photo-1577193647731-2e0c1d04a565?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                </div>
                <!-- Slider indicators -->
                <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                        data-carousel-slide-to="0"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                        data-carousel-slide-to="1"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                        data-carousel-slide-to="2"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                        data-carousel-slide-to="3"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                        data-carousel-slide-to="4"></button>
                </div>
                <!-- Slider controls -->
                <button type="button"
                    class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-prev>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 1 1 5l4 4" />
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button"
                    class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-next>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>

        </div>

        {{-- Showing all the Category Products  --}}
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
                                <div class="bg-slate-100 rounded-2xl drop-shadow-2xl m-2 p-2 flex flex-col">
                                    <img class="w-full rounded-2xl h-48 object-cover"
                                        src="{{ asset('storage/' . $value->images) }}" alt="">
                                    <h3 class="mt-2 font-medium">{{ $value->price }} <span
                                            class="bg-black text-white text-sm font-medium p-1">10% off</span></h3>
                                    <h1 class="font-medium text-lg">{{ $value->name }}</h1>
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
                                    <h3 class="mt-2 font-medium">{{ $value->price }} <span
                                            class="bg-black text-white text-sm font-medium p-1">10% off</span></h3>
                                    <h1 class="font-medium text-lg">{{ $value->name }}</h1>
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
                                    <h3 class="mt-2 font-medium">{{ $value->price }} <span
                                            class="bg-black text-white text-sm font-medium p-1">10% off</span></h3>
                                    <h1 class="font-medium text-lg">{{ $value->name }}</h1>
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
                                    <h3 class="mt-2 font-medium">{{ $value->price }} <span
                                            class="bg-black text-white text-sm font-medium p-1">10% off</span></h3>
                                    <h1 class="font-medium text-lg">{{ $value->name }}</h1>
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
                                    <h3 class="mt-2 font-medium">{{ $value->price }} <span
                                            class="bg-black text-white text-sm font-medium p-1">10% off</span></h3>
                                    <h1 class="font-medium text-lg">{{ $value->name }}</h1>
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
                                    <h3 class="mt-2 font-medium">{{ $value->price }} <span
                                            class="bg-black text-white text-sm font-medium p-1">10% off</span></h3>
                                    <h1 class="font-medium text-lg">{{ $value->name }}</h1>
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
