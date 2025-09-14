@extends('layouts.layout')

@section('meta')
    <title>Blog</title>
    <meta name="description" content="Blog">
    <meta name="keywords" content="Blog">
    <meta name="author" content="Deblew">
    <link rel="canonical" href="{{ url()->current() }}">
    <meta name="robots" content="index, follow">
@endsection

@section('content')
<!-- Hero Section -->
<section class="w-full py-[75px] px-4 xl:px-0 bg-greenish bg-img-simple">
    <div class="w-full max-w-7xl mx-auto flex flex-col">
        <div class="flex flex-row items-center space-x-2 text-white">
            <a href="{{ route('home') }}"><i class="fa-solid fa-house mr-2 text-sm"></i> Home</a>
            <i class="fa-solid fa-chevron-right text-xs"></i>
            <span>Blog</span>
        </div>
        <h1 class="text-4xl font-bold text-white mb-5 mt-2">Blog</h1>
        <span class="text-white text-sm capitalize">Get the latest insights right here.</span>
    </div>
</section>

<!-- Blog Posts Section -->
<section class="max-w-7xl mx-4 xl:mx-auto mt-10 space-y-5">
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

    <button onclick="window.location.href = '#'" class="bg-greenish text-white rounded-full w-fit mx-auto flex justify-center items-center px-5 py-2 font-semibold bg-img">Load More</button>
</section>
@endsection
