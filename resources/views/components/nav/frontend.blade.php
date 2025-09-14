<nav class="flex-1 lg:overflow-visible overflow-y-auto" id="mainNav">
    <ul class="flex flex-col lg:flex-row lg:items-center space-y-2 lg:space-y-0 space-x-0 lg:space-x-2 p-4 lg:p-0">
        <li class="{{ Route::is('home') ? 'font-bold text-greenish' : 'hover:text-greenish hover:bg-greenish-100 transition-colors duration-200 rounded hover:font-semibold' }} lg:px-2 py-1"><a href="{{ route('home') }}">Home</a></li>
        
        <li class="relative group">
            <div class="flex flex-row items-center justify-between lg:px-2 py-1 {{ Route::is('categories.*') ? 'font-bold text-greenish' : 'hover:text-greenish hover:bg-greenish-100 transition-colors duration-200 rounded hover:font-semibold' }}">
                <a href="#">Pages</a>
                <button class="nav-toggle lg:ml-2" aria-expanded="false" aria-controls="categories-submenu"><svg class="w-4 h-4 transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg></button>
            </div>
            
            <ul id="categories-submenu" class="hidden lg:absolute lg:bg-white lg:shadow-lg lg:rounded lg:mt-1 lg:min-w-[200px] lg:z-10">
                <li class="relative group">
                    <div class="flex flex-row items-center justify-between py-2 lg:px-4 hover:bg-gray-100 {{ Route::is('search') ? 'font-bold text-greenish' : 'hover:text-greenish hover:bg-greenish-100 transition-colors duration-200 rounded hover:font-semibold' }}">
                        <a href="{{ route('search') }}" class="w-full">Search</a>
                        <button class="nav-toggle" aria-expanded="false" aria-controls="subcategory-1"><svg class="w-4 h-4 transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg></button>
                    </div>
                    
                    <ul id="subcategory-1" class="hidden lg:absolute lg:left-full lg:top-0 lg:bg-white lg:shadow-lg lg:rounded lg:ml-1 lg:min-w-[200px]">
                        <li class="relative group">
                            <div class="flex flex-row items-center justify-between py-2 lg:px-4 hover:bg-gray-100 {{ Route::is('categories.*') ? 'font-bold text-greenish' : 'hover:text-greenish hover:bg-greenish-100 transition-colors duration-200 rounded hover:font-semibold' }}">
                                <a href="#" class="w-full">Sub Category 1</a>
                                <button class="nav-toggle" aria-expanded="false" aria-controls="subsubcategory-1"><svg class="w-4 h-4 transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg></button>
                            </div>
                            <ul id="subsubcategory-1" class="hidden lg:absolute lg:left-full lg:top-0 lg:bg-white lg:shadow-lg lg:rounded lg:ml-1 lg:min-w-[200px]">
                                <li class="{{ Route::is('categories.*') ? 'font-bold text-greenish' : 'hover:text-greenish hover:bg-greenish-100 transition-colors duration-200 rounded hover:font-semibold' }} py-2 lg:px-4"><a href="#">Sub Sub Category 1</a></li>
                                <li class="{{ Route::is('categories.*') ? 'font-bold text-greenish' : 'hover:text-greenish hover:bg-greenish-100 transition-colors duration-200 rounded hover:font-semibold' }} py-2 lg:px-4"><a href="#">Sub Sub Category 2</a></li>
                                <li class="{{ Route::is('categories.*') ? 'font-bold text-greenish' : 'hover:text-greenish hover:bg-greenish-100 transition-colors duration-200 rounded hover:font-semibold' }} py-2 lg:px-4"><a href="#">Sub Sub Category 3</a></li>
                            </ul>
                        </li>
                        
                        <li class="{{ Route::is('categories.*') ? 'font-bold text-greenish' : 'hover:text-greenish hover:bg-greenish-100 transition-colors duration-200 rounded hover:font-semibold' }} py-2 lg:px-4"><a href="#">Sub Category 2</a></li>
                        
                        <li class="{{ Route::is('categories.*') ? 'font-bold text-greenish' : 'hover:text-greenish hover:bg-greenish-100 transition-colors duration-200 rounded hover:font-semibold' }} py-2 lg:px-4"><a href="#">Sub Category 3</a></li>
                    </ul>
                </li>
                
                <li class="relative group">
                    <div class="flex flex-row items-center justify-between py-2 lg:px-4 hover:bg-gray-100 {{ Route::is('blog') ? 'font-bold text-greenish' : 'hover:text-greenish hover:bg-greenish-100 transition-colors duration-200 rounded hover:font-semibold' }}">
                        <a href="{{ route('blog') }}" class="w-full">Blog</a>
                        <button class="nav-toggle" aria-expanded="false" aria-controls="category-2"><svg class="w-4 h-4 transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg></button>
                    </div>
                    
                    <ul id="category-2" class="hidden lg:absolute lg:left-full lg:top-0 lg:bg-white lg:shadow-lg lg:rounded lg:ml-1 lg:min-w-[200px] lg:z-10">
                        <li class="{{ Route::is('post') ? 'font-bold text-greenish' : 'hover:text-greenish hover:bg-greenish-100 transition-colors duration-200 rounded hover:font-semibold' }} py-2 lg:px-4"><a href="{{ route('post') }}">Post</a></li>
                        <li class="{{ Route::is('post-category') ? 'font-bold text-greenish' : 'hover:text-greenish hover:bg-greenish-100 transition-colors duration-200 rounded hover:font-semibold' }} py-2 lg:px-4"><a href="{{ route('post-category') }}">Post Category</a></li>
                        <li class="{{ Route::is('author') ? 'font-bold text-greenish' : 'hover:text-greenish hover:bg-greenish-100 transition-colors duration-200 rounded hover:font-semibold' }} py-2 lg:px-4"><a href="{{ route('author') }}">Author</a></li>
                        <li class="{{ Route::is('archieve') ? 'font-bold text-greenish' : 'hover:text-greenish hover:bg-greenish-100 transition-colors duration-200 rounded hover:font-semibold' }} py-2 lg:px-4"><a href="{{ route('archieve') }}">Archieve</a></li>
                        <li class="{{ Route::is('page') ? 'font-bold text-greenish' : 'hover:text-greenish hover:bg-greenish-100 transition-colors duration-200 rounded hover:font-semibold' }} py-2 lg:px-4"><a href="{{ route('page') }}">Page</a></li>
                        <li class="{{ Route::is('job-post') ? 'font-bold text-greenish' : 'hover:text-greenish hover:bg-greenish-100 transition-colors duration-200 rounded hover:font-semibold' }} py-2 lg:px-4"><a href="{{ route('job-post') }}">Job Post</a></li>
                        <li class="{{ Route::is('job-category') ? 'font-bold text-greenish' : 'hover:text-greenish hover:bg-greenish-100 transition-colors duration-200 rounded hover:font-semibold' }} py-2 lg:px-4"><a href="{{ route('job-category') }}">Job Category</a></li>
                        <li class="{{ Route::is('other-posts') ? 'font-bold text-greenish' : 'hover:text-greenish hover:bg-greenish-100 transition-colors duration-200 rounded hover:font-semibold' }} py-2 lg:px-4"><a href="{{ route('other-posts') }}">Other Posts</a></li>
                    </ul>
                </li>
                
                <li class="{{ Route::is('categories.*') ? 'font-bold text-greenish' : 'hover:text-greenish hover:bg-greenish-100 transition-colors duration-200 rounded hover:font-semibold' }} py-2 lg:px-4"><a href="#">Category 3</a></li>
            </ul>
        </li>

        <li class="{{ Route::is('about') ? 'font-bold text-greenish' : 'hover:text-greenish hover:bg-greenish-100 transition-colors duration-200 rounded hover:font-semibold' }} lg:px-2 py-1"><a href="{{ route('about') }}">About</a></li>
        <li class="{{ Route::is('contact') ? 'font-bold text-greenish' : 'hover:text-greenish hover:bg-greenish-100 transition-colors duration-200 rounded hover:font-semibold' }} lg:px-2 py-1"><a href="{{ route('contact') }}">Contact</a></li>
    </ul>
</nav>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const nav = document.getElementById('mainNav');
    const toggles = document.querySelectorAll('.nav-toggle');
    
    // Toggle submenu and rotate icon
    function toggleSubmenu(button) {
        const isExpanded = button.getAttribute('aria-expanded') === 'true';
        const submenu = document.getElementById(button.getAttribute('aria-controls'));
        const icon = button.querySelector('svg');
        
        // Close all other open menus at the same level
        if (!isExpanded) {
            const parentMenu = button.closest('li');
            const siblings = parentMenu.parentElement.querySelectorAll('li');
            
            siblings.forEach(sibling => {
                if (sibling !== parentMenu) {
                    const otherButton = sibling.querySelector('.nav-toggle[aria-expanded="true"]');
                    if (otherButton) {
                        otherButton.setAttribute('aria-expanded', 'false');
                        otherButton.querySelector('svg').classList.remove('rotate-180');
                        const otherSubmenu = document.getElementById(otherButton.getAttribute('aria-controls'));
                        if (otherSubmenu) otherSubmenu.classList.add('hidden');
                    }
                }
            });
        }
        
        // Toggle current menu
        button.setAttribute('aria-expanded', !isExpanded);
        submenu.classList.toggle('hidden');
        icon.classList.toggle('rotate-180');
    }
    
    // Handle toggle button clicks and parent item clicks
    toggles.forEach(button => {
        const parentItem = button.closest('li');
        const link = parentItem.querySelector('a:first-child');
        
        // Toggle on button click
        button.addEventListener('click', (e) => {
            e.stopPropagation();
            e.preventDefault();
            toggleSubmenu(button);
        });
        
        // Close other menus when clicking a parent link
        if (link) {
            link.addEventListener('click', (e) => {
                // Only prevent default if there's a submenu
                if (button.getAttribute('aria-expanded') === 'false') {
                    e.preventDefault();
                    toggleSubmenu(button);
                }
            });
        }
    });
    
    // Close all menus when clicking outside
    document.addEventListener('click', () => {
        toggles.forEach(button => {
            if (button.getAttribute('aria-expanded') === 'true') {
                toggleSubmenu(button);
            }
        });
    });
    
    // Prevent closing when clicking inside a menu
    nav.addEventListener('click', (e) => {
        e.stopPropagation();
    });
});
</script>
