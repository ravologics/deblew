@extends('layouts.layout')

@section('meta')
    <title>About</title>
    <meta name="description" content="About">
    <meta name="keywords" content="About">
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
            <span>About</span>
        </div>
        <h1 class="text-4xl font-bold text-white mb-5 mt-2">About Us</h1>
        <span class="text-white text-sm capitalize">We are a team of passionate individuals dedicated to helping you find your dream job.</span>
    </div>
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
