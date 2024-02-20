@extends('Admin.admin')

@push('title')
    <title>Orders</title>
@endpush

@section('main-section')
    {{-- <h1>Admin Order page</h1> --}}

    <table class="bg-blue-200 m-4">
        <thead>
            <tr>
                <th class="border p-2 m-2 border-black">Order ID</th>
                <th class="border p-2 m-2 border-black">Total Amount</th>
                <th class="border p-2 m-2 border-black">Status</th>
                <th class="border p-2 m-2 border-black">Payment Status</th>
                <th class="border p-2 m-2 border-black">User Id</th>
                <th class="border p-2 m-2 border-black">Created At</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($orders as $value)
                <tr>
                    <td class="border p-2 m-2 border-black" >{{ $value->order_id }}</td>
                    <td class="border p-2 m-2 border-black" >{{ $value->total_amount }}</td>
                    <td class="border p-2 m-2 border-black" >{{ $value->status }}</td>
                    <td class="border p-2 m-2 border-black" >{{ $value->payment_status }}</td>
                    <td class="border p-2 m-2 border-black" >{{ $value->user_id }}</td>
                    <td class="border p-2 m-2 border-black" >{{ $value->created_at }}</td>
                </tr>
            @endforeach

        </tbody>
    </table>

@endsection

