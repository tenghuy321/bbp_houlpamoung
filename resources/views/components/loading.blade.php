<div id="loading-overlay" class="fixed inset-0 bg-white z-[999] hidden transition-opacity duration-[2000ms] opacity-0">
    <div class="flex flex-col items-center justify-center h-full space-y-3">
        <div class="w-10 h-10 border-4 border-t-transparent border-[#580B0C] rounded-full animate-spin"></div>
        <img src="{{ asset('assets/images/text.png') }}" alt="" class="w-32">
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const loadingOverlay = document.getElementById("loading-overlay");

        window.addEventListener("beforeunload", function () {
            loadingOverlay.classList.remove("hidden");
            loadingOverlay.classList.add("opacity-100");
        });

        window.addEventListener("load", function () {
            setTimeout(() => {
                loadingOverlay.classList.add("hidden");
                loadingOverlay.classList.remove("opacity-100");
            }, 3000);
        });
    });
</script>
