@extends('layouts.app')
@section('content')

<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="px-8 py-6 mx-4 mt-4 text-left bg-white shadow-lg md:w-1/3 lg:w-1/3 sm:w-1/3">
        <h3 class="text-2xl font-bold text-center">Hekto</h3>
        <form method="POST" action="{{route('register.custom')}}">
            <div class="mt-4">
                <div>
                    @csrf
                    <label class="block" for="Name" >Name<label>
                            <input type="text" placeholder="Name" id="name" name="name" required autofocus
                                class="form-control w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                                @if ($errors->has('name'))
                                <span class="text-pink-500">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                <div class="mt-4">
                    <label class="block" for="email">Email<label>
                            <input type="text" placeholder="Email" id="email" name="email" required autofocus
                                class="form-control w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                                @if ($errors->has('email'))
                                <span class="text-pink-500">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                <div class="mt-4">
                    <label class="block">Password<label>
                            <input type="password" placeholder="Password" required autofocus id="password" name="password"
                                class="form-control w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                                @if ($errors->has('password'))
                                <span class="text-pink-500">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                <div class="flex">
                    <button class="w-full px-6 py-2 mt-4 text-white bg-purple-800 rounded-lg hover:bg-purple-900">Create
                        Account</button>
                </div>
                <div class="mt-6 text-grey-dark">
                    Already have an account?
                    <a class="text-blue-600 hover:underline" href="/login">
                        Log in
                    </a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection