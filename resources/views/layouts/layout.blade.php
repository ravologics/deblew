<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Meta Tags -->
    @stack('meta')
    
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
    <!-- Page Heading -->
    @include('components.header.frontend')

    <!-- Page Content -->
    <main>
        @yield('content')
    </main>

    @include('components.footer.frontend')

    <!-- Off Canvas Overlay -->
    <div id="offCanvasOverlay" class="hidden fixed inset-0 bg-black opacity-50 z-30"></div>

    <!-- Page Footer -->
    @stack('scripts')
</body>
</html>