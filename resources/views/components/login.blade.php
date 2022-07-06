@extends('layouts.app')
@section('content')
    <div class="flex items-center justify-center min-h-screen bg-gray-100">
        <div class="px-8 py-6 mx-4 mt-4 text-left bg-white shadow-lg md:w-1/3 lg:w-1/3 sm:w-1/3">
            <form action="{{ route('login.custom') }}" method="POST">
                <h3 class="text-2xl font-bold text-center">Hekto</h3>

                <div class="mt-4">
                    <div class="mt-4">
                        @csrf
                        <input type="text" placeholder="Email" id="email" name="email" required autofocus
                            class=" form-control w-full form-control px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600" />
                        @if ($errors->has('email'))
                            <span class="text-pink-500">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                    <div class="mt-4">

                        <input type="password" placeholder="Password" id="password" name="password " required autofocus
                            class="form-control w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600" />
                        @if ($errors->has('password'))
                            <span class="text-pink-500">{{ $errors->first('password') }}</span>
                        @endif
                    </div>
                    
                    <div class="flex">
                        <button type="submit
                        "
                            class="w-full px-6 py-2 mt-4 text-white bg-purple-800 rounded-lg hover:bg-purple-900">Log
                            in</button>
                    </div>
                    <div>
                        <a class="text-blue-600 hover:underline" href="/registration">
                            Create a new Account
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
