@extends('index')

@section('body')
    <div class="h-screen flex-1 flex flex-col bg-gray-800 py-4 lg:py-8 px-4 lg:px-6 xl:px-8 overflow-hidden">
        <!-- topbar -->
        <div class="max-w-screen-2xl w-full mx-auto flex justify-between">
            <div>
                <h1 class="text-2xl mb-1 font-bold text-blue-100">Orders overview</h1>
                <p class="text-lg text-blue-200 hidden lg:block">{{ $orders->count() }} items</p>
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

                    {{-- show add product modal --}}
                    <button type="button" onclick="addProductModal()"
                            class="bg-gray-600 rounded-lg h-10 px-3 hover:bg-gray-700 focus:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-60">
                        <svg class="w-6 h-6 text-blue-100 opacity-80" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" />
                        </svg>
                    </button>
                    <button type="button"
                            class="bg-gray-600 rounded-lg h-10 px-3 hover:bg-gray-700 focus:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-60">
                        <svg class="w-6 h-6 text-blue-100 opacity-80" fill="currentColor" viewBox="0 0 20 20"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <!--/ topbar -->

        <!-- main content -->
        <div class="bg-gray-700 overflow-hidden overflow-y-scroll rounded-lg mt-8">
            <table class="table-auto min-w-full text-left">
                <thead>
                <tr>
                    <th class="bg-gray-600 py-2 px-3 sticky top-0">ID</th>
                    <th class="bg-gray-600 py-2 px-3 sticky top-0">User</th>
                    <th class="bg-gray-600 py-2 px-3 sticky top-0">Email</th>
                    <th class="bg-gray-600 py-2 px-3 sticky top-0">Note</th>
                    <th class="bg-gray-600 py-2 px-3 sticky top-0">Total</th>
                    <th class="bg-gray-600 py-2 px-3 sticky top-0">Status</th>
                    <th class="bg-gray-600 py-2 px-3 sticky top-0">Created</th>
                    <th class="bg-gray-600 py-2 px-3 sticky top-0"></th>
                </tr>
                </thead>
                <tbody class="divide-y divide-gray-600 text-blue-100 text-opacity-80">
                @foreach($orders as $order)
                    <tr>
                        <td class="py-3 px-3">#{{ $order->id }}</td>
                        <td class="py-3 px-3">{{ $order->user->name }}</td>
                        <td class="py-3 px-3">{{ $order->user->email }}</td>
                        <td class="py-3 px-3">
                            <p class="w-32 whitespace-nowrap truncate">
                                {{ $order->note }}
                            </p>
                        </td>
                        <td class="py-3 px-3">{{ $order->total }}</td>
                        <td class="py-3 px-3">{{ $order->status }}</td>
                        <td class="py-3 px-3">{{ $order->created_at }}</td>
                        <td class="py-3 px-3">
                            <a href="{{ route('order.show',$order->id) }}">
                                <button type="button"
                                        class="bg-green-600 hover:bg-green-700 rounded-lg h-10 px-3 focus:outline-none focus:ring-2 focus:ring-red-400">
                                    <svg class="w-4 h-4 text-blue-100 opacity-80" fill="currentColor" viewBox="0 0 20 20"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                        <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!--/ main content -->
    </div>
@endsection
