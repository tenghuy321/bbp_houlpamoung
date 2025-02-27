<x-app-layout>
    <div class="max-w-4xl mx-auto bg-white shadow-md rounded-lg p-6 my-2">
        <h2 class="text-2xl font-bold">Edit Cateogry</h2>
        <form action="{{ route('category.update', $category->id) }}" method="POST" class="space-y-4">
            @csrf
            @method('PATCH')
            @component('admin.components.alert')
            @endcomponent
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                <input value="{{ old('name', $category->name) }}"
                    type="text" name="name" id="name" class="mt-1 block w-full p-2 border rounded-md focus:ring-[#580B0C] focus:border-[#580B0C] text-sm text-[#580B0C]">
                <x-input-error class="mt-2" :messages="$errors->get('name')" />
            </div>

            <div class="flex justify-between">
                <a href="{{ route('category.index') }}"
                    class="border border-[#580B0C] hover:!bg-[#580B0C] hover:!text-[#ffffff] px-4 md:px-6 py-1 rounded-[5px] text-[#580B0C]">
                    Back
                </a>

                <button type="submit" class="bg-[#580B0C] text-white px-4 md:px-6 py-1 rounded-[5px]">Submit</button>
            </div>
        </form>
    </div>


</x-app-layout>
