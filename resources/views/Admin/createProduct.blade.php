@extends('Admin.admin')

@push('title')
    <title>Product Create</title>
@endpush

@section('main-section')
    {{-- <h1>Admin Product Create Page</h1> --}}

    <div class="w-1/2 rounded-lg m-auto mt-20 bg-white">
        <h1 class="text-2xl font-medium text-center mb-2 mt-5">Create New Product</h1>
        <p class="text-xl font-normal text-gray-500 mt-2 mb-5 text-center">Add New Products to Your Inventory</p>
        <form action="{{ url('/') }}/admin/createProduct" enctype="multipart/form-data" method="post"
            class="flex flex-col p-2 gap-2">
            @csrf
            <label for="name" class="font-medium text-gray-500 text-lg mt-2">Product Name</label>
            <input class="p-3 border border-slate-300" type="text" name="name" placeholder="Product Name"
                value={{ old('name') }}>
            @error('name')
                <label class="text-red-500">{{ $message }}</label>
            @enderror
            <label for="name" class="font-medium text-gray-500 text-lg mt-2">Product Description</label>
            <textarea rows="5" class="p-3 border border-slate-300" type="text" name="description"
                placeholder="Product Description" value={{ old('description') }}></textarea>
            @error('description')
                <label class="text-red-500">{{ $message }}</label>
            @enderror
            <label for="name" class="font-medium text-gray-500 text-lg mt-2">Product Price</label>
            <input class="p-3 border border-slate-300" type="number" name="price" placeholder="Product Price"
                value={{ old('price') }}>
            @error('price')
                <label class="text-red-500">{{ $message }}</label>
            @enderror
            <label for="name" class="font-medium text-gray-500 text-lg mt-2">Product Image</label>
            <input class="p-3 border border-slate-300" type="file" multiple name="images"
                placeholder="Product Image Url" value={{ old('images') }}>
            @error('images')
                <label class="text-red-500">{{ $message }}</label>
            @enderror
            <label for="name" class="font-medium text-gray-500 text-lg mt-2">Product Category</label>
            <select class="p-3 border border-slate-300" name="category">
                <option value="">Select Category</option>
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
            <div class="flex justify-center">
                <input type="submit" class="bg-blue-500 m-2 p-2 text-white font-medium" value="Create Product">
                <input type="reset" class="bg-gray-600  m-2 p-2 text-white font-medium" value="Reset Product">
            </div>


        </form>
    </div>
@endsection
