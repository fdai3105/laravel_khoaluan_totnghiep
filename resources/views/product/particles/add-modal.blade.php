<head>
    <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet" />
    <script src="{{ mix('js/app.js') }}"></script>
</head>
<div id="add-product-modal" class="fixed z-10 inset-0 overflow-y-auto hidden text-gray-800">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 transition-opacity" onclick="addProductModal()">
            <div class="absolute inset-0 bg-black opacity-60"></div>
        </div>

        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

        <div class="w-1/2 bg-white inline-block align-bottom rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                {{-- footer body --}}
                <div class="px-4 py-4">
                    <h3 class="text-lg mb-2 leading-6 font-medium text-gray-900">Add product</h3>

                    <div class="flex flex-row">
                        {{-- column 1 --}}
                        <div class="flex-1 mr-4">
                            <div class="mb-4">
                                <label for="name" class="text-xs font-semibold">Name</label>
                                <input type="text" name="name"
                                       class="mt-1 px-2 h-10 w-full border border-gray-300 focus:outline-none focus:ring focus:ring-gray-600 text-sm rounded-md">
                            </div>

                            <div class="mb-4">
                                <label for="name" class="text-xs font-semibold">Price</label>
                                <input type="number" name="price"
                                       class="mt-1 px-2 h-10 w-full border border-gray-300 focus:outline-none focus:ring focus:ring-gray-600 text-sm rounded-md">
                            </div>

                            <div class="mb-4">
                                <label for="name" class="text-xs font-semibold">Sort desc</label>
                                <input type="text" name="sort_desc"
                                       class="mt-1 px-2 py-2 w-full border border-gray-300 focus:outline-none focus:ring focus:ring-gray-600 text-sm rounded-md">
                            </div>

                            <div class="mb-4">
                                <label for="name" class="text-xs font-semibold">Desc</label>
                                <textarea type="text" name="desc"
                                          class="mt-1 px-2 py-2 h-32 w-full border border-gray-300 focus:outline-none focus:ring focus:ring-gray-600 text-sm rounded-md"></textarea>
                            </div>
                        </div>

                        {{-- column 2 --}}
                        <div class="flex-1">
                            <div class="flex mb-4">
                                <div class="flex-1 mr-2">
                                    <label for="name" class="text-xs font-semibold">Brand</label>
                                    <select name="brand_id" class="mt-1 px-2 h-10 w-full border border-gray-300 focus:outline-none focus:ring focus:ring-gray-600 text-sm rounded-md">
                                        @foreach($brands as $brand)
                                            <div class="px-2 py-2">
                                                <option value="{{$brand->id}}" class="block px-4 py-2 bg-transparent text-sm text-gray-700 focus:outline-none focus:bg-gray-400 hover:bg-current hover:text-gray-900">
                                                    {{$brand->name}}
                                                </option>
                                            </div>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="flex-1 ml-2">
                                    <label for="name" class="text-xs font-semibold">Category</label>
                                    <select name="category_id" class="mt-1 px-2 h-10 w-full border border-gray-300 focus:outline-none focus:ring focus:ring-gray-600 text-sm rounded-md">
                                        @foreach($categories as $category)
                                            <optgroup label="{{ $category->name }}">
                                                @foreach($category->sub as $sub)
                                                    <div class="px-2 py-2">
                                                        <option value="{{$sub->id}}" class="block px-4 py-2 bg-transparent text-sm text-gray-700 focus:outline-none focus:bg-gray-400 hover:bg-current hover:text-gray-900">
                                                            {{$sub->name}}
                                                        </option>
                                                    </div>
                                                @endforeach
                                            </optgroup>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="mb-4">
                                <label for="name" class="text-xs font-semibold">Stock</label>
                                <input type="number" name="stock" value="20"
                                       class="mt-1 px-2 h-10 w-full border border-gray-300 focus:outline-none focus:ring focus:ring-gray-600 text-sm rounded-md">
                            </div>

                            <div class="flex flex-row mb-4">
                                <div class="flex-1 mr-2">
                                    <label for="name" class="text-xs font-semibold">Warranty</label>
                                    <input type="number" name="warranty" value="12"
                                           class="mt-1 px-2 h-10 w-full border border-gray-300 focus:outline-none focus:ring focus:ring-gray-600 text-sm rounded-md">
                                </div>

                                <div class="flex-1 ml-2">
                                    <label for="name" class="text-xs font-semibold">Discount</label>
                                    <input type="number" name="discount" value="0"
                                           class="mt-1 px-2 h-10 w-full border border-gray-300 focus:outline-none focus:ring focus:ring-gray-600 text-sm rounded-md">
                                </div>
                            </div>


                            <div class="mb-8">
                                <label for="name" class="text-xs font-semibold">Images</label>
                                <br>
                                <input name="images[]" type="file" accept="image/*" {{--id="filepond"--}} multiple>
                            </div>

                            <div id="attribute_fields" class="mb-4">
                                <div class="flex flex-row align-middle justify-between">
                                    <label for="name" class="text-xs font-semibold">Attributes</label>
                                    <button type="button" onclick="addAttributeField()">
                                        <svg class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </div>
                                <div class="mt-1 flex flex-row align-middle">
                                    <input type="text" name="attributes[]"
                                           class="w-full h-10 px-2 mr-2 border border-gray-300 focus:outline-none focus:ring focus:ring-gray-600 text-sm rounded-md">
                                    <select name="attribute_type[]"
                                            class="px-2 h-10 w-28 mr-2 border border-gray-300 focus:outline-none focus:ring focus:ring-gray-600 text-sm rounded-md">
                                        @foreach($attributes as $attribute)
                                            <div class="px-2 py-2">
                                                <option value="{{ $attribute->id }}" class="block px-4 py-2 bg-transparent text-sm text-gray-700 focus:outline-none focus:bg-gray-400 hover:bg-current hover:text-gray-900">
                                                    {{ $attribute->name }}
                                                </option>
                                            </div>
                                        @endforeach
                                    </select>
                                    <button type="button" class="text-white outline-none focus:outline-none" onclick="removeAttributeField()">
                                        <div class="flex justify-center items-center h-10 w-10 bg-red-600 rounded-lg">
                                            <svg class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- footer modal --}}
                <div class="bg-gray-100 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    <button type="button"
                            class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm"
                            onclick="addProductModal()">
                        Cancel
                    </button>
                    <button type="submit"
                            class="bg-gray-800 hover:bg-gray-700  w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 text-base font-medium text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-700 sm:ml-3 sm:w-auto sm:text-sm">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://unpkg.com/filepond/dist/filepond.js"></script>
<script>
    const inputElement = document.getElementById('filepond');

    function addProductModal() {
        const modal = document.getElementById("add-product-modal")
        if (modal.classList.contains("hidden")) {
            modal.classList.remove('hidden')
        } else {
            modal.classList.add('hidden')
        }
    }

    function addAttributeField() {
        const ele = '<div class="mt-1 flex flex-row align-middle"> ' +
            '<input type="text" name="attributes[]"class="w-full h-10 px-2 mr-2 border border-gray-300 focus:outline-none focus:ring focus:ring-gray-600 text-sm rounded-md">' +
            '<select name="attribute_type[]"class="px-2 h-10 w-28 mr-2 border border-gray-300 focus:outline-none focus:ring focus:ring-gray-600 text-sm rounded-md">' +
            '@foreach($attributes as $attribute)<div class="px-2 py-2"> <option name="attribute_type[]" value="{{$attribute->id}}" class="block px-4 py-2 bg-transparent text-sm text-gray-700 focus:outline-none focus:bg-gray-400 hover:bg-current hover:text-gray-900">{{$attribute->name}}</option> </div>@endforeach' +
            '</select>' +
            '<button type="button" class="text-white outline-none focus:outline-none" onclick="removeAttributeField()">' +
            '<div class="flex justify-center items-center h-10 w-10 bg-red-600 flex justify-center align-middle rounded-lg">' +
            '<svg class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg"> ' +
            '<path d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"/>' +
            '</svg></div></button></div>'
        $('#attribute_fields').append(ele)
    }

    function removeAttributeField() {
        if ($('#attribute_fields').children().length <= 2) return
        $('#attribute_fields').children().last().remove()
    }
</script>
