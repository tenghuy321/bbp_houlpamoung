@extends('admin.layouts.app')
@section('header')
    Dashboard
@endsection
@section('content')
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">
        <a href="{{ url('category') }}" class="flex flex-col justify-between text-[#580B0C] border-2 border-[#580B0C] px-4 py-3 h-[150px] rounded-md hover:bg-[#580B0C] hover:text-[#fff] transition-all duration-300">
            <i class="bx bx-category text-[40px]"></i>
            <div class="flex flex-col items-end justify-center text-[14px] md:text-[16px]">
                <p class="text-[30px]">{{ $categoryCount }}</p>
                <p>Categories</p>
            </div>
        </a>
        <a href="{{ url('product') }}" class="flex flex-col justify-between text-[#580B0C] border-2 border-[#580B0C] px-4 py-3 h-[150px] rounded-md hover:bg-[#580B0C] hover:text-[#fff] transition-all duration-300">
            <i class="bx bx-package text-[40px]"></i>
            <div class="flex flex-col items-end justify-center text-[14px] md:text-[16px]">
                <p class="text-[30px]">{{ $productCount }}</p>
                <p>Products</p>
            </div>
        </a>
    </div>
@endsection
