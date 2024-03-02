@extends('Admin.admin')

@push('title')
    <title>Admin Home</title>
@endpush

@section('main-section')
    {{-- <h1>Admin Home page</h1> --}}

    {{-- <table class="bg-slate-200 w-full">
        <thead class="bg-green-500 rounded-2xl text-white">
            <tr>
                <th class="border p-2 m-2 border-black">Contact ID</th>
                <th class="border p-2 m-2 border-black">Name</th>
                <th class="border p-2 m-2 border-black">Email</th>
                <th class="border p-2 m-2 border-black">Purpose</th>
                <th class="border p-2 m-2 border-black">Message</th>
                <th class="border p-2 m-2 border-black">User Id</th>
                <th class="border p-2 m-2 border-black">Created At</th>
                <th class="border p-3 m-2 border-black">Actions</th>

            </tr>
        </thead>
        <tbody>

            @foreach ($contacts as $value)
                <tr>
                    <td class="border font-medium p-2 m-2 border-black">{{ $value->id }}</td>
                    <td class="border p-2 m-2 border-black">{{ $value->name }}</td>
                    <td class="border p-2 m-2 border-black">{{ $value->email }}</td>
                    <td class="border p-2 m-2 border-black">{{ $value->purpose }}</td>
                    <td class="border p-2 m-2 border-black">{{ $value->message }}</td>
                    <td class="border p-2 m-2 border-black">{{ $value->user_id }}</td>
                    <td class="border p-2 m-2 border-black">{{ $value->created_at }}</td>
                    <td class="border p-2 m-2 border-black">
                        <button class="bg-red-500 rounded-lg text-white font-bold p-2">Delete</button>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table> --}}

    <div class="flex">

        <div class="bg-blue-500 m-2 text-center text-white font-bold text-2xl rounded-xl p-20 w-1/4">
            @php
                $totalCount = count($products);
            @endphp

            Total count of Products: {{ $totalCount }}

        </div>

        <div class="bg-red-500 m-2 text-center text-white font-bold text-2xl rounded-xl p-20 w-1/4">
            @php
                $totalCount = count($orders);
            @endphp

            Total count of orders: {{ $totalCount }}
        </div>

        <div class="bg-green-500 m-2 text-center text-white font-bold text-2xl rounded-xl p-20 w-1/4">
            @php
                $totalCount = count($carts);
            @endphp

            Total count of Carts: {{ $totalCount }}
        </div>

        <div class="bg-yellow-500 m-2 text-center text-white font-bold text-2xl rounded-xl p-20 w-1/4">
            @php
                $totalCount = count($users);
            @endphp

            Total count of Users: {{ $totalCount }}
        </div>

    </div>
@endsection
