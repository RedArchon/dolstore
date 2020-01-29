@extends('admin')

@section('content')
<div class="p-6 mx-auto w-1/2">
    <form method="POST" action="/admin/users/" class="w-full max-w-lg">
        @csrf
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-name">
                    Name
                </label>
                <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 @error('name') border border-red-500 @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                    id="grid-name" type="text" placeholder="Jane Doe" name="name">
                @error('name')
                <p class="text-red-500 text-xs italic">Please fill out this field.</p>
                @enderror
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="email">
                    Description
                </label>
                <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 @error('name') border border-red-500 @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                    id="grid-name" type="text" placeholder="Jane Doe" name="name">
                <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you'd like</p>
                @error('email')
                <p class="text-red-500 text-xs italic">Please fill out this field.</p>
                @enderror
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-2">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-price">
                    Price
                </label>
                <div class="flex items-center">
                    <input
                        class="appearance-none inline w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="grid-price" name="price" type="text" placeholder="19.99"><span class="ml-4">USD</span>
                </div>
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-2">
            <div class="w-full px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-price">
                    Image File
                </label>
                <div class="flex items-center">
                    <input
                        class="appearance-none inline w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        type="file" name="pic" accept="image/*">
                </div>
            </div>
        </div>
        <div class="flex flex-wrap justify-end my-2">
            <button class="py-2 px-4 bg-red-700 text-white font-thin tracking-wide leading-snug grow"
                type="submit">Create
                Product</button>
        </div>
    </form>
</div>
@endsection