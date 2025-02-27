<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}"
    class="!scroll-smooth {{ app()->getLocale() === 'en' ? 'font-sans' : 'font-serif' }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('assets/images/logo.png') }}">
    <title>Bpp Houlpamoung</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abhaya+Libre:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kantumruy+Pro:ital,wght@0,100..700;1,100..700&display=swap"
        rel="stylesheet">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>

    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />

    {{-- aos --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @yield('css')
</head>

<body>
    @include('components.header')
    @include('components.navbar')

    <div>
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>

    {{-- aos --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            offset: 10,
        });
    </script>
    @yield('js')

    <script>
        function scrollToCenter(target) {
            event.preventDefault();

            // Get the target element
            var element = document.querySelector(target);

            // Calculate the position to center the element in the viewport
            var elementTop = element.getBoundingClientRect().top + window.pageYOffset;
            var elementHeight = element.offsetHeight;
            var viewportHeight = window.innerHeight;

            var scrollPosition = elementTop - (viewportHeight / 2) + (elementHeight / 2);

            window.scrollTo({
                top: scrollPosition,
                behavior: 'smooth'
            });
        }

        var swiper = new Swiper(".productSwiper", {
            slidesPerView: 4,
            spaceBetween: 10,
            loop: true,
            breakpoints: {
                1280: {
                    slidesPerView: 4,
                },
                1024: {
                    slidesPerView: 3,
                },
                480: {
                    slidesPerView: 2,
                },
                0: {
                    slidesPerView: 1,
                }
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });

        const swiperWhyus = new Swiper('.whyus_swiper', {
            loop: true,
            grabCursor: true,
            spaceBetween: 24,
            slidesPerView: 'auto',

            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

            pagination: {
                el: ".swiper-pagination",
            },
        });

        const swiperBanner = new Swiper(".bannerSwiper", {
            slidesPerView: 1,
            loop: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
</body>

</html>
