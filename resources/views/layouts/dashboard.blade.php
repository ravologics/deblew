<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Meta Tags -->
    @stack('meta')
    <meta name="robots" content="noindex, nofollow">
    
    <!-- Favicon -->
    @if(file_exists(public_path('images/branding/Deblew-Favicon.png')))
        <link rel="shortcut icon" href="{{ asset('images/branding/Deblew-Favicon.png') }}" type="image/x-icon">
    @endif
    
    <!-- Styles & Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Styles -->
    @stack('styles')
    <!-- Header Scripts -->
    @stack('headerscripts')
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="bg-gray-100 overflow-x-hidden">
    <div class="flex overflow-hidden h-screen">
        @include('components.nav.sidenav')
        <div class="flex-1 flex flex-col overflow-hidden">
            @include('components.header.backend')

            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100 p-6">
                @yield('content')
            </main>

            @include('components.footer.backend')
        </div>
    </div>
    
    @stack('scripts')
</body>
</html>