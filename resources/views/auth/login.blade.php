@extends('layout')

@section('content')
<div class="bg-gray-100 h-screen w-screen -mt-32">
    <div class="flex flex-col items-center flex-1 h-full justify-center px-4 sm:px-0">
        <div class="flex rounded-lg shadow-lg w-full sm:w-3/4 lg:w-1/2 bg-white sm:mx-0" style="height: 500px">
            <div class="flex flex-col w-full md:w-1/2 p-4">
                <div class="flex flex-col flex-1 justify-center mb-8">
                    <h1 class="text-4xl text-center font-thin">Welcome Back</h1>
                    <div class="w-full mt-4">
                        <form class="form-horizontal w-3/4 mx-auto" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="flex flex-col mt-4">
                                <input id="email" type="text"
                                    class="flex-grow h-8 px-2 border rounded border-gray-400 @error('email') border-red-400 @enderror""
                                    name=" email" value="{{ old('email') }}" placeholder="Email" autocomplete="email"
                                    autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="flex flex-col mt-4">
                                <input id="password" type="password"
                                    class="flex-grow h-8 px-2 rounded border border-grey-400" name="password" required
                                    placeholder="Password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="flex items-center mt-4">
                                <input type="checkbox" name="remember" id="remember" class="mr-2"
                                    {{ old('remember') ? 'checked' : '' }}> <label for="remember"
                                    class="text-sm text-grey-dark">Remember Me</label>
                            </div>
                            <div class="flex flex-col mt-8">
                                <button type="submit"
                                    class="gradient text-white text-sm font-semibold py-2 px-4 rounded bounce">
                                    Login
                                </button>
                            </div>
                        </form>
                        <div class="flex justify-around text-center mt-4">
                            <a class="no-underline hover:underline text-blue-dark text-xs" href="/register">Register</a>
                            @if (Route::has('password.request'))
                            <a class="no-underline hover:underline text-blue-dark text-xs"
                                href="{{ route('password.request') }}">
                                Forgot Your Password?
                            </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="hidden md:block md:w-1/2 rounded-r-lg"
                style="background: url('{{ asset('img/shot10.jpg') }}'); background-size: cover; background-position: center center;">
            </div>
        </div>
    </div>
</div>
@endsection