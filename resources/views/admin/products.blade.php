@extends('admin')

@section('content')
<section class="bg-gray-200 w-3/4 p-4 min-h-full" id="products">
    <header class="flex justify-between bg-gray-800 rounded-lg px-4 py-2"><span
            class="text-xl text-gray-100 font-thin tracking-wide">Products</span><button
            class="btn-add-item text-gray-100 font-thin">Add Product <i class="fas fa-plus"></i></button></header>
    <nav class=""></nav>
    <!-- Card container starts -->

    <article class="flex flex-wrap items-stretch justify-start mt-5">
        @foreach($products as $product)
        <!-- Product card starts -->
        <div id="{{ $product->id }}"
            class="flex flex-col justify-between card bg-gray-200 rounded w-56 shadow-lg mb-4 p-2 mx-1 bounce">
            <div><img class="rounded" src="https://via.placeholder.com/250x150" alt=""></div>
            <h3 class="text-lg mb-2">{{ $product->name }}</h3>
            <div class="flex items-start h-full">
                <p class="text-xs">{{ $product->description }}</p>
            </div>
            <div class="flex justify-between mt-2">
                <span
                    class="inline px-2 py-1 bg-green-600 rounded-lg text-xs text-gray-100 font-semibold tracking-wide">${{ $product->price }}</span>
                <a href="/admin/products/{{ $product->id }}"><button
                        class="rounded-lg px-2 py-1 bg-gray-800 text-gray-100 text-xs hover:bg-gray-200 hover:text-gray-900 hover:shadow-md tracking-wide font-semibold"><i
                            class="fas fa-caret-right"></i> Modify</i></button></a>
            </div>
        </div>
        <!-- Product card ends -->
        @endforeach
    </article>
    <!-- Card container ends -->
</section>
@endsection