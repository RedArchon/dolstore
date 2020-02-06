@extends('admin')

@section('content')
<section class="m-auto w-full">
    <form class="flex justify-center mt-10" action="{{ route('categories.update', $category->id)}}" method="POST">
        @csrf
        @method('PUT')
        <input
            class="appearance-none bg-gray-200 w-64 text-gray-700 @error('name') border border-red-500 @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
            type="text" name="name" value="{{ $category->name }}">
        @error('name')
        <span class="text-xs text-red-600">{{ $message }}</span>
        @enderror
        <button class="mx-10 px-4 bg-red-700 text-white font-thin tracking-wide leading-snug grow" type="submit">Edit
            Category</button>
    </form>
</section>

@endsection