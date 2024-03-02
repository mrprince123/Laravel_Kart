@extends('Admin.admin')

@push('title')
    <title>Product</title>
@endpush

@section('main-section')
    {{-- <h1>Admin Product page</h1> --}}

    <table class="bg-slate-200 w-full rounded-2xl">
        <thead class="bg-green-500 rounded-2xl text-white">
            <tr>
                <th class="border p-3 m-2 border-black">Product ID</th>
                <th class="border p-3 m-2 border-black">Name</th>
                <th class="border p-3 m-2 border-black">Description</th>
                <th class="border p-3 m-2 border-black">Price</th>
                <th class="border p-3 m-2 border-black">Image</th>
                <th class="border p-3 m-2 border-black">Category</th>
                <th class="border p-3 m-2 border-black">Created at</th>
                <th class="border p-3 m-2 border-black">Actions</th>
            </tr>
        </thead>
        <tbody class="bg-slate-200">
            @foreach ($products as $value)
                <tr>
                    <td class="border p-2 m-2 font-medium border-black">{{ $value->id }}</td>
                    <td class="border p-2 m-2 font-medium border-black">{{ $value->name }}</td>
                    <td class="border p-2 m-2 border-black">{{ $value->description }}</td>
                    <td class="border p-2 m-2 border-black">{{ $value->price }}</td>
                    <td class="border p-2 m-2 border-black">{{ $value->images }}</td>
                    @switch($value->cat_id)
                        @case(1)
                            <td class="border p-2 m-2 border-black">Electronic</td>
                        @break

                        @case(2)
                            <td class="border p-2 m-2 border-black">Clothes</td>
                        @break

                        @case(3)
                            <td class="border p-2 m-2 border-black">Food</td>
                        @break

                        @case(4)
                            <td class="border p-2 m-2 border-black">Mobile</td>
                        @break

                        @case(5)
                            <td class="border p-2 m-2 border-black">Stationary</td>
                        @break

                        @case(6)
                            <td class="border p-2 m-2 border-black">Others</td>
                        @break

                        @default
                    @endswitch
                    <td class="border p-2 m-2 border-black">{{ $value->created_at }}</td>
                    <td class="border p-2 m-2 border-black">
                        <button class="bg-blue-500 rounded-lg text-white font-bold p-2">Edit</button>
                        <button class="bg-red-500 rounded-lg text-white font-bold p-2">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
