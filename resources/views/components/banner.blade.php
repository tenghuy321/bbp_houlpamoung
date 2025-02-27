{{-- banner --}}
{{-- <style>
    .banner_swiper {
        width: 100%;
        height: 100%;
        /* position: relative; */
    }

    .banner_swiper .swiper-button-prev::after,
    .banner_swiper .swiper-button-next::after {
        content: "";
    }

    @media (max-width: 639px) {
        .banner_swiper .swiper {
            margin-inline: 0;
            padding-top: 2rem;
        }

        .banner_swiper .swiper-button-next,
        .banner_swiper  .swiper-button-prev {
            position: absolute;
            top: 180px;
            transform: translateY(-50%);
            z-index: 10;
        }

        .banner_swiper .swiper-button-next {
            right: 10px;
        }

        .banner_swiper .swiper-button-prev {
            left: 10px;
        }
    }
</style> --}}

<section class="w-full py-5">
    <div class="relative w-full h-[50vh] sm:h-[60vh] md:h-[80vh]">
        <img src="{{ asset('assets/images/bg-3.png') }}" alt="" class="w-full h-full object-cover object-center">
        <div class="absolute inset-0 flex items-center justify-center banner_swiper" data-aos="fade-up" data-aos-duration="1200">
            {{-- <div class="swiper bannerSwiper h-[80vh] max-w-7xl mx-auto px-4">
                <div class="swiper-wrapper">
                    <div class="swiper-slide flex flex-col items-center justify-center text-[#fff] leading-none">
                        <h1 class="text-[30px] sm:text-[50px] lg:text-[70px]">BOUTIPREK BAYON 1</h1>
                        <p class="text-[15px] sm:text-[20px] md:text-[25px] tracking-[4px]">Houlpamoung</p>
                    </div>
                    <div class="swiper-slide flex flex-col items-center justify-center text-[#fff] leading-none">
                        <h1 class="text-[30px] sm:text-[50px] lg:text-[70px]">BOUTIPREK BAYON 2</h1>
                        <p class="text-[15px] sm:text-[20px] md:text-[25px] tracking-[4px]">Houlpamoung</p>
                    </div>
                    <div class="swiper-slide flex flex-col items-center justify-center text-[#fff] leading-none">
                        <h1 class="text-[30px] sm:text-[50px] lg:text-[70px]">BOUTIPREK BAYON 3</h1>
                        <p class="text-[15px] sm:text-[20px] md:text-[25px] tracking-[4px]">Houlpamoung</p>
                    </div>
                    <div class="swiper-slide flex flex-col items-center justify-center text-[#fff] leading-none">
                        <h1 class="text-[30px] sm:text-[50px] lg:text-[70px]">BOUTIPREK BAYON 4</h1>
                        <p class="text-[15px] sm:text-[20px] md:text-[25px] tracking-[4px]">Houlpamoung</p>
                    </div>
                </div>
                <div class="swiper-button-next">
                    <svg width="38" height="54" viewBox="0 0 38 54" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <rect x="23" y="21" width="15" height="12" fill="#D3AD92" />
                        <rect y="42" width="14" height="12" fill="#D3AD92" />
                        <rect width="14" height="12" fill="#D3AD92" />
                        <rect x="14" y="33" width="9" height="9" fill="#D3AD92" />
                        <rect x="14" y="12" width="9" height="9" fill="#D3AD92" />
                    </svg>
                </div>
                <div class="swiper-button-prev">
                    <svg width="38" height="54" viewBox="0 0 38 54" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <rect x="15" y="33" width="15" height="12" transform="rotate(-180 15 33)"
                            fill="#D3AD92" />
                        <rect x="38" y="12" width="14" height="12" transform="rotate(-180 38 12)"
                            fill="#D3AD92" />
                        <rect x="38" y="54" width="14" height="12" transform="rotate(-180 38 54)"
                            fill="#D3AD92" />
                        <rect x="24" y="21" width="9" height="9" transform="rotate(-180 24 21)"
                            fill="#D3AD92" />
                        <rect x="24" y="42" width="9" height="9" transform="rotate(-180 24 42)"
                            fill="#D3AD92" />
                    </svg>
                </div>
            </div> --}}
            <div class="flex flex-col items-center justify-center text-[#fff] leading-none">
                <h1 class="text-[30px] sm:text-[50px] lg:text-[70px]">BOUTIPREK BAYON</h1>
                <p class="text-[15px] sm:text-[20px] md:text-[25px] tracking-[4px]">Houlpamoung</p>
            </div>
        </div>
    </div>
</section>
