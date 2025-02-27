<button id="scroll-top-btn"
    class="fixed bottom-5 right-5 hidden z-[300] bg-[#580B0C] w-12 h-12 items-center justify-center rounded-full text-white transition-all duration-300 ease-in-out animate-bounce shadow-lg"
    onclick="scrollToTop()" aria-label="Scroll to Top">
    <div class="flex items-center justify-center">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="24" height="24" stroke-width="2">
            <path d="M12 5l0 14"></path>
            <path d="M18 11l-6 -6"></path>
            <path d="M6 11l6 -6"></path>
        </svg>
    </div>
</button>


<script>
    window.addEventListener("scroll", function() {
        const scrollBtn = document.getElementById("scroll-top-btn");
        if (window.scrollY > 200) {
            scrollBtn.classList.remove("hidden");
        } else {
            scrollBtn.classList.add("hidden");
        }
    });

    function scrollToTop() {
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
    }
</script>
