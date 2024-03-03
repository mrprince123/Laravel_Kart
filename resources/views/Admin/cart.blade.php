@extends('Admin.admin')

@push('title')
    <title>Users</title>
@endpush

@section('main-section')
    {{-- <h1>Admin Users page</h1> --}}

    <table class="bg-white p-2 m-2 w-full rounded-2xl">
        <thead class=" rounded-2xl text-black">
            <tr>
                <th class=" p-2 m-2 border-black">Cart ID</th>
                <th class=" p-2 m-2 border-black">User ID</th>
                <th class=" p-2 m-2 border-black">Product ID</th>
                <th class=" p-2 m-2 border-black">Quantity</th>
                <th class=" p-2 m-2 border-black">Created At</th>
                <th class=" p-3 m-2 border-black">Actions</th>

            </tr>
        </thead>
        <tbody>

            @foreach ($carts as $value)
                <tr class="text-center">
                    <td class="p-3 m-2 border-black">{{ $value->id }}</td>
                    <td class="p-3 m-2 border-black">{{ $value->user_id }}</td>
                    <td class="p-3 m-2 border-black">{{ $value->product_id }}</td>

                    @if ($value->quantity === NULL)
                    <td class="p-3 m-2 border-black">NULL</td>
                    @endif

                    {{-- <td class="border p-2 m-2 border-black">{{ $value->quantity }}</td> --}}
                    <td class="p-3 m-2 border-black">{{ $value->created_at }}</td>

                    <td class="p-3 m-2 border-black">
                        <button class="bg-red-500 rounded-lg text-white font-bold p-2">Delete</button>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
