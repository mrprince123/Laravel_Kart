@extends('Admin.admin')

@push('title')
    <title>Product Create</title>
@endpush

@section('main-section')
    {{-- <h1>Admin Product Create Page</h1> --}}

    <div class="w-2/3 m-auto mt-20 bg-blue-300">
        <h1 class="text-2xl font-medium text-center">Create Product</h1>
        <form action="{{ url('/') }}/admin/createProduct" method="post" class="flex flex-col p-2 gap-2">
            @csrf
            <input class="p-3" type="text" name="name" placeholder="Product Name" value={{ old('name') }}>
            @error('name')
                <label class="text-red-500">{{ $message }}</label>
            @enderror
            <input class="p-3" type="text" name="description" placeholder="Product Description"
                value={{ old('description') }}>
            @error('description')
                <label class="text-red-500">{{ $message }}</label>
            @enderror
            <input class="p-3" type="number" name="price" placeholder="Product Price" value={{ old('price') }}>
            @error('price')
                <label class="text-red-500">{{ $message }}</label>
            @enderror
            <input class="p-3" type="text" name="image" placeholder="Product Image Url" value={{ old('image') }}>
            @error('image')
                <label class="text-red-500">{{ $message }}</label>
            @enderror
            <input type="submit" class="bg-black p-2 text-white font-medium" value="Create Product">
        </form>
    </div>
@endsection
