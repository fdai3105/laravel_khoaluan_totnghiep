@extends('index')

@section('body')
    <div class="flex-1 flex flex-col bg-gray-800 py-4 lg:py-8 px-4 lg:px-6 xl:px-8 overflow-hidden">
        <!-- topbar -->
        <div class="max-w-screen-2xl w-full mx-auto flex justify-between">
            <div class="hidden md:block">
                <h1 class="text-2xl mb-1 font-bold text-blue-100">Welcome Abigail</h1>
                <p class="text-lg text-blue-200 hidden lg:block">Dashboard overview</p>
            </div>
            <div class="flex space-x-4 flex-1 justify-between md:justify-end">
                <div class="relative md:max-w-xs w-full">
                    <svg class="w-5 h-5 absolute top-3 left-3 text-blue-100 opacity-70" fill="currentColor"
                         viewBox="0 0 20 20"
                         xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                              d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                              clip-rule="evenodd"></path>
                    </svg>
                    <input type="text"
                           class="bg-gray-600 rounded-lg w-full h-10 pr-4 pl-9 placeholder-blue-200 placeholder-opacity-70 text-blue-100 text-sm font-semibold  focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-60"
                           placeholder="Enter your search term...">
                </div>
                <div class="flex space-x-4">
                    <button type="button"
                            class="bg-gray-600 rounded-lg h-10 px-3 hover:bg-gray-700 focus:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-60">
                        <svg class="w-6 h-6 text-blue-100 opacity-80" fill="currentColor" viewBox="0 0 20 20"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                        </svg>
                    </button>
                    <button type="button"
                            class="bg-gray-600 rounded-lg h-10 px-3 hover:bg-gray-700 focus:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-60 relative">
                        <svg class="w-6 h-6 text-blue-100 opacity-80" fill="currentColor" viewBox="0 0 20 20"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z">
                            </path>
                        </svg>
                        <div
                            class="w-2 h-2 rounded-full bg-red-500 absolute top-3 right-4 ring-2 ring-red-400 ring-opacity-60">
                            &nbsp;
                        </div>
                    </button>
                </div>
            </div>
        </div>
        <!--/ topbar -->

        <!-- main content -->
        <div class="flex-1">
            <div class="bg-gray-700 rounded-lg px-4 lg:px-8 py-4 lg:py-6 mt-8">
                <div class="overflow-x-auto">
                    <div class="align-middle inline-block min-w-full overflow-hidden">
                        <table class="min-w-full">
                            <thead class="text-left bg-gray-600">
                            <tr>
                                <th class="py-2 px-3">ID</th>
                                <th class="py-2 px-3">Product</th>
                                <th class="py-2 px-3">Price</th>
                                <th class="py-2 px-3">Brand</th>
                                <th class="py-2 px-3">Category</th>
                                <th class="py-2 px-3">&nbsp;</th>
                            </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-600 text-blue-100 text-opacity-80 whitespace-nowrap">
                            @foreach($products as $product)
                                <tr>
                                    <td class="py-3 px-3">#{{ $product->id }}</td>
                                    <td class="py-3 px-3">{{ $product->name }}</td>
                                    <td class="py-3 px-3">{{ $product->price }}</td>
                                    <td class="py-3 px-3">{{ $product->brand->name }}</td>
                                    <td class="py-3 px-3">{{ $product->category->name }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!--/ main content -->
    </div>
@endsection
