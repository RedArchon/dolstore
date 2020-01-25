@extends('layout')

@section('style')
<style>
    .carousel-open:checked+.carousel-item {
        position: static;
        opacity: 100;
    }

    .carousel-item {
        -webkit-transition: opacity 0.6s ease-out;
        transition: opacity 0.6s ease-out;
    }

    #carousel-1:checked~.control-1,
    #carousel-2:checked~.control-2,
    #carousel-3:checked~.control-3 {
        display: block;
    }

    .carousel-indicators {
        list-style: none;
        margin: 0;
        padding: 0;
        position: absolute;
        bottom: 2%;
        left: 0;
        right: 0;
        text-align: center;
        z-index: 10;
    }

    #carousel-1:checked~.control-1~.carousel-indicators li:nth-child(1) .carousel-bullet,
    #carousel-2:checked~.control-2~.carousel-indicators li:nth-child(2) .carousel-bullet,
    #carousel-3:checked~.control-3~.carousel-indicators li:nth-child(3) .carousel-bullet {
        color: #2b6cb0;
        /*Set to match the Tailwind colour you want the active one to be */
    }
</style>
@endsection

@section('content')
<div class="bg-gray-100">
    <div class="container mx-auto w-full pt-4">
        <div class="mb-2">
            {{-- breadcrumb --}}
            HOME / MENS / SHIRTS
        </div>
        <div class="flex pb-10">
            <div class="w-1/2">
                {{-- image carousel / lightbox --}}
                <div class="carousel relative min-h-full px-4">
                    <div class="carousel-inner relative overflow-hidden w-full">
                        <!--Slide 1-->
                        <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true"
                            hidden="" checked="checked">
                        <div class="carousel-item absolute opacity-0" style="height:50vh;">
                            <div class="block h-full w-full bg-indigo-500 text-white text-5xl text-center"
                                style="background-image: url('https://picsum.photos/500/500');background-size:cover;">
                                Slide 1</div>
                        </div>
                        <label for="carousel-3"
                            class="prev control-1 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
                        <label for="carousel-2"
                            class="next control-1 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

                        <!--Slide 2-->
                        <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true"
                            hidden="">
                        <div class="carousel-item absolute opacity-0" style="height:50vh;">
                            <div class="block h-full w-full bg-orange-500 text-white text-5xl text-center"
                                style="background-image: url('https://picsum.photos/500/500');background-size:cover;">
                                Slide 2</div>
                        </div>
                        <label for="carousel-1"
                            class="prev control-2 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
                        <label for="carousel-3"
                            class="next control-2 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

                        <!--Slide 3-->
                        <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true"
                            hidden="">
                        <div class="carousel-item absolute opacity-0" style="height:50vh;">
                            <div class="block h-full w-full bg-green-500 text-white text-5xl text-center"
                                style="background-image: url('https://picsum.photos/500/500');background-size:cover;">
                                Slide 3</div>
                        </div>
                        <label for="carousel-2"
                            class="prev control-3 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
                        <label for="carousel-1"
                            class="next control-3 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

                        <!-- Add additional indicators for each slide-->
                        <ol class="carousel-indicators">
                            <li class="inline-block mr-3">
                                <label for="carousel-1"
                                    class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
                            </li>
                            <li class="inline-block mr-3">
                                <label for="carousel-2"
                                    class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
                            </li>
                            <li class="inline-block mr-3">
                                <label for="carousel-3"
                                    class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
                            </li>
                        </ol>

                    </div>
                </div>
            </div>
            <div class="w-1/2 bg-gray-200 p-4" style="height:700px">
                {{-- info and cart controls --}}
                <h1 class="text-4xl" style="font-family: Nunito;font-weight:200;">{{ $product->name }}</h1>
                <div class="flex justify-between text-gray-800">
                    <div>&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                    <div><a class="hover:underline" href=" #">No Reviews</a></div>
                </div>
                <div class="text-gray-900">{{ $product->description }}</div>
                <div class="mt-10 mx-auto w-5/6 p-2">
                    {{-- Sizes --}}
                    <span class="text-gray-800 font-thin text-lg">Size</span>
                    <div class="flex flex-wrap justify-around p-2">
                        <div
                            class="flex justify-center items-center m-1 h-12 w-12 text-gray-600 bg-white border-2 border-gray-500 rounded hover:border-gray-900">
                            XS
                        </div>
                        <div
                            class="flex justify-center items-center m-1 h-12 w-12 text-gray-600 bg-white border-2 border-gray-500 rounded hover:border-gray-900">
                            S
                        </div>
                        <div
                            class="flex justify-center items-center m-1 h-12 w-12 text-gray-600 bg-white border-2 border-gray-500 rounded hover:border-gray-900">
                            M
                        </div>
                        <div
                            class="flex justify-center items-center m-1 h-12 w-12 text-gray-600 bg-white border-2 border-gray-500 rounded hover:border-gray-900">
                            L
                        </div>
                        <div
                            class="flex justify-center items-center m-1 h-12 w-12 text-gray-600 bg-white border-2 border-gray-500 rounded hover:border-gray-900">
                            XL
                        </div>
                        <div
                            class="flex justify-center items-center m-1 h-12 w-12 text-gray-600 bg-white border-2 border-gray-500 rounded hover:border-gray-900">
                            2XL
                        </div>
                        <div
                            class="flex justify-center items-center m-1 h-12 w-12 text-gray-600 bg-white border-2 border-gray-500 rounded hover:border-gray-900">
                            3XL
                        </div>
                        <div
                            class="flex justify-center items-center m-1 h-12 w-12 text-gray-600 bg-white border-2 border-gray-500 rounded hover:border-gray-900">
                            4XL
                        </div>
                    </div>
                </div>
                <div class="flex flex-col justify-between w-5/6 mx-auto mt-6">
                    <label for="quantity">Quantity</label>
                    <div class="flex">
                        <select class="py-2 px-4 w-40" name="quantity">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                        <button class="bg-red-600 text-white px-4 py-2 w-full ml-4" type="submit">Add to
                            Cart</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection