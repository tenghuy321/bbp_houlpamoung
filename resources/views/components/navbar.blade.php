<nav id="navbar" class="hidden lg:block w-full bg-white text-black py-4 transition-all duration-500 border-b-2">
    <div class="flex justify-between items-center max-w-6xl mx-auto text-[15px] text-[#580B0C] relative">
        <ul class="flex items-center justify-center">
            <li class="w-[120px] flex justify-center items-center">
                <img src="{{ asset('assets/images/text.png') }}" alt="Text Logo" class="w-full h-[20px]">
            </li>
            <li class="w-[170px] flex justify-center items-center">
                <a href="{{ route('home') }}#home" class="nav-link">{{ __('messages.home') }}</a>
            </li>
            <li class="w-[170px] flex justify-center items-center">
                <a href="{{ route('home') }}#about" class="nav-link">{{ __('messages.about') }}</a>
            </li>
        </ul>

        <div class="absolute inset-0 flex items-center justify-center z-50 top-[40px]">
            <a href="{{ route('home') }}#home">
                <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" class="w-24">
            </a>
        </div>

        <div class="absolute -bottom-[33px] flex items-center justify-center z-40">
            <img src="{{ asset('assets/images/nav.png') }}" alt="" class="">
        </div>


        <ul class="flex items-center justify-center">
            <li class="w-[170px] flex justify-center items-center">
                <a href="{{ route('home') }}#products" class="nav-link">{{ __('messages.products') }}</a>
            </li>
            <li class="w-[170px] flex justify-center items-center">
                <a href="{{ route('home') }}#whyUs" class="nav-link">{{ __('messages.whyus') }}</a>
            </li>
            <li class="w-[170px] flex justify-center items-center">
                <a href="{{ route('home') }}#contact" class="nav-link">{{ __('messages.contact') }}</a>
            </li>
        </ul>
    </div>
</nav>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const navbar = document.getElementById("navbar");
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

            // Ensure the last section is highlighted when scrolled to bottom
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

        function NavFixed() {
            if (window.scrollY > 50) {
                navbar.classList.add("fixed", "top-0", "left-0", "w-full", "z-50", "shadow-md");
            } else {
                navbar.classList.remove("fixed", "top-0", "left-0", "w-full", "z-50", "shadow-md");
            }
        }

        window.addEventListener("scroll", () => {
            ActiveLink();
            NavFixed();
        });
    });
</script>
