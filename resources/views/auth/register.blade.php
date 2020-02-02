@extends('layout')

@section('content')
<form method="POST" action="{{ route('register') }}">
    @csrf
    <div class="container mx-auto mt-10 bg-white shadow-xl rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-10">
        <h1 class="text-4xl font-thin mb-8">Register</h1>
        <div class="-mx-3 md:flex mb-6">
            <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                    for="grid-first-name">
                    Name
                </label>
                <input
                    class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3"
                    id="grid-first-name" name="name" type="text" placeholder="Jane Doe" required autocomplete="name"
                    autofocus>
                @error('name')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>
            <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                    for="grid-first-email">
                    Email
                </label>
                <input
                    class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3"
                    id="grid-first-name" type="text" name="email" placeholder="Jane@example.com" required>
                @error('email')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="-mx-3 md:flex">
            <div class="md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                    for="grid-password">
                    {{ __('Password') }}
                </label>
                <input
                    class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3 @error('password') border-red-500 @enderror"
                    id="grid-password" name="password" type="password" placeholder="******************" required>
                @error('password')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>
            <div class="md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                    for="grid-password">
                    {{ __('Confirm Password') }}
                </label>
                    <input id="password-confirm" type="password" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3"
                                    name="password_confirmation" required autocomplete="new-password" placeholder="******************">
                @error('password')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="-mx-3 md:flex mb-2">
            <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-city">
                    City
                </label>
                <input
                    class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4"
                    id="grid-city" type="text" name="city" placeholder="Albuquerque" required>
            </div>
            <div class="md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-state">
                    State
                </label>
                <div class="relative">
                    <select
                        class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded"
                        id="grid-state" name="state" required>
                        <option>Washington</option>
                        <option>Oregon</option>
                        <option>California</option>
                    </select>
                </div>
            </div>
            <div class="md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-zip">
                    Zip
                </label>
                <input
                    class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4"
                    id="grid-zip" type="text" name="zip" placeholder="90210" required>
            </div>
        </div>
        <div class="-mx-3 md:flex mb-2 mt-2">
            <div class="md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-state">
                    Mailstop
                </label>
                <div class="relative">
                    <input
                        class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4"
                        id="mailstop" type="text" placeholder="48105" name="mailstop">
                    <p class="text-grey-dark text-xs italic">Provide a mailstop to have purchases delivered at work.</p>
                </div>
            </div>
            <div class="md:w-1/2 px-3 mt-2 flex flex-col items-end">
                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-state">
                    Are you an employee of WA Department of Licensing?
                </label>
                <div class="relative">
                    <input
                        class="form-checkbox bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mx-4"
                        id="mailstop" type="radio" name="dol_employee" value="1">Yes
                    <input
                        class="form-checkbox bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mx-4"
                        id="mailstop" type="radio" name="dol_employee" value="0" checked>No
                </div>
            </div>
        </div>
        <div class="flex justify-end mt-10">
            <div class="">
                <button type="submit" class="px-6 py-4 border-2 text-white bg-red-700 bounce">
                    {{ __('Register') }}
                </button>
            </div>
        </div>
    </div>
</form>

@endsection