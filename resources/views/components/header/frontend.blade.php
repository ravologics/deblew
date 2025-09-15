<header class="bg-white">
    <div class="max-w-7xl mx-auto flex flex-row items-center justify-between py-1 header-padding">
        <!-- Hamburger -->
        <button id="hamburgerBtn" class="text-white bg-greenish p-1 rounded bg-img lg:hidden" aria-controls="offCanvas" aria-expanded="false">
            <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M3 5H21M3 12H21M3 19H21" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </button>
        
        <!-- Logo -->
        <a href="{{ route('home') }}">
            @if(file_exists(public_path('images/branding/Deblew-Logo-Light.png')))
                <img src="{{ asset('images/branding/Deblew-Logo-Light.png') }}" alt="Deblew Logo" class="w-[200px]">
            @else
                Deblew
            @endif
        </a>

        <!-- Navigation / Off-canvas container -->
        <div id="offCanvas" class="fixed inset-y-0 left-0 z-40 w-72 max-w-[80vw] bg-white transform -translate-x-full transition-transform duration-300 ease-out border-r border-gray-300 flex flex-col h-full lg:static lg:z-auto lg:w-auto lg:max-w-none lg:transform-none lg:translate-x-0 lg:bg-transparent lg:border-none">
            <!-- Off Canvas Header -->
            <div class="flex flex-row items-center justify-between w-full border-b border-gray-300 px-2 py-1 lg:hidden">
                <!-- Logo -->
                <a href="{{ route('home') }}">
                    @if(file_exists(public_path('images/branding/Deblew-Logo-Light.png')))
                        <img src="{{ asset('images/branding/Deblew-Logo-Light.png') }}" alt="Deblew Logo" class="w-[150px]">
                    @else
                        Deblew
                    @endif
                </a>

                <!-- Close icon -->
                <svg id="iconCloseOffCanvas" xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 cursor-pointer bg-greenish bg-img-rev text-white rounded-full p-[2px]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 6l12 12M6 18L18 6"/>
                </svg>
            </div>
            
            @include('components.nav.frontend')

            <!-- Off Canvas Footer -->
            <div class="flex flex-row items-center justify-center w-full border-t border-gray-300 p-2 lg:hidden">
                <button onclick="window.location.href='{{ route('contact') }}'" class="text-white bg-greenish px-3 py-1 rounded-full bg-img w-full">Contact Us</button>
            </div>
        </div>

        <!-- Others -->
        <div class="flex items-center space-x-5">
            <div class="relative">
                <button id="searchToggle" aria-expanded="false" type="button" class="text-gray-700 cursor-pointer">
                    <!-- Search icon -->
                    <svg id="iconSearch" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-4.35-4.35"/>
                        <circle cx="10" cy="10" r="7"/>
                    </svg>
                    <!-- Close icon -->
                    <svg id="iconClose" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 hidden" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 6l12 12M6 18L18 6"/>
                    </svg>
                </button>

                <div id="searchDropdown" class="absolute top-[40px] right-[-5px] lg:right-[-20px] rounded w-[300px] header-search hidden">
                    <form class="p-2 bg-white rounded">
                        <input type="search" name="search" placeholder="Search" class="w-full p-0">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 absolute top-1/2 -translate-y-1/2 right-4 text-gray-500 pointer-events-none" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-4.35-4.35"/>
                            <circle cx="10" cy="10" r="7"/>
                        </svg>
                    </form>
                </div>
            </div>

            <button onclick="window.location.href='{{ route('contact') }}'" class="text-white bg-greenish px-3 py-1 rounded-full bg-img hidden lg:block">Contact Us</button>
        </div>
    </div>
</header>

<style>
    .header-search {
        box-shadow: 1px 1px 5px #005d47, -1px -1px 5px #005d47;
        z-index: 2;
    }

    .header-search::after {
        content: '';
        position: absolute;
        height: 15px;
        width: 15px;
        background: white;
        right: 22.5px;
        top: -8px;
        transform: rotate(45deg);
        z-index: -1;
        box-shadow: -1px -1px 5px #005d47;
    }

    @media (max-width: 1309px) {
        .header-padding, .footer-padding {
            margin-left: 1rem;
            margin-right: 1rem;
        }
    }

    @media (max-width: 1023px) {
        .header-search::after {
            height: 12.5px;
            width: 12.5px;
            right: 10px;
            top: -6px;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const toggleBtn = document.getElementById('searchToggle');
        const iconSearch = document.getElementById('iconSearch');
        const iconClose = document.getElementById('iconClose');
        const dropdown = document.getElementById('searchDropdown');
        if (!toggleBtn || !dropdown || !iconSearch || !iconClose) return;

        const container = toggleBtn.closest('.relative') || document;

        const openSearch = () => {
            dropdown.classList.remove('hidden');
            iconSearch.classList.add('hidden');
            iconClose.classList.remove('hidden');
            toggleBtn.setAttribute('aria-expanded', 'true');
            const input = dropdown.querySelector('input[type="search"]');
            if (input) {
                setTimeout(() => input.focus(), 0);
            }
        };

        const closeSearch = () => {
            dropdown.classList.add('hidden');
            iconClose.classList.add('hidden');
            iconSearch.classList.remove('hidden');
            toggleBtn.setAttribute('aria-expanded', 'false');
        };

        // Toggle on icon click
        toggleBtn.addEventListener('click', function (e) {
            e.stopPropagation();
            if (dropdown.classList.contains('hidden')) {
                openSearch();
            } else {
                closeSearch();
            }
        });

        // Prevent clicks inside the dropdown from closing it
        dropdown.addEventListener('click', function (e) {
            e.stopPropagation();
        });

        // Off-canvas nav (mobile/tablet)
        const offCanvas = document.getElementById('offCanvas');
        const hamburger = document.getElementById('hamburgerBtn');
        const offCanvasClose = document.getElementById('iconCloseOffCanvas');
        const offCanvasOverlay = document.getElementById('offCanvasOverlay');

        if (offCanvas && hamburger && offCanvasClose && offCanvasOverlay) {
            const openOffCanvas = () => {
                offCanvas.classList.remove('-translate-x-full');
                offCanvasOverlay.classList.remove('hidden');
                hamburger.setAttribute('aria-expanded', 'true');
                document.body.classList.add('overflow-hidden');
            };

            const closeOffCanvas = () => {
                offCanvas.classList.add('-translate-x-full');
                offCanvasOverlay.classList.add('hidden');
                hamburger.setAttribute('aria-expanded', 'false');
                document.body.classList.remove('overflow-hidden');
            };

            // Toggle with hamburger
            hamburger.addEventListener('click', function (e) {
                e.stopPropagation();
                if (offCanvas.classList.contains('-translate-x-full')) {
                    openOffCanvas();
                } else {
                    closeOffCanvas();
                }
            });

            // Close with close icon
            offCanvasClose.addEventListener('click', function (e) {
                e.stopPropagation();
                closeOffCanvas();
            });

            // Close when tapping overlay
            offCanvasOverlay.addEventListener('click', function () {
                closeOffCanvas();
            });

            // Close when clicking any link inside the off-canvas (use capture on anchors)
            offCanvas.addEventListener('click', function (e) {
                const target = e.target;
                if (!target) return;
                const anchor = target.closest ? target.closest('a') : null;
                if (anchor) {
                    closeOffCanvas();
                }
            });

            // Ensure correct state on resize to desktop
            window.addEventListener('resize', function () {
                // Tailwind lg breakpoint ~1024px; when >= lg, ensure overlay is hidden and scrolling enabled
                if (window.innerWidth >= 1024) {
                    closeOffCanvas();
                }
            });

            // Also close off-canvas on Escape
            document.addEventListener('keydown', function (e) {
                if (e.key === 'Escape') {
                    closeOffCanvas();
                }
            });
        }

        // Click outside closes the dropdown
        document.addEventListener('click', function (e) {
            if (!container.contains(e.target)) {
                closeSearch();
            }
        });

        // ESC key closes the dropdown
        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape') {
                closeSearch();
            }
        });
    });
</script>
