@extends('Admin.admin')

@push('title')
    <title>Product</title>
@endpush

@section('main-section')
    {{-- <h1>Admin Product page</h1> --}}

    <table class="bg-blue-200 m-4">
        <thead>
            <tr>
                <th class="border p-2 m-2 border-black">Product ID</th>
                <th class="border p-2 m-2 border-black">Name</th>
                <th class="border p-2 m-2 border-black">Description</th>
                <th class="border p-2 m-2 border-black">Price</th>
                <th class="border p-2 m-2 border-black">Image</th>
                <th class="border p-2 m-2 border-black">Created at</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($products as $value)
                <tr>
                    <td class="border p-2 m-2 border-black">{{ $value->product_id }}</td>
                    <td class="border p-2 m-2 border-black">{{ $value->name }}</td>
                    <td class="border p-2 m-2 border-black">{{ $value->description }}</td>
                    <td class="border p-2 m-2 border-black">{{ $value->price }}</td>
                    <td class="border p-2 m-2 border-black">{{ $value->image }}</td>
                    <td class="border p-2 m-2 border-black">{{ $value->created_at }}</td>
                </tr>
            @endforeach

        </tbody>
    </table>


@endsection
