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

<body>
    <div class="flex h-screen">

        <!-- Sidebar -->
        <div class="sidebar border rounded-2xl m-2 bg-black text-white">
            <div class="p-4">
                <h1 class="text-xl font-bold">Laravel Kart Admin</h1>
                <ul class="mt-4">
                    {{-- <li><a href="{{url('/admin')}}" class="block py-2 px-4 hover:bg-gray-700">Admin</a></li> --}}
                    <li><a href="{{ url('/admin') }}" class="block py-2 px-4 hover:bg-gray-700 rounded-lg">Home</a>
                    </li>
                    <li><a href="{{ url('/admin/product') }}"
                            class="block py-2 px-4 hover:bg-gray-700 rounded-lg">Product</a></li>
                    <li><a href="{{ url('/admin/createProductView') }}"
                            class="block py-2 px-4 hover:bg-gray-700 rounded-lg">Create
                            Products</a></li>
                    <li><a href="{{ url('/admin/contact') }}"
                            class="block py-2 px-4 hover:bg-gray-700 rounded-lg">Contact</a></li>
                    <li><a href="{{ url('/admin/users') }}"
                            class="block py-2 px-4 hover:bg-gray-700 rounded-lg">Users</a></li>
                    <li><a href="{{ url('/admin/order') }}"
                            class="block py-2 px-4 hover:bg-gray-700 rounded-lg">Orders</a></li>
                    <li><a href="{{ url('/admin/ordersItem') }}"
                            class="block py-2 px-4 hover:bg-gray-700 rounded-lg">Orders Items</a></li>
                    <li><a href="{{ url('/admin/carts') }}"
                            class="block py-2 px-4 hover:bg-gray-700 rounded-lg">Carts</a></li>

                    <li><a href="{{ url('/admin/logout') }}"
                            class="block py-2 px-4 hover:bg-gray-700 rounded-lg font-medium">Admin Logout</a></li>

                    <li><a href="{{ url('/') }}"
                            class="block py-2 px-4 mt-auto hover:bg-gray-700 font-medium rounded-lg">Navigate To
                            Home</a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Main Content -->
        <div class="rounded-2xl bg-gray-200 m-2 flex items-start w-full">
            @yield('main-section')
        </div>

    </div>
</body>

</html>
