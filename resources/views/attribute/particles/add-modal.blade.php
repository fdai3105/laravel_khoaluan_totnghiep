<div id="add-attribute-modal" class="fixed z-10 inset-0 overflow-y-auto hidden text-gray-800">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 transition-opacity" onclick="addCategoryModal()">
            <div class="absolute inset-0 bg-black opacity-60"></div>
        </div>

        <!-- This element is to trick the browser into centering the modal contents. -->
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

        <div class="w-1/3 bg-white max-w-lg inline-block align-bottom rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <form action="{{ route('attribute.store') }}" method="POST">
                @csrf

                {{-- footer body --}}
                <div class="px-4 py-4">
                    <h3 class="text-lg mb-2 leading-6 font-medium text-gray-900">Add attribute</h3>

                    <label for="name" class="text-xs font-semibold">Name</label>
                    <input type="text" name="name"
                           class="mt-1 px-4 h-10 w-full border border-gray-300 focus:outline-none focus:ring focus:ring-gray-600 text-sm rounded-md">
                </div>

                {{-- footer modal --}}
                <div class="bg-gray-100 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    <button type="button"
                            class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm"
                            onclick="addAttributeModal()">
                        Cancel
                    </button>
                    <button type="submit"
                            class="bg-gray-800 hover:bg-gray-700  w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 text-base font-medium text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function addAttributeModal() {
        const modal = document.getElementById("add-attribute-modal")
        if (modal.classList.contains("hidden")) {
            modal.classList.remove('hidden')
        } else {
            modal.classList.add('hidden')
        }
    }
</script>
