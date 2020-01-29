@extends('admin')

@section('content')
<section class="bg-gray-200 w-3/4 p-4 min-h-full" id="users">
    <header class="flex justify-between bg-gray-800 rounded-lg px-4 py-2"><span
            class="text-xl text-gray-100 font-thin tracking-wide">Users</span><a href="/admin/users/create"><button
                class="btn-add-item text-gray-100 font-thin">Add User <i class="fas fa-plus"></i></button></a></header>
    <table class="mt-2 w-full">
        <thead class="border-b-2 text-lg">
            <tr>
                <th class="font-light tracking-wide">Name</th>
                <th class="font-light tracking-wide">Email</th>
                <th class="font-light tracking-wide">Mailstop</th>
                <th class="font-light tracking-wide">Order History</th>
                <th class="font-light tracking-wide">Edit</th>
                <th class="font-light tracking-wide">Delete</th>
            </tr>
        </thead>
        <tbody class="text-center">

            @foreach($users as $user)
            {{-- Start user line item--}}
            <tr class="even:bg-gray-300">
                <td class="p-2 font-semibold">{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>42005</td>
                <td><a href="#" class="p-3 hover:text-green-500"><i class="far fa-list-alt"></i></a></td>
                <td><a href="/admin/users/{{ $user->id }}/edit" class="p-3 hover:text-green-500"><i
                            class="far fa-edit"></i></a></td>
                <td><a href="#" class="p-3 hover:text-red-600"><i class="fas fa-user-times"></i></a></td>
            </tr>
            @endforeach

        </tbody>
    </table>

</section>
@endsection