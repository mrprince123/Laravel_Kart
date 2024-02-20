@extends('Admin.admin')

@push('title')
    <title>Users</title>
@endpush

@section('main-section')
    {{-- <h1>Admin Users page</h1> --}}

    <table  class="bg-blue-200 m-4">
        <thead>
            <tr>
                <th class="border p-2 m-2 border-black">User ID</th>
                <th class="border p-2 m-2 border-black">Name</th>
                <th class="border p-2 m-2 border-black">Email</th>
                <th class="border p-2 m-2 border-black">Password</th>
                <th class="border p-2 m-2 border-black">Created at</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($users as $value)
                <tr>
                    <td class="border p-2 m-2 border-black">{{ $value->id }}</td>
                    <td class="border p-2 m-2 border-black">{{ $value->name }}</td>
                    <td class="border p-2 m-2 border-black">{{ $value->email }}</td>
                    <td class="border p-2 m-2 border-black">{{ $value->password }}</td>
                    <td class="border p-2 m-2 border-black">{{ $value->created_at }}</td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
