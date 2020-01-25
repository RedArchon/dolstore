@extends('layout')

@section('content')
<!-- start products container wrapper -->
<div class="flex my-10 w-3/4 mx-auto" id="products">


    <!-- start products filter box -->
    <div class="flex flex-col justify-start p-6 rounded-lg w-64 h-full sticky top-0">
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
                <button class="rounded-full bg-blue-200 h-10 w-10 flex items-center justify-center m-2" id="filter-mens"
                    name="mens" value=""></button>
                <button class="rounded-full bg-indigo-200 h-10 w-10 flex items-center justify-center m-2"
                    id="filter-mens" name="mens" value=""></button>
                <button class="rounded-full bg-orange-200 h-10 w-10 flex items-center justify-center m-2"
                    id="filter-mens" name="mens" value=""></button>
                <button class="rounded-full bg-red-200 h-10 w-10 flex items-center justify-center m-2" id="filter-mens"
                    name="mens" value=""></button>
                <button class="rounded-full bg-gray-200 h-10 w-10 flex items-center justify-center m-2" id="filter-mens"
                    name="mens" value=""></button>
                <button class="rounded-full bg-yellow-400 h-10 w-10 flex items-center justify-center m-2"
                    id="filter-mens" name="mens" value=""></button>
                <button class="rounded-full bg-green-500 h-10 w-10 flex items-center justify-center m-2"
                    id="filter-mens" name="mens" value=""></button>
                <button class="rounded-full bg-blue-500 h-10 w-10 flex items-center justify-center m-2" id="filter-mens"
                    name="mens" value=""></button>
                <button class="rounded-full bg-indigo-500 h-10 w-10 flex items-center justify-center m-2"
                    id="filter-mens" name="mens" value=""></button>
                <button class="rounded-full bg-orange-500 h-10 w-10 flex items-center justify-center m-2"
                    id="filter-mens" name="mens" value=""></button>
                <button class="rounded-full bg-red-500 h-10 w-10 flex items-center justify-center m-2" id="filter-mens"
                    name="mens" value=""></button>
                <button class="rounded-full bg-purple-500 h-10 w-10 flex items-center justify-center m-2"
                    id="filter-mens" name="mens" value=""></button>
                <button class="rounded-full bg-teal-500 h-10 w-10 flex items-center justify-center m-2" id="filter-mens"
                    name="mens" value=""></button>
                <button class="rounded-full bg-pink-500 h-10 w-10 flex items-center justify-center m-2" id="filter-mens"
                    name="mens" value=""></button>
                <button class="rounded-full bg-gray-400 h-10 w-10 flex items-center justify-center m-2" id="filter-mens"
                    name="mens" value=""></button>
                <button class="rounded-full bg-gray-600 h-10 w-10 flex items-center justify-center m-2" id="filter-mens"
                    name="mens" value=""></button>
                <button class="rounded-full bg-gray-800 h-10 w-10 flex items-center justify-center m-2" id="filter-mens"
                    name="mens" value=""></button>
            </div>
        </div>

    </div>
    <!-- end products filter box -->

    <!-- start product card container -->
    <div class="flex flex-wrap justify-start w-full ml-10 h-auto relative">

        @foreach($products as $product)
        <!-- start product card -->
        <a href="/products/{{ $product->id }}">
            <div class="card flex flex-col justify-start rounded ml-3 mt-3" id="{{ $product->id }}"
                style="max-width:320px;">
                <div class="card-img"><img class="rounded-t grow"
                        src="https://picsum.photos/id/{{ $product->id }}/320/320" alt=""></div>
                <div class="flex justify-between items-center p-2">
                    <h3 class="card-title text-xl font-thin tracking-wider text-gray-900">
                        {{ substr($product->name, 0, 20) }}...</h3>
                    <span class="text-gray-800 text-lg">${{ $product->price }}</span>
                </div>
                <div class="card-desc flex justify-end text-sm sm:tracking-tight text-gray-900 p-2 text-lg -mt-2">
                    <i class="fas fa-chevron-right"></i>
                </div>
            </div>
        </a>
        <!-- end product card -->
        @endforeach

    </div> <!-- End product card container -->
</div> <!-- End products container wrapper -->
@endsection