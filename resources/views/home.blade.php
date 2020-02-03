@extends('layout')

@section('content')
<div class="container mx-auto my-6 p-6">
    <div class="h-screen">
        <div class="text-4xl font-thin text-gray-800 leading-tight">Dashboard</div>
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @endif
        <div class="flex flex-col mt-6">
            <section class="bg-white py-4 font-sans">
                <div class="container m-auto flex items-baseline justify-start border-b-2 border-gray-300 mb-10">
                    <h2 class="text-gray-700 text-base font-bold tracking-wide uppercase py-4 px-6">Profile</h2>
                    <h2 class="text-base font-bold tracking-wide uppercase py-4 px-6 border-b-2 border-black -mb-4">
                        Orders</h2>
                    <h2 class="text-gray-700 text-base font-bold tracking-wide uppercase py-4 px-6">Payment</h2>
                    <h2 class="text-gray-700 text-base font-bold tracking-wide uppercase py-4 px-6">Subsciptions</h2>
                </div>
            </section>
            <ul class="font-sans list-none p-0 container m-auto text-gray-900">
                <li class="inline-block border-b border-gray-300 flex justify-between items-center py-4">
                    <div class="flex items-start w-2/5">
                        <div class="w-10 h-10 rounded mr-3">
                            <div class="rounded-full h-10 w-10 bg-gray-300 m-auto"></div>
                        </div>
                        <div class="flex-1 overflow-hidden">
                            <div>
                                <span class="font-bold">Order #00150</span>
                                <span class="text-gray-700 text-xs"></span>
                            </div>
                            <p class="text-black leading-normal">02-02-2020</p>
                        </div>
                    </div>
                    <p class="w-2/5 hover:underline">View Order Details</p>
                    <label for="status" class="font-bold w-1/5 text-right">Shipping</label>
                </li>
                <ul class="font-sans list-none p-0 container m-auto text-gray-900">
                    <li class="inline-block border-b border-gray-300 flex justify-between items-center py-4">
                        <div class="flex items-start w-2/5">
                            <div class="w-10 h-10 rounded mr-3">
                                <div class="rounded-full h-10 w-10 bg-gray-300 m-auto"></div>
                            </div>
                            <div class="flex-1 overflow-hidden">
                                <div>
                                    <span class="font-bold">Order #00151</span>
                                    <span class="text-gray-700 text-xs"></span>
                                </div>
                                <p class="text-black leading-normal">02-02-2020</p>
                            </div>
                        </div>
                        <p class="w-2/5 hover:underline">View Order Details</p>
                        <label for="status" class="font-bold w-1/5 text-right">Delivered</label>
                    </li>
                    <ul class="font-sans list-none p-0 container m-auto text-gray-900">
                        <li class="inline-block border-b border-gray-300 flex justify-between items-center py-4">
                            <div class="flex items-start w-2/5">
                                <div class="w-10 h-10 rounded mr-3">
                                    <div class="rounded-full h-10 w-10 bg-gray-300 m-auto"></div>
                                </div>
                                <div class="flex-1 overflow-hidden">
                                    <div>
                                        <span class="font-bold">Order #00149</span>
                                        <span class="text-gray-700 text-xs"></span>
                                    </div>
                                    <p class="text-black leading-normal">02-02-2020</p>
                                </div>
                            </div>
                            <p class="w-2/5 hover:underline">View Order Details</p>
                            <label for="status" class="font-bold w-1/5 text-right">Payment Pending</label>
                        </li>
                    </ul>
        </div>
    </div>
</div>
@endsection