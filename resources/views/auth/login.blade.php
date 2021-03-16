@extends('layouts.master')

@section('content')
    <body class="flex flex-col items-center justify-center w-screen h-screen bg-gray-200 text-gray-700">

    <!-- Component Start -->
    <form class="flex flex-col bg-white rounded shadow-lg p-10" action="{{ route('login') }}" method="POST">
        @csrf
        <h3 class="mb-4 text-center text-2xl font-bold">Login</h3>

        @if($errors->any())
            {!! implode('', $errors->all('<div>:message</div>')) !!}
        @endif
        <input class="flex items-center h-12 px-4 w-64 bg-gray-200 mt-2 rounded focus:outline-none focus:ring-2"
               type="text" name="email" placeholder="name" required autocomplete="name" autofocus>

        <input class="flex items-center h-12 px-4 w-64 bg-gray-200 mt-2 rounded focus:outline-none focus:ring-2"
               type="password" name="password" placeholder="Password" required autocomplete="password" autofocus>


        {{-- actions --}}
        <button class="flex items-center justify-center h-12 px-6 w-64 bg-blue-600 mt-8 rounded font-semibold text-sm text-blue-100 hover:bg-blue-700">
            Submit
        </button>

        <p class="text-center mt-4">
            Forget password?
            <a href="" class="font-bold hover:text-gray-900">Reset</a>
        </p>

        <p class="text-center mt-4">
            Don't have an account?
            <a href="{{ route('register') }}" class="font-bold hover:text-gray-900">Register</a>
        </p>

    </form>

    </body>
@endsection
