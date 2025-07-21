<!-- Healthcare Page Loader -->
<div id="page-loader"
    class="fixed inset-0 z-50 flex items-center justify-center bg-white bg-opacity-90 transition-opacity duration-500">
    <div class="text-center">
        <!-- Healthcare Spinner -->
        <div class="relative inline-block mb-4">
            <div class="w-16 h-16 border-4 border-blue-200 rounded-full"></div>
            <div
                class="absolute top-0 left-0 w-16 h-16 border-4 border-t-blue-500 border-r-transparent border-b-transparent border-l-transparent rounded-full animate-spin-slow">
            </div>
            <div
                class="absolute top-1 left-1 w-14 h-14 border-4 border-t-blue-400 border-r-transparent border-b-transparent border-l-transparent rounded-full animate-spin-slower">
            </div>

            <!-- Medical Cross Center -->
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-blue-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                </svg>
            </div>
        </div>

        <!-- Loading Text -->
        <p class="text-gray-600 font-medium">Memuat Sistem Kesehatan...</p>
    </div>
</div>

<style>
    @keyframes spin-slow {
        from {
            transform: rotate(0deg);
        }

        to {
            transform: rotate(360deg);
        }
    }

    @keyframes spin-slower {
        from {
            transform: rotate(0deg);
        }

        to {
            transform: rotate(-360deg);
        }
    }

    .animate-spin-slow {
        animation: spin-slow 2.5s linear infinite;
    }

    .animate-spin-slower {
        animation: spin-slower 3s linear infinite;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const loader = document.getElementById('page-loader');

        // Minimum display time (2 seconds)
        const minDisplayTime = 2000;
        const startTime = Date.now();

        window.addEventListener('load', function() {
            const elapsed = Date.now() - startTime;
            const remaining = Math.max(0, minDisplayTime - elapsed);

            setTimeout(() => {
                if (loader) {
                    loader.style.opacity = '0';
                    setTimeout(() => {
                        if (loader) loader.style.display = 'none';
                    }, 500);
                }
            }, remaining);
        });

        // Fallback in case load event doesn't fire
        setTimeout(() => {
            if (loader && loader.style.opacity !== '0') {
                loader.style.opacity = '0';
                setTimeout(() => {
                    if (loader) loader.style.display = 'none';
                }, 500);
            }
        }, 5000); // Max 5 seconds
    });
</script>
