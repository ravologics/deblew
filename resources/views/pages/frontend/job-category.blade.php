@extends('layouts.layout')

@push('meta')
    <title>Job Category</title>
    <meta name="description" content="Job Category">
    <meta name="keywords" content="Job Category">
    <meta name="author" content="Deblew">
    <link rel="canonical" href="{{ url()->current() }}">
    <meta name="robots" content="index, follow">
@endpush

@section('content')
<section class="w-full py-[75px] px-4 xl:px-0 bg-greenish bg-img-simple mb-10">
    <div class="w-full max-w-7xl mx-auto flex flex-col">
        <div class="flex flex-row items-center space-x-2 text-white">
            <a href="{{ route('home') }}"><i class="fa-solid fa-house mr-2 text-sm"></i> Home</a>
            <i class="fa-solid fa-chevron-right text-xs"></i>
            <span>Job Category</span>
        </div>
        <h1 class="text-4xl font-bold text-white mb-5 mt-1">Job Category</h1>
        <span class="text-white text-sm capitalize">Get the latest insights right here.</span>
    </div>
</section>

<!-- Blog Posts Section -->
<section class="max-w-7xl mx-4 xl:mx-auto space-y-5">
    <div class="p-2 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
        <div class="border border-gray-200 p-2 rounded space-y-2 bg-white">
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

        <div class="border border-gray-200 p-2 rounded space-y-2 bg-white">
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

        <div class="border border-gray-200 p-2 rounded space-y-2 bg-white">
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

    <button onclick="window.location.href = '#'" class="bg-greenish text-white rounded-full w-fit mx-auto flex justify-center items-center px-5 py-2 font-semibold bg-img">
        See More
        <i class="fa-solid fa-arrow-right ml-2 text-sm"></i>
    </button>
</section>
@endsection
