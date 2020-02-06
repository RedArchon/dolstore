@extends('admin')

@section('content')
<section class="m-auto w-full">
    <form class="flex justify-center mt-10" action="{{ route('categories.store') }}" method="POST">
        @csrf
        <input
            class="appearance-none inline-block bg-gray-200 w-64 text-gray-700 @error('name') border border-red-500 @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
            type="text" name="name" placeholder="Enter category name">
        @error('name')
        <br>
        <span class="text-xs text-red-600">{{ $message }}</span>
        @enderror
        <button class="mx-10 inline-block px-4 bg-red-700 text-white font-thin tracking-wide leading-snug grow"
            type="submit">Create
            Category</button>
    </form>
</section>
@endsection