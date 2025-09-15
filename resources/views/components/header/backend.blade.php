<header class="bg-white shadow-sm">
    <div class="flex items-center justify-between px-6 h-16">
        <div class="flex items-center">
            <button id="offCanvasOpenButton" type="button" class="lg:hidden text-gray-500 hover:text-gray-600 focus:outline-none mr-2">
                <span class="sr-only">Open sidebar</span>
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
            <h1 class="ml-2 text-xl font-semibold text-gray-900"><?php echo $slot; ?></h1>
        </div>

        <div class="flex items-center space-x-4">

            <button class="p-1 text-gray-400 hover:text-gray-500 focus:outline-none">
                <span class="sr-only">View notifications</span>
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                </svg>
            </button>

            <div class="relative">
                <button class="flex items-center text-sm text-gray-700 hover:text-gray-900 focus:outline-none user-menu-button">
                    <span class="sr-only">Open user menu</span>
                    <div class="h-8 w-8 rounded-full bg-greenish-100 flex items-center justify-center">
                        <span class="text-greenish-700 font-medium"></span>
                    </div>
                </button>

                <div class="absolute right-0 w-56 mt-2 origin-top-right bg-white rounded-md shadow-lg shadow-greenish-200 p-2 z-10 divide-y divide-gray-100 hidden user-menu">
                    <div class="px-4 py-3">
                        <p class="text-sm text-gray-900">Signed in as</p>
                        <p class="text-sm font-medium text-gray-900 truncate"></p>
                    </div>

                    <a href="{{route('home')}}" target="_blank" class="px-4 py-2 text-sm text-gray-700 hover:text-greenish-600 hover:bg-greenish-50 flex items-center gap-3 rounded-md">
                        <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                        Go to Home
                    </a>

                    <a href="#" class="px-4 py-2 text-sm text-gray-700 hover:text-greenish-600 hover:bg-greenish-50 flex items-center gap-3 rounded-md">
                        <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                        Your Profile
                    </a>
                    
                    <a href="#" class="px-4 py-2 text-sm text-gray-700 hover:text-greenish-600 hover:bg-greenish-50 flex items-center gap-3 rounded-md">
                        <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        Settings
                    </a>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="w-full text-left px-4 py-2 text-sm text-gray-700 hover:text-red-600 hover:bg-red-50 flex items-center gap-3 rounded-md">
                            <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                            </svg>
                            Sign out
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const userMenuButton = document.querySelector(".user-menu-button");
        const userMenu = document.querySelector(".user-menu");

        if (userMenuButton && userMenu) {
            userMenuButton.addEventListener("click", function () {
                userMenu.classList.toggle("hidden");
            });
            document.addEventListener("click", function (event) {
                if (!userMenuButton.contains(event.target) && !userMenu.contains(event.target)) {
                    userMenu.classList.add("hidden");
                }
            });
        }
    });
</script>
