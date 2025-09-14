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
        <form action="#">
            <div class="input-box"><input type="text" placeholder="Enter your name"></div>
            <div class="input-box"><input type="text" placeholder="Enter your email"></div>
            <div class="input-box message-box"><textarea placeholder="Enter your message"></textarea></div>
            <div class="button bg-greenish rounded-full bg-img"><input type="button" value="Send Now"></div>
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
    .right-side .input-box{
        height: 50px;
        width: 100%;
        margin: 12px 0;
    }
    .right-side .input-box input, .right-side .input-box textarea{
        height: 100%;
        width: 100%;
        border: none;
        outline: none;
        font-size: 16px;
        background: #F0F1F8;
        border-radius: 6px;
        padding: 0 15px;
        resize: none;
    }
    .right-side .message-box{min-height: 110px;}
    .right-side .input-box textarea{padding-top: 6px;}
    .right-side .button{
        display: inline-block;
        margin-top: 12px;
    }
    .right-side .button input[type="button"]{
        color: #fff;
        font-size: 18px;
        outline: none;
        border: none;
        padding: 8px 16px;
        border-radius: 6px;
        cursor: pointer;
        transition: all 0.3s ease;
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
