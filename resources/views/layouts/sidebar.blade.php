<div class="min-h-screen font-semibold text-blue-100 text-base subpixel-antialiased">
    <div class="h-screen bg-gray-900 w-54 px-6 py-2 sticky top-0 hidden lg:flex flex-col shadow-inner">
        <div class="py-4">
            <nav class="flex flex-col md:mt-8 -mx-2">
                <ul class="flex-1 text-base pt-2 space-y-3">
                    <li>
                        <a href="{{ url('/') }}"
                           class="{{ request()->is('/') ? 'bg-gray-700' : 'bg-gray-900' }} hover:bg-gray-800 transition-colors duration-100 text-blue-200 flex items-end py-3 px-4 space-x-2 rounded-lg font-bold">
                            <svg class="w-6 h-6 text-blue-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z"></path>
                            </svg>
                            <span class="flex-1">Dashboard</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('product.index') }}"
                           class="{{ request()->is('product') ? 'bg-gray-700' : 'bg-gray-900' }} hover:bg-gray-700 transition-colors duration-100 text-blue-200 flex items-end py-3 px-4 space-x-2 rounded-lg font-bold text-opacity-70 hover:text-opacity-100">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13 7H7v6h6V7z"></path>
                                <path fill-rule="evenodd" d="M7 2a1 1 0 012 0v1h2V2a1 1 0 112 0v1h2a2 2 0 012 2v2h1a1 1 0 110 2h-1v2h1a1 1 0 110 2h-1v2a2 2 0 01-2 2h-2v1a1 1 0 11-2 0v-1H9v1a1 1 0 11-2 0v-1H5a2 2 0 01-2-2v-2H2a1 1 0 110-2h1V9H2a1 1 0 010-2h1V5a2 2 0 012-2h2V2zM5 5h10v10H5V5z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="flex-1">Product</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('category.index') }}"
                           class="{{ request()->is('category') ? 'bg-gray-700' : 'bg-gray-900' }} hover:bg-gray-700 transition-colors duration-100 text-blue-200 flex items-end py-3 px-4 space-x-2 rounded-lg font-bold text-opacity-70 hover:text-opacity-100">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z"></path>
                            </svg>
                            <span class="flex-1">Categories</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('brand.index') }}"
                           class="{{ request()->is('brand') ? 'bg-gray-700' : 'bg-gray-900' }} hover:bg-gray-700 transition-colors duration-100 text-blue-200 flex items-end py-3 px-4 space-x-2 rounded-lg font-bold text-opacity-70 hover:text-opacity-100">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                                <path d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z"></path>
                            </svg>
                            <span class="flex-1">Brands</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('attribute.index') }}"
                           class="{{ request()->is('attribute') ? 'bg-gray-700' : 'bg-gray-900' }} hover:bg-gray-700 transition-colors duration-100 text-blue-200 flex items-end py-3 px-4 space-x-2 rounded-lg font-bold text-opacity-70 hover:text-opacity-100">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                            </svg>
                            <span class="flex-1">Attributes</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('user.index') }}"
                           class="{{ request()->is('user') ? 'bg-gray-700' : 'bg-gray-900' }} hover:bg-gray-700 transition-colors duration-100 text-blue-200 flex items-end py-3 px-4 space-x-2 rounded-lg font-bold text-opacity-70 hover:text-opacity-100">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"></path>
                            </svg>
                            <span class="flex-1">Users</span>
                        </a>
                    </li>

                </ul>

                {{-- logout --}}
                <div class="fixed bottom-0 ">
                    <a href="{{ route('logout') }}"
                       class="hover:text-gray-600 transition-colors duration-100 text-blue-200 flex items-end py-3 px-4 space-x-2 rounded-lg font-bold text-opacity-70 hover:text-opacity-100">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" />
                        </svg>
                        <span class="flex-1">Logout</span>
                    </a>
                </div>
            </nav>
        </div>
    </div>
</div>
