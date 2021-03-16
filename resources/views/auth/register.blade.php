@extends('layouts.master')

@section('content')
    <body class="flex flex-col items-center justify-center w-screen h-screen bg-gray-200 text-gray-700">

    <!-- Component Start -->
    <form class="flex flex-col bg-white rounded shadow-lg p-10" action="{{ route('register') }}" method="POST">
        @csrf
        <h3 class="mb-4 text-center text-2xl font-bold">Register</h3>

        @error('name')
        <span class="invalid-feedback" role="alert">
                                        <strong>name: {{ $message }}</strong>
                                    </span>
        @enderror
        @error('email')
        <span class="invalid-feedback" role="alert">
                                        <strong>email: {{ $message }}</strong>
                                    </span>
        @enderror
        @error('password')
        <span class="invalid-feedback" role="alert">
                                        <strong>password: {{ $message }}</strong>
                                    </span>
        @enderror

        <input class="flex items-center h-12 px-4 w-64 bg-gray-200 mt-2 rounded focus:outline-none focus:ring-2"
               type="text" name="name" placeholder="name" required autocomplete="name" autofocus>

        <input class="flex items-center h-12 px-4 w-64 bg-gray-200 mt-2 rounded focus:outline-none focus:ring-2"
               type="text" name="email" placeholder="E-mail" required autocomplete="email" autofocus>

        <input class="flex items-center h-12 px-4 w-64 bg-gray-200 mt-2 rounded focus:outline-none focus:ring-2"
               type="password" name="password" placeholder="Password" required autocomplete="password">

        <input class="flex items-center h-12 px-4 w-64 bg-gray-200 mt-2 rounded focus:outline-none focus:ring-2"
               type="password" name="password_confirmation" placeholder="Confirm password" required autocomplete="email">

        <input class="flex items-center h-12 px-4 w-64 bg-gray-200 mt-2 rounded focus:outline-none focus:ring-2"
               type="text" name="phone" placeholder="Phone number" required autocomplete="phone">

        <input class="flex items-center h-12 px-4 w-64 bg-gray-200 mt-2 rounded focus:outline-none focus:ring-2"
               type="text" name="gender" placeholder="Gender" required>


        {{-- actions --}}
        <button class="flex items-center justify-center h-12 px-6 w-64 bg-blue-600 mt-8 rounded font-semibold text-sm text-blue-100 hover:bg-blue-700">
            Submit
        </button>

        <p class="text-center mt-4">
            Already have an account?
            <a href="{{ route('login') }}" class="font-bold hover:text-gray-900">Login</a>
        </p>

    </form>

    </body>
@endsection
