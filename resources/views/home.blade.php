@extends('layouts.master')
@section('css')
    <style>
        .products_swiper {
            position: relative;
            width: 100%;
            height: 100%;
        }

        .products_swiper .swiper {
            margin-inline: initial;
            padding-top: 6rem;
        }

        .products_swiper .swiper-button-next,
        .products_swiper .swiper-button-prev {
            position: absolute;
                top: 60px;
                transform: translateY(-50%);
                z-index: 10;
                background-color: transparent;
        }

        .products_swiper .swiper-button-next {
            right: 10px;
        }

        .products_swiper .swiper-button-prev {
            left: 10px;
        }

        .products_swiper .swiper-button-prev::after,
        .products_swiper .swiper-button-next::after {
            content: "";
        }


        /* @media (max-width: 1279px) {
            .products_swiper .swiper {
                margin-inline: 0;
                padding-top: 6rem;
            }

            .products_swiper .swiper-button-next,
            .products_swiper .swiper-button-prev {
                position: absolute;
                top: 60px;
                transform: translateY(-50%);
                z-index: 10;
                background-color: transparent;
            }

            .products_swiper .swiper-button-next {
                right: 10px;
            }

            .products_swiper .swiper-button-prev {
                left: 10px;
            }
        } */
    </style>
@endsection
@section('content')
    <x-loading />
    <x-scroll-top-button />

    {{-- hero --}}
    <section id="home" class="w-full h-full">
        <div class="relative h-[50vh] sm:h-[70vh] md:h-[80vh] bg-cover bg-center"
            style="background-image: url({{ asset('assets/images/banner-2.png') }})">
            <div class="flex flex-col items-center justify-center text-[#fff] pt-20 sm:pt-24 md:pt-36 leading-none">
                <div class="text-center text-[14px] sm:text-[16px]" data-aos="fade-up" data-aos-duration="1000">
                    <h1 class="text-[20px] sm:text-[30px] md:text-[40px] uppercase">{{ __('messages.welcome') }}</h1>
                    <p class="{{ app()->getLocale() === 'en' ? 'block' : 'hidden' }}">TO</p>
                </div>

                <div class="flex items-center space-x-1 sm:space-x-2" data-aos="fade-up" data-aos-duration="1300">
                    <div class="">
                        <svg width="23" height="12" viewBox="0 0 23 12" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.02503 5.02499H2.76855V6.28147H4.02503V5.02499Z" fill="white" />
                            <path d="M5.28064 6.28149H4.02417V7.53797H5.28064V6.28149Z" fill="white" />
                            <path d="M6.53711 7.53793H5.28064V8.79441H6.53711V7.53793Z" fill="white" />
                            <path d="M5.27978 3.76941H6.53625V2.51294H5.27978V3.76941Z" fill="white" />
                            <path d="M4.02417 5.02588H5.28064V3.76941H4.02417V5.02588Z" fill="white" />
                            <path d="M7.79187 6.28149H9.04834V5.02502H7.79187V6.28149Z" fill="white" />
                            <path d="M6.53625 7.53711H7.79272V6.28064H6.53625V7.53711Z" fill="white" />
                            <path d="M7.79273 3.76941H6.53625V5.02588H7.79273V3.76941Z" fill="white" />
                            <path d="M14.7686 6.28149H16.0251V5.02502H14.7686V6.28149Z" fill="white" />
                            <path d="M16.0234 7.53711H17.2798V6.28064H16.0234V7.53711Z" fill="white" />
                            <path d="M16.0234 5.02588H17.2798V3.76941H16.0234V5.02588Z" fill="white" />
                            <path d="M17.279 6.28149H18.5355V5.02502H17.279V6.28149Z" fill="white" />
                            <path d="M16.0251 8.79361H14.7686V10.0501H16.0251V8.79361Z" fill="white" />
                            <path d="M14.7686 7.53793H13.5121V8.79441H14.7686V7.53793Z" fill="white" />
                            <path d="M13.5121 6.28149H12.2557V7.53797H13.5121V6.28149Z" fill="white" />
                            <path d="M21.0493 3.76941H19.7928V5.02588H21.0493V3.76941Z" fill="white" />
                            <path d="M19.7928 2.51294H18.5363V3.76941H19.7928V2.51294Z" fill="white" />
                            <path d="M18.5372 1.25729H17.2807V2.51377H18.5372V1.25729Z" fill="white" />
                            <path d="M21.0484 5.02502V6.28149H22.3049V5.02502H21.0484Z" fill="white" />
                            <path d="M19.7928 6.28064V7.53711H21.0493V6.28064H19.7928Z" fill="white" />
                            <path d="M18.5363 7.53714V8.79361H19.7928V7.53714H18.5363Z" fill="white" />
                            <path d="M17.2807 8.79358V10.05H18.5372V8.79358H17.2807Z" fill="white" />
                            <path d="M16.0242 10.0492V11.3057H17.2807V10.0492H16.0242Z" fill="white" />
                            <path d="M16.0242 -3.09944e-06V1.25647H17.2807V-3.09944e-06H16.0242Z" fill="white" />
                            <path d="M14.7678 1.25647V2.51294H16.0242V1.25647H14.7678Z" fill="white" />
                            <path d="M13.5121 2.51208V3.76855H14.7686V2.51208H13.5121Z" fill="white" />
                            <path d="M12.2557 3.76852V5.02499H13.5121V3.76852H12.2557Z" fill="white" />
                            <path d="M11 5.02502V6.28149H12.2565V5.02502H11Z" fill="white" />
                            <path d="M0 5.02502L0 6.28149H1.25647V5.02502H0Z" fill="white" />
                        </svg>
                    </div>

                    <span class="text-[28px] sm:text-[50px] md:text-[70px] text-[#fff] leading-relaxed md:leading-none">BOUTIPREK BAYON</span>

                    <div>
                        <svg width="23" height="12" viewBox="0 0 23 12" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M18.2799 5.02499H19.5364V6.28147H18.2799V5.02499Z" fill="white" />
                            <path d="M17.0243 6.28149H18.2808V7.53797H17.0243V6.28149Z" fill="white" />
                            <path d="M15.7678 7.53793H17.0243V8.79441H15.7678V7.53793Z" fill="white" />
                            <path d="M17.0251 3.76941H15.7687V2.51294H17.0251V3.76941Z" fill="white" />
                            <path d="M18.2808 5.02588H17.0243V3.76941H18.2808V5.02588Z" fill="white" />
                            <path d="M14.5131 6.28149H13.2566V5.02502H14.5131V6.28149Z" fill="white" />
                            <path d="M15.7687 7.53711H14.5122V6.28064H15.7687V7.53711Z" fill="white" />
                            <path d="M14.5122 3.76941H15.7687V5.02588H14.5122V3.76941Z" fill="white" />
                            <path d="M7.53626 6.28149H6.27979V5.02502H7.53626V6.28149Z" fill="white" />
                            <path d="M6.28162 7.53711H5.02515V6.28064H6.28162V7.53711Z" fill="white" />
                            <path d="M6.28162 5.02588H5.02515V3.76941H6.28162V5.02588Z" fill="white" />
                            <path d="M5.026 6.28149H3.76953V5.02502H5.026V6.28149Z" fill="white" />
                            <path d="M6.2799 8.79361H7.53638V10.0501H6.2799V8.79361Z" fill="white" />
                            <path d="M7.53625 7.53793H8.79272V8.79441H7.53625V7.53793Z" fill="white" />
                            <path d="M8.79284 6.28149H10.0493V7.53797H8.79284V6.28149Z" fill="white" />
                            <path d="M1.25561 3.76941H2.51208V5.02588H1.25561V3.76941Z" fill="white" />
                            <path d="M2.51208 2.51294H3.76855V3.76941H2.51208V2.51294Z" fill="white" />
                            <path d="M3.7677 1.25729H5.02417V2.51377H3.7677V1.25729Z" fill="white" />
                            <path d="M1.25659 5.02502V6.28149H0.000118971V5.02502H1.25659Z" fill="white" />
                            <path d="M2.51208 6.28064V7.53711H1.25561V6.28064H2.51208Z" fill="white" />
                            <path d="M3.76855 7.53714V8.79361H2.51208V7.53714H3.76855Z" fill="white" />
                            <path d="M5.02417 8.79358V10.05H3.7677V8.79358H5.02417Z" fill="white" />
                            <path d="M6.28076 10.0492V11.3057H5.02429V10.0492H6.28076Z" fill="white" />
                            <path d="M6.28076 -3.09944e-06V1.25647H5.02429V-3.09944e-06H6.28076Z" fill="white" />
                            <path d="M7.53711 1.25647V2.51294H6.28064V1.25647H7.53711Z" fill="white" />
                            <path d="M8.79272 2.51208V3.76855H7.53625V2.51208H8.79272Z" fill="white" />
                            <path d="M10.0493 3.76852V5.02499H8.79284V3.76852H10.0493Z" fill="white" />
                            <path d="M11.3049 5.02502V6.28149H10.0485V5.02502H11.3049Z" fill="white" />
                            <path d="M22.3049 5.02502V6.28149H21.0485V5.02502H22.3049Z" fill="white" />
                        </svg>
                    </div>
                </div>

                <div data-aos="fade-up" data-aos-duration="1600">
                    <p class="text-[16px] sm:text-[20px] md:text-[25px] tracking-[3px]">Houlpamoung</p>
                </div>
            </div>

            <div class="absolute bottom-[-10px] left-0 z-[20]">
                <img src="{{ asset('assets/images/banner-1.png') }}" alt="">
            </div>
        </div>
    </section>

    {{-- profile company --}}
    <section class="w-full sm:px-4">
        <div
            class="relative max-w-7xl mx-auto bg-[#580B0C] z-10 pt-14 sm:pt-20 md:pt-32 pb-10 md:pb-20 text-[#fff] text-[10px] sm:text-[12px] md:text-[16px] -top-[30px] sm:-top-[40px] md:-top-[50px]">
            <div class="flex flex-col space-y-4 text-center px-4 sm:px-10 overflow-hidden">
                <p data-aos="fade-right" data-aos-duration="1200">{{ __('messages.about_des1') }}</p>
                <p data-aos="fade-left" data-aos-duration="1200">{{ __('messages.about_des2') }}</p>
                <p data-aos="fade-right" data-aos-duration="1200">{{ __('messages.about_des3') }}</p>
            </div>
        </div>
    </section>

    <x-about />

    {{-- products --}}
    <section id="products" class="w-full sm:px-4 mb-10">
        <div class="flex flex-col items-center justify-center pt-5" data-aos="fade-right" data-aos-duration="1000">
            <h1 class="text-center uppercase text-[#580B0C] text-[25px] sm:text-[30px] md:text-[40px] leading-none">{{ __('messages.products') }}</h1>
            <svg width="110" height="12" viewBox="0 0 110 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M39.8539 3.2681V2.50314H36.668V3.2681H39.8539Z" fill="#580B0C" />
                <path d="M39.8531 2.50229V1.73734H38.2601V2.50229H39.8531Z" fill="#580B0C" />
                <path d="M38.2601 4.03303V3.26807H35.0742V4.03303H38.2601Z" fill="#580B0C" />
                <path d="M36.668 4.79886V4.03391H33.4821V4.79886H36.668Z" fill="#580B0C" />
                <path d="M35.0742 5.56378V4.79883H31.8883V5.56378H35.0742Z" fill="#580B0C" />
                <path d="M33.4821 6.32959V5.56464H30.2962V6.32959H33.4821Z" fill="#580B0C" />
                <path d="M39.8539 6.32959V5.56464H36.668V6.32959H39.8539Z" fill="#DAAB8E" />
                <path d="M36.6672 8.62622V9.39117H39.8531V8.62622H36.6672Z" fill="#580B0C" />
                <path d="M38.261 9.39114V10.1561H39.8539V9.39114H38.261Z" fill="#580B0C" />
                <path d="M35.0751 7.8604V8.62537H38.261V7.8604H35.0751Z" fill="#580B0C" />
                <path d="M33.4813 7.09543V7.86038H36.6672V7.09543H33.4813Z" fill="#580B0C" />
                <path d="M31.8892 6.32959V7.09454H35.0751V6.32959H31.8892Z" fill="#580B0C" />
                <path d="M41.4877 3.2681V2.50314H38.3018V3.2681H41.4877Z" fill="#580B0C" />
                <path d="M39.894 2.50229V1.73734H38.301V2.50229H39.894Z" fill="#580B0C" />
                <path d="M43.0799 4.03302V3.26807H39.894V4.03302H43.0799Z" fill="#580B0C" />
                <path d="M44.6728 4.79886V4.03391H41.4869V4.79886H44.6728Z" fill="#580B0C" />
                <path d="M46.2658 5.56378V4.79883H43.0799V5.56378H46.2658Z" fill="#580B0C" />
                <path d="M47.8588 6.32959V5.56464H44.6729V6.32959H47.8588Z" fill="#580B0C" />
                <path d="M41.4869 6.32959V5.56464H38.301V6.32959H41.4869Z" fill="#DAAB8E" />
                <path d="M38.301 8.62533V9.39029H41.4869V8.62533H38.301Z" fill="#580B0C" />
                <path d="M38.301 9.39114V10.1561H39.894V9.39114H38.301Z" fill="#580B0C" />
                <path d="M39.894 7.86038V8.62534H43.0799V7.86038H39.894Z" fill="#580B0C" />
                <path d="M41.4869 7.09457V7.85953H44.6728V7.09457H41.4869Z" fill="#580B0C" />
                <path d="M43.0799 6.32959V7.09454H46.2658V6.32959H43.0799Z" fill="#580B0C" />
                <path d="M55.9061 3.26721V2.50226H52.7202V3.26721H55.9061Z" fill="#580B0C" />
                <path d="M55.9061 2.50224V1.73727H54.3132V2.50224H55.9061Z" fill="#580B0C" />
                <path d="M54.3131 4.03302V3.26807H51.1272V4.03302H54.3131Z" fill="#580B0C" />
                <path d="M52.7202 4.79802V4.03305H49.5343V4.79802H52.7202Z" fill="#580B0C" />
                <path d="M51.1273 5.56378V4.79883H47.9414V5.56378H51.1273Z" fill="#580B0C" />
                <path d="M49.5343 6.32877V5.56381H46.3484V6.32877H49.5343Z" fill="#580B0C" />
                <path d="M55.9061 6.32877V5.56381H52.7202V6.32877H55.9061Z" fill="#DAAB8E" />
                <path d="M52.7202 8.62622V9.39117H55.9061V8.62622H52.7202Z" fill="#580B0C" />
                <path d="M54.3131 9.39195V10.1569H55.9061V9.39195H54.3131Z" fill="#580B0C" />
                <path d="M51.1273 7.86123V8.62619H54.3132V7.86123H51.1273Z" fill="#580B0C" />
                <path d="M49.5343 7.09542V7.86038H52.7202V7.09542H49.5343Z" fill="#580B0C" />
                <path d="M47.9413 6.33047V7.09543H51.1273V6.33047H47.9413Z" fill="#580B0C" />
                <path d="M57.54 3.26721V2.50226H54.3541V3.26721H57.54Z" fill="#580B0C" />
                <path d="M55.9461 2.50229V1.73734H54.3532V2.50229H55.9461Z" fill="#580B0C" />
                <path d="M59.132 4.03302V3.26807H55.9461V4.03302H59.132Z" fill="#580B0C" />
                <path d="M60.7258 4.79801V4.03305H57.5399V4.79801H60.7258Z" fill="#580B0C" />
                <path d="M62.3179 5.56378V4.79883H59.132V5.56378H62.3179Z" fill="#580B0C" />
                <path d="M63.9117 6.32878V5.56381H60.7258V6.32878H63.9117Z" fill="#580B0C" />
                <path d="M57.54 6.32877V5.56381H54.3541V6.32877H57.54Z" fill="#DAAB8E" />
                <path d="M54.3531 8.62622V9.39117H57.5391V8.62622H54.3531Z" fill="#580B0C" />
                <path d="M54.3541 9.39114V10.1561H55.947V9.39114H54.3541Z" fill="#580B0C" />
                <path d="M55.947 7.86041V8.62537H59.1329V7.86041H55.947Z" fill="#580B0C" />
                <path d="M57.5391 7.0954V7.86035H60.725V7.0954H57.5391Z" fill="#580B0C" />
                <path d="M59.1329 6.32959V7.09454H62.3188V6.32959H59.1329Z" fill="#580B0C" />
                <path d="M71.9592 3.2681V2.50314H68.7733V3.2681H71.9592Z" fill="#580B0C" />
                <path d="M71.9583 2.50229V1.73734H70.3654V2.50229H71.9583Z" fill="#580B0C" />
                <path d="M70.3654 4.03302V3.26807H67.1795V4.03302H70.3654Z" fill="#580B0C" />
                <path d="M68.7733 4.79886V4.03391H65.5873V4.79886H68.7733Z" fill="#580B0C" />
                <path d="M67.1794 5.56379V4.79883H63.9935V5.56379H67.1794Z" fill="#580B0C" />
                <path d="M65.5873 6.32959V5.56464H62.4014V6.32959H65.5873Z" fill="#580B0C" />
                <path d="M71.9592 6.32959V5.56464H68.7733V6.32959H71.9592Z" fill="#DAAB8E" />
                <path d="M68.7724 8.62533V9.39029H71.9583V8.62533H68.7724Z" fill="#580B0C" />
                <path d="M70.3662 9.39114V10.1561H71.9592V9.39114H70.3662Z" fill="#580B0C" />
                <path d="M67.1794 7.86041V8.62537H70.3653V7.86041H67.1794Z" fill="#580B0C" />
                <path d="M65.5865 7.09457V7.85953H68.7724V7.09457H65.5865Z" fill="#580B0C" />
                <path d="M63.9935 6.32964V7.0946H67.1794V6.32964H63.9935Z" fill="#580B0C" />
                <path d="M73.5922 3.26721V2.50226H70.4063V3.26721H73.5922Z" fill="#580B0C" />
                <path d="M71.9992 2.50229V1.73734H70.4063V2.50229H71.9992Z" fill="#580B0C" />
                <path d="M75.1851 4.03302V3.26807H71.9992V4.03302H75.1851Z" fill="#580B0C" />
                <path d="M76.7781 4.79801V4.03305H73.5922V4.79801H76.7781Z" fill="#580B0C" />
                <path d="M78.371 5.56378V4.79883H75.1851V5.56378H78.371Z" fill="#580B0C" />
                <path d="M79.964 6.32879V5.56381H76.7781V6.32879H79.964Z" fill="#580B0C" />
                <path d="M73.5922 6.32877V5.56381H70.4063V6.32877H73.5922Z" fill="#DAAB8E" />
                <path d="M70.4062 8.62622V9.39117H73.5922V8.62622H70.4062Z" fill="#580B0C" />
                <path d="M70.4062 9.39197V10.1569H71.9992V9.39197H70.4062Z" fill="#580B0C" />
                <path d="M71.9992 7.86123V8.62619H75.1851V7.86123H71.9992Z" fill="#580B0C" />
                <path d="M73.5922 7.09543V7.86038H76.7781V7.09543H73.5922Z" fill="#580B0C" />
                <path d="M75.1851 6.33047V7.09543H78.371V6.33047H75.1851Z" fill="#580B0C" />
                <path d="M104.974 6.57495H106.231V5.31848H104.974V6.57495Z" fill="#DAAB8E" />
                <path d="M103.719 7.83057H104.975V6.57409H103.719V7.83057Z" fill="#DAAB8E" />
                <path d="M102.462 9.08707H103.719V7.83059H102.462V9.08707Z" fill="#DAAB8E" />
                <path d="M103.719 2.80637H102.463V4.06284H103.719V2.80637Z" fill="#DAAB8E" />
                <path d="M104.975 4.06287H103.719V5.31934H104.975V4.06287Z" fill="#DAAB8E" />
                <path d="M101.207 5.31845H99.9508V6.57492H101.207V5.31845Z" fill="#DAAB8E" />
                <path d="M102.463 6.57495H101.206V7.83142H102.463V6.57495Z" fill="#DAAB8E" />
                <path d="M101.206 5.31931H102.463V4.06283H101.206V5.31931Z" fill="#DAAB8E" />
                <path d="M93.6693 5.31845H92.4128V6.57492H93.6693V5.31845Z" fill="#580B0C" />
                <path d="M92.4145 6.57495H91.158V7.83142H92.4145V6.57495Z" fill="#580B0C" />
                <path d="M92.4145 4.06287H91.158V5.31934H92.4145V4.06287Z" fill="#580B0C" />
                <path d="M91.1589 5.31845H89.9025V6.57492H91.1589V5.31845Z" fill="#580B0C" />
                <path d="M92.4137 10.3426H93.6702V9.08615H92.4137V10.3426Z" fill="#FF5681" />
                <path d="M93.6702 9.08707H94.9266V7.83059H93.6702V9.08707Z" fill="#FF5681" />
                <path d="M94.9258 7.83057H96.1823V6.57409H94.9258V7.83057Z" fill="#FF5681" />
                <path d="M87.3887 5.31931H88.6451V4.06283H87.3887V5.31931Z" fill="#FF5681" />
                <path d="M88.6451 4.06287H89.9016V2.80639H88.6451V4.06287Z" fill="#FF5681" />
                <path d="M89.9008 2.80637H91.1572V1.54989L89.9008 1.54989V2.80637Z" fill="#FF5681" />
                <path d="M86.133 5.31848V6.57495H87.3895V5.31848H86.133Z" fill="#FF5681" />
                <path d="M87.3895 6.57409V7.83057H88.646V6.57409H87.3895Z" fill="#FF5681" />
                <path d="M88.6451 7.83059V9.08707H89.9016V7.83059H88.6451Z" fill="#FF5681" />
                <path d="M89.9016 9.08615V10.3426H91.158V9.08615H89.9016Z" fill="#FF5681" />
                <path d="M91.1572 10.3435V11.6H92.4137V10.3435H91.1572Z" fill="#FF5681" />
                <path d="M91.1581 0.294278V1.55075H92.4146V0.294278H91.1581Z" fill="#FF5681" />
                <path d="M92.4137 1.54989V2.80637H93.6702V1.54989H92.4137Z" fill="#FF5681" />
                <path d="M93.6702 2.80639V4.06287H94.9266V2.80639H93.6702Z" fill="#FF5681" />
                <path d="M94.9258 4.06198V5.31845H96.1823V4.06198H94.9258Z" fill="#FF5681" />
                <path d="M96.1823 5.31848V6.57495H97.4387V5.31848H96.1823Z" fill="#FF5681" />
                <path d="M108.744 5.31848V6.57495H110V5.31848H108.744Z" fill="#DAAB8E" />
                <path d="M5.28516 5.31845H4.02869V6.57492H5.28516V5.31845Z" fill="#DAAB8E" />
                <path d="M6.54077 6.57495H5.2843V7.83142H6.54077V6.57495Z" fill="#DAAB8E" />
                <path d="M7.79724 7.83139H6.54077V9.08786H7.79724V7.83139Z" fill="#DAAB8E" />
                <path d="M6.53991 4.06287H7.79639V2.80639H6.53991V4.06287Z" fill="#DAAB8E" />
                <path d="M5.2843 5.31931H6.54077V4.06283H5.2843V5.31931Z" fill="#DAAB8E" />
                <path d="M9.052 6.57495H10.3085V5.31848H9.052V6.57495Z" fill="#DAAB8E" />
                <path d="M7.79638 7.83057H9.05286V6.57409H7.79638V7.83057Z" fill="#DAAB8E" />
                <path d="M9.05286 4.06287H7.79639V5.31934H9.05286V4.06287Z" fill="#DAAB8E" />
                <path d="M16.59 6.57495H17.8465V5.31848H16.59V6.57495Z" fill="#580B0C" />
                <path d="M17.8448 7.83057H19.1013V6.57409H17.8448V7.83057Z" fill="#580B0C" />
                <path d="M17.8448 5.31931H19.1013V4.06283H17.8448V5.31931Z" fill="#580B0C" />
                <path d="M19.1004 6.57495H20.3569V5.31848H19.1004V6.57495Z" fill="#580B0C" />
                <path d="M17.8465 9.08707H16.59V10.3435H17.8465V9.08707Z" fill="#FF5681" />
                <path d="M16.59 7.83139H15.3336V9.08786H16.59V7.83139Z" fill="#FF5681" />
                <path d="M15.3336 6.57495H14.0771V7.83142H15.3336V6.57495Z" fill="#FF5681" />
                <path d="M22.8707 4.06287H21.6143V5.31934H22.8707V4.06287Z" fill="#FF5681" />
                <path d="M21.6142 2.80637H20.3577V4.06284H21.6142V2.80637Z" fill="#FF5681" />
                <path d="M20.3586 1.55075H19.1021V2.80722H20.3586V1.55075Z" fill="#FF5681" />
                <path d="M22.8698 5.31848V6.57495H24.1263V5.31848H22.8698Z" fill="#FF5681" />
                <path d="M21.6143 6.57409V7.83057H22.8707V6.57409H21.6143Z" fill="#FF5681" />
                <path d="M20.3577 7.83059V9.08707H21.6142V7.83059H20.3577Z" fill="#FF5681" />
                <path d="M19.1021 9.08703V10.3435H20.3586V9.08703H19.1021Z" fill="#FF5681" />
                <path d="M17.8456 10.3426V11.5991H19.1021V10.3426H17.8456Z" fill="#FF5681" />
                <path d="M17.8456 0.293454V1.54993H19.1021V0.293454H17.8456Z" fill="#FF5681" />
                <path d="M16.5892 1.54989V2.80637H17.8456V1.54989H16.5892Z" fill="#FF5681" />
                <path d="M15.3336 2.80554V4.06201H16.59V2.80554H15.3336Z" fill="#FF5681" />
                <path d="M14.0771 4.06198V5.31845H15.3336V4.06198H14.0771Z" fill="#FF5681" />
                <path d="M12.8214 5.31848V6.57495H14.0779V5.31848H12.8214Z" fill="#FF5681" />
                <path d="M0.260132 5.31848L0.260132 6.57495H1.5166V5.31848H0.260132Z" fill="#DAAB8E" />
            </svg>
        </div>

        <!-- Swiper -->
        <div class="max-w-7xl mx-auto px-4 pt-5 products_swiper" data-aos="fade-up" data-aos-duration="1200">
            <div class="swiper productSwiper">
                <div class="swiper-wrapper">
                    @foreach ($products as $product)
                        <div class="swiper-slide">
                            <div class="text-[#580B0C] text-[16px] md:text-[20px] text-center flex flex-col items-center justify-center h-full"
                                data-category="{{ $product->slug }}">
                                <div class="w-full h-52 md:h-64">
                                    <img src="{{ asset($product->image) }}"
                                        class="w-full h-full object-cover object-center" onclick="openPopup('popup{{ $product->id }}')" />
                                </div>
                                <div class="pt-2 flex items-center space-x-2">
                                    <p><span class="font-[700]">{{ __('messages.price') }} : </span>${{ $product->price }}</p>
                                    <p><span class="font-[700]">{{ __('messages.code') }} : </span>{{ $product->code }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-button-next">
                    <svg width="38" height="54" viewBox="0 0 38 54" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <rect x="23" y="21" width="15" height="12" fill="#580B0C" />
                        <rect y="42" width="14" height="12" fill="#580B0C" />
                        <rect width="14" height="12" fill="#580B0C" />
                        <rect x="14" y="33" width="9" height="9" fill="#580B0C" />
                        <rect x="14" y="12" width="9" height="9" fill="#580B0C" />
                    </svg>
                </div>
                <div class="swiper-button-prev">
                    <svg width="38" height="54" viewBox="0 0 38 54" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <rect x="15" y="33" width="15" height="12" transform="rotate(-180 15 33)"
                            fill="#580B0C" />
                        <rect x="38" y="12" width="14" height="12" transform="rotate(-180 38 12)"
                            fill="#580B0C" />
                        <rect x="38" y="54" width="14" height="12" transform="rotate(-180 38 54)"
                            fill="#580B0C" />
                        <rect x="24" y="21" width="9" height="9" transform="rotate(-180 24 21)"
                            fill="#580B0C" />
                        <rect x="24" y="42" width="9" height="9" transform="rotate(-180 24 42)"
                            fill="#580B0C" />
                    </svg>
                </div>
            </div>
        </div>

        {{-- <!-- Popups text -->
        @foreach ($products as $product)
            <div id="popup{{ $product->id }}"
                class="fixed inset-0 bg-black bg-opacity-75 flex items-center justify-center hidden px-2 z-[100]">
                <div class="bg-white rounded-lg shadow-lg p-4 md:p-6 text-start max-w-md mx-auto">
                    <img src="{{ asset($product->image) }}" class="w-[20rem] md:w-[28rem] h-52 md:h-64 object-cover object-center rounded-sm" />
                    <h1 class="pt-2"><span class="text-[#580B0C] font-[700]">Name : </span> {{ $product->name }}</h1>
                    <div class="pt-1 flex items-center space-x-2">
                        <p><span class="text-[#580B0C] font-[700]">Price : </span>${{ $product->price }}</p>
                        <p><span class="text-[#580B0C] font-[700]">Code : </span>{{ $product->code }}</p>
                    </div>
                    <div class="flex flex-col pt-1">
                        <h1 class="text-[#580B0C] font-[700]">Details :</h1>
                        <p class="text-[12px] md:text-[14px] font-medium text-[#000] mb-4">{{ $product->description }}</p>
                    </div>
                    <button
                        class="bg-[#580B0C] text-[12px] text-[#fff] px-4 py-2 rounded-lg shadow-md hover:bg-[#580B0C]"
                        onclick="closePopup('popup{{ $product->id }}')">
                        Close
                    </button>
                </div>
            </div>
        @endforeach --}}

        <div class="flex items-center justify-center pt-10 sm:pt-20" data-aos="fade-right" data-aos-duration="1000">
            <a href="{{ route('products') }}"
                class="border-2 border-[#580B0C] text-[#580B0C] hover:bg-[#580B0C] transition-all duration-300 hover:text-[#fff] px-6 py-1 text-[16px] md:text-[20px] rounded-[5px]">
                {{ __('messages.see_more') }}
            </a>
        </div>
    </section>

    <x-whyus />

    <x-banner />

    {{-- future --}}
    <section class="w-full h-[80vh] md:min-h-screen">
        <div class="relative">
            <img src="{{ asset('assets/images/bg-4.png') }}" alt=""
                class="w-full h-[80vh] md:min-h-screen object-cover object-center">
            <div class="absolute inset-0 flex flex-col items-center justify-center text-[#fff] space-y-4 pt-10 overflow-hidden">
                <div class="flex flex-col items-center justify-center" data-aos="fade-right" data-aos-duration="1200">
                    <h1 class="text-[25px] sm:text-[30px] md:text-[40px] uppercase">{{ __('messages.future') }}</h1>
                    <svg width="110" height="12" viewBox="0 0 110 12" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M39.8539 3.26813V2.50317H36.668V3.26813H39.8539Z" fill="white" />
                        <path d="M39.8531 2.50226V1.7373H38.2601V2.50226H39.8531Z" fill="#580B0C" />
                        <path d="M38.2601 4.03303V3.26807H35.0742V4.03303H38.2601Z" fill="white" />
                        <path d="M36.668 4.79889V4.03394H33.4821V4.79889H36.668Z" fill="white" />
                        <path d="M35.0742 5.56378V4.79883H31.8883V5.56378H35.0742Z" fill="white" />
                        <path d="M33.4821 6.32965V5.5647H30.2962V6.32965H33.4821Z" fill="white" />
                        <path d="M39.8539 6.32965V5.5647H36.668V6.32965H39.8539Z" fill="#DAAB8E" />
                        <path d="M36.6672 8.62616V9.39111H39.8531V8.62616H36.6672Z" fill="white" />
                        <path d="M38.261 9.39105V10.156H39.8539V9.39105H38.261Z" fill="#580B0C" />
                        <path d="M35.0751 7.86052V8.62549H38.261V7.86052H35.0751Z" fill="white" />
                        <path d="M33.4813 7.0954V7.86035H36.6672V7.0954H33.4813Z" fill="white" />
                        <path d="M31.8892 6.32953V7.09448H35.0751V6.32953H31.8892Z" fill="white" />
                        <path d="M41.4877 3.26813V2.50317H38.3018V3.26813H41.4877Z" fill="white" />
                        <path d="M39.894 2.50226V1.7373H38.301V2.50226H39.894Z" fill="white" />
                        <path d="M43.0799 4.03302V3.26807H39.894V4.03302H43.0799Z" fill="white" />
                        <path d="M44.6728 4.79889V4.03394H41.4869V4.79889H44.6728Z" fill="white" />
                        <path d="M46.2658 5.56378V4.79883H43.0799V5.56378H46.2658Z" fill="white" />
                        <path d="M47.8588 6.32965V5.5647H44.6729V6.32965H47.8588Z" fill="white" />
                        <path d="M41.4869 6.32965V5.5647H38.301V6.32965H41.4869Z" fill="#DAAB8E" />
                        <path d="M38.301 8.62542V9.39038H41.4869V8.62542H38.301Z" fill="white" />
                        <path d="M38.301 9.39105V10.156H39.894V9.39105H38.301Z" fill="white" />
                        <path d="M39.894 7.86029V8.62524H43.0799V7.86029H39.894Z" fill="white" />
                        <path d="M41.4869 7.09466V7.85962H44.6728V7.09466H41.4869Z" fill="white" />
                        <path d="M43.0799 6.32953V7.09448H46.2658V6.32953H43.0799Z" fill="white" />
                        <path d="M55.9061 3.26715V2.5022H52.7202V3.26715H55.9061Z" fill="white" />
                        <path d="M55.9061 2.50227V1.7373H54.3132V2.50227H55.9061Z" fill="#580B0C" />
                        <path d="M54.3131 4.03302V3.26807H51.1272V4.03302H54.3131Z" fill="white" />
                        <path d="M52.7202 4.79793V4.03296H49.5343V4.79793H52.7202Z" fill="white" />
                        <path d="M51.1273 5.56378V4.79883H47.9414V5.56378H51.1273Z" fill="white" />
                        <path d="M49.5343 6.32868V5.56372H46.3484V6.32868H49.5343Z" fill="white" />
                        <path d="M55.9061 6.32868V5.56372H52.7202V6.32868H55.9061Z" fill="#DAAB8E" />
                        <path d="M52.7202 8.62616V9.39111H55.9061V8.62616H52.7202Z" fill="white" />
                        <path d="M54.3131 9.39202V10.157H55.9061V9.39202H54.3131Z" fill="#580B0C" />
                        <path d="M51.1273 7.86126V8.62622H54.3132V7.86126H51.1273Z" fill="white" />
                        <path d="M49.5343 7.09539V7.86035H52.7202V7.09539H49.5343Z" fill="white" />
                        <path d="M47.9413 6.3305V7.09546H51.1273V6.3305H47.9413Z" fill="white" />
                        <path d="M57.54 3.26715V2.5022H54.3541V3.26715H57.54Z" fill="white" />
                        <path d="M55.9461 2.50226V1.7373H54.3532V2.50226H55.9461Z" fill="white" />
                        <path d="M59.132 4.03302V3.26807H55.9461V4.03302H59.132Z" fill="white" />
                        <path d="M60.7258 4.79791V4.03296H57.5399V4.79791H60.7258Z" fill="white" />
                        <path d="M62.3179 5.56378V4.79883H59.132V5.56378H62.3179Z" fill="white" />
                        <path d="M63.9117 6.32869V5.56372H60.7258V6.32869H63.9117Z" fill="white" />
                        <path d="M57.54 6.32868V5.56372H54.3541V6.32868H57.54Z" fill="#DAAB8E" />
                        <path d="M54.3531 8.62616V9.39111H57.5391V8.62616H54.3531Z" fill="white" />
                        <path d="M54.3541 9.39105V10.156H55.947V9.39105H54.3541Z" fill="white" />
                        <path d="M55.947 7.86053V8.62549H59.1329V7.86053H55.947Z" fill="white" />
                        <path d="M57.5391 7.0954V7.86035H60.725V7.0954H57.5391Z" fill="white" />
                        <path d="M59.1329 6.32953V7.09448H62.3188V6.32953H59.1329Z" fill="white" />
                        <path d="M71.9592 3.26813V2.50317H68.7733V3.26813H71.9592Z" fill="white" />
                        <path d="M71.9583 2.50226V1.7373H70.3654V2.50226H71.9583Z" fill="#580B0C" />
                        <path d="M70.3654 4.03302V3.26807H67.1795V4.03302H70.3654Z" fill="white" />
                        <path d="M68.7733 4.79889V4.03394H65.5873V4.79889H68.7733Z" fill="white" />
                        <path d="M67.1794 5.56379V4.79883H63.9935V5.56379H67.1794Z" fill="white" />
                        <path d="M65.5873 6.32965V5.5647H62.4014V6.32965H65.5873Z" fill="white" />
                        <path d="M71.9592 6.32965V5.5647H68.7733V6.32965H71.9592Z" fill="#DAAB8E" />
                        <path d="M68.7724 8.62542V9.39038H71.9583V8.62542H68.7724Z" fill="white" />
                        <path d="M70.3662 9.39105V10.156H71.9592V9.39105H70.3662Z" fill="#580B0C" />
                        <path d="M67.1794 7.86053V8.62549H70.3653V7.86053H67.1794Z" fill="white" />
                        <path d="M65.5865 7.09466V7.85962H68.7724V7.09466H65.5865Z" fill="white" />
                        <path d="M63.9935 6.32952V7.09448H67.1794V6.32952H63.9935Z" fill="white" />
                        <path d="M73.5922 3.26715V2.5022H70.4063V3.26715H73.5922Z" fill="white" />
                        <path d="M71.9992 2.50226V1.7373H70.4063V2.50226H71.9992Z" fill="white" />
                        <path d="M75.1851 4.03302V3.26807H71.9992V4.03302H75.1851Z" fill="white" />
                        <path d="M76.7781 4.79791V4.03296H73.5922V4.79791H76.7781Z" fill="white" />
                        <path d="M78.371 5.56378V4.79883H75.1851V5.56378H78.371Z" fill="white" />
                        <path d="M79.964 6.3287V5.56372H76.7781V6.3287H79.964Z" fill="white" />
                        <path d="M73.5922 6.32868V5.56372H70.4063V6.32868H73.5922Z" fill="#DAAB8E" />
                        <path d="M70.4062 8.62616V9.39111H73.5922V8.62616H70.4062Z" fill="white" />
                        <path d="M70.4062 9.39203V10.157H71.9992V9.39203H70.4062Z" fill="white" />
                        <path d="M71.9992 7.86126V8.62622H75.1851V7.86126H71.9992Z" fill="white" />
                        <path d="M73.5922 7.0954V7.86035H76.7781V7.0954H73.5922Z" fill="white" />
                        <path d="M75.1851 6.3305V7.09546H78.371V6.3305H75.1851Z" fill="white" />
                        <path d="M104.974 6.57495H106.231V5.31848H104.974V6.57495Z" fill="#DAAB8E" />
                        <path d="M103.719 7.83057H104.975V6.57409H103.719V7.83057Z" fill="#DAAB8E" />
                        <path d="M102.462 9.08716H103.719V7.83069H102.462V9.08716Z" fill="#DAAB8E" />
                        <path d="M103.719 2.8064H102.463V4.06287H103.719V2.8064Z" fill="#DAAB8E" />
                        <path d="M104.975 4.06299H103.719V5.31946H104.975V4.06299Z" fill="#DAAB8E" />
                        <path d="M101.207 5.31836H99.9508V6.57483H101.207V5.31836Z" fill="#DAAB8E" />
                        <path d="M102.463 6.57495H101.206V7.83142H102.463V6.57495Z" fill="#DAAB8E" />
                        <path d="M101.206 5.31934H102.463V4.06286H101.206V5.31934Z" fill="#DAAB8E" />
                        <path d="M93.6693 5.31836H92.4128V6.57483H93.6693V5.31836Z" fill="white" />
                        <path d="M92.4145 6.57495H91.158V7.83142H92.4145V6.57495Z" fill="white" />
                        <path d="M92.4145 4.06299H91.158V5.31946H92.4145V4.06299Z" fill="white" />
                        <path d="M91.1589 5.31836H89.9025V6.57483H91.1589V5.31836Z" fill="white" />
                        <path d="M92.4137 10.3425H93.6702V9.08606H92.4137V10.3425Z" fill="#FF5681" />
                        <path d="M93.6702 9.08716H94.9266V7.83069H93.6702V9.08716Z" fill="#FF5681" />
                        <path d="M94.9258 7.83057H96.1823V6.57409H94.9258V7.83057Z" fill="#FF5681" />
                        <path d="M87.3887 5.31934H88.6451V4.06286H87.3887V5.31934Z" fill="#FF5681" />
                        <path d="M88.6451 4.06299H89.9016V2.80652H88.6451V4.06299Z" fill="#FF5681" />
                        <path d="M89.9008 2.8064H91.1572V1.54992L89.9008 1.54992V2.8064Z" fill="#FF5681" />
                        <path d="M86.133 5.31848V6.57495H87.3895V5.31848H86.133Z" fill="#FF5681" />
                        <path d="M87.3895 6.57409V7.83057H88.646V6.57409H87.3895Z" fill="#FF5681" />
                        <path d="M88.6451 7.83069V9.08716H89.9016V7.83069H88.6451Z" fill="#FF5681" />
                        <path d="M89.9016 9.08606V10.3425H91.158V9.08606H89.9016Z" fill="#FF5681" />
                        <path d="M91.1572 10.3436V11.6001H92.4137V10.3436H91.1572Z" fill="#FF5681" />
                        <path d="M91.1581 0.294308V1.55078H92.4146V0.294308H91.1581Z" fill="#FF5681" />
                        <path d="M92.4137 1.54992V2.8064H93.6702V1.54992H92.4137Z" fill="#FF5681" />
                        <path d="M93.6702 2.80652V4.06299H94.9266V2.80652H93.6702Z" fill="#FF5681" />
                        <path d="M94.9258 4.06189V5.31836H96.1823V4.06189H94.9258Z" fill="#FF5681" />
                        <path d="M96.1823 5.31848V6.57495H97.4387V5.31848H96.1823Z" fill="#FF5681" />
                        <path d="M108.744 5.31848V6.57495H110V5.31848H108.744Z" fill="#DAAB8E" />
                        <path d="M5.28516 5.31836H4.02869V6.57483H5.28516V5.31836Z" fill="#DAAB8E" />
                        <path d="M6.54077 6.57495H5.2843V7.83142H6.54077V6.57495Z" fill="#DAAB8E" />
                        <path d="M7.79724 7.8313H6.54077V9.08777H7.79724V7.8313Z" fill="#DAAB8E" />
                        <path d="M6.53991 4.06299H7.79639V2.80652H6.53991V4.06299Z" fill="#DAAB8E" />
                        <path d="M5.2843 5.31934H6.54077V4.06286H5.2843V5.31934Z" fill="#DAAB8E" />
                        <path d="M9.052 6.57495H10.3085V5.31848H9.052V6.57495Z" fill="#DAAB8E" />
                        <path d="M7.79638 7.83057H9.05286V6.57409H7.79638V7.83057Z" fill="#DAAB8E" />
                        <path d="M9.05286 4.06299H7.79639V5.31946H9.05286V4.06299Z" fill="#DAAB8E" />
                        <path d="M16.59 6.57495H17.8465V5.31848H16.59V6.57495Z" fill="white" />
                        <path d="M17.8448 7.83057H19.1013V6.57409H17.8448V7.83057Z" fill="white" />
                        <path d="M17.8448 5.31934H19.1013V4.06286H17.8448V5.31934Z" fill="white" />
                        <path d="M19.1004 6.57495H20.3569V5.31848H19.1004V6.57495Z" fill="white" />
                        <path d="M17.8465 9.08716H16.59V10.3436H17.8465V9.08716Z" fill="#FF5681" />
                        <path d="M16.59 7.8313H15.3336V9.08777H16.59V7.8313Z" fill="#FF5681" />
                        <path d="M15.3336 6.57495H14.0771V7.83142H15.3336V6.57495Z" fill="#FF5681" />
                        <path d="M22.8707 4.06299H21.6143V5.31946H22.8707V4.06299Z" fill="#FF5681" />
                        <path d="M21.6142 2.8064H20.3577V4.06287H21.6142V2.8064Z" fill="#FF5681" />
                        <path d="M20.3586 1.55078H19.1021V2.80725H20.3586V1.55078Z" fill="#FF5681" />
                        <path d="M22.8698 5.31848V6.57495H24.1263V5.31848H22.8698Z" fill="#FF5681" />
                        <path d="M21.6143 6.57409V7.83057H22.8707V6.57409H21.6143Z" fill="#FF5681" />
                        <path d="M20.3577 7.83069V9.08716H21.6142V7.83069H20.3577Z" fill="#FF5681" />
                        <path d="M19.1021 9.08703V10.3435H20.3586V9.08703H19.1021Z" fill="#FF5681" />
                        <path d="M17.8456 10.3426V11.5991H19.1021V10.3426H17.8456Z" fill="#FF5681" />
                        <path d="M17.8456 0.293576V1.55005H19.1021V0.293576H17.8456Z" fill="#FF5681" />
                        <path d="M16.5892 1.54992V2.8064H17.8456V1.54992H16.5892Z" fill="#FF5681" />
                        <path d="M15.3336 2.80554V4.06201H16.59V2.80554H15.3336Z" fill="#FF5681" />
                        <path d="M14.0771 4.06189V5.31836H15.3336V4.06189H14.0771Z" fill="#FF5681" />
                        <path d="M12.8214 5.31848V6.57495H14.0779V5.31848H12.8214Z" fill="#FF5681" />
                        <path d="M0.260132 5.31848L0.260132 6.57495H1.5166V5.31848H0.260132Z" fill="#DAAB8E" />
                    </svg>
                </div>

                <div data-aos="fade-left" data-aos-duration="1200"
                    class="text-[16px] sm:text-[20px] md:text-[25px] text-[#fff] text-center w-full sm:max-w-[500px] mx-auto px-4">
                    <h1 class="text-[#D3AD92]">01</h1>
                    <p>{{ __('messages.future_title1') }}</p>
                    <p class="text-[12px] sm:text-[13px] md:text-[15px]">{{ __('messages.future_desc1') }}</p>
                </div>
                <div data-aos="fade-right" data-aos-duration="1200"
                    class="text-[16px] sm:text-[20px] md:text-[25px] text-[#fff] text-center w-full sm:max-w-[500px] mx-auto px-4">
                    <h1 class="text-[#D3AD92]">02</h1>
                    <p>{{ __('messages.future_title2') }}</p>
                    <p class="text-[12px] sm:text-[13px] md:text-[15px]">{{ __('messages.future_desc2') }}</p>
                </div>
            </div>
        </div>
    </section>

    {{-- footer --}}
    <section id="contact" class="w-full h-full relative">
        <div
            class="relative top-[-40px] flex flex-col justify-center items-center w-full text-[15px] text-[#580B0C] leading-none">
            <img src="{{ asset('assets/images/logo.png') }}" alt="" class="w-20">
            <img src="{{ asset('assets/images/text.png') }}" alt="" class="w-40 pt-2">
            <p class='uppercase pt-2 font-[600]'>BOUTIPREK BAYON</p>
            <p class='text-[13px]'>Houlpamoung</p>
        </div>

        <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 px-10 lg:py-10">
            <div class="text-[20px] xl:text-[25px] text-[#580B0C] order-1 lg:order-none">
                <h1>Information</h1>
                <ul class='text-[12px] xl:text-[14px] space-y-2'>
                    <li>
                        <a href="{{ route('home') }}#home">{{ __('messages.home') }}</a>
                    </li>
                    <li>
                        <a href="{{ route('home') }}#about">{{ __('messages.about') }}</a>
                    </li>
                    <li>
                        <a href="{{ route('home') }}#products">{{ __('messages.products') }}</a>
                    </li>
                    <li>
                        <a href="{{ route('home') }}#whyUs">{{ __('messages.whyus') }}</a>
                    </li>
                    <li>
                        <a href="{{ route('home') }}#contact">{{ __('messages.contact') }}</a>
                    </li>
                </ul>
            </div>
            <div
                class='flex flex-col space-y-4 text-start lg:text-center text-[#580B0C] col-span-1 lg:col-span-2 text-[12px] xl:text-[14px] order-3 lg:order-none'>
                <p>{{ __('messages.about_des2') }}</p>
                <p>{{ __('messages.about_des3') }}</p>

                <div class="text-[30px] uppercase flex flex-col items-center justify-center pt-10 pb-10 lg:pb-0">
                    <p>Thanks</p>
                    <svg width="76" height="8" viewBox="0 0 76 8" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M27.7179 2.32096V1.79956L25.5464 1.79956V2.32096H27.7179Z" fill="#580B0C" />
                        <path d="M27.7173 1.79898V1.27759H26.6315V1.79898H27.7173Z" fill="#580B0C" />
                        <path d="M26.6315 2.84245V2.32104H24.46V2.84245H26.6315Z" fill="#580B0C" />
                        <path d="M25.5464 3.36417V2.84277H23.3749V3.36417H25.5464Z" fill="#580B0C" />
                        <path d="M24.46 3.8859V3.3645H22.2885V3.8859H24.46Z" fill="#580B0C" />
                        <path d="M23.3748 4.40762V3.88623H21.2033V4.40762H23.3748Z" fill="#580B0C" />
                        <path d="M27.7179 4.40762V3.88623H25.5464V4.40762H27.7179Z" fill="#DAAB8E" />
                        <path d="M25.5458 5.97323V6.49463H27.7173V5.97323H25.5458Z" fill="#580B0C" />
                        <path d="M26.6321 6.49472V7.01611H27.7179V6.49472H26.6321Z" fill="#580B0C" />
                        <path d="M24.4606 5.45125V5.97266H26.6321V5.45125H24.4606Z" fill="#580B0C" />
                        <path d="M23.3743 4.92978V5.45117H25.5458V4.92978H23.3743Z" fill="#580B0C" />
                        <path d="M22.2891 4.4078V4.9292H24.4606V4.4078H22.2891Z" fill="#580B0C" />
                        <path d="M28.8315 2.32096V1.79956L26.66 1.79956V2.32096H28.8315Z" fill="#580B0C" />
                        <path d="M27.7452 1.79898V1.27759H26.6594V1.79898H27.7452Z" fill="#580B0C" />
                        <path d="M29.9167 2.84244V2.32104H27.7452V2.84244H29.9167Z" fill="#580B0C" />
                        <path d="M31.0024 3.36417V2.84277H28.8309V3.36417H31.0024Z" fill="#580B0C" />
                        <path d="M32.0882 3.8859V3.3645H29.9167V3.8859H32.0882Z" fill="#580B0C" />
                        <path d="M33.174 4.40762V3.88623H31.0024V4.40762H33.174Z" fill="#580B0C" />
                        <path d="M28.8309 4.40762V3.88623H26.6594V4.40762H28.8309Z" fill="#DAAB8E" />
                        <path d="M26.6594 5.9725V6.4939H28.8309V5.9725H26.6594Z" fill="#580B0C" />
                        <path d="M26.6594 6.49472V7.01611H27.7452V6.49472H26.6594Z" fill="#580B0C" />
                        <path d="M27.7452 5.45126V5.97266H29.9167V5.45126H27.7452Z" fill="#580B0C" />
                        <path d="M28.8309 4.92904V5.45044H31.0024V4.92904H28.8309Z" fill="#580B0C" />
                        <path d="M29.9167 4.4078V4.9292H32.0882V4.4078H29.9167Z" fill="#580B0C" />
                        <path d="M38.6591 2.32047V1.79907L36.4875 1.79907V2.32047H38.6591Z" fill="#580B0C" />
                        <path d="M38.6591 1.79899V1.27759H37.5733V1.79899H38.6591Z" fill="#580B0C" />
                        <path d="M37.5732 2.84244V2.32104H35.4017V2.84244H37.5732Z" fill="#580B0C" />
                        <path d="M36.4875 3.36393V2.84253H34.316V3.36393H36.4875Z" fill="#580B0C" />
                        <path d="M35.4018 3.8859V3.3645H33.2303V3.8859H35.4018Z" fill="#580B0C" />
                        <path d="M34.316 4.40738V3.88599H32.1445V4.40738H34.316Z" fill="#580B0C" />
                        <path d="M38.6591 4.40738V3.88599H36.4875V4.40738H38.6591Z" fill="#DAAB8E" />
                        <path d="M36.4875 5.97323V6.49463H38.6591V5.97323H36.4875Z" fill="#580B0C" />
                        <path d="M37.5732 6.49496V7.01636H38.659V6.49496H37.5732Z" fill="#580B0C" />
                        <path d="M35.4018 5.45151V5.9729H37.5733V5.45151H35.4018Z" fill="#580B0C" />
                        <path d="M34.316 4.92977V5.45117H36.4875V4.92977H34.316Z" fill="#580B0C" />
                        <path d="M33.2303 4.40829V4.92969H35.4018V4.40829H33.2303Z" fill="#580B0C" />
                        <path d="M39.7727 2.32047V1.79907L37.6012 1.79907V2.32047H39.7727Z" fill="#580B0C" />
                        <path d="M38.6863 1.79898V1.27759H37.6005V1.79898H38.6863Z" fill="#580B0C" />
                        <path d="M40.8578 2.84244V2.32104H38.6863V2.84244H40.8578Z" fill="#580B0C" />
                        <path d="M41.9442 3.36392V2.84253H39.7726V3.36392H41.9442Z" fill="#580B0C" />
                        <path d="M43.0294 3.8859V3.3645H40.8578V3.8859H43.0294Z" fill="#580B0C" />
                        <path d="M44.1157 4.40739V3.88599H41.9442V4.40739H44.1157Z" fill="#580B0C" />
                        <path d="M39.7727 4.40738V3.88599H37.6012V4.40738H39.7727Z" fill="#DAAB8E" />
                        <path d="M37.6005 5.97323V6.49463H39.772V5.97323H37.6005Z" fill="#580B0C" />
                        <path d="M37.6012 6.49472V7.01611H38.687V6.49472H37.6012Z" fill="#580B0C" />
                        <path d="M38.687 5.45126V5.97266H40.8585V5.45126H38.687Z" fill="#580B0C" />
                        <path d="M39.7721 4.92978V5.45117H41.9436V4.92978H39.7721Z" fill="#580B0C" />
                        <path d="M40.8585 4.4078V4.9292H43.03V4.4078H40.8585Z" fill="#580B0C" />
                        <path d="M49.6008 2.32096V1.79956L47.4293 1.79956V2.32096H49.6008Z" fill="#580B0C" />
                        <path d="M49.6002 1.79898V1.27759H48.5145V1.79898H49.6002Z" fill="#580B0C" />
                        <path d="M48.5145 2.84244V2.32104H46.3429V2.84244H48.5145Z" fill="#580B0C" />
                        <path d="M47.4293 3.36417V2.84277H45.2578V3.36417H47.4293Z" fill="#580B0C" />
                        <path d="M46.343 3.8859V3.3645H44.1714V3.8859H46.343Z" fill="#580B0C" />
                        <path d="M45.2578 4.40762V3.88623H43.0863V4.40762H45.2578Z" fill="#580B0C" />
                        <path d="M49.6008 4.40762V3.88623H47.4293V4.40762H49.6008Z" fill="#DAAB8E" />
                        <path d="M47.4287 5.9725V6.4939H49.6002V5.9725H47.4287Z" fill="#580B0C" />
                        <path d="M48.5151 6.49472V7.01611H49.6008V6.49472H48.5151Z" fill="#580B0C" />
                        <path d="M46.343 5.45126V5.97266H48.5145V5.45126H46.343Z" fill="#580B0C" />
                        <path d="M45.2572 4.92904V5.45044H47.4287V4.92904H45.2572Z" fill="#580B0C" />
                        <path d="M44.1714 4.4078V4.9292H46.343V4.4078H44.1714Z" fill="#580B0C" />
                        <path d="M50.7139 2.32047V1.79907L48.5424 1.79907V2.32047H50.7139Z" fill="#580B0C" />
                        <path d="M49.6281 1.79898V1.27759H48.5424V1.79898H49.6281Z" fill="#580B0C" />
                        <path d="M51.7996 2.84244V2.32104H49.6281V2.84244H51.7996Z" fill="#580B0C" />
                        <path d="M52.8854 3.36392V2.84253H50.7139V3.36392H52.8854Z" fill="#580B0C" />
                        <path d="M53.9711 3.8859V3.3645H51.7996V3.8859H53.9711Z" fill="#580B0C" />
                        <path d="M55.0569 4.4074V3.88599H52.8854V4.4074H55.0569Z" fill="#580B0C" />
                        <path d="M50.7139 4.40738V3.88599H48.5424V4.40738H50.7139Z" fill="#DAAB8E" />
                        <path d="M48.5424 5.97323V6.49463H50.7139V5.97323H48.5424Z" fill="#580B0C" />
                        <path d="M48.5424 6.49496V7.01636H49.6281V6.49496H48.5424Z" fill="#580B0C" />
                        <path d="M49.6281 5.45151V5.9729H51.7996V5.45151H49.6281Z" fill="#580B0C" />
                        <path d="M50.7139 4.92978V5.45117H52.8854V4.92978H50.7139Z" fill="#580B0C" />
                        <path d="M51.7996 4.40829V4.92969H53.9711V4.40829H51.7996Z" fill="#580B0C" />
                        <path d="M72.1039 4.57495H72.9603V3.71854H72.1039V4.57495Z" fill="#DAAB8E" />
                        <path d="M71.248 5.43091H72.1044V4.5745H71.248V5.43091Z" fill="#DAAB8E" />
                        <path d="M70.3916 6.28711H71.248V5.4307H70.3916V6.28711Z" fill="#DAAB8E" />
                        <path d="M71.2486 2.0061H70.3922V2.86252H71.2486V2.0061Z" fill="#DAAB8E" />
                        <path d="M72.1045 2.86279H71.248V3.71921H72.1045V2.86279Z" fill="#DAAB8E" />
                        <path d="M69.5363 3.71851H68.6799V4.57492H69.5363V3.71851Z" fill="#DAAB8E" />
                        <path d="M70.3922 4.57495H69.5358V5.43136H70.3922V4.57495Z" fill="#DAAB8E" />
                        <path d="M69.5358 3.71924H70.3922V2.86283H69.5358V3.71924Z" fill="#DAAB8E" />
                        <path d="M64.3985 3.71851H63.5421V4.57492H64.3985V3.71851Z" fill="#580B0C" />
                        <path d="M63.5432 4.57495H62.6868V5.43136H63.5432V4.57495Z" fill="#580B0C" />
                        <path d="M63.5432 2.86279H62.6868V3.71921H63.5432V2.86279Z" fill="#580B0C" />
                        <path d="M62.6874 3.71851H61.831V4.57492H62.6874V3.71851Z" fill="#580B0C" />
                        <path d="M63.5426 7.14307H64.399V6.28665H63.5426V7.14307Z" fill="#FF5681" />
                        <path d="M64.3991 6.28711H65.2555V5.4307H64.3991V6.28711Z" fill="#FF5681" />
                        <path d="M65.2549 5.43091H66.1113V4.5745H65.2549V5.43091Z" fill="#FF5681" />
                        <path d="M60.1176 3.71924H60.974V2.86283H60.1176V3.71924Z" fill="#FF5681" />
                        <path d="M60.974 2.86279H61.8304V2.00638H60.974V2.86279Z" fill="#FF5681" />
                        <path d="M61.8298 2.0061H62.6862V1.14969H61.8298V2.0061Z" fill="#FF5681" />
                        <path d="M59.2617 3.71854V4.57495H60.1181V3.71854H59.2617Z" fill="#FF5681" />
                        <path d="M60.1182 4.5745V5.43091H60.9746V4.5745H60.1182Z" fill="#FF5681" />
                        <path d="M60.974 5.4307V6.28711H61.8304V5.4307H60.974Z" fill="#FF5681" />
                        <path d="M61.8304 6.28665V7.14307H62.6868V6.28665H61.8304Z" fill="#FF5681" />
                        <path d="M62.6862 7.14383V8.00024H63.5426V7.14383H62.6862Z" fill="#FF5681" />
                        <path d="M62.6868 0.294222V1.15063H63.5432V0.294222H62.6868Z" fill="#FF5681" />
                        <path d="M63.5427 1.14969V2.0061H64.3991V1.14969H63.5427Z" fill="#FF5681" />
                        <path d="M64.399 2.00638V2.86279H65.2555V2.00638H64.399Z" fill="#FF5681" />
                        <path d="M65.2549 2.86209V3.71851H66.1113V2.86209H65.2549Z" fill="#FF5681" />
                        <path d="M66.1113 3.71854V4.57495H66.9677V3.71854H66.1113Z" fill="#FF5681" />
                        <path d="M74.6731 3.71854V4.57495H75.5295V3.71854H74.6731Z" fill="#DAAB8E" />
                        <path d="M4.15579 3.71851H3.29938V4.57492H4.15579V3.71851Z" fill="#DAAB8E" />
                        <path d="M5.01163 4.57495H4.15521V5.43136H5.01163V4.57495Z" fill="#DAAB8E" />
                        <path d="M5.86801 5.4314H5.0116V6.28781H5.86801V5.4314Z" fill="#DAAB8E" />
                        <path d="M5.01102 2.86279H5.86743V2.00638H5.01102V2.86279Z" fill="#DAAB8E" />
                        <path d="M4.15518 3.71924H5.0116V2.86283H4.15518V3.71924Z" fill="#DAAB8E" />
                        <path d="M6.72324 4.57495H7.57965V3.71854H6.72324V4.57495Z" fill="#DAAB8E" />
                        <path d="M5.8674 5.43091H6.72382V4.5745H5.8674V5.43091Z" fill="#DAAB8E" />
                        <path d="M6.72384 2.86279H5.86743V3.71921H6.72384V2.86279Z" fill="#DAAB8E" />
                        <path d="M11.8612 4.57495H12.7176V3.71854H11.8612V4.57495Z" fill="#580B0C" />
                        <path d="M12.7164 5.43091H13.5728V4.5745H12.7164V5.43091Z" fill="#580B0C" />
                        <path d="M12.7164 3.71924H13.5728V2.86283H12.7164V3.71924Z" fill="#580B0C" />
                        <path d="M13.5722 4.57495H14.4286V3.71854H13.5722V4.57495Z" fill="#580B0C" />
                        <path d="M12.7176 6.28711H11.8612V7.14352H12.7176V6.28711Z" fill="#FF5681" />
                        <path d="M11.8612 5.4314H11.0048V6.28781H11.8612V5.4314Z" fill="#FF5681" />
                        <path d="M11.0048 4.57495H10.1484V5.43136H11.0048V4.57495Z" fill="#FF5681" />
                        <path d="M16.1421 2.86279H15.2857V3.71921H16.1421V2.86279Z" fill="#FF5681" />
                        <path d="M15.2857 2.0061H14.4293V2.86252H15.2857V2.0061Z" fill="#FF5681" />
                        <path d="M14.4298 1.15063H13.5734V2.00705H14.4298V1.15063Z" fill="#FF5681" />
                        <path d="M16.1415 3.71854V4.57495H16.9979V3.71854H16.1415Z" fill="#FF5681" />
                        <path d="M15.2857 4.5745V5.43091H16.1421V4.5745H15.2857Z" fill="#FF5681" />
                        <path d="M14.4293 5.4307V6.28711H15.2857V5.4307H14.4293Z" fill="#FF5681" />
                        <path d="M13.5734 6.28714V7.14355H14.4298V6.28714H13.5734Z" fill="#FF5681" />
                        <path d="M12.717 7.1431V7.99951H13.5734V7.1431H12.717Z" fill="#FF5681" />
                        <path d="M12.717 0.29349V1.1499H13.5734V0.29349H12.717Z" fill="#FF5681" />
                        <path d="M11.8606 1.14969V2.0061H12.717V1.14969H11.8606Z" fill="#FF5681" />
                        <path d="M11.0048 2.00589V2.8623H11.8612V2.00589H11.0048Z" fill="#FF5681" />
                        <path d="M10.1484 2.86209V3.71851H11.0048V2.86209H10.1484Z" fill="#FF5681" />
                        <path d="M9.29248 3.71854V4.57495H10.1489V3.71854H9.29248Z" fill="#FF5681" />
                        <path d="M0.730713 3.71854V4.57495H1.58713V3.71854H0.730713Z" fill="#DAAB8E" />
                    </svg>
                </div>
            </div>

            <div class="text-[20px] xl:text-[25px] text-[#580B0C] text-start md:text-end order-2 lg:order-none">
                <h1>Keep In Touch</h1>
                <div class='text-[12px] xl:text-[13px] space-y-2 xl:space-y-4'>
                    <div>Street Chea Sophara, #17P18, Group 6, Lorem village, Sangkat Lorem, Khan SenSok, Phnom Penh,
                        Cambodia</div>
                    <a href="#">info@BOUTIPREK BAYON.com</a>
                    <div class='flex flex-col'>
                        <a href="tel:071 642 9999">071 642 9999</a>
                        <a href="tel:069 782 465" class='mt-1'>069 782 465</a>
                    </div>
                    <div>
                        <h1 class='text-[16px]'>Follow Us</h1>
                        <div class='flex flex-row justify-start md:justify-end mt-2'>
                            <a href="#" class="hover:scale-110 transition-all duration-300">
                                <svg width="23" height="23" viewBox="0 0 23 23" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M11.0726 22.1452C17.1878 22.1452 22.1452 17.1878 22.1452 11.0726C22.1452 4.95738 17.1878 0 11.0726 0C4.95738 0 0 4.95738 0 11.0726C0 17.1878 4.95738 22.1452 11.0726 22.1452Z"
                                        fill="#580B0C" />
                                    <path
                                        d="M5.06663 10.8326L15.7425 6.71639C16.238 6.53739 16.6707 6.83727 16.5102 7.58652L16.5111 7.58559L14.6933 16.1493C14.5586 16.7565 14.1978 16.9041 13.6931 16.6181L10.925 14.5779L9.58979 15.8642C9.44215 16.0118 9.31759 16.1364 9.03155 16.1364L9.22808 13.3194L14.3584 8.68455C14.5817 8.48801 14.3086 8.37729 14.0142 8.5729L7.67423 12.5646L4.94114 11.712C4.34783 11.5238 4.33492 11.1187 5.06663 10.8326Z"
                                        fill="white" />
                                </svg>
                            </a>
                            <a href="#" class="ml-3 hover:scale-110 transition-all duration-300">
                                <svg width="23" height="23" viewBox="0 0 23 23" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M11.4536 0C5.34818 0 0.380981 4.9672 0.380981 11.0726C0.380981 17.1776 5.34818 22.1452 11.4536 22.1452C17.5586 22.1452 22.5262 17.1776 22.5262 11.0726C22.5262 4.9672 17.5595 0 11.4536 0ZM14.2072 11.4624H12.4058V17.8832H9.73646C9.73646 17.8832 9.73646 14.3749 9.73646 11.4624H8.46756V9.19313H9.73646V7.72532C9.73646 6.67407 10.236 5.03142 12.4304 5.03142L14.4084 5.03901V7.24184C14.4084 7.24184 13.2064 7.24184 12.9727 7.24184C12.739 7.24184 12.4067 7.3587 12.4067 7.86001V9.19358H14.4405L14.2072 11.4624Z"
                                        fill="#580B0C" />
                                </svg>
                            </a>
                        </div>
                    </div>

                </div>

            </div>
        </div>

        <div class="flex flex-col items-center justify-center sm:h-[50px] bg-[#580B0C] w-full text-[#fff]">
            <p class="py-1.5 sm:py-1 md:pt-1 md:pb-0">All right reserved</p>
            <img src="{{ asset('assets/images/footer-1.png') }}" alt="" class="max-w-full h-auto">
        </div>
    </section>
@endsection

{{-- @section('js')
    <script>
        function openPopup(popupId) {
            document.getElementById(popupId).classList.remove('hidden');
        }

        function closePopup(popupId) {
            document.getElementById(popupId).classList.add('hidden');
        }
    </script>
@endsection --}}
