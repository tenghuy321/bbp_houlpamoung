<style>
    .bg-header {
        background-image: url('{{ asset('assets/images/header.png') }}');
    }

    @media (min-width: 1024px) and (max-width: 1250px) {
        .bg-header {
            background-image: url('{{ asset('assets/images/header-1.png') }}');
        }
    }

    @media (max-width: 1023px) {
        .bg-header {
            background: #580B0C;
        }
    }
</style>

<section class="w-full text-[#fff] bg-cover bg-center h-[45px] bg-header">
    <div class="flex justify-between items-center h-full px-5 xl:px-10">
        <div class="hidden lg:flex items-center space-x-2">
            <div class="flex items-center space-x-1 text-[12px]">
                <svg width="9" height="9" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M8.30971 0.722252L7.90079 0.366099C7.38683 -0.128766 6.56524 -0.125017 6.04377 0.396091L5.26719 1.23586C5.01959 1.4833 4.88078 1.81321 4.88078 2.16561C4.88078 2.51801 5.01584 2.84418 5.26344 3.09161L5.41351 3.24157C4.93706 4.24629 4.22426 4.9586 3.25261 5.40848L3.09879 5.25852C2.85119 5.01109 2.52105 4.87612 2.17216 4.87612C1.82326 4.87612 1.49312 5.01109 1.25677 5.24727L0.386411 6.0533C0.138808 6.30073 0 6.63064 0 6.98305C0 7.33545 0.131305 7.65037 0.367653 7.89405C0.367653 7.89405 0.716549 8.29519 0.724052 8.30269C1.17424 8.75257 1.78199 9 2.43476 9C5.25594 9 9 5.25852 9 2.43929C9 1.78696 8.7524 1.17963 8.30221 0.72975L8.30971 0.722252ZM2.44227 7.86781C2.09712 7.86781 1.77449 7.74034 1.53814 7.51165C1.53814 7.51165 1.193 7.11426 1.18174 7.10676C1.13297 7.05803 1.12547 7.00179 1.12547 6.97555C1.12547 6.94931 1.13297 6.88932 1.16674 6.85933L2.0371 6.0533C2.08587 6.00457 2.14214 5.99707 2.1684 5.99707C2.19466 5.99707 2.25469 6.00457 2.29971 6.0533L2.72363 6.47319C2.8812 6.6269 3.1138 6.67563 3.32013 6.5969C4.85827 6.01206 5.96123 4.90986 6.59525 3.32779C6.67778 3.1216 6.63276 2.88166 6.4752 2.72421L6.05502 2.29682C6.00625 2.24809 5.99875 2.19185 5.99875 2.16561C5.99875 2.13937 6.00625 2.07938 6.07003 2.0194L6.8466 1.17963C6.92163 1.1084 7.03793 1.1084 7.11296 1.17963C7.12047 1.18713 7.51813 1.53578 7.51813 1.53578C7.74698 1.77197 7.87453 2.09063 7.87453 2.43929C7.87453 4.83863 4.50188 7.87531 2.43476 7.87531L2.44227 7.86781Z"
                        fill="white" />
                </svg>
                <a href="tel:071 642 9999">071 642 9999</a>
            </div>
            <div class="flex items-center">
                <a href="#" class="hover:scale-110 transition-all duration-300">
                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M8.50329 17.0066C13.1995 17.0066 17.0066 13.1995 17.0066 8.50329C17.0066 3.80705 13.1995 0 8.50329 0C3.80705 0 0 3.80705 0 8.50329C0 13.1995 3.80705 17.0066 8.50329 17.0066Z"
                            fill="white" />
                        <path
                            d="M3.89097 8.3191L12.0896 5.158C12.4701 5.02053 12.8024 5.25083 12.6791 5.82622L12.6798 5.82551L11.2839 12.4021C11.1804 12.8684 10.9034 12.9817 10.5157 12.7621L8.38992 11.1953L7.36457 12.1831C7.25119 12.2965 7.15553 12.3922 6.93586 12.3922L7.08679 10.2288L11.0267 6.66946C11.1981 6.51853 10.9884 6.4335 10.7623 6.58372L5.8935 9.64916L3.7946 8.9944C3.33897 8.84985 3.32904 8.53877 3.89097 8.3191Z"
                            fill="#580B0C" />
                    </svg>
                </a>
                <a href="#" class="ml-2 hover:scale-110 transition-all duration-300">
                    <svg width="18" height="17" viewBox="0 0 18 17" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M8.81806 0C4.12936 0 0.314758 3.8146 0.314758 8.5033C0.314758 13.1917 4.12936 17.0066 8.81806 17.0066C13.5064 17.0066 17.3214 13.1917 17.3214 8.5033C17.3214 3.8146 13.5071 0 8.81806 0ZM10.9327 8.80266H9.54933V13.7335H7.49937C7.49937 13.7335 7.49937 11.0393 7.49937 8.80266H6.52491V7.05994H7.49937V5.93272C7.49937 5.12541 7.88299 3.86392 9.56817 3.86392L11.0872 3.86974V5.56143C11.0872 5.56143 10.1641 5.56143 9.98466 5.56143C9.80519 5.56143 9.55001 5.65117 9.55001 6.03616V7.06028H11.1119L10.9327 8.80266Z"
                            fill="white" />
                    </svg>
                </a>
            </div>
        </div>
        <div class="flex lg:hidden items-center">
            <img src="{{ asset('assets/images/logo.png') }}" alt="" class="w-8">
        </div>
        <div class="flex items-center text-[12px]">
            <div class="hidden lg:flex items-center">
                <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M6.45854 9.64478C6.51704 9.78995 6.4997 9.95462 6.41249 10.0841C6.32474 10.2141 6.17902 10.2916 6.02247 10.2916H4.86813H3.71324C3.55669 10.2916 3.41098 10.2136 3.32323 10.0841C3.23601 9.95462 3.21868 9.78995 3.27718 9.64478C3.47598 9.15292 3.85842 8.68003 4.41419 8.24072L4.5767 8.11234C4.74787 7.97692 4.99109 7.97746 5.16173 8.11342L5.32098 8.24072C5.8773 8.68274 6.26028 9.15509 6.45854 9.64478ZM9.12907 10.8462C8.76018 10.5911 8.25424 10.6821 7.99856 11.0521C7.85827 11.2547 7.62859 11.3749 7.38374 11.3749H2.36606C2.14884 11.3749 1.94245 11.2796 1.79945 11.1144C1.71982 11.0212 1.5909 10.8235 1.63261 10.5467C1.81516 9.33114 2.5784 8.18438 3.90121 7.1373C4.09568 6.98292 4.20943 6.74837 4.20943 6.50027C4.20943 6.25218 4.09568 6.01708 3.90121 5.86325C2.5784 4.81616 1.81462 3.66886 1.63261 2.45331C1.5909 2.17651 1.71928 1.97933 1.79945 1.88616C1.94245 1.72041 2.14884 1.62561 2.36606 1.62561H7.38429C7.60096 1.62561 7.80735 1.71986 7.94981 1.88508C8.24232 2.22418 8.75477 2.26264 9.09549 1.96958C9.43567 1.67653 9.47305 1.16355 9.17999 0.823368C8.72876 0.300097 8.07386 7.29441e-07 7.38429 7.29441e-07H2.36606C1.6754 -0.00054096 1.01995 0.300638 0.568183 0.824993C0.122913 1.34231 -0.0753461 2.02375 0.0259502 2.69436C0.232876 4.07134 0.948992 5.3481 2.15805 6.49973C0.948992 7.65136 0.232876 8.92812 0.0259502 10.3051C-0.0753461 10.9757 0.122913 11.6572 0.568183 12.1745C1.01995 12.6994 1.6754 13 2.36606 13H7.38429C8.1627 13 8.89181 12.6176 9.33546 11.9767C9.59114 11.6079 9.49851 11.1014 9.12907 10.8462ZM13 6.49973C13 8.29489 11.545 9.74986 9.74985 9.74986C7.95469 9.74986 6.4997 8.29489 6.4997 6.49973C6.4997 4.70457 7.95469 3.24959 9.74985 3.24959C11.545 3.24959 13 4.70457 13 6.49973ZM11.1041 7.088L10.2915 6.27547V4.87466C10.2915 4.57565 10.0489 4.33297 9.74985 4.33297C9.45084 4.33297 9.20816 4.57565 9.20816 4.87466V6.27547C9.20816 6.56257 9.32246 6.83829 9.52559 7.04142L10.3381 7.85395C10.5499 8.06521 10.8928 8.06521 11.1041 7.85395C11.3159 7.64215 11.3159 7.29926 11.1041 7.088Z"
                        fill="white" />
                </svg>
                <span class="ml-2">7:30am - 8:30pm Mon - Sun</span>
            </div>

            <div class="relative">
                <button id="toggle_lang_btn" class="language-select block w-full text-[12px] text-[#fff] bg-[#580B0C] py-2 px-4 rounded focus:outline-none focus:ring-0">
                    {{ app()->getLocale() == 'en' ? 'English' : 'ភាសាខ្មែរ' }}
                </button>
                <div id="lang_dropdown" class="absolute top-10 left-0 w-20 bg-[#580B0C] hidden rounded-sm z-20">
                    <a href="{{ route('lang.switch', 'en') }}" class="block py-2 px-4 text-[12px] text-[#fff] rounded-t-sm hover:bg-[#D3AD92]">English</a>
                    <a href="{{ route('lang.switch', 'kh') }}" class="block py-2 px-4 text-[12px] text-[#fff] rounded-b-sm hover:bg-[#D3AD92]">ភាសាខ្មែរ</a>
                </div>
            </div>

            <button class="lg:hidden" type="button" data-drawer-target="drawer-right-example"
                data-drawer-show="drawer-right-example" data-drawer-placement="right" aria-controls="drawer-right-example">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M10 6h10" />
                    <path d="M4 12h16" />
                    <path d="M7 12h13" />
                    <path d="M4 18h10" />
                </svg>
            </button>

            <div id="drawer-right-example"
                class="fixed top-0 right-0 z-40 h-screen overflow-y-auto translate-x-full transition-all duration-300 ease-in-out bg-[#580B0C] w-80"
                tabindex="-1" aria-labelledby="drawer-right-label">
                <div class="flex items-center justify-between p-4">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="" class="w-8">
                    <button type="button" data-drawer-hide="drawer-right-example" aria-controls="drawer-right-example"
                        class=" w-8 h-8 inline-flex items-center justify-center">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close menu</span>
                    </button>
                </div>
                <hr>
                <ul class="space-y-5 p-4 text-[15px]">
                    <li><a href="{{ route('home') }}#home" class="nav-link">{{ __('messages.home') }}</a></li>
                    <li><a href="{{ route('home') }}#about" class="nav-link">{{ __('messages.about') }}</a></li>
                    <li><a href="{{ route('home') }}#products" class="nav-link">{{ __('messages.products') }}</a></li>
                    <li><a href="{{ route('home') }}#whyUs" class="nav-link">{{ __('messages.whyus') }}</a></li>
                    <li><a href="{{ route('home') }}#contact" class="nav-link">{{ __('messages.contact') }}</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const drawer = document.getElementById("drawer-right-example");
        const links = drawer.querySelectorAll(".nav-link");
        const closeButton = drawer.querySelector("[data-drawer-hide]");

        function closeDrawer() {
            drawer.classList.add("translate-x-full"); // Hide the drawer

            // Remove the backdrop by targeting the drawer-backdrop element
            const backdrop = document.querySelector("[drawer-backdrop]");
            if (backdrop) {
                backdrop.remove();
            }

            document.body.style.overflow = 'auto';
        }

        // Close drawer when clicking a link
        links.forEach(link => {
            link.addEventListener("click", function () {
                closeDrawer();
            });
        });

        // Optional: Also close when clicking the close button
        closeButton.addEventListener("click", closeDrawer);


        // active class
        const navbar = document.getElementById("drawer-right-example");
        const sections = document.querySelectorAll("section");
        const navLinks = document.querySelectorAll(".nav-link");

        function ActiveLink() {
            let current = "";

            sections.forEach((section) => {
                const sectionTop = section.offsetTop - 120;
                if (window.scrollY >= sectionTop) {
                    current = section.getAttribute("id");
                }
            });

            if (window.scrollY + window.innerHeight >= document.body.scrollHeight - 10) {
                current = sections[sections.length - 1].getAttribute("id");
            }

            navLinks.forEach((link) => {
                link.classList.remove("font-bold");
                if (link.getAttribute("href").includes(current)) {
                    link.classList.add("font-bold");
                }
            });
        }

        window.addEventListener("scroll", () => {
            ActiveLink();
        });
    });

    document.getElementById('toggle_lang_btn').addEventListener('click', function() {
        const dropdown = document.getElementById('lang_dropdown');
        dropdown.classList.toggle('hidden');
    });
</script>
