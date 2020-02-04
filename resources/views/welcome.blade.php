@extends('layout')

@section('title', 'DOL Store')
@section('warning')
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
@endsection

@section('hero', View::make('hero'))

@section('content')
<!-- start products container wrapper -->
<div class="flex mt-64 xl:mt-32 w-5/6 mx-auto" id="products">

    <!-- start product card container -->
    <div class="flex flex-wrap justify-around w-full md:ml-10 relative">
        @if($products)
        @foreach($products as $product)
        <!-- start product card -->
        <div class="card flex flex-col justify-start rounded ml-3 mt-3" style="max-height:395px;">
            <a href="/products/{{ $product->id }}"><img class="img-product hover:shadow-lg bounce"
                    src="{{ asset('img/shot' . rand(7,10) . '.jpg') }}" alt="Random picture"></a>
            <div class="flex justify-between">
                <h3 class="text-xl text-gray-800 font-thin tracking-wide">{{ substr($product->name, 0, 30) }}</h3>
                <span class="text-gray-700 font-thin tracking-wide">${{ $product->price}}</span>
            </div>
            <span class="text-sm text-gray-600 font-thin tracking-wide">Product Category</span>
        </div>
        @endforeach
        @endif

        <!-- end product card -->
    </div> <!-- End product card container -->
</div> <!-- End products container wrapper -->

<div class="flex justify-center mx-auto w-1/3 mt-10">
    <a href="/products"><button
            class="block border-2 border-teal-900 px-8 py-4 transition hover:bg-teal-900 hover:text-white">
            View All
            Products</button></a>
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
                <h1 class="text-center text-4xl text-gray-900 font-thin leading-snug tracking-wide">
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
                                    <h1 class="text-lg font-medium uppercase p-3 pb-0 text-center tracking-wide">
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
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
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
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
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
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
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
                                <h2 class="text-sm text-gray-500 text-center pb-6"><span class="text-3xl">$15</span>
                                    /mo</h2>

                                The most popular way to give back.
                            </div>
                            <div class="flex pl-12 justify-start sm:justify-start mt-3">
                                <ul>
                                    <li class="flex items-center">
                                        <div class="rounded-full p-2 fill-current text-green-700">
                                            <svg class="w-6 h-6 align-middle" width="24" height="24" viewBox="0 0 24 24"
                                                fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                                <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                            </svg>
                                        </div>
                                        <span class="text-gray-700 text-lg ml-3">Sick Perk 1</span>
                                    </li>
                                    <li class="flex items-center">
                                        <div class=" rounded-full p-2 fill-current text-green-700">
                                            <svg class="w-6 h-6 align-middle" width="24" height="24" viewBox="0 0 24 24"
                                                fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                                <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                            </svg>
                                        </div>
                                        <span class="text-gray-700 text-lg ml-3">Dope Perk 2</span>
                                    </li>
                                    <li class="flex items-center">
                                        <div class=" rounded-full p-2 fill-current text-green-700">
                                            <svg class="w-6 h-6 align-middle" width="24" height="24" viewBox="0 0 24 24"
                                                fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round">
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
                            <div class="bg-white text-gray-900 rounded-lg shadow-inner shadow-lg overflow-hidden">
                                <div
                                    class="block text-left text-sm sm:text-md max-w-sm mx-auto mt-2 text-gray-900 px-8 lg:px-6 text-center">
                                    <h1 class="text-lg font-medium uppercase p-3 pb-0 text-center tracking-wide">
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
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
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
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
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
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
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
        <div class="flex justify-around items-center bg-white shadow-lg h-64 w-2/3 m-2 rounded-lg p-6 flex-row-reverse">
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
@endsection