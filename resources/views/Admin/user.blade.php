@extends('Admin.admin')

@push('title')
    <title>Users</title>
@endpush

@section('main-section')
    {{-- <h1>Admin Users page</h1> --}}

    <table class="bg-white p-2 m-2 w-full rounded-2xl">
        <thead class="rounded-2xl text-black">
            <tr>
                <th class=" p-3 m-2 border-black">User ID</th>
                <th class=" p-3 m-2 border-black">Name</th>
                <th class=" p-3 m-2 border-black">Email</th>
                <th class=" p-3 m-2 border-black">Password</th>
                <th class=" p-3 m-2 border-black">Created at</th>
                <th class=" p-3 m-2 border-black">Action</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($users as $value)
                <tr>
                    <td class=" font-medium p-3 m-2 border-black">{{ $value->id }}</td>
                    <td class=" p-3 m-2 border-black">{{ $value->name }}</td>
                    <td class=" p-3 m-2 border-black">{{ $value->email }}</td>
                    <td class=" p-3 m-2 border-black">{{ $value->password }}</td>
                    <td class=" p-3 m-2 border-black">{{ $value->created_at }}</td>
                    <td class=" p-3 m-2 border-black">
                        <a href=""><button class="bg-blue-500 rounded-lg text-white font-bold p-2">Edit</button></a>
                        <a href="{{ route('deleteUsers', ['id' => $value->id]) }}"><button
                                class="bg-red-500 rounded-lg text-white font-bold p-2">Delete</button></a>

                    </td>

                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
