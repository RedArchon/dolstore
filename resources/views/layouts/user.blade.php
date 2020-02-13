<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/04fe5eeb23.js" crossorigin="anonymous"></script>
    <title>@yield('title', 'DOL Logo Store')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <style>
        .parallax {
            /* The image used */
            background-image: linear-gradient(rgba(43, 81, 98, 0.5),
            rgba(16, 33, 40, 0.5)),
            url("{{ asset('img/thomas-somme-8HGHPUdRo24-unsplash.jpg') }}");

            /* Set a specific height */
            height: 500px;

            /* Create the parallax scrolling effect */
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
    @yield('style')
</head>

<body>
    @yield('warning')

    <header class="gradient relative z-0">
        <div class="flex flex-col justify-between relative"
            <?= request()->getRequestUri() === "/" ? 'style="min-height:500px;"' : 'style="height:55px"'?>>
            <nav class="container mx-auto mb-8">
                <div class="flex justify-between items-center my-2">
                    <a href="/">
                        <div class="flex items-center"><span class="text-2xl text-gray-100 inline"></span><span
                                class="text-2xl text-gray-100 tracking-wider font-bold ml-2"> DOL</span> <span
                                class="text-2xl text-gray-100 tracking-tight font-thin ml-1">Logo Store</span></div>
                    </a>
                    <div class="flex">

                        <a class="text-lg text-gray-100 mx-2 font-thin hover:underline bounce" href=""><i
                                class="fas fa-shopping-cart"></i></a>
                        <a class="text-lg text-gray-100 mx-2 font-thin hover:underline" href="">Store</a>
                        <a class="text-lg text-gray-100 mx-2 font-thin hover:underline" href="">About</a>
                        <a class="text-lg text-gray-100 mx-2 font-thin hover:underline" href="">Contact</a>
                        <span class="mx-2 text-lg text-gray-100 mx-2 font-thin">|</span>

                        {{-- <a href="{{ route('login') }}"><button
                            class="text-xl text-gray-100 tracking-wider font-thin border-b-2 border-transparent hover:border-gray-100 ml-3">Login
                            <i class="fas fa-sign-in-alt"></i></button></a> --}}
                        <ul>
                            @guest
                            <div class="flex">
                                <li class="mx-2">
                                    <a class="text-lg text-gray-100 mx-2 font-thin hover:underline"
                                        href="{{ route('login') }}">{{ __('Login') }} <i
                                            class="fas fa-sign-in-alt"></i></a>
                                </li>
                                @if (Route::has('register'))
                                <li class="mx-2">
                                    <a class="text-lg text-gray-100 font-thin hover:underline"
                                        href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            </div>
                            @endif
                            @else
                            <li class="flex mx-2 dropdown text-lg text-gray-100 font-thin">
                                <a class="hover:underline mx-2" href="/home">
                                    {{ Auth::user()->name }} <i class="far fa-user mx-1"></i>
                                </a>

                                <div class="hover:underline mx-2" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }} <i class="fas fa-sign-out-alt mx-1"></i>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endguest
                        </ul>

                    </div>
                </div>
            </nav>
            @yield('hero')
        </div>
    </header>
    <div class="container mx-auto text-4xl font-thin text-gray-800 leading-tight mt-6">Dashboard</div>
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif
    <div>
        <div class="flex flex-col mt-2">
            <section class="bg-white py-4 font-sans">
                <div class="container m-auto flex items-baseline justify-start border-b-2 border-gray-300 mb-10">
                    <a href="{{ route('profile') }}">
                        <h2 class="text-base text-base font-bold tracking-wide uppercase border-b-2 hover:border-black @if(request()->getRequestUri() === "/profile")
                            border-black @endif py-4 px-6">
                            Profile</h2>
                    </a>
                    <a href="{{ route('home') }}">
                        <h2
                            class="text-gray-700 hover:text-base font-bold tracking-wide uppercase border-b-2 hover:border-black py-4 px-6 -mb-4">
                            Orders</h2>
                    </a>
                    <a href="{{ route('payment') }}">
                        <h2
                            class="text-gray-700 hover:text-base text-base font-bold tracking-wide uppercase border-b-2 hover:border-black py-4 px-6">
                            Payment</h2>
                    </a>
                    <a href="{{ route('subscriptions') }}">
                        <h2
                            class="text-gray-700 hover:text-base font-bold tracking-wide uppercase border-b-2 hover:border-black py-4 px-6">
                            Subscriptions</h2>
                    </a>
                </div>
            </section>
        </div>

        @yield('content')

        <footer class="w-full font-sans gradient text-white py-8 px-4">
            <div class="mx-auto container overflow-hidden flex flex-col lg:flex-row justify-between">
                <a href="/" class="block mr-4 w-1/2">
                    <span class="text-2xl text-gray-100 font-semibold">DOL</span> <span
                        class="text-2xl text-gray-100 font-thin">Logo Store</span>
                </a>
                <div class="w-1/2 flex text-sm mt-6 lg:mt-0">
                    <ul class="text-gray-700 list-none p-0 font-thin flex flex-col text-left">
                        <li class="inline-block py-2 px-3 text-white uppercase no-underline font-medium tracking-wide">
                            Product</li>
                        <li><a href="#"
                                class="inline-block py-2 px-3 text-gray-500 hover:text-gray-500-light no-underline">Popular</a>
                        </li>
                        <li><a href="#"
                                class="inline-block py-2 px-3 text-gray-500 hover:text-gray-500-light no-underline">Trending</a>
                        </li>
                        <li><a href="#"
                                class="inline-block py-2 px-3 text-gray-500 hover:text-gray-500-light no-underline">Catalog</a>
                        </li>
                        <li><a href="#"
                                class="inline-block py-2 px-3 text-gray-500 hover:text-gray-500-light no-underline">Features</a>
                        </li>
                    </ul>
                    <ul class="text-gray-700 list-none p-0 font-thin flex flex-col text-left">
                        <li class="inline-block py-2 px-3 text-white uppercase no-underline font-medium tracking-wide">
                            Company</li>
                        <li><a href="#"
                                class="inline-block py-2 px-3 text-gray-500 hover:text-gray-500-light no-underline">Press
                                Release</a>
                        </li>
                        <li><a href="#"
                                class="inline-block py-2 px-3 text-gray-500 hover:text-gray-500-light no-underline">Mission</a>
                        </li>
                        <li><a href="#"
                                class="inline-block py-2 px-3 text-gray-500 hover:text-gray-500-light no-underline">Strategy</a>
                        </li>
                        <li><a href="#"
                                class="inline-block py-2 px-3 text-gray-500 hover:text-gray-500-light no-underline">Works</a>
                        </li>
                    </ul>
                    <ul class="text-gray-700 list-none p-0 font-thin flex flex-col text-left">
                        <li class="inline-block py-2 px-3 text-white uppercase no-underline font-medium tracking-wide">
                            Info</li>
                        <li><a href="#"
                                class="inline-block py-2 px-3 text-gray-500 hover:text-gray-500-light no-underline">Support</a>
                        </li>
                        <li><a href="#"
                                class="inline-block py-2 px-3 text-gray-500 hover:text-gray-500-light no-underline">Developers</a>
                        </li>
                        <li><a href="#"
                                class="inline-block py-2 px-3 text-gray-500 hover:text-gray-500-light no-underline">Customer
                                Services</a></li>
                        <li><a href="#"
                                class="inline-block py-2 px-3 text-gray-500 hover:text-gray-500-light no-underline">Started
                                Guide</a>
                        </li>
                    </ul>
                    <div class="text-gray-700 flex flex-col">
                        <div class="inline-block py-2 px-3 text-white uppercase font-medium tracking-wide">Follow Us
                        </div>
                        <div class="flex pl-4 justify-start">
                            <a class="block flex items-center text-white hover:text-gray-500 mr-6 no-underline"
                                href="#"><i class="fab fa-github-alt"></i></a>
                            <a class="block flex items-center text-white hover:text-gray-500 mr-6 no-underline"
                                href="#"><i class="fab fa-slack"></i></a>
                            <a class="block flex items-center text-white hover:text-gray-500 no-underline" href="#"><i
                                    class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pt-4 mt-4 text-gray-400 border-t border-gray-900 text-center"> ©2020 AIDE Association. All
                rights
                reserved.</div>
        </footer>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>