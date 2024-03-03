@extends('Admin.admin')

@push('title')
    <title>Admin Home</title>
@endpush

@section('main-section')
    {{-- <h1>Admin Home page</h1> --}}

    <div class="flex flex-col w-full">

        <div class="m-2">
            <img class="rounded-xl h-96 w-full object-cover"
                src="https://ewm.swiss/application/files/8216/1597/9679/E-commerce_web_design_EWM_SA_Digital_Agency_Geneva.jpg"
                alt="">
        </div>

        <div class="flex">

            <div class="bg-blue-500 m-2 text-center text-white font-bold text-2xl rounded-xl p-20 w-1/4">
                @php
                    $totalCount = count($products);
                @endphp

                Products: {{ $totalCount }}

            </div>

            <div class="bg-red-500 m-2 text-center text-white font-bold text-2xl rounded-xl p-20 w-1/4">
                @php
                    $totalCount = count($orders);
                @endphp

                Orders: {{ $totalCount }}
            </div>

            <div class="bg-green-500 m-2 text-center text-white font-bold text-2xl rounded-xl p-20 w-1/4">
                @php
                    $totalCount = count($carts);
                @endphp

                Carts: {{ $totalCount }}
            </div>

            <div class="bg-yellow-500 m-2 text-center text-white font-bold text-2xl rounded-xl p-20 w-1/4">
                @php
                    $totalCount = count($users);
                @endphp

                Users: {{ $totalCount }}
            </div>

        </div>
    </div>
@endsection
