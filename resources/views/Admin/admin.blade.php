<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Adjust this width as needed */
        .sidebar {
            width: 250px;
        }
    </style>
    @stack('title')
</head>

<body class="bg-gray-100">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <div class="sidebar bg-black text-white">
            <div class="p-4">
                <h1 class="text-xl font-bold">E-Commerce Admin</h1>
                <ul class="mt-4">
                    {{-- <li><a href="{{url('/admin')}}" class="block py-2 px-4 hover:bg-gray-700">Admin</a></li> --}}
                    <li><a href="{{ url('/admin/product') }}" class="block py-2 px-4 hover:bg-gray-700">Product</a></li>
                    <li><a href="{{ url('/admin/createProductView') }}" class="block py-2 px-4 hover:bg-gray-700">Create
                            Products</a></li>
                    <li><a href="{{ url('/admin/contact') }}" class="block py-2 px-4 hover:bg-gray-700">Contact</a></li>
                    <li><a href="{{ url('/admin/users') }}" class="block py-2 px-4 hover:bg-gray-700">Users</a></li>
                    <li><a href="{{ url('/admin/order') }}" class="block py-2 px-4 hover:bg-gray-700">Orders</a></li>
                    <li><a href="{{ url('/admin/carts') }}" class="block py-2 px-4 hover:bg-gray-700">Carts</a></li>

                    <li><a href="{{ url('/') }}" class="block py-2 px-4 hover:bg-gray-700 font-medium">Navigate To
                            Home</a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Main Content -->
        <div class="w-full">
            @yield('main-section')
        </div>


    </div>
</body>

</html>
