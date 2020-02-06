@extends('admin')

@section('content')
<section class="bg-gray-200 w-3/4 p-4 min-h-full" id="users">
    <header class="flex justify-between bg-gray-800 rounded-lg px-4 py-2"><span
            class="text-xl text-gray-100 font-thin tracking-wide">Categories</span><a
            href="{{ route('categories.create')}}"><button class="btn-add-item text-gray-100 font-thin">Add Category <i
                    class="fas fa-plus"></i></button></a>
    </header>
    <div class="flex flex-col w-full mt-4">
        <table class="mt-2 w-full">
            <thead class="border-b-2 text-lg">
                <tr>
                    <th class="font-light tracking-wide">Name</th>
                    <th class="font-light tracking-wide">Edit</th>
                    <th class="font-light tracking-wide">Delete</th>
                </tr>
            </thead>
            <tbody class="text-center">

                @foreach ($categories as $category)
                {{-- Start user line item--}}
                <tr class="even:bg-gray-300">
                    <td class="p-2 font-semibold">{{ $category->name }}</td>

                    <td class="p-2 font-semibold"><a href="{{ route('categories.edit', $category->id) }}"><i
                                class="far fa-edit hover:text-green-600"></i></a></td>

                    <form action="{{ route('categories.delete', $category->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <td class="p-2 font-semibold"><button type="submit"><i
                                    class="far fa-trash-alt text-lg hover:text-red-600"></i></button>
                        </td>
                    </form>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</section>
@endsection