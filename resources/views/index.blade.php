@extends('layouts.master')

@section('content')
    <div class="flex flex-col lg:flex-row min-h-screen font-semibold text-blue-100 text-base subpixel-antialiased">
        @include('layouts.sidebar')
        @yield('body')
    </div>
@endsection
