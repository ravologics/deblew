@extends('layouts.dashboard')

@push('meta')
    <title>Testing</title>
@endpush

<?php $slot = 'Testing'; ?>

@section('content')
<div class="tab-content flex flex-col gap-5">
    <div class="flex flex-col md:flex-row gap-5 personal-info">
        <!-- Avatar -->
        <div class="flex flex-col gap-5 left items-center">
            <img src="{{ asset('images/branding/Deblew-Favicon.png') }}" class="w-[150px] h-[150px] rounded-full border border-2">

            <div class="flex flex-col gap-1 w-full">    
            </div>

            <button class="bg-greenish text-white bg-img rounded-full px-3 py-1 text-md w-full">Change</button>
        </div>

        <div class="flex flex-col gap-5 right">
            <!-- Personal Information -->
            <div class="flex flex-col md:flex-row gap-5">
                <div class="flex flex-col gap-1 w-full">
                    <label for="first_name" class="text-gray-700">First Name</label>
                    <input type="text" name="first_name" id="first_name" class="border rounded p-1 focus:outline-none ring-2 ring-gray-300 focus:ring-greenish bg-gray-100">
                </div>

                <div class="flex flex-col gap-1 w-full">
                    <label for="last_name" class="text-gray-700">Last Name</label>
                    <input type="text" name="last_name" id="last_name" class="border rounded p-1 focus:outline-none ring-2 ring-gray-300 focus:ring-greenish bg-gray-100">
                </div>
            </div>

            <!-- Username and Email -->
            <div class="flex flex-col md:flex-row gap-5">
                <div class="flex flex-col gap-1 w-full">
                    <label for="username" class="text-gray-700">Username</label>
                    <input type="text" name="username" id="username" class="border rounded p-1 focus:outline-none ring-2 ring-gray-300 focus:ring-greenish bg-gray-100">
                </div>

                <div class="flex flex-col gap-1 w-full">
                    <label for="email" class="text-gray-700">Email</label>
                    <input type="text" name="last_name" id="last_name" class="border rounded p-1 focus:outline-none ring-2 ring-gray-300 focus:ring-greenish bg-gray-100">
                </div>
            </div>

            <!-- Contact Information -->
            <div class="flex flex-col md:flex-row gap-5">
                <div class="flex flex-col gap-1 w-full">
                    <label for="phone_number" class="text-gray-700">Phone Number</label>
                    <input type="tel" name="phone_number" id="phone_number" class="border rounded p-1 focus:outline-none ring-2 ring-gray-300 focus:ring-greenish bg-gray-100">
                </div>

                <div class="flex flex-col gap-1 w-full">
                    <label for="website_url" class="text-gray-700">Website URL</label>
                    <input type="url" name="website_url" id="website_url" class="border rounded p-1 focus:outline-none ring-2 ring-gray-300 focus:ring-greenish bg-gray-100">
                </div>
            </div>

            <!-- Address Information -->
            <div class="flex flex-col md:flex-row gap-5">
                <div class="flex flex-col gap-1 w-full">
                    <label for="address" class="text-gray-700">Address</label>
                    <input type="text" name="address" id="address" class="border rounded p-1 focus:outline-none ring-2 ring-gray-300 focus:ring-greenish bg-gray-100">
                </div>

                <div class="flex flex-col gap-1 w-full">
                    <label for="suburb" class="text-gray-700">Suburb</label>
                    <input type="text" name="last_name" id="last_name" class="border rounded p-1 focus:outline-none ring-2 ring-gray-300 focus:ring-greenish bg-gray-100">
                </div>
            </div>

            <!-- City and State -->
            <div class="flex flex-col md:flex-row gap-5">
                <div class="flex flex-col gap-1 w-full">
                    <label for="city" class="text-gray-700">City</label>
                    <input type="text" name="city" id="city" class="border rounded p-1 focus:outline-none ring-2 ring-gray-300 focus:ring-greenish bg-gray-100">
                </div>

                <div class="flex flex-col gap-1 w-full">
                    <label for="state" class="text-gray-700">State</label>
                    <input type="text" name="state" id="state" class="border rounded p-1 focus:outline-none ring-2 ring-gray-300 focus:ring-greenish bg-gray-100">
                </div>
            </div>

            <!-- Zip Code and Country -->
            <div class="flex flex-col md:flex-row gap-5">
                <div class="flex flex-col gap-1 w-full">
                    <label for="zip_code" class="text-gray-700">Zip Code</label>
                    <input type="text" name="zip_code" id="zip_code" class="border rounded p-1 focus:outline-none ring-2 ring-gray-300 focus:ring-greenish bg-gray-100">
                </div>

                <div class="flex flex-col gap-1 w-full">
                    <label for="country" class="text-gray-700">Country</label>
                    <input type="text" name="country" id="country" class="border rounded p-1 focus:outline-none ring-2 ring-gray-300 focus:ring-greenish bg-gray-100">
                </div>
            </div>

            <!-- Bio -->
            <div class="flex flex-col md:flex-row gap-5">
                <div class="flex flex-col gap-1 w-full">
                    <label for="bio" class="text-gray-700">Bio</label>
                    <textarea name="bio" id="bio" class="border rounded p-1 focus:outline-none ring-2 ring-gray-300 focus:ring-greenish bg-gray-100 h-[150px]"></textarea>
                </div>
            </div>

            <!-- Social Media Profiles -->
            <div class="flex flex-col md:flex-row gap-5">
                <div class="flex flex-col gap-1 w-full">
                    <label for="social_media_profile_facebook" class="text-gray-700">Facebook</label>
                    <input type="text" name="social_media_profile_facebook" id="social_media_profile_facebook" class="border rounded p-1 focus:outline-none ring-2 ring-gray-300 focus:ring-greenish bg-gray-100">
                </div>

                <div class="flex flex-col gap-1 w-full">
                    <label for="social_media_profile_twitter" class="text-gray-700">Twitter</label>
                    <input type="text" name="social_media_profile_twitter" id="social_media_profile_twitter" class="border rounded p-1 focus:outline-none ring-2 ring-gray-300 focus:ring-greenish bg-gray-100">
                </div>
            </div>

            <div class="flex flex-col md:flex-row gap-5">
                <div class="flex flex-col gap-1 w-full">
                    <label for="social_media_profile_instagram" class="text-gray-700">Instagram</label>
                    <input type="text" name="social_media_profile_instagram" id="social_media_profile_instagram" class="border rounded p-1 focus:outline-none ring-2 ring-gray-300 focus:ring-greenish bg-gray-100">
                </div>

                <div class="flex flex-col gap-1 w-full">
                    <label for="social_media_profile_linkedin" class="text-gray-700">LinkedIn</label>
                    <input type="text" name="social_media_profile_linkedin" id="social_media_profile_linkedin" class="border rounded p-1 focus:outline-none ring-2 ring-gray-300 focus:ring-greenish bg-gray-100">
                </div>
            </div>

            <div class="flex flex-col md:flex-row gap-5">
                <div class="flex flex-col gap-1 w-full">
                    <label for="social_media_profile_medium" class="text-gray-700">Medium</label>
                    <input type="text" name="social_media_profile_medium" id="social_media_profile_medium" class="border rounded p-1 focus:outline-none ring-2 ring-gray-300 focus:ring-greenish bg-gray-100">
                </div>

                <div class="flex flex-col gap-1 w-full">
                    <label for="social_media_profile_tiktok" class="text-gray-700">Tiktok</label>
                    <input type="text" name="social_media_profile_tiktok" id="social_media_profile_tiktok" class="border rounded p-1 focus:outline-none ring-2 ring-gray-300 focus:ring-greenish bg-gray-100">
                </div>
            </div>

            <div class="flex flex-col md:flex-row gap-5">
                <div class="flex flex-col gap-1 w-full">
                    <label for="social_media_profile_github" class="text-gray-700">Github</label>
                    <input type="text" name="social_media_profile_github" id="social_media_profile_github" class="border rounded p-1 focus:outline-none ring-2 ring-gray-300 focus:ring-greenish bg-gray-100">
                </div>

                <div class="flex flex-col gap-1 w-full">
                    <label for="social_media_profile_youtube" class="text-gray-700">Youtube</label>
                    <input type="text" name="social_media_profile_youtube" id="social_media_profile_youtube" class="border rounded p-1 focus:outline-none ring-2 ring-gray-300 focus:ring-greenish bg-gray-100">
                </div>
            </div>

            <button class="bg-greenish text-white bg-img rounded-full px-5 py-1 text-md w-full max-w-fit font-semibold ml-auto">Save</button>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    /* Tab content */
    .tab-content {
        border-radius: 0.5rem;
        padding: 20px 30px;
        background-color: white;
    }
    .personal-info .left {
        width: 32%;
    }
    .personal-info .right {
        width: 62%;
    }
    @media (max-width: 768px) {
        .personal-info .left, .personal-info .right {
            width: 100%;
        }
    }
</style>
@endpush
