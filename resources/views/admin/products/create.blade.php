<x-app-layout>
    <div class="max-w-4xl mx-auto bg-white shadow-md rounded-lg p-6 my-2">
        <h2 class="text-2xl font-bold">Create Product</h2>
        <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf
            @component('admin.components.alert')
            @endcomponent
            {{-- <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                <input value="{{ old('name') }}" type="text" name="name" id="name"
                    class="mt-1 block w-full p-2 border rounded-md focus:ring-[#580B0C] focus:border-[#580B0C] text-sm text-[#580B0C]">
                <x-input-error class="mt-2" :messages="$errors->get('name')" />
            </div> --}}
            <div>
                <label for="code" class="block text-sm font-medium text-gray-700">Code</label>
                <input value="{{ old('code') }}" type="text" name="code" id="code"
                    class="mt-1 block w-full p-2 border rounded-md focus:ring-[#580B0C] focus:border-[#580B0C] text-sm text-[#580B0C]">
                <x-input-error class="mt-2" :messages="$errors->get('code')" />
            </div>
            <div>
                <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
                <input value="{{ old('price') }}" type="text" name="price" id="price"
                    class="mt-1 block w-full p-2 border rounded-md focus:ring-[#580B0C] focus:border-[#580B0C] text-sm text-[#580B0C]">
                <x-input-error class="mt-2" :messages="$errors->get('price')" />
            </div>
            {{-- <div>
                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                <input value="{{ old('description') }}" type="text" name="description" id="description"
                    class="mt-1 block w-full p-2 border rounded-md focus:ring-[#580B0C] focus:border-[#580B0C] text-sm text-[#580B0C]">
                <x-input-error class="mt-2" :messages="$errors->get('description')" />
            </div> --}}

            <div>
                <label for="category_id" class="block text-sm font-medium text-gray-700">Category</label>
                <select
                    class="w-full rounded-md mt-1 focus:ring-[#580B0C] focus:border-[#580B0C] text-sm text-[#580B0C]"
                    name="category_id" id="category_id">
                    <option value="">Select One</option>
                    @foreach ($cats as $c)
                        <option value="{{ $c->id }}">{{ $c->name }}</option>
                    @endforeach
                </select>
                <x-input-error class="mt-2" :messages="$errors->get('description')" />
            </div>

            <!-- Dropzone for Image -->
            <div>
                <label for="dropzone-file" id="drop-area"
                    class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50">
                    <div class="flex flex-col items-center justify-center pt-5 pb-6 w-full h-full bg-cover bg-no-repeat rounded-md text-center"
                        id="img-preview">
                        <svg class="w-8 h-8 mb-4 text-[#580B0C]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 20 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                        </svg>
                        <p class="mb-2 text-[12px] sm:text-[14px] text-[#580B0C]"><span class="font-semibold">Click to
                                upload</span> or drag and drop</p>
                        <p class="text-xs text-[#580B0C]">SVG, PNG, JPG or GIF (MAX. 5MB)</p>
                    </div>
                    <input id="dropzone-file" type="file" class="hidden" name="image"
                        accept="image/*" onchange="uploadImage(event)" />
                </label>
                <x-input-error class="mt-2" :messages="$errors->get('image')" />
            </div>

            <div class="flex justify-between">
                <a href="{{ route('product.index') }}"
                    class="border border-[#580B0C] hover:!bg-[#580B0C] hover:!text-[#ffffff] px-4 md:px-6 py-1 rounded-[5px] text-[#580B0C]">
                    Back
                </a>

                <button type="submit" class="bg-[#580B0C] text-white px-4 md:px-6 py-1 rounded-[5px]">Submit</button>
            </div>
        </form>
    </div>

    <script>
        const dropArea = document.getElementById('drop-area');
        const imageFile = document.getElementById('dropzone-file');
        const imagePreview = document.getElementById('img-preview');

        function uploadImage(event) {
            const file = event.target.files[0];
            if (file) {
                const imgLink = URL.createObjectURL(file);
                imagePreview.style.backgroundImage = `url(${imgLink})`;
                imagePreview.style.backgroundSize = "cover";
                imagePreview.style.backgroundPosition = "center";
                imagePreview.innerHTML = "";
            }
        }

        // Drag-and-drop functionality
        dropArea.addEventListener('dragover', (event) => {
            event.preventDefault();
            dropArea.classList.add('border-blue-500');
        });

        dropArea.addEventListener('dragleave', () => {
            dropArea.classList.remove('border-blue-500');
        });

        dropArea.addEventListener('drop', (event) => {
            event.preventDefault();
            dropArea.classList.remove('border-blue-500');
            const file = event.dataTransfer.files[0];
            if (file) {
                const imgLink = URL.createObjectURL(file);
                imagePreview.style.backgroundImage = `url(${imgLink})`;
                imagePreview.style.backgroundSize = "cover";
                imagePreview.style.backgroundPosition = "center";
                imagePreview.innerHTML = ""; // Clear the default content inside preview
                imageFile.files = event.dataTransfer.files; // Attach the dropped file to input
            }
        });
    </script>
</x-app-layout>
