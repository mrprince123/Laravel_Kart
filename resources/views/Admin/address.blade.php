@extends('Admin.admin')

@push('title')
    <title>Address</title>
@endpush

@section('main-section')
    {{-- <h1>Admin Address page</h1> --}}

    <table class="bg-white p-2 m-2 w-full rounded-2xl">
        <thead class="rounded-2xl text-black">
            <tr>
                <th class=" p-3 m-2 border-black">Address ID</th>
                <th class=" p-3 m-2 border-black">Name</th>
                <th class=" p-3 m-2 border-black">Email</th>
                <th class=" p-3 m-2 border-black">Phone</th>
                <th class=" p-3 m-2 border-black">Address</th>
                <th class=" p-3 m-2 border-black">State</th>
                <th class=" p-3 m-2 border-black">Pincode</th>
                <th class=" p-3 m-2 border-black">User Id</th>
                <th class=" p-3 m-2 border-black">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($address as $value)
                <tr class="text-center">
                    <td class=" font-medium p-3 m-2 border-black">{{ $value->id }}</td>
                    <td class=" p-3 m-2 border-black">{{ $value->name }}</td>
                    <td class=" p-3 m-2 border-black">{{ $value->email }}</td>
                    <td class=" p-3 m-2 border-black">{{ $value->phone }}</td>
                    <td class=" p-3 m-2 border-black">{{ $value->address }}</td>
                    <td class=" p-3 m-2 border-black">{{ $value->state }}</td>
                    <td class=" p-3 m-2 border-black">{{ $value->pincode }}</td>
                    <td class=" p-3 m-2 border-black">{{ $value->user_id }}</td>
                    <td>
                        <button class="bg-blue-500 rounded-lg text-white font-bold p-2">Edit</button>
                        <a href="{{ route('deleteAddress', ['id' => $value->id]) }}">
                            <button class="bg-red-500 rounded-lg text-white font-bold p-2">Delete</button>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
