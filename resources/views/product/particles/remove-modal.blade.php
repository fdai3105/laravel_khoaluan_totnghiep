<div id="remove-category-modal-{{$id}}" class="fixed z-10 inset-0 overflow-y-auto hidden">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 transition-opacity" onclick="removeCategoryModal({{ $id }})">
            <div class="absolute inset-0 bg-black opacity-60"></div>
        </div>

        <!-- This element is to trick the browser into centering the modal contents. -->
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

        <div class="bg-white inline-block align-bottom rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">

            {{-- modal body --}}
            <form action="{{ route('product.destroy',$id) }}" method="POST">
                @csrf
                @method("DELETE")
                <div class="px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="flex">
                        <div class="flex-none h-10 w-10 flex items-center justify-center rounded-full bg-red-100 bg-gray-800">
                            <div class="mx-auto items-center justify-center">
                                <svg class="h-6 w-6 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                </svg>
                            </div>
                        </div>
                        <div class="ml-4 text-left">
                            <h3 class="mb-1 text-lg leading-6 font-medium text-gray-900" id="modal-headline">
                                Remove '{{ $name }}'?
                            </h3>
                            <p class="text-sm text-gray-500">
                                Are you sure you want to remove this brand? All of your data will be permanently removed. This action cannot be undone.
                            </p>
                        </div>
                    </div>
                </div>

                {{-- modal footer --}}
                <div class="bg-gray-100 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    <button type="submit"
                            class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">
                        Remove
                    </button>
                    <button type="button"
                            class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm"
                            onclick="removeCategoryModal({{ $id }})">
                        Cancel
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function removeCategoryModal($id) {
        const modal = document.getElementById("remove-category-modal-" + $id)
        if (modal.classList.contains("hidden")) {
            modal.classList.remove('hidden')
        } else {
            modal.classList.add('hidden')
        }
    }
</script>
