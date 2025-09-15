@extends('layouts.layout')

@section('meta')
    <title>Contact</title>
    <meta name="description" content="Contact">
    <meta name="keywords" content="Contact">
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
            <span>Contact</span>
        </div>
        <h1 class="text-4xl font-bold text-white mb-5 mt-2">Contact Us</h1>
        <span class="text-white text-sm capitalize">Get in touch with us for any inquiries or questions.</span>
    </div>
</section>

<!-- Contact Section -->
<section class="max-w-7xl mx-4 xl:mx-auto my-10 py-5 rounded-lg bg-white overflow-hidden flex flex-col lg:flex-row items-center justify-evenly">
    <div class="left-side">
        <div class="address details">
            <i class="fas fa-map-marker-alt text-greenish"></i>
            <div class="topic text-greenish">Address</div>
            <div class="text-one">Surkhet, NP12</div>
            <div class="text-two">Birendranagar 06</div>
        </div>
        <div class="phone details">
            <i class="fas fa-phone-alt text-greenish"></i>
            <div class="topic text-greenish">Phone</div>
            <div class="text-one">+0098 9893 5647</div>
            <div class="text-two">+0096 3434 5678</div>
        </div>
        <div class="email details">
            <i class="fas fa-envelope text-greenish"></i>
            <div class="topic text-greenish">Email</div>
            <div class="text-one">codinglab@gmail.com</div>
            <div class="text-two">info.codinglab@gmail.com</div>
        </div>
    </div>
    <div class="right-side">
        <div class="topic-text text-greenish-900">Send us a message</div>
        <p>If you have any work from me or any types of quries related to my tutorial, you can send me message from here. It's my pleasure to help you.</p>
        <form action="#" class="flex flex-col gap-5 mt-5">
            <div class="flex flex-col lg:flex-row gap-5">
                <input type="text" placeholder="Enter your name" class="w-full p-2 border border-greenish rounded bg-gray-100">
                <input type="text" placeholder="Enter your email" class="w-full p-2 border border-greenish rounded bg-gray-100">
            </div>
            <div class="flex flex-col lg:flex-row gap-5">
                <input type="text" placeholder="Enter your phone number" class="w-full p-2 border border-greenish rounded bg-gray-100">
                <input type="text" placeholder="Enter your subject" class="w-full p-2 border border-greenish rounded bg-gray-100">
            </div>
            <textarea placeholder="Enter your message" class="w-full p-2 border border-greenish rounded bg-gray-100 h-[150px]"></textarea>
            <div class="g-recaptcha" data-sitekey="6LcuZMorAAAAAHpZHivIiUe9wHDrX7YdfVr_xKDw"></div>
            <div class="bg-greenish rounded-full bg-img w-full max-w-fit text-white px-5 py-2"><input type="button" value="Send Now"></div>
        </form>
    </div>
</section>
@endsection

@push('styles')
<style>
    .left-side{
        width: 25%;
        height: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        margin-top: 15px;
        position: relative;
    }
    .left-side::before{
        content: '';
        position: absolute;
        height: 70%;
        width: 2px;
        right: -15px;
        top: 50%;
        transform: translateY(-50%);
        background: #afafb6;
    }
    .left-side .details{
        margin: 14px;
        text-align: center;
    }
    .left-side .details i{
        font-size: 30px;
        margin-bottom: 10px;
    }
    .left-side .details .topic{
        font-size: 18px;
        font-weight: 500;
    }
    .left-side .details .text-one, .left-side .details .text-two{
        font-size: 14px;
        color: #afafb6;
    }
    .right-side{
        width: 75%;
        margin: 0 75px;
    }
    .right-side .topic-text{
        font-size: 23px;
        font-weight: 600;
    }
    @media (max-width: 820px) {
        .left-side{
            width: 100%;
            flex-direction: row;
            margin-top: 40px;
            justify-content: center;
            flex-wrap: wrap;
        }
        .left-side::before{display: none;}
        .right-side{
            width: 100%;
            margin-left: 0;
        }
    }
</style>
@endpush

@push('headerscripts')
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
@endpush

