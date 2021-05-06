@extends('layouts.master')

@section('content')
    <body class="flex flex-col items-center justify-center w-screen h-screen bg-gray-800 text-gray-700">

    <!-- Component Start -->
    <div class="w-2/6 flex flex-col bg-white rounded shadow-lg p-10">
        <h3 class="mb-4 text-center text-2xl font-bold">Verify Your Email Address</h3>

        @if (session('resent'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                <span class="block sm:inline">A fresh verification link has been sent to your email address</span>
            </div>
        @endif

        <p>
            Before proceeding, please check your email for a verification link.
            If you did not receive the email,
        </p>
        <form method="POST" class="mt-4 flex justify-center" action="{{ route('verification.resend') }}">
            @csrf
            <button type="submit" class="bg-gray-800 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                {{ __('Request Another') }}
            </button>
        </form>
    </div>

    </body>
@endsection
