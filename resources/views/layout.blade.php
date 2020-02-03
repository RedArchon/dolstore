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
                        <a class="text-lg text-gray-100 mx-2 font-thin hover:underline" href="">Contract</a>
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

    <div>

        @yield('content')

        <footer class="sm:overflow-hidden sm:flex items-center justify-center gradient">
            <div class="container p-8 sm:my-16">
                <div class="sm:flex mb-4">
                    <div class="sm:w-1/4 h-auto">
                        <div class="text-orange-500 mb-2">Information</div>
                        <ul class="list-reset leading-normal">
                            <li class="hover:text-orange-400 text-gray-100">One</li>
                            <li class="hover:text-orange-400 text-gray-100">Two</li>
                            <li class="hover:text-orange-400 text-gray-100">Three</li>
                            <li class="hover:text-orange-400 text-gray-100">Four</li>
                            <li class="hover:text-orange-400 text-gray-100">Five</li>
                            <li class="hover:text-orange-400 text-gray-100">Six</li>
                            <li class="hover:text-orange-400 text-gray-100">Seven</li>
                            <li class="hover:text-orange-400 text-gray-100">Eight</li>
                        </ul>
                    </div>
                    <div class="sm:w-1/4 h-auto sm:mt-0 mt-8">
                        <div class="text-blue-600 mb-2">Blue</div>
                        <ul class="list-reset leading-normal">
                            <li class="hover:text-blue-600 text-gray-100">One</li>
                            <li class="hover:text-blue-600 text-gray-100">Two</li>
                            <li class="hover:text-blue-600 text-gray-100">Three</li>
                        </ul>

                        <div class="text-blue-300 mb-2 mt-4">Blue-light</div>
                        <ul class="list-reset leading-normal">
                            <li class="hover:text-blue-300 text-gray-100">One</li>
                            <li class="hover:text-blue-300 text-gray-100">Two</li>
                            <li class="hover:text-blue-300 text-gray-100">Three</li>
                        </ul>
                    </div>
                    <div class="sm:w-1/4 h-auto sm:mt-0 mt-8">
                        <div class="text-green-600 mb-2">Green-dark</div>
                        <ul class="list-reset leading-normal">
                            <li class="hover:text-green-600 text-gray-100">One</li>
                            <li class="hover:text-green-600 text-gray-100">Two</li>
                            <li class="hover:text-green-600 text-gray-100">Three</li>
                        </ul>

                        <div class="text-green-300 mb-2 mt-4">Green-light</div>
                        <ul class="list-reset leading-normal">
                            <li class="hover:text-green-300 text-gray-100">One</li>
                            <li class="hover:text-green-300 text-gray-100">Two</li>
                            <li class="hover:text-green-300 text-gray-100">Three</li>
                        </ul>
                    </div>
                    <div class="sm:w-1/2 sm:mt-0 mt-8 h-auto">
                        <div class="text-red-400 mb-2">Newsletter</div>
                        <p class="text-gray-100 leading-normal">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi,
                            consectetur.
                        </p>
                        <div class="mt-4 flex">
                            <input type="text"
                                class="p-2 border border-grey-light round text-grey-dark text-sm h-auto focus:outline-none"
                                placeholder="Your email address" />
                            <button class="bg-orange-400 text-white rounded-sm h-auto text-xs p-3">
                                Subscribe
                            </button>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-16 text-gray-100">Designed and Coded with <span
                        class="text-red-700">&#10084;</span> in Olympia, WA</div>
            </div>
        </footer>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>