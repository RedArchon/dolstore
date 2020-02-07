@extends('admin')

@section('content')
<div class="p-6 mx-auto w-2/3">
    <form method="POST" action="{{ route('users.update', $user->id)}}" class="w-full">
        @csrf
        @method('PUT')
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-name">
                    Name
                </label>
                <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 @error('name') border border-red-500 @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                    id="name" type="text" name="name" value="{{ $user->name }}">
                @error('name')
                <p class="text-red-500 text-xs italic">Please fill out this field.</p>
                @enderror
            </div>
            <div class="w-1/2 px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="email">
                    Email
                </label>
                <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 @error('email') border border-red-500 @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                    id="email" type="text" name="email" value="{{ $user->email }}">
                @error('email')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-2">
            <div class="w-full px-3 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="address">
                    Address
                </label>
                <div class="flex items-center">
                    <input
                        class="appearance-none inline w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 @error('address') border border-red-500 @enderror"
                        id="address" name="address" type="text" value="{{ $user->address }}">
                </div>
                @error('address')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-1/3 px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="city">
                    City
                </label>
                <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 @error('city') border border-red-500 @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                    id="city" type="text" name="city" value="{{ $user->city }}">
                @error('city')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>
            <div class="w-1/3 px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="state">
                    State
                </label>
                <select
                    class="appearance-none block w-full bg-gray-200 text-gray-700 @error('state') border border-red-500 @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                    id="state" type="text" name="state">
                    @foreach($states as $state)
                    <option value="{{ $state }}" @if($user->state == $state) selected @endif>{{ $state }}</option>
                    @endforeach
                </select>
                @error('state')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>
            <div class="w-1/3 px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="zip">
                    Zip
                </label>
                <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 @error('zip') border border-red-500 @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                    id="zip" type="text" name="zip" value="{{ $user->zip }}">
                @error('zip')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-2">
            <div class="w-1/3 px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="mailstop">
                    Mailstop
                </label>
                <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 @error('mailstop') border border-red-500 @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                    id="mailstop" type="text" name="mailstop" value="{{ $user->mailstop }}">
                @error('mailstop')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>
            <div class="w-1/3 px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="dol_employee">
                    This user is a WA DOL employee
                </label>
                <input
                    class="bg-gray-200 text-gray-700 @error('dol_employee') border border-red-500 @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                    id="dol_employee" type="radio" name="dol_employee" value="1" @if($user->dol_employee) checked
                @endif><span class="mx-4">Yes</span>
                <input
                    class="bg-gray-200 text-gray-700 @error('dol_employee') border border-red-500 @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                    id="dol_employee" type="radio" name="dol_employee" value="0" @if(!$user->dol_employee) checked
                @endif><span class="mx-4">No</span>
                @error('dol_employee')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="flex flex-wrap justify-end my-2">
            <button class="py-2 px-4 bg-red-700 text-white font-thin tracking-wide leading-snug grow" type="submit">Edit
                User</button>
        </div>
    </form>
</div>
@endsection