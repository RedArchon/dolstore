<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="https://kit.fontawesome.com/04fe5eeb23.js" crossorigin="anonymous"></script>
    <title>DOL Store | Admin</title>
    @yield('head')
</head>

<body class="container mx-auto shadow-xl">

    <!-- Top Navbar Start -->
    <nav class="flex items-center justify-between rounded-t bg-gray-800 h-12 text-gray-100 p-4 sm:mt-4">
        <span class="inline-block align-middle"><i class="fas fa-store-alt"></i> DOL Store | Admin Panel</span>
        <div class="logout">
            <li class="flex mx-2 dropdown text-lg text-gray-100 font-thin">
                <div class="hover:underline mx-2">
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                        {{ __('Logout') }} <i class="fas fa-sign-out-alt mx-1"></i>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        </div>
    </nav>
    <main class="flex w-full">
        <!-- Top Navbar End -->

        <!-- Main Nav Start -->
        <aside class="bg-gray-400 w-1/4">
            <div>
                <a href="{{ route('admin.users') }}">
                    <div class="flex items-center h-10 text-gray-900 p-2 hover:bg-gray-200 hover:shadow-md @if(request()->getRequestUri() === "/admin/users")
                        bg-gray-200 shadow-md @endif" id="users-btn">
                        <i class="fas fa-users inline-block text-lg w-12"></i><span
                            class="ml-4 text-lg tracking-wider font-thin">Users</span></div>
                </a>
            </div>
            <div>
                <a href="{{ route('admin.products') }}">
                    <div class="flex items-center hover:bg-gray-200 hover:shadow-md h-10 text-gray-900 p-2 @if(request()->getRequestUri() === "/admin/products"  || request()->getRequestUri() === "/admin/categories")
                        bg-gray-200 shadow-md @endif" id="products-btn"><i
                            class="fas fa-tshirt inline-block text-lg w-12"></i><span
                            class="ml-4 text-lg tracking-wider font-thin">Products</span></div>
                </a>
                @if(request()->getRequestUri() === "/admin/products" || request()->getRequestUri() === "/admin/categories")
                <a href="{{ route('admin.categories') }}">
                    <div class="flex justify-center items-center bg-gray-300 h-8 text-gray-900 p-2 shift" id="products-btn"><i class="fas fa-tag inline-block text-lg w-12"></i><span
                            class="ml-4 text-lg tracking-wider font-thin">Categories</span></div>
                </a>
                @endif
            </div>
            <div>
                <a href="/admin/orders">
                    <div class="flex items-center hover:bg-gray-200 h-10 text-gray-900 p-2 hover:shadow-md @if(request()->getRequestUri() === "/admin/orders")
                        bg-gray-200 shadow-md @endif" id="orders-btn">
                        <i class="fas fa-list-alt inline-block w-12 text-lg"></i><span
                            class="ml-4 text-lg tracking-wider font-thin">Orders</span></div>
                </a>
            </div>
        </aside>
        <!-- Main Nav End -->

        <!-- Main Body Start -->
        @yield('content')
        <!-- Main Body End -->

    </main>
    <footer class="flex justify-center items-center bg-gray-800 h-20 rounded-b">
        <span class="text-xs text-gray-100">Designed and Coded with <span class="text-red-600">&#10084;</span> in
            Olympia, WA</span>
    </footer>
    <script src="{{ asset('js/app.js')}}"></script>
    @yield('foot')
</body>

</html>