@extends('index')

@section('body')
    <div class="h-screen flex-1 flex flex-col bg-gray-800 py-4 lg:py-8 px-4 lg:px-6 xl:px-8 overflow-hidden">
        <!-- topbar -->
        <div class="max-w-screen-2xl w-full mx-auto flex justify-between">
            <div>
                <h1 class="text-2xl mb-1 font-bold text-blue-100">Orders overview</h1>
                <p class="text-lg text-blue-200 hidden lg:block">{{ $order->count() }} items</p>
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
        <!--/ end topbar -->

        <!-- main content -->
        <div class="bg-gray-700 overflow-hidden overflow-y-scroll rounded-lg mt-8">
            <div class="flex flex-row">
                <!-- column 1 -->
                <div class="flex flex-grow flex-col mr-4">
                    <!-- Detail Table -->
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full table-fixed">
                            <!-- header -->
                            <thead class="">
                            <tr>
                                <th class="w-1 px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                    ID
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                    Name
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                    Price
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                    Quantity
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                    Total
                                </th>
                            </tr>
                            </thead>

                            <!-- body -->
                            <tbody class="divide-y divide-gray-600 text-blue-100 text-opacity-80">
                            @foreach($order->orderDetail as $detail)
                                <tr>
                                    <td class="px-6 py-4 ">
                                        <div class="text-base text-gray-900">{{ $detail->id }}</div>
                                    </td>
                                    <td class="px-6 py-4 ">
                                        <div class="text-base text-gray-900">{{ $detail->product->name }}</div>
                                    </td>
                                    <td class="px-6 py-4 ">
                                        <div class="text-base text-gray-900">{{ $detail->product->price }}</div>
                                    </td>
                                    <td class="px-6 py-4 ">
                                        <div class="text-base text-gray-900">{{ $detail->quantity}}</div>
                                    </td>
                                    <td class="px-6 py-4 ">
                                        <div class="text-base text-gray-900">{{ $detail->total }}</div>
                                    </td>
                                </tr>
                            @endforeach
                            <tr>
                                <td colspan="5" class="px-6 py-4 text-right">
                                    <div class="text-lg font-semibold text-gray-600">Total bill: {{ $order->total }}</div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- column 2 -->
                <div class="flex flex-shrink flex-col mr-4">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <div class="w-full px-6 py-3">
                            <p class="text-xs font-medium text-center text-gray-600 uppercase tracking-wider">User</p>
                        </div>
                        <div class="px-6 py-2 flex flex-row ">
                            <p class="font-semibold text-gray-600">Name: &nbsp;</p>
                            <p>{{ $order->user->name }}</p>
                        </div>
                        <div class="px-6 py-2 flex flex-row ">
                            <p class="font-semibold text-gray-600">Phone number: &nbsp;</p>
                            <p>{{ $order->user->phone }}</p>
                        </div>
                        <div class="px-6 py-2 flex flex-row ">
                            <p class="font-semibold text-gray-600">Email:&nbsp; </p>
                            <p>{{ $order->user->email }}</p>
                        </div>
                        <div class="px-6 py-2 flex flex-row ">
                            <p class="font-semibold text-gray-600">Date: &nbsp;</p>
                            <p>{{ $order->created_at }}</p>
                        </div>
                        <div class="px-6 py-2 flex flex-row">
                            <p class="font-semibold text-gray-600">Address: &nbsp;</p>
                            <div class="flex flex-row divide-x divide-gray-400">
                                <ul class="list-inside list-disc">
                                    <li>{{ $order->address->city }}</li>
                                    <li>{{$order->address->district }}</li>
                                    <li>{{ $order->address->ward }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!--/ end main content -->
    </div>
@endsection
