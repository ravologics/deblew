@php
    $categories = [
        ['name' => 'Job', 'url' => '#'],
        ['name' => 'Admission', 'url' => '#'],
        ['name' => 'Admit Card', 'url' => '#'],
        ['name' => 'Result', 'url' => '#'],
        ['name' => 'Syllabus', 'url' => '#'],
        ['name' => 'Govt Scheme', 'url' => '#'],
    ];

    $quickLinks = [
        ['name' => 'About Us', 'url' => '#'],
        ['name' => 'Contact Us', 'url' => '#'],
        ['name' => 'Terms & Conditions', 'url' => '#'],
        ['name' => 'Privacy Policy', 'url' => '#'],
    ];
@endphp

<section class="max-w-6xl mx-auto border rounded-xl bg-greenish py-20 flex flex-col items-center justify-center relative mt-20 gap-5" style="margin-bottom: -100px;">
    <div class="absolute top-0 left-0 w-full h-full" style="background-image: url('{{ asset('images/others/CTA-Shape.png') }}'); opacity: 0.14; background-size: cover; background-position: center center; background-repeat: no-repeat;"></div>
    
    <h3 class="text-4xl font-bold text-white text-center mb-5">Join Our WhatsApp & Telegram Channels</h3>
    
    <div class="flex flex-col md:flex-row items-center justify-center gap-5 relative z-10">
        <a href="#" class="px-8 py-2 rounded-full flex items-center justify-center gap-3 border-4 border-white text-white font-semibold text-lg hover:translate-y-[-5px] cursor-pointer transition-all duration-300" style="background: linear-gradient(211deg, #3CC779 0%, #469375 100%);">WhatsApp Channel <i class="fab fa-whatsapp"></i></a>
        <a href="#" class="px-8 py-2 rounded-full flex items-center justify-center gap-3 border-4 border-white text-white font-semibold text-lg hover:translate-y-[-5px] cursor-pointer transition-all duration-300" style="background: linear-gradient(146deg, #0053e6 0%, #4FBBE9 100%);">Telegram Channel <i class="fab fa-telegram"></i></a>
    </div>
</section>

<footer class="w-full bg-white" style="padding-top: 125px;">
    <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:flex lg:flex-row lg:justify-between gap-5 footer-padding">
        <div class="flex flex-col w-full lg:w-[35%] gap-5">
            <a href="{{ route('home') }}"><img src="{{ asset('images/branding/Deblew-Logo-Light.png') }}" alt="Deblew Branding Logo" class="w-[150px] md:w-[175px] lg:w-[200px] h-auto"></a>
            
            <p class="text-md text-justify">Stay updated with the latest job openings across various industries. Our platform offers real-time job alerts, career resources, and easy application tools to help you land your dream.</p>
        </div>

        <div class="flex flex-col w-full lg:w-[15%] gap-5">
            <h3 class="text-2xl font-bold text-greenish">Categories</h3>

            <ul class="flex flex-col">
                @foreach ($categories as $category)
                    <li class="{{ Route::is('categories.*') ? 'font-bold text-greenish' : 'hover:text-greenish hover:bg-greenish-100 transition-colors duration-200 rounded hover:font-semibold' }} lg:px-2 py-1"><a href="{{ $category['url'] }}">{{ $category['name'] }}</a></li>
                @endforeach
            </ul>
        </div>
        
        <div class="flex flex-col w-full lg:w-[15%] gap-5">
            <h3 class="text-2xl font-bold text-greenish">Quick Links</h3>

            <ul class="flex flex-col">
                @foreach ($quickLinks as $quickLink)
                    <li class="{{ Route::is('categories.*') ? 'font-bold text-greenish' : 'hover:text-greenish hover:bg-greenish-100 transition-colors duration-200 rounded hover:font-semibold' }} lg:px-2 py-1"><a href="{{ $quickLink['url'] }}">{{ $quickLink['name'] }}</a></li>
                @endforeach
            </ul>
        </div>

        <div class="flex flex-col w-full lg:w-[25%] gap-5">
            <h3 class="text-2xl font-bold text-greenish">Follow Us</h3>
            <div class="flex flex-wrap items-center gap-3">
                <a href="#"><i class="fab fa-facebook text-greenish text-lg"></i></a>
                <a href="#"><i class="fab fa-twitter text-greenish text-lg"></i></a>
                <a href="#"><i class="fab fa-instagram text-greenish text-lg"></i></a>
                <a href="#"><i class="fab fa-linkedin text-greenish text-lg"></i></a>
            </div>

            <div class="flex flex-col gap-1">
                <a class="flex items-center gap-4" href="tel:#"><i class="fas fa-phone text-greenish text-md"></i>+91 1234567890</a>
                <a class="flex items-center gap-4" href="mailto:#"><i class="fas fa-envelope text-greenish text-md"></i>jobsnewsx@gmail.com</a>
            </div>
        </div>
    </div>

    <div class="bg-greenish-100 text-greenish px-2 lg:px-0 py-4 text-center text-lg font-medium mt-5">
        <span>© @if(date('Y') == 2022) {{ date('Y') }} @else 2022-{{ date('y') }} @endif {{ config('app.name') }}. All rights reserved.</span>
    </div>
</footer>
