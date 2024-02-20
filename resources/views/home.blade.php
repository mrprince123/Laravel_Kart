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
                src="https://cdn.pixabay.com/photo/2019/12/16/20/25/shopping-4700185_960_720.jpg"
                alt="">
        </div>

        <div class="w-2/3 m-auto">
            <h1 class="font-semibold text-black mb-10 text-center text-4xl">Our new Products collection</h1>
            <div class="grid grid-cols-3 gap-4 mb-20">
                @php $count=0; @endphp
                @foreach ($products as $value)
                    @if ($count < 3)
                        <div class="bg-slate-100 m-2 p-2 flex flex-col">
                            <img class="w-full h-2/3 object-cover" src="{{ $value->image }}" alt="">
                            <h3 class="mt-2 font-medium">{{ $value->price }} <span
                                    class="bg-black text-white text-sm font-medium p-1">10% off</span></h3>
                            <h1>{{ $value->name }}</h1>
                            <p>{{ $value->description }}</p>
                            <div class="flex gap-2 w-full mt-auto">
                                <a href="{{ url('/product') }}/{{ $value->product_id }}"><button
                                        class="bg-slate-400 p-1 font-medium text-black">View Full</button></a>
                                {{-- <a href=""><button class="bg-black p-1 font-medium text-white">Add To Cart</button></a> --}}
            <a href="{{route('cart.add', ['productId'=>$value->product_id, 'userId' => Auth::id()]) }}"><button class="bg-black p-1 font-medium text-white">Add To Cart</button></a>
                            
                            </div>
                        </div>
                        @php  $count++;  @endphp
                    @endif
                @endforeach
            </div>
        </div>


        {{-- <div class="bg-slate-100 p-10">
            <div class="w-2/3 m-auto flex items-center">
                <img class="w-1/2 m-2"
                    src="https://res.cloudinary.com/sniperdocs/image/upload/v1708193203/Untitled_design_2_qn0jzd.png"
                    alt="">
                <div class="w-1/2 m-2">
                    <h3 class="font-semibold text-blue-500 text-3xl mb-10">We have course from Youtube, udemy, udacity and
                        skill share and many more.</h3>
                    <ul class="mt-5">
                        <li class="font-medium m-4">We have best course from youtube free and premium which can help you in
                            your career.</li>
                        <li class="font-medium m-4">We also have course from the udemy free and paid one full master class
                            with best instructor.</li>
                        <li class="font-medium m-4">Dive full in the nanodegree and full master class in a week or months on
                            these courses.</li>
                        <li class="font-medium m-4">Come and learn without wasting any time on find and seaching best course
                            for you.</li>
                    </ul>
                    <p class="font-medium m-1">Learning <span class="text-blue-500 font-medium">Pro</span> is just a middle
                        platform for your convience which will help you in find best and free courses for your career.</p>
                </div>
            </div>

        </div> --}}


    </div>
@endsection
