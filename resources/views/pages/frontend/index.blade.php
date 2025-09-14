@extends('layouts.layout')

@push('meta')
    <title>Home</title>
    <meta name="description" content="Home">
    <meta name="keywords" content="Home">
    <meta name="author" content="Deblew">
    <link rel="canonical" href="{{ url()->current() }}">
    <meta name="robots" content="index, follow">
@endpush

@php
    $cats = [
        ['title' => 'Job 1', 'href' => '#'],
        ['title' => 'Job 2', 'href' => '#'],
        ['title' => 'Job 3', 'href' => '#'],
        ['title' => 'Job 4', 'href' => '#'],
        ['title' => 'Job 5', 'href' => '#'],
        ['title' => 'Job 6', 'href' => '#'],
        ['title' => 'Job 7', 'href' => '#'],
        ['title' => 'Job 8', 'href' => '#'],
    ];

    $major_cats = [
        ['title' => 'Latest Jobs', 'href' => '#', 'src' => 'job.png', 'alt' => 'Latest Jobs'],
        ['title' => 'Admit Card', 'href' => '#', 'src' => 'admit-card.png', 'alt' => 'Admit Card'],
        ['title' => 'Result', 'href' => '#', 'src' => 'result.png', 'alt' => 'Result'],
        ['title' => 'Syllabus', 'href' => '#', 'src' => 'syllabus.png', 'alt' => 'Syllabus'],
        ['title' => 'Admission', 'href' => '#', 'src' => 'admission.svg', 'alt' => 'Admission'],
        ['title' => 'Govt Scheme', 'href' => '#', 'src' => 'govt-scheme.png', 'alt' => 'Govt Scheme'],
    ];
@endphp

@section('content')
<!-- Hero Section -->
<section class="w-full flex flex-col items-center justify-center pt-[75px] pb-[125px] px-4 xl:px-0 bg-greenish space-y-4">
    <h1 class="text-4xl font-bold text-white">Trusted Platform For Job Updates</h1>
    <span class="text-white text-sm capitalize">real-time job alerts platform, help you land your dream job.</span>

    <form class="w-full max-w-xl bg-white p-4 rounded flex items-center justify-between">
        <input type="search" placeholder="Search jobs..." class="w-full p-0">
        <i class="fa-solid fa-magnifying-glass text-greenish text-lg cursor-pointer"></i>
    </form>
</section>

<!-- Categories Section -->
<section class="max-w-7xl mx-4 xl:mx-auto shadow-greenish-200 shadow-lg rounded p-7 bg-white grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-7 -mt-20">
    @foreach ($cats as $cat)
        <a href="{{ $cat['href'] }}" class="bg-greenish p-4 rounded bg-img-rev font-semibold text-white text-center hover:shadow-greenish-300 transition-all duration-200 hover:translate-y-[-5px]">{{ $cat['title'] }}</a>
    @endforeach
</section>

<!-- Major Categories Section -->
<section class="max-w-7xl mx-4 xl:mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-7 mt-10">
    @foreach ($major_cats as $major_cat)
        <a href="{{ $major_cat['href'] }}" class="bg-white p-4 rounded font-semibold text-gray-900 border border-gray-200 text-center hover:scale-105 hover:shadow-lg hover:text-greenish transition-all duration-200 hover:translate-y-[-5px] flex flex-col gap-4 items-center">
            <img src="{{ asset('images/svg/' . $major_cat['src']) }}" alt="{{ $major_cat['alt'] }}" class="w-10 h-10">
            {{ $major_cat['title'] }}
        </a>
    @endforeach
</section>

<!-- Categories with Posts Section -->
<section class="max-w-7xl mx-4 xl:mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 my-10">
    <!-- Jobs Section -->
    <div class="bg-white rounded-lg border border-gray-200">
        <div class="bg-greenish text-white px-2 py-1 rounded-t-lg text-center"><h3 class="text-2xl font-bold">Jobs</h3></div>

        <div class="p-2 grid grid-cols-1 gap-5">
            <div class="border border-gray-200 p-2 rounded space-y-2">
                <div class="flex flex-row items-center space-x-3 cursor-pointer group">
                    <i class="fa-solid fa-chevron-right text-md group-hover:rotate-90 transition-all duration-500 ease-in-out"></i>
                    <h3 class="font-semibold">SSC GD Constable Revised Vacancy Details Various Post Recruitment 2025</h3>
                </div>

                <div class="flex flex-col sm:flex-row items-center gap-2">
                    <div class="bg-greenish text-white bg-img-rev rounded-full py-1 text-xs w-full flex flex-row justify-center gap-3">
                        <span class="font-semibold"><i class="fa-solid fa-user mr-2"></i>Admin</span>
                        <span class="font-semibold"><i class="fa-solid fa-clock mr-2"></i>13/9/2025</span>
                    </div>

                    <button onclick="window.location.href = '#'" class="bg-greenish text-white bg-img rounded-full px-3 py-1 text-xs w-full sm:max-w-fit flex justify-center items-center">Apply Now</button>
                </div>
            </div>
        </div>
        
        <div class="m-4">
            <button class="bg-greenish text-white rounded-full w-full flex justify-center items-center py-1 font-semibold bg-img">
                View All
                <i class="fa-solid fa-arrow-right ml-2 text-sm"></i>
            </button>
        </div>
    </div>

    <!-- Admit Card Section -->
    <div class="bg-white rounded-lg border border-gray-200">
        <div class="bg-greenish text-white px-2 py-1 rounded-t-lg text-center"><h3 class="text-2xl font-bold">Admit Card</h3></div>

        <div class="p-2 grid grid-cols-1 gap-5">
            <div class="border border-gray-200 p-2 rounded space-y-2">
                <div class="flex flex-row items-center space-x-3 cursor-pointer group">
                    <i class="fa-solid fa-chevron-right text-md group-hover:rotate-90 transition-all duration-500 ease-in-out"></i>
                    <h3 class="font-semibold">SSC GD Constable Revised Vacancy Details Various Post Recruitment 2025</h3>
                </div>

                <div class="flex flex-col sm:flex-row items-center gap-2">
                    <div class="bg-greenish text-white bg-img-rev rounded-full py-1 text-xs w-full flex flex-row justify-center gap-3">
                        <span class="font-semibold"><i class="fa-solid fa-user mr-2"></i>Admin</span>
                        <span class="font-semibold"><i class="fa-solid fa-clock mr-2"></i>13/9/2025</span>
                    </div>

                    <button onclick="window.location.href = '#'" class="bg-greenish text-white bg-img rounded-full px-3 py-1 text-xs w-full sm:max-w-fit flex justify-center items-center">Apply Now</button>
                </div>
            </div>
        </div>
        
        <div class="m-4">
            <button class="bg-greenish text-white rounded-full w-full flex justify-center items-center py-1 font-semibold bg-img">
                View All
                <i class="fa-solid fa-arrow-right ml-2 text-sm"></i>
            </button>
        </div>
    </div>

    <!-- Result Section -->
    <div class="bg-white rounded-lg border border-gray-200">
        <div class="bg-greenish text-white px-2 py-1 rounded-t-lg text-center"><h3 class="text-2xl font-bold">Result</h3></div>

        <div class="p-2 grid grid-cols-1 gap-5">
            <div class="border border-gray-200 p-2 rounded space-y-2">
                <div class="flex flex-row items-center space-x-3 cursor-pointer group">
                    <i class="fa-solid fa-chevron-right text-md group-hover:rotate-90 transition-all duration-500 ease-in-out"></i>
                    <h3 class="font-semibold">SSC GD Constable Revised Vacancy Details Various Post Recruitment 2025</h3>
                </div>

                <div class="flex flex-col sm:flex-row items-center gap-2">
                    <div class="bg-greenish text-white bg-img-rev rounded-full py-1 text-xs w-full flex flex-row justify-center gap-3">
                        <span class="font-semibold"><i class="fa-solid fa-user mr-2"></i>Admin</span>
                        <span class="font-semibold"><i class="fa-solid fa-clock mr-2"></i>13/9/2025</span>
                    </div>

                    <button onclick="window.location.href = '#'" class="bg-greenish text-white bg-img rounded-full px-3 py-1 text-xs w-full sm:max-w-fit flex justify-center items-center">Apply Now</button>
                </div>
            </div>
        </div>
        
        <div class="m-4">
            <button class="bg-greenish text-white rounded-full w-full flex justify-center items-center py-1 font-semibold bg-img">
                View All
                <i class="fa-solid fa-arrow-right ml-2 text-sm"></i>
            </button>
        </div>
    </div>

    <!-- Syllabus Section -->
    <div class="bg-white rounded-lg border border-gray-200">
        <div class="bg-greenish text-white px-2 py-1 rounded-t-lg text-center"><h3 class="text-2xl font-bold">Syllabus</h3></div>

        <div class="p-2 grid grid-cols-1 gap-5">
            <div class="border border-gray-200 p-2 rounded space-y-2">
                <div class="flex flex-row items-center space-x-3 cursor-pointer group">
                    <i class="fa-solid fa-chevron-right text-md group-hover:rotate-90 transition-all duration-500 ease-in-out"></i>
                    <h3 class="font-semibold">SSC GD Constable Revised Vacancy Details Various Post Recruitment 2025</h3>
                </div>

                <div class="flex flex-col sm:flex-row items-center gap-2">
                    <div class="bg-greenish text-white bg-img-rev rounded-full py-1 text-xs w-full flex flex-row justify-center gap-3">
                        <span class="font-semibold"><i class="fa-solid fa-user mr-2"></i>Admin</span>
                        <span class="font-semibold"><i class="fa-solid fa-clock mr-2"></i>13/9/2025</span>
                    </div>

                    <button onclick="window.location.href = '#'" class="bg-greenish text-white bg-img rounded-full px-3 py-1 text-xs w-full sm:max-w-fit flex justify-center items-center">Apply Now</button>
                </div>
            </div>
        </div>
        
        <div class="m-4">
            <button class="bg-greenish text-white rounded-full w-full flex justify-center items-center py-1 font-semibold bg-img">
                View All
                <i class="fa-solid fa-arrow-right ml-2 text-sm"></i>
            </button>
        </div>
    </div>

    <!-- Admission Section -->
    <div class="bg-white rounded-lg border border-gray-200">
        <div class="bg-greenish text-white px-2 py-1 rounded-t-lg text-center"><h3 class="text-2xl font-bold">Admission</h3></div>

        <div class="p-2 grid grid-cols-1 gap-5">
            <div class="border border-gray-200 p-2 rounded space-y-2">
                <div class="flex flex-row items-center space-x-3 cursor-pointer group">
                    <i class="fa-solid fa-chevron-right text-md group-hover:rotate-90 transition-all duration-500 ease-in-out"></i>
                    <h3 class="font-semibold">SSC GD Constable Revised Vacancy Details Various Post Recruitment 2025</h3>
                </div>

                <div class="flex flex-col sm:flex-row items-center gap-2">
                    <div class="bg-greenish text-white bg-img-rev rounded-full py-1 text-xs w-full flex flex-row justify-center gap-3">
                        <span class="font-semibold"><i class="fa-solid fa-user mr-2"></i>Admin</span>
                        <span class="font-semibold"><i class="fa-solid fa-clock mr-2"></i>13/9/2025</span>
                    </div>

                    <button onclick="window.location.href = '#'" class="bg-greenish text-white bg-img rounded-full px-3 py-1 text-xs w-full sm:max-w-fit flex justify-center items-center">Apply Now</button>
                </div>
            </div>
        </div>
        
        <div class="m-4">
            <button class="bg-greenish text-white rounded-full w-full flex justify-center items-center py-1 font-semibold bg-img">
                View All
                <i class="fa-solid fa-arrow-right ml-2 text-sm"></i>
            </button>
        </div>
    </div>

    <!-- Govt Scheme Section -->
    <div class="bg-white rounded-lg border border-gray-200">
        <div class="bg-greenish text-white px-2 py-1 rounded-t-lg text-center"><h3 class="text-2xl font-bold">Govt Scheme</h3></div>

        <div class="p-2 grid grid-cols-1 gap-5">
            <div class="border border-gray-200 p-2 rounded space-y-2">
                <div class="flex flex-row items-center space-x-3 cursor-pointer group">
                    <i class="fa-solid fa-chevron-right text-md group-hover:rotate-90 transition-all duration-500 ease-in-out"></i>
                    <h3 class="font-semibold">SSC GD Constable Revised Vacancy Details Various Post Recruitment 2025</h3>
                </div>

                <div class="flex flex-col sm:flex-row items-center gap-2">
                    <div class="bg-greenish text-white bg-img-rev rounded-full py-1 text-xs w-full flex flex-row justify-center gap-3">
                        <span class="font-semibold"><i class="fa-solid fa-user mr-2"></i>Admin</span>
                        <span class="font-semibold"><i class="fa-solid fa-clock mr-2"></i>13/9/2025</span>
                    </div>

                    <button onclick="window.location.href = '#'" class="bg-greenish text-white bg-img rounded-full px-3 py-1 text-xs w-full sm:max-w-fit flex justify-center items-center">Apply Now</button>
                </div>
            </div>
        </div>
        
        <div class="m-4">
            <button class="bg-greenish text-white rounded-full w-full flex justify-center items-center py-1 font-semibold bg-img">
                View All
                <i class="fa-solid fa-arrow-right ml-2 text-sm"></i>
            </button>
        </div>
    </div>
</section>

<!-- Blog Posts Section -->
<section class="max-w-7xl mx-4 xl:mx-auto space-y-5">
    <h2 class="text-3xl font-bold bg-greenish text-white px-2 py-1 rounded bg-img-simple max-w-fit">Latest Blogs</h2>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
        <!-- Post 1 Section -->
        <div class="bg-white rounded-lg border border-greenish group flex flex-col h-full">
            <div class="relative group">
                <div class="overflow-hidden rounded-t-lg"><img src="https://gfcshrewsbury.org/wp-content/uploads/2020/02/888x500text16_9.png" alt="Blog Image" class="object-cover ratio-16/9 transform scale-110 group-hover:scale-100 transition-all duration-500 ease-in-out"></div>
                <a href="#" class="absolute top-3 right-3 bg-greenish text-white px-2 py-1 rounded-full text-xs">Category</a>
                <a href="#"><img src="https://www.aandmedu.in/wp-content/uploads/2021/11/1-1-Aspect-Ratio-1024x1024.jpg" alt="Author Profile Image" class="absolute bottom-[-25px] left-5 w-[50px] h-[50px] rounded-full border-2 border-white"></a>
            </div>

            <div class="p-5 mt-3 flex-grow">
                <h2 class="text-xl font-bold hover:text-greenish mb-2">Blog Title 1</h2>
                <p class="text-gray-700 mb-4 line-clamp-3 text-md">Blog Description: Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.</p>
                <button onclick="window.location.href = '#'" class="bg-greenish text-white bg-img rounded-full px-4 py-2 text-md w-full sm:max-w-fit flex justify-center items-center hover:bg-opacity-90 transition-colors">Read More</button>
            </div>

            <div class="flex flex-col sm:flex-row items-center justify-evenly bg-greenish text-white bg-img-rev rounded-b px-4 py-2 text-xs">
                <span class="font-semibold mb-1 sm:mb-0"><i class="fa-solid fa-user mr-1"></i>Admin</span>
                <span class="font-semibold mb-1 sm:mb-0"><i class="fa-solid fa-clock mr-1"></i>13/9/2025</span>
                <span class="font-semibold"><i class="fa-solid fa-comments mr-1"></i>100</span>
            </div>
        </div>

        <!-- Post 2 Section -->
        <div class="bg-white rounded-lg border border-greenish group flex flex-col h-full">
            <div class="relative group">
                <div class="overflow-hidden rounded-t-lg"><img src="https://gfcshrewsbury.org/wp-content/uploads/2020/02/888x500text16_9.png" alt="Blog Image" class="object-cover ratio-16/9 transform scale-110 group-hover:scale-100 transition-all duration-500 ease-in-out"></div>
                <a href="#" class="absolute top-3 right-3 bg-greenish text-white px-2 py-1 rounded-full text-xs">Category</a>
                <a href="#"><img src="https://www.aandmedu.in/wp-content/uploads/2021/11/1-1-Aspect-Ratio-1024x1024.jpg" alt="Author Profile Image" class="absolute bottom-[-25px] left-5 w-[50px] h-[50px] rounded-full border-2 border-white"></a>
            </div>

            <div class="p-5 mt-3 flex-grow">
                <h2 class="text-xl font-bold hover:text-greenish mb-2">Blog Title 2</h2>
                <p class="text-gray-700 mb-4 line-clamp-3 text-md">Blog Description: Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.</p>
                <button onclick="window.location.href = '#'" class="bg-greenish text-white bg-img rounded-full px-4 py-2 text-md w-full sm:max-w-fit flex justify-center items-center hover:bg-opacity-90 transition-colors">Read More</button>
            </div>

            <div class="flex flex-col sm:flex-row items-center justify-evenly bg-greenish text-white bg-img-rev rounded-b px-4 py-2 text-xs">
                <span class="font-semibold mb-1 sm:mb-0"><i class="fa-solid fa-user mr-1"></i>Admin</span>
                <span class="font-semibold mb-1 sm:mb-0"><i class="fa-solid fa-clock mr-1"></i>13/9/2025</span>
                <span class="font-semibold"><i class="fa-solid fa-comments mr-1"></i>100</span>
            </div>
        </div>

        <!-- Post 3 Section -->
        <div class="bg-white rounded-lg border border-greenish group flex flex-col h-full">
            <div class="relative group">
                <div class="overflow-hidden rounded-t-lg"><img src="https://gfcshrewsbury.org/wp-content/uploads/2020/02/888x500text16_9.png" alt="Blog Image" class="object-cover ratio-16/9 transform scale-110 group-hover:scale-100 transition-all duration-500 ease-in-out"></div>
                <a href="#" class="absolute top-3 right-3 bg-greenish text-white px-2 py-1 rounded-full text-xs">Category</a>
                <a href="#"><img src="https://www.aandmedu.in/wp-content/uploads/2021/11/1-1-Aspect-Ratio-1024x1024.jpg" alt="Author Profile Image" class="absolute bottom-[-25px] left-5 w-[50px] h-[50px] rounded-full border-2 border-white"></a>
            </div>

            <div class="p-5 mt-3 flex-grow">
                <h2 class="text-xl font-bold hover:text-greenish mb-2">Blog Title 3</h2>
                <p class="text-gray-700 mb-4 line-clamp-3 text-md">Blog Description: Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.</p>
                <button onclick="window.location.href = '#'" class="bg-greenish text-white bg-img rounded-full px-4 py-2 text-md w-full sm:max-w-fit flex justify-center items-center hover:bg-opacity-90 transition-colors">Read More</button>
            </div>

            <div class="flex flex-col sm:flex-row items-center justify-evenly bg-greenish text-white bg-img-rev rounded-b px-4 py-2 text-xs">
                <span class="font-semibold mb-1 sm:mb-0"><i class="fa-solid fa-user mr-1"></i>Admin</span>
                <span class="font-semibold mb-1 sm:mb-0"><i class="fa-solid fa-clock mr-1"></i>13/9/2025</span>
                <span class="font-semibold"><i class="fa-solid fa-comments mr-1"></i>100</span>
            </div>
        </div>
    </div>

    <button onclick="window.location.href = '#'" class="bg-greenish text-white rounded-full w-fit mx-auto flex justify-center items-center px-5 py-2 font-semibold bg-img">
        See More
        <i class="fa-solid fa-arrow-right ml-2 text-sm"></i>
    </button>
</section>

<!-- About Section -->
<section class="max-w-7xl mx-4 xl:mx-auto flex flex-col my-10 rounded border border-greenish bg-white">
    <div class="w-full bg-greenish bg-img-rev text-white p-2 text-center">
        <h3 class="text-xl font-bold">About {{ config('app.name') }}</h3>
    </div>
    
    <p class="px-10 py-5 text-justify">
        Welcome to <strong>{{ config('app.name') }}</strong>, your go-to platform for discovering career opportunities that match your skills, passions, and goals. Whether you’re a recent graduate, a seasoned professional, or someone seeking a career change, our user-friendly interface and powerful search tools make finding your next job simple and effective. We connect job seekers with top employers across a wide range of industries including technology, healthcare, finance, education, and more. With real-time job postings, resume building tools, and personalized job alerts.
    </p>
</section>
@endsection
