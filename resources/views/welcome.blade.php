@extends('layout')

@section('title', 'DOL Store')

@section('content')

<body>
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert" id="alert">
        <strong class="font-bold">Stop right there!</strong>
        <span class="block sm:inline">You are viewing the development version of this website. Any accounts or purchases
            will be invalid.</span>
        <span class="absolute top-0 bottom-0 right-0 px-4 py-3 close">
            <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 20 20">
                <title>Close</title>
                <path
                    d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
            </svg>
        </span>
    </div>
    <div>
        <header class="gradient relative z-0">
            <div class="flex flex-col justify-between bg-no-repeat bg-cover bg-bottom relative"
                style="min-height: 500px;">
                <nav class="container mx-auto mb-16">
                    <div class="flex justify-between items-center">
                        <div class="flex items-center"><span class="text-2xl text-gray-100 inline"><i
                                    class="fas fa-store-alt text-white align-middle"></i></span><span
                                class="text-2xl text-gray-100 tracking-wider font-semibold ml-2"> DOL</span> <span
                                class="text-2xl text-gray-100 tracking-tight font-light ml-2">Logo Store</span></div>
                        <div>
                            <button
                                class="text-xl text-gray-100 tracking-wider font-thin border-b-2 border-transparent hover:border-gray-100 ml-3">Login
                                <i class="fas fa-sign-in-alt"></i></button>
                        </div>
                    </div>
                </nav>
                <div
                    class="flex flex-col justify-around items-center w-full mx-auto md:w-2/3 lg:w-1/3 text-center bg-white mt-12 -mb-20 shadow-lg rounded-lg p-8 shadow z-50">
                    <div class="text-4xl text-gray-900 font-thin">Give hope to a colleague in need. </div>
                    <div class="text-4xl text-gray-900"><img class="w-24 -mb-3 mt-2" src="img/friends.svg" alt=""></div>
                    <div class="p-8 text-center">Proceeds from the sales of DOL Logo Store merchandise are used by the
                        AIDE Association to provide grants to DOL employees facing adversity.</div>
                    <div><button class="px-8 py-6 text-gray-100 rounded-lg bounce gradient hover:shadow-lg">Sign up to
                            shop</button></div>
                </div>
                <div class="-mt-64 relative" style="z-index: -1;">
                    <svg viewBox="0 0 1428 174" version="1.1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-2.000000, 44.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                <path
                                    d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496"
                                    opacity="0.100000001"></path>
                                <path
                                    d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z"
                                    opacity="0.100000001"></path>
                                <path
                                    d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z"
                                    id="Path-4" opacity="0.200000003"></path>
                            </g>
                            <g transform="translate(-4.000000, 76.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                <path
                                    d="M0.457,34.035 C57.086,53.198 98.208,65.809 123.822,71.865 C181.454,85.495 234.295,90.29 272.033,93.459 C311.355,96.759 396.635,95.801 461.025,91.663 C486.76,90.01 518.727,86.372 556.926,80.752 C595.747,74.596 622.372,70.008 636.799,66.991 C663.913,61.324 712.501,49.503 727.605,46.128 C780.47,34.317 818.839,22.532 856.324,15.904 C922.689,4.169 955.676,2.522 1011.185,0.432 C1060.705,1.477 1097.39,3.129 1121.236,5.387 C1161.703,9.219 1208.621,17.821 1235.4,22.304 C1285.855,30.748 1354.351,47.432 1440.886,72.354 L1441.191,104.352 L1.121,104.031 L0.457,34.035 Z">
                                </path>
                            </g>
                        </g>
                    </svg>
                </div>
            </div>
        </header>
        <!-- start products container wrapper -->
        <div class="flex mt-64 xl:mt-40 w-5/6 mx-auto" id="products">


            {{-- <!-- start products filter box -->
            <div class="flex flex-col justify-start shadow-xl p-6 rounded-lg w-64 h-full sticky top-0">
                <span class="text-xl text-gray-900 font-thin tracking-widest">Filter Products</span>
                <div class="my-6">
                    <div
                        class="flex justify-between items-center text-xl text-gray-900 font-thin tracking-widest border-b-2 border-gray-300">
                        <span>Category</span> <i class="fas fa-angle-down"></i></div>
                    <div>
                        <input type="checkbox" id="filter-mens" name="mens" value="mens">
                        <label for="filter-mens">Men's Outerwear</label>
                    </div>
                    <div>
                        <input type="checkbox" id="filter-womens" name="womens" value="womens">
                        <label for="filter-womens">Women's Outerwear</label>
                    </div>
                    <div>
                        <input type="checkbox" id="filter-hats" name="hats" value="hats">
                        <label for="filter-hats">Hats</label>
                    </div>
                    <div>
                        <input type="checkbox" id="filter-home-office" name="home-office" value="home-office">
                        <label for="filter-womens">Home and Office</label>
                    </div>
                    <div>
                        <input type="checkbox" id="filter-recognition" name="recognition" value="recognition">
                        <label for="filter-recognition">Recognition</label>
                    </div>
                </div>
                <div class="my-6">
                    <div
                        class="flex justify-between items-center text-xl text-gray-900 font-thin tracking-widest border-b-2 border-gray-300">
                        <span>Size</span> <i class="fas fa-angle-down"></i></div>
                    <div>
                        <input type="checkbox" id="filter-xs" name="xs" value="xs">
                        <label for="filter-xs">Extra Small</label>
                    </div>
                    <div>
                        <input type="checkbox" id="filter-sm" name="sm" value="sm">
                        <label for="filter-sm">Small</label>
                    </div>
                    <div>
                        <input type="checkbox" id="filter-md" name="md" value="md">
                        <label for="filter-md">Medium</label>
                    </div>
                    <div>
                        <input type="checkbox" id="filter-lg" name="lg" value="lg">
                        <label for="filter-lg">Large</label>
                    </div>
                    <div>
                        <input type="checkbox" id="filter-xl" name="xl" value="xl">
                        <label for="filter-xl">Extra Large</label>
                    </div>
                    <div>
                        <input type="checkbox" id="filter-xl" name="xl" value="xl">
                        <label for="filter-xl">2XL</label>
                    </div>
                    <div>
                        <input type="checkbox" id="filter-xl" name="xl" value="xl">
                        <label for="filter-xl">3XL</label>
                    </div>
                    <div>
                        <input type="checkbox" id="filter-xl" name="xl" value="xl">
                        <label for="filter-xl">4XL</label>
                    </div>
                </div>
                <div class="my-6">
                    <div
                        class="flex justify-between items-center text-xl text-gray-900 font-thin tracking-widest border-b-2 border-gray-300">
                        <span>Color</span> <i class="fas fa-angle-down"></i></div>
                    <div class="flex flex-wrap mt-4">
                        <button class="rounded-full bg-green-200 h-10 w-10 flex items-center justify-center m-2"
                            id="filter-mens" name="mens" value=""></button>
                        <button class="rounded-full bg-blue-200 h-10 w-10 flex items-center justify-center m-2"
                            id="filter-mens" name="mens" value=""></button>
                        <button class="rounded-full bg-indigo-200 h-10 w-10 flex items-center justify-center m-2"
                            id="filter-mens" name="mens" value=""></button>
                        <button class="rounded-full bg-orange-200 h-10 w-10 flex items-center justify-center m-2"
                            id="filter-mens" name="mens" value=""></button>
                        <button class="rounded-full bg-red-200 h-10 w-10 flex items-center justify-center m-2"
                            id="filter-mens" name="mens" value=""></button>
                        <button class="rounded-full bg-gray-200 h-10 w-10 flex items-center justify-center m-2"
                            id="filter-mens" name="mens" value=""></button>
                        <button class="rounded-full bg-yellow-400 h-10 w-10 flex items-center justify-center m-2"
                            id="filter-mens" name="mens" value=""></button>
                        <button class="rounded-full bg-green-500 h-10 w-10 flex items-center justify-center m-2"
                            id="filter-mens" name="mens" value=""></button>
                        <button class="rounded-full bg-blue-500 h-10 w-10 flex items-center justify-center m-2"
                            id="filter-mens" name="mens" value=""></button>
                        <button class="rounded-full bg-indigo-500 h-10 w-10 flex items-center justify-center m-2"
                            id="filter-mens" name="mens" value=""></button>
                        <button class="rounded-full bg-orange-500 h-10 w-10 flex items-center justify-center m-2"
                            id="filter-mens" name="mens" value=""></button>
                        <button class="rounded-full bg-red-500 h-10 w-10 flex items-center justify-center m-2"
                            id="filter-mens" name="mens" value=""></button>
                        <button class="rounded-full bg-purple-500 h-10 w-10 flex items-center justify-center m-2"
                            id="filter-mens" name="mens" value=""></button>
                        <button class="rounded-full bg-teal-500 h-10 w-10 flex items-center justify-center m-2"
                            id="filter-mens" name="mens" value=""></button>
                        <button class="rounded-full bg-pink-500 h-10 w-10 flex items-center justify-center m-2"
                            id="filter-mens" name="mens" value=""></button>
                        <button class="rounded-full bg-gray-400 h-10 w-10 flex items-center justify-center m-2"
                            id="filter-mens" name="mens" value=""></button>
                        <button class="rounded-full bg-gray-600 h-10 w-10 flex items-center justify-center m-2"
                            id="filter-mens" name="mens" value=""></button>
                        <button class="rounded-full bg-gray-800 h-10 w-10 flex items-center justify-center m-2"
                            id="filter-mens" name="mens" value=""></button>
                    </div>
                </div>

            </div> --}}
            <!-- end products filter box -->

            <!-- start product card container -->
            <div class="flex flex-wrap justify-around w-full md:ml-10 relative">

                <!-- start product card -->
                <div class="card flex flex-col justify-start rounded ml-3 mt-3" style="max-height:395px;">
                    <img class="img-product" src="{{ asset('img/shot4.jpg') }}" alt="">
                    <div class="flex justify-between">
                        <h3 class="text-xl text-gray-800 font-thin tracking-wide">Product Name</h3>
                        <span class="text-gray-700 font-thin tracking-wide">$19.99</span>
                    </div>
                    <span class="text-sm text-gray-600 font-thin tracking-wide">Product Category</span>
                </div>
                <div class="card flex flex-col justify-start rounded ml-3 mt-3" style="max-height:395px;">
                    <img class="img-product" src="{{ asset('img/shot5.jpg') }}" alt="">
                    <div class="flex justify-between">
                        <h3 class="text-xl text-gray-800 font-thin tracking-wide">Product Name</h3>
                        <span class="text-gray-700 font-thin tracking-wide">$19.99</span>
                    </div>
                    <span class="text-sm text-gray-600 font-thin tracking-wide">Product Category</span>
                </div>
                <div class="card flex flex-col justify-start rounded ml-3 mt-3" style="max-height:395px;">
                    <img class="img-product" src="{{ asset('img/shot6.jpg') }}" alt="">
                    <div class="flex justify-between">
                        <h3 class="text-xl text-gray-800 font-thin tracking-wide">Product Name</h3>
                        <span class="text-gray-700 font-thin tracking-wide">$19.99</span>
                    </div>
                    <span class="text-sm text-gray-600 font-thin tracking-wide">Product Category</span>
                </div>
                <div class="card flex flex-col justify-start rounded ml-3 mt-3" style="max-height:395px;">
                    <img class="img-product" src="{{ asset('img/shot1.jpg') }}" alt="">
                    <div class="flex justify-between">
                        <h3 class="text-xl text-gray-800 font-thin tracking-wide">Product Name</h3>
                        <span class="text-gray-700 font-thin tracking-wide">$19.99</span>
                    </div>
                    <span class="text-sm text-gray-600 font-thin tracking-wide">Product Category</span>
                </div>
                <!-- end product card -->
            </div> <!-- End product card container -->
        </div> <!-- End products container wrapper -->

        <div class="flex justify-center mx-auto w-1/3 mt-10">
            <button class="block border-2 border-teal-800 px-8 py-4 transition hover:bg-teal-800 hover:text-white">
                View All
                Products</button>
        </div>

        <div class="flex justify-center items-center text-center mt-24 parallax relative">
            <a class="absolute bottom-0 right-auto left-auto"
                style="background-color:black;color:white;text-decoration:none;padding:4px 6px;font-family:-apple-system, BlinkMacSystemFont, &quot;San Francisco&quot;, &quot;Helvetica Neue&quot;, Helvetica, Ubuntu, Roboto, Noto, &quot;Segoe UI&quot;, Arial, sans-serif;font-size:12px;font-weight:bold;line-height:1.2;display:inline-block;border-radius:3px"
                href="https://unsplash.com/@thomas_somme?utm_medium=referral&amp;utm_campaign=photographer-credit&amp;utm_content=creditBadge"
                target="_blank" rel="noopener noreferrer"
                title="Download free do whatever you want high-resolution photos from Thomas Somme"><span
                    style="display:inline-block;padding:2px 3px"><svg xmlns="http://www.w3.org/2000/svg"
                        style="height:12px;width:auto;position:relative;vertical-align:middle;top:-2px;fill:white"
                        viewBox="0 0 32 32">
                        <title>unsplash-logo</title>
                        <path d="M10 9V0h12v9H10zm12 5h10v18H0V14h10v9h12v-9z"></path>
                    </svg></span><span style="display:inline-block;padding:2px 3px">Photo by Thomas Somme</span></a>
            <div class="text-gray-100 text-4xl sm:text-5xl md:text-6xl font-thin">We've raised over <span
                    class="underline">$11900</span> in 2020 thanks to people like you.</div>
        </div>
        <div class="bg-white">
            <section class="h-full overflow-hidden flex items-start justify-center">
                <div>
                    <div class="container max-w-full mx-auto py-24 px-6">
                        <h1 class="text-center text-4xl text-black leading-snug tracking-wider">
                            Don't need merch? Donate instead.
                        </h1>
                        <p class="text-center text-lg text-gray-700 mt-2 px-6">
                            Your donation goes a long way in making sure that grant money is available when it truly
                            counts.
                        </p>
                        <div class="h-1 mx-auto bg-indigo-200 w-24 opacity-75 mt-4 rounded"></div>

                        <div class="max-w-full md:max-w-6xl mx-auto my-3 md:px-8">
                            <div class="relative block flex flex-col md:flex-row items-center">
                                <div
                                    class="w-11/12 max-w-sm sm:w-3/5 lg:w-1/3 sm:my-5 my-8 relative z-0 rounded-lg shadow-lg md:-mr-4 h-50">
                                    <div class="bg-white text-black rounded-lg shadow-inner shadow-lg overflow-hidden">
                                        <div
                                            class="block text-left text-sm sm:text-md max-w-sm mx-auto mt-2 text-black px-8 lg:px-6">
                                            <h1
                                                class="text-lg font-medium uppercase p-3 pb-0 text-center tracking-wide">
                                                Loose Change
                                            </h1>
                                            <h2 class="text-sm text-gray-500 text-center pb-6">$5 /mo</h2>
                                            Our most humble subscription.
                                        </div>

                                        <div class="flex flex-wrap mt-3 px-6 h-50">
                                            <ul>
                                                <li class="flex items-center">
                                                    <div class=" rounded-full p-2 fill-current text-green-700">
                                                        <svg class="w-6 h-6 align-middle" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round">
                                                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                                        </svg>
                                                    </div>
                                                    <span class="text-gray-700 text-lg ml-3">Cool Perk 1</span>
                                                </li>
                                                <li class="flex items-center">
                                                    <div class=" rounded-full p-2 fill-current text-green-700">
                                                        <svg class="w-6 h-6 align-middle" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round">
                                                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                                        </svg>
                                                    </div>
                                                    <span class="text-gray-700 text-lg ml-3">Neat Perk 2</span>
                                                </li>
                                                <li class="flex items-center">
                                                    <div class=" rounded-full p-2 fill-current text-green-700">
                                                        <svg class="w-6 h-6 align-middle" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round">
                                                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                                        </svg>
                                                    </div>
                                                    <span class="text-gray-700 text-lg ml-3">Sweet Perk 3</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="block flex items-center p-8  uppercase">
                                            <button
                                                class="mt-3 text-lg font-semibold gradient w-full text-white rounded-lg px-6 py-3 block shadow-xl bounce">
                                                Select
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="w-full max-w-md sm:w-2/3 lg:w-1/3 sm:my-5 my-8 relative z-10 bg-white rounded-lg shadow-lg">
                                    <div
                                        class="text-sm leading-none rounded-t-lg bg-gray-200 text-gray-900 font-semibold uppercase py-4 text-center tracking-wide">
                                        Most Popular
                                    </div>
                                    <div
                                        class="block text-left text-sm sm:text-md max-w-sm mx-auto mt-2 text-black px-8 lg:px-6 text-center">
                                        <h1 class="text-lg font-medium uppercase p-3 pb-0 text-center tracking-wide">
                                            Go-Giver
                                        </h1>
                                        <h2 class="text-sm text-gray-500 text-center pb-6"><span
                                                class="text-3xl">$15</span>
                                            /mo</h2>

                                        The most popular way to give back.
                                    </div>
                                    <div class="flex pl-12 justify-start sm:justify-start mt-3">
                                        <ul>
                                            <li class="flex items-center">
                                                <div class="rounded-full p-2 fill-current text-green-700">
                                                    <svg class="w-6 h-6 align-middle" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                                        <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                                    </svg>
                                                </div>
                                                <span class="text-gray-700 text-lg ml-3">Sick Perk 1</span>
                                            </li>
                                            <li class="flex items-center">
                                                <div class=" rounded-full p-2 fill-current text-green-700">
                                                    <svg class="w-6 h-6 align-middle" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                                        <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                                    </svg>
                                                </div>
                                                <span class="text-gray-700 text-lg ml-3">Dope Perk 2</span>
                                            </li>
                                            <li class="flex items-center">
                                                <div class=" rounded-full p-2 fill-current text-green-700">
                                                    <svg class="w-6 h-6 align-middle" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                                        <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                                    </svg>
                                                </div>
                                                <span class="text-gray-700 text-lg ml-3">Rad Perk 3</span>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="block flex items-center p-8  uppercase">
                                        <button
                                            class="mt-3 text-lg font-semibold gradient w-full text-white rounded-lg px-6 py-3 block shadow-xl bounce">
                                            Select
                                        </button>
                                    </div>
                                </div>
                                <div
                                    class="w-11/12 max-w-sm sm:w-3/5 lg:w-1/3 sm:my-5 my-8 relative z-0 rounded-lg shadow-lg md:-ml-4 h-50">
                                    <div
                                        class="bg-white text-gray-900 rounded-lg shadow-inner shadow-lg overflow-hidden">
                                        <div
                                            class="block text-left text-sm sm:text-md max-w-sm mx-auto mt-2 text-gray-900 px-8 lg:px-6 text-center">
                                            <h1
                                                class="text-lg font-medium uppercase p-3 pb-0 text-center tracking-wide">
                                                Philanthropist
                                            </h1>
                                            <h2 class="text-sm text-gray-500 text-center pb-6">$35 /mo</h2>

                                            Create the greatest impact.
                                        </div>
                                        <div class="flex flex-wrap mt-3 px-6">
                                            <ul>
                                                <li class="flex items-center">
                                                    <div class=" rounded-full p-2 fill-current text-green-700">
                                                        <svg class="w-6 h-6 align-middle" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round">
                                                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                                        </svg>
                                                    </div>
                                                    <span class="text-gray-700 text-lg ml-3">Wicked Perk</span>
                                                </li>
                                                <li class="flex items-center">
                                                    <div class=" rounded-full p-2 fill-current text-green-700">
                                                        <svg class="w-6 h-6 align-middle" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round">
                                                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                                        </svg>
                                                    </div>
                                                    <span class="text-gray-700 text-lg ml-3">Tight Perk</span>
                                                </li>
                                                <li class="flex items-center">
                                                    <div class=" rounded-full p-2 fill-current text-green-700">
                                                        <svg class="w-6 h-6 align-middle" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round">
                                                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                                        </svg>
                                                    </div>
                                                    <span class="text-gray-700 text-lg ml-3">Baller Perk</span>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="block flex items-center p-8  uppercase">
                                            <button
                                                class="mt-3 text-lg font-semibold gradient w-full text-white rounded-lg px-6 py-3 block shadow-xl bounce">
                                                Select
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="overflow-hidden flex items-center justify-center" style="background: #edf2f7;">
            <div class="container flex flex-wrap my-10">
                <div class="flex justify-around items-center bg-white shadow-lg h-64 w-2/3 m-2 rounded-lg p-6">
                    <div class="flex justify-center items-center w-1/3 h-full border-r-2 border-gray-200">
                        <div class="h-40 w-32">
                            <img class="rounded-full" src="img/avatar3.png" alt="">
                            <div class="text-center w-full mt-4 font-semibold text-sm">Jane Doe, CRD</div>

                        </div>
                    </div>
                    <div class="w-full ml-10">
                        <blockquote class="text-2xl text-gray-600 font-thin italic">&ldquo;Leverage agile frameworks to
                            provide a robust synopsis for high level overviews. Iterative approaches to corporate
                            strategy foster collaborative thinking to further the overall value proposition.&rdquo;
                        </blockquote>
                    </div>
                </div>
                <div class="bg-white shadow h-64 w-1/4 m-2 invisible"></div>
                <div class="bg-white shadow h-64 w-1/4 m-2 invisible"></div>
                <div
                    class="flex justify-around items-center bg-white shadow-lg h-64 w-2/3 m-2 rounded-lg p-6 flex-row-reverse">
                    <div class="flex justify-center items-center w-1/3 h-full border-l-2 border-gray-200">
                        <div class="h-40 w-32">
                            <img class="rounded-full" src="{{asset('img/avatar2.png')}}" alt="">
                            <div class="text-center w-full mt-4 font-semibold text-sm">John Doe, BPD</div>
                        </div>

                    </div>
                    <div class="w-full mr-10">
                        <blockquote class="text-2xl text-gray-600 font-thin italic">&ldquo;Bring to the table win-win
                            survival strategies to ensure proactive domination. At the end of the day, going forward, a
                            new normal that has evolved from generation X is on the runway heading towards a streamlined
                            cloud solution.&rdquo;</blockquote>
                    </div>
                </div>
                <div class="flex justify-around items-center bg-white shadow-lg h-64 w-2/3 m-2 rounded-lg p-6">
                    <div class="flex justify-center items-center w-1/3 h-full border-r-2 border-gray-200">
                        <div class="h-40 w-32">
                            <img class="rounded-full" src="img/avatar.png" alt="">
                            <div class="text-center w-full mt-4 font-semibold text-sm">John Doe, ISD</div>
                        </div>
                    </div>
                    <div class="w-full ml-10">
                        <blockquote class="text-2xl text-gray-600 font-thin italic">&ldquo;Capitalize on low hanging
                            fruit to identify a ballpark value added activity to beta test. Override the digital divide
                            with additional clickthroughs from DevOps.&rdquo;</blockquote>
                    </div>
                </div>
                <div class="bg-white shadow h-64 w-1/4 m-2 invisible"></div>
            </div>
        </div>
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

    @endsection