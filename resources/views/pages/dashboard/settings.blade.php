@extends('layouts.dashboard')

@push('meta')
    <title>Settings</title>
@endpush

<?php $slot = 'Settings'; ?>

@section('content')
<!-- Tab Buttons -->
<div class="tab-buttons">
    <button class="tab-btn active text-gray-900" data-tab="tab1">Branding</button>
    <button class="tab-btn text-gray-900" data-tab="tab2">Personal Information</button>
    <button class="tab-btn text-gray-900" data-tab="tab3">Security</button>
    <button class="tab-btn text-gray-900" data-tab="tab4">Notifications</button>
</div>

<!-- Tab Content -->
<div id="tab1" class="tab-content active flex flex-col gap-5">
    <div class="flex flex-col md:flex-row gap-5">
        <div class="flex flex-col overflow-hidden rounded w-[25%] border border-2 border-dashed border-gray-300">
            <h2 class="text-2xl font-semibold text-greenish px-2 py-1 text-center">Favicon</h2>
            @include('components.dashboard.settings.branding')
        </div>

        <div class="flex flex-col overflow-hidden rounded w-[25%] border border-2 border-dashed border-gray-300">
            <h2 class="text-2xl font-semibold text-greenish px-2 py-1 text-center">Logo</h2>
            @include('components.dashboard.settings.branding')
        </div>
    </div>

    <button class="bg-greenish text-white bg-img rounded-full px-5 py-1 text-md w-full max-w-fit font-semibold ml-auto">Change</button>
</div>

<div id="tab2" class="tab-content flex flex-col gap-5">
    @include('components.dashboard.settings.personal-info')
</div>

<div id="tab3" class="tab-content flex flex-col gap-5">
</div>

<div id="tab4" class="tab-content flex flex-col gap-5">
</div>
@endsection

@push('styles')
<style>
    /* Tab buttons container */
    .tab-buttons {
        display: flex;
        gap: 4px;
        padding: 0 4px;
        margin-left: 1.25rem;
    }

    /* Each tab button */
    .tab-buttons button {
        cursor: pointer;
        transition: all 0.3s ease;
        padding: 0.5rem 1.25rem;
        border-radius: 0.5rem 0.5rem 0 0;
        font-weight: 500;
    }

    /* Active tab button */
    .tab-buttons button.active {
        background-color: white;
        position: relative;
        z-index: 1;
        color: #005d47;
    }

    /* Tab content */
    .tab-content {
        display: none;
        border-radius: 0.5rem;
        padding: 20px 30px;
        background-color: white;
    }

    .tab-content.active {
        display: flex;
    }
</style>
@endpush

@push('scripts')
<script>
    // Select all buttons and contents
    const tabButtons = document.querySelectorAll(".tab-btn");
    const tabContents = document.querySelectorAll(".tab-content");

    tabButtons.forEach(button => {
        button.addEventListener("click", () => {
            const tabId = button.getAttribute("data-tab");

            // Remove active class from all buttons and contents
            tabButtons.forEach(btn => btn.classList.remove("active"));
            tabContents.forEach(content => content.classList.remove("active"));

            // Add active class to clicked button and related content
            button.classList.add("active");
            document.getElementById(tabId).classList.add("active");
        });
    });
</script>
@endpush
