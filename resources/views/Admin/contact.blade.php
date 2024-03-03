@extends('Admin.admin')

@push('title')
    <title>Contact</title>
@endpush

@section('main-section')
    {{-- <h1>Admin Contact page</h1> --}}

    <table class="bg-white p-2 m-2 w-full rounded-2xl">

        <thead class="rounded-2xl text-black">

            <tr>
                <th class="p-3 m-2 border-black">Contact ID</th>
                <th class="p-3 m-2 border-black">Name</th>
                <th class="p-3 m-2 border-black">Email</th>
                <th class="p-3 m-2 border-black">Purpose</th>
                <th class="p-3 m-2 border-black">Message</th>
                <th class="p-3 m-2 border-black">User Id</th>
                <th class="p-3 m-2 border-black">Created At</th>
                <th class="p-3 m-2 border-black">Actions</th>

            </tr>
        </thead>
        <tbody>

            @foreach ($contacts as $value)
                <tr class="text-center">
                    <td class="font-medium p-3 m-2 border-black">{{ $value->id }}</td>
                    <td class="p-3 m-2 border-black">{{ $value->name }}</td>
                    <td class="p-3 m-2 border-black">{{ $value->email }}</td>
                    <td class="p-3 m-2 border-black">{{ $value->purpose }}</td>
                    <td class="p-3 m-2 border-black">{{ $value->message }}</td>
                    <td class="p-3 m-2 border-black">{{ $value->user_id }}</td>
                    {{-- <td class="border p-2 m-2 border-black">{{ get_formatted_date( $value->created_at, 'd-M-Y') }}</td> --}}

                    <td class="p-3 m-2 border-black">{{ $value->created_at }}</td>

                    <td class="p-3 m-2 border-black">
                        <a href="{{ route('contactDelete', ['id' => $value->id]) }}">

                            <button class="bg-red-500 rounded-lg text-white font-bold p-2">Delete</button>


                        </a>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
