<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}"
    class="!scroll-smooth {{ app()->getLocale() === 'en' ? 'font-sans' : 'font-serif' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" href="{{ asset('assets/images/logo.png') }}">

        <title>BPP | Login</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Abhaya+Libre:wght@400;500;600;700;800&display=swap" rel="stylesheet">


        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="text-gray-900">
        <div class="min-h-screen flex flex-col justify-center items-center pt-6 sm:pt-0 bg-[#D3AD92]">
            <div class="w-full max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                <div class="flex flex-col items-center justify-center pb-4">
                    <a href="/" class="pb-2">
                        <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                    </a>
                    <img src="{{ asset('assets/images/text.png') }}" alt="" class="w-32">
                </div>
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
