@extends('Admin.admin')

@push('title')
    <title>Product Create</title>
@endpush

@section('main-section')
    {{-- <h1>Admin Product Create Page</h1> --}}

    <div class="w-full rounded-lg m-auto mt-20 bg-blue-300">
        <h1 class="text-2xl font-medium text-center">Create Product</h1>
        <form action="{{ url('/') }}/admin/createProduct" enctype="multipart/form-data" method="post"
            class="flex flex-col p-2 gap-2">
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
            <input class="p-3" type="file" multiple name="images" placeholder="Product Image Url"
                value={{ old('images') }}>
            @error('images')
                <label class="text-red-500">{{ $message }}</label>
            @enderror
            <select class="p-3" name="category">
                <option value="1">Electronic</option>
                <option value="2">Clothes</option>
                <option value="3">Food</option>
                <option value="4">Mobile</option>
                <option value="5">Stationary</option>
                <option value="6">Others</option>
            </select>
            @error('category')
                <label class="text-red-500">{{ $message }}</label>
            @enderror
            <input type="submit" class="bg-black p-2 text-white font-medium" value="Create Product">
        </form>
    </div>
@endsection
