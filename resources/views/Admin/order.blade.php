@extends('Admin.admin')

@push('title')
    <title>Orders</title>
@endpush

@section('main-section')
    {{-- <h1>Admin Order page</h1> --}}

    <table class="bg-white p-2 m-2 w-full rounded-2xl">
        <thead class="rounded-2xl text-black">
            <tr>
                <th class=" p-3 m-2 border-black">Order ID</th>
                <th class=" p-3 m-2 border-black">Total Amount</th>
                <th class=" p-3 m-2 border-black">Order Status</th>
                <th class=" p-3 m-2 border-black">Payment Status</th>
                <th class=" p-3 m-2 border-black">Address Id</th>
                <th class=" p-3 m-2 border-black">User Id</th>
                <th class=" p-3 m-2 border-black">Created At</th>
                <th class=" p-3 m-2 border-black">Actions</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($orders as $value)
                <tr class="text-center">
                    <td class=" font-medium p-3 m-2 border-black">{{ $value->id }}</td>
                    <td class=" p-3 m-2 border-black">{{ $value->total_amount }}</td>
                    <td class=" p-3 m-2 border-black">{{ $value->order_status }}</td>
                    <td class=" p-3 m-2 border-black">{{ $value->payment_status }}</td>
                    <td class=" p-3 m-2 border-black">{{ $value->address_id }}</td>
                    <td class=" p-3 m-2 border-black">{{ $value->user_id }}</td>
                    <td class=" p-3 m-2 border-black">{{ $value->created_at }}</td>
                    <th>
                        <button class="bg-blue-500 rounded-lg text-white font-bold p-2">Edit</button>
                        <a href="{{ route('deleteOrders', ['id' => $value->id]) }}">
                            <button class="bg-red-500 rounded-lg text-white font-bold p-2">Delete</button>
                        </a>
                    </th>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
