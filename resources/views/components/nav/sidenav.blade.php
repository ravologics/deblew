<!-- Mobile Menu Overlay -->
<div id="offCanvasOverlay" class="fixed inset-0 bg-black bg-opacity-50 z-40 hidden"></div>

<!-- Sidebar -->
<div id="offCanvasMenu" class="fixed inset-y-0 left-0 transform -translate-x-full lg:translate-x-0 transition-transform duration-300 ease-in-out z-50 w-60 lg:relative lg:flex lg:transform-none">
    <div class="flex flex-col w-full h-full bg-white shadow-lg">
        <!-- Mobile close button -->
        <div class="flex items-center justify-between lg:justify-center h-16 px-4 bg-greenish-100">
            <span class="text-lg font-bold text-greenish-600">Blog Admin</span>
            <button id="offCanvasCloseButton" class="text-gray-500 hover:text-gray-700 focus:outline-none lg:hidden">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
        <nav class="flex-1 px-2 py-4 space-y-1">
            <a href="{{ route('dashboard') }}" class="flex items-center px-4 py-2 text-sm font-medium {{ request()->is('dashboard*') ? 'bg-greenish-100 text-greenish-600' : 'text-gray-600 hover:bg-gray-100 hover:text-gray-900' }} rounded-md group">
                <svg class="w-6 h-6 mr-3 {{ request()->is('dashboard*') ? 'text-greenish-600' : 'text-gray-400 group-hover:text-gray-500' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                </svg>
                Dashboard
            </a>

            <a href="{{ route('posts') }}" class="flex items-center px-4 py-2 text-sm font-medium {{ request()->is('posts*') ? 'bg-greenish-100 text-greenish-600' : 'text-gray-600 hover:bg-gray-100 hover:text-gray-900' }} rounded-md group">
                <svg class="w-6 h-6 mr-3 {{ request()->is('posts*') ? 'text-greenish-600' : 'text-gray-400 group-hover:text-gray-500' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                </svg>
                Posts
            </a>

            <a href="{{ route('pages') }}" class="flex items-center px-4 py-2 text-sm font-medium {{ request()->is('pages*') ? 'bg-greenish-100 text-greenish-600' : 'text-gray-600 hover:bg-gray-100 hover:text-gray-900' }} rounded-md group">
                <svg class="w-6 h-6 mr-3 {{ request()->is('pages*') ? 'text-greenish-600' : 'text-gray-400 group-hover:text-gray-500' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                </svg>
                Pages
            </a>

            <a href="{{ route('images') }}" class="flex items-center px-4 py-2 text-sm font-medium {{ request()->is('images*') ? 'bg-greenish-100 text-greenish-600' : 'text-gray-600 hover:bg-gray-100 hover:text-gray-900' }} rounded-md group">
                <svg class="w-6 h-6 mr-3 {{ request()->is('images*') ? 'text-greenish-600' : 'text-gray-400 group-hover:text-gray-500' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                </svg>
                Images
            </a>

            <a href="{{ route('comments') }}" class="flex items-center px-4 py-2 text-sm font-medium {{ request()->is('comments*') ? 'bg-greenish-100 text-greenish-600' : 'text-gray-600 hover:bg-gray-100 hover:text-gray-900' }} rounded-md group">
                <svg class="w-6 h-6 mr-3 {{ request()->is('comments*') ? 'text-greenish-600' : 'text-gray-400 group-hover:text-gray-500' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path>
                </svg>
                Comments
            </a>

            <a href="{{ route('form-submissions') }}" class="flex items-center px-4 py-2 text-sm font-medium {{ request()->is('form-submissions*') ? 'bg-greenish-100 text-greenish-600' : 'text-gray-600 hover:bg-gray-100 hover:text-gray-900' }} rounded-md group">
                <svg class="w-6 h-6 mr-3 {{ request()->is('form-submissions*') ? 'text-greenish-600' : 'text-gray-400 group-hover:text-gray-500' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                </svg>
                Form Submissions
            </a>

            <a href="{{ route('users') }}" class="flex items-center px-4 py-2 text-sm font-medium {{ request()->is('users*') ? 'bg-greenish-100 text-greenish-600' : 'text-gray-600 hover:bg-gray-100 hover:text-gray-900' }} rounded-md group">
                <svg class="w-6 h-6 mr-3 {{ request()->is('users*') ? 'text-greenish-600' : 'text-gray-400 group-hover:text-gray-500' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                </svg>
                Users
            </a>

            <a href="{{ route('settings') }}" class="flex items-center px-4 py-2 text-sm font-medium {{ request()->is('settings*') ? 'bg-greenish-100 text-greenish-600' : 'text-gray-600 hover:bg-gray-100 hover:text-gray-900' }} rounded-md group">
                <svg class="w-6 h-6 mr-3 {{ request()->is('settings*') ? 'text-greenish-600' : 'text-gray-400 group-hover:text-gray-500' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                </svg>
                Settings
            </a>
        </nav>
    </div>
</div>
