@extends('Admin.admin')

@push('title')
    <title>Orders Items</title>
@endpush

@section('main-section')
    {{-- <h1>Admin Order page</h1> --}}

    <table class="bg-white p-2 m-2 w-full rounded-2xl">
        <thead class="rounded-2xl text-black">
            <tr>
                <th class=" p-3 m-2 border-black">Order ID</th>
                <th class=" p-3 m-2 border-black">Order ID</th>
                <th class=" p-3 m-2 border-black">Product Id</th>
                <th class=" p-3 m-2 border-black">Quantity</th>
                <th class=" p-3 m-2 border-black">Price</th>
                <th class=" p-3 m-2 border-black">Created At</th>
                <th class=" p-3 m-2 border-black">Actions</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($ordersItems as $value)
                <tr class="text-center">
                    <td class=" font-medium p-3 m-2 border-black">{{ $value->id }}</td>
                    <td class=" p-3 m-2 border-black">{{ $value->order_id }}</td>
                    <td class=" p-3 m-2 border-black">{{ $value->product_id }}</td>
                    <td class=" p-3 m-2 border-black">{{ $value->quantity }}</td>
                    <td class=" p-3 m-2 border-black">{{ $value->price }}</td>
                    <td class=" p-3 m-2 border-black">{{ $value->created_at }}</td>
                    <th>
                        <button class="bg-blue-500 rounded-lg text-white font-bold p-2">Edit</button>
                        <a href="{{ route('deleteProduct', ['id' => $value->id]) }}">
                            <button class="bg-red-500 rounded-lg text-white font-bold p-2">Delete</button>
                        </a>
                    </th>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
