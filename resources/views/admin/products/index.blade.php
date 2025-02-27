@extends('admin.layouts.app')
@section('header')
    Product Page
@endsection
@section('content')
    <div class="">
        <div class="my-3 md:my-4 text-end">
            <a href="{{ route('product.create') }}" class="hover:!bg-[#580B0C] hover:!text-[#ffffff] text-[#580B0C] px-4 py-2 my-3 rounded-[5px] border-2 border-[#580B0C] text-[12px] sm:text-[14px]">
                <span class="">Add new</span>
            </a>
        </div>

        @component('admin.components.alert')
        @endcomponent

        <div class="overflow-x-auto">
            <table class="min-w-full border border-gray-200">
                <thead class="bg-[#580B0C] text-white">
                    <tr>
                        <th class="text-left py-3 px-4 text-[12px]">#</th>
                        <th class="text-left py-3 px-4 text-[12px]">Image</th>
                        {{-- <th class="text-left py-3 px-4 text-[12px]">Name</th> --}}
                        <th class="text-left py-3 px-4 text-[12px]">Code</th>
                        <th class="text-left py-3 px-4 text-[12px]">Price</th>
                        {{-- <th class="text-left py-3 px-4 text-[12px]">Description</th> --}}
                        <th class="text-left py-3 px-4 text-[12px]">Category</th>
                        <th class="text-left py-3 px-4 text-[12px]">Action</th>
                    </tr>
                </thead>

                <tbody class="text-gray-700">
                    @foreach ($products as $index => $product)
                        <tr>
                            <td class="text-left py-3 px-4 text-[10px] md:text-[12px]">{{ $product->auto_number }}</td>
                            <td class="text-left py-3 px-4 text-[10px] md:text-[12px]">
                                <img src="{{ asset($product->image) }}" alt="" class="w-12 h-10">
                            </td>
                            {{-- <td class="text-left py-3 px-4 text-[10px] md:text-[12px] max-w-[100px] truncate">{{ $product->name }}</td> --}}
                            <td class="text-left py-3 px-4 text-[10px] md:text-[12px] max-w-[100px] truncate">{{ $product->code }}</td>
                            <td class="text-left py-3 px-4 text-[10px] md:text-[12px]">{{ $product->price }}</td>
                            {{-- <td class="text-left py-3 px-4 text-[10px] md:text-[12px] max-w-[200px] truncate">
                                <div class="line-clamp-2 md:line-clamp-4">
                                    {{ $product->description }}
                                </div>
                            </td> --}}
                            <td class="text-left py-3 px-4 text-[10px] md:text-[12px]">{{ $product->cname }}</td>
                            <td class="text-left py-3 px-4">
                             <div class="flex">
                                <a href="{{ route('product.delete', $product->id) }}" title="Delete"
                                    onclick="event.preventDefault(); deleteRecord('{{ route('product.delete', $product->id) }}')">
                                    <svg class="w-6 h-6 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="24" height="24" stroke-width="2"> <path d="M4 7l16 0"></path> <path d="M10 11l0 6"></path> <path d="M14 11l0 6"></path> <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path> <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path> </svg>
                                </a>
                                <a href="{{ route('product.edit', $product->id) }}" title="Edit">
                                    <svg class="w-6 h-6 text-green-500 hover:text-green-700 transition" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="24" height="24" stroke-width="2"> <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"></path> <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z"></path> <path d="M16 5l3 3"></path> </svg>
                                </a>
                             </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <hr class="border-2 border-b-[#580B0C] my-3">
        <div class="pt-4">
            {{ $products->links() }}
        </div>

    </div>
@endsection

