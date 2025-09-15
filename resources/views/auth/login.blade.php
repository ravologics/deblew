@extends('layouts.others')

@section('meta')
    <title>Login</title>
    <meta name="description" content="Login">
    <meta name="keywords" content="Login">
    <meta name="author" content="Deblew">
    <link rel="canonical" href="{{ url()->current() }}">
@endsection

@section('content')
<main class="w-full h-[100vh] flex flex-col items-center justify-center">
    <!-- Session Status -->
    <x-auth-session-status :status="session('status')" />

    <a href="{{ route('home') }}" class="mb-3">
        @if(file_exists(public_path('images/branding/Deblew-Logo-Light.png')))
            <img src="{{ asset('images/branding/Deblew-Logo-Light.png') }}" alt="Deblew Logo" class="w-40 h-auto">
        @else
            Deblew
        @endif
    </a>

    <form method="POST" action="{{ route('login') }}" class="w-full max-w-md p-5 bg-white rounded-lg shadow-md m-5 lg:m-0 flex flex-col gap-3">
        @csrf

        <!-- Email Address -->
        <div>
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <input id="email" class="block w-full p-2 rounded bg-gray-100 ring-2 focus:ring-2 ring-gray-300 focus:ring-greenish-300 mt-1" type="email" name="email" :value="old('email')" required autofocus placeholder="Enter your email" />
        </div>

        <!-- Password -->
        <div>
            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
            <input id="password" class="block w-full p-2 rounded bg-gray-100 ring-2 focus:ring-2 ring-gray-300 focus:ring-greenish-300 mt-1" type="password" name="password" required autocomplete="current-password" placeholder="Enter your password" />
        </div>

        <!-- Remember Me -->
        <div class="flex items-center justify-between">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded ring-2 focus:ring-2 ring-greenish-300 shadow-sm focus:ring-greenish-300" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>

            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-greenish-300" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif
        </div>

        <!--<div class="g-recaptcha" data-sitekey="6LcuZMorAAAAAHpZHivIiUe9wHDrX7YdfVr_xKDw"></div>-->

        <button type="submit" class="w-full max-w-fit mx-auto bg-greenish text-white p-2 rounded-full px-8 py-2 font-semibold bg-img-rev">{{ __('Log in') }}</button>
    </form>
</main>
@endsection

@push('headerscripts')
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
@endpush
