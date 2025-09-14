@extends ('layouts.others')

@push('meta')
    <title>Page Not Found</title>
    <meta name="description" content="Page Not Found">
    <meta name="keywords" content="Page Not Found">
    <meta name="author" content="Deblew">
    <link rel="canonical" href="{{ url()->current() }}">
@endpush

@section('content')
<!-- Page Content -->
<main class="w-full h-[100vh] flex flex-col justify-center items-center relative">
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="text-gray-200 absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[50%] h-[50%]">
        <circle cx="12" cy="12" r="10" />
        <path d="M12 8v4l3 3" />
    </svg>

    <section class="flex flex-col items-center justify-center space-y-4 z-10">
        <h1 class="text-3xl font-bold text-greenish">Page Not Found</h1>
        <span class="text-sm text-gray-700">Oops! The page you are looking for does not exist.</span>

        <form class="w-full max-w-xl bg-white p-4 rounded flex items-center justify-between">
            <input type="search" name="search" placeholder="Search" class="w-full p-0">
            <button><i class="fa fa-search text-gray-700"></i></button>
        </form>

        <div class="flex flex-row space-x-4">
            <button onclick="window.location.href='{{ url()->previous() }}'" class="text-greenish hover:text-white bg-white hover:bg-greenish border border-greenish px-4 py-2 rounded-full bg-img-rev flex flex-row">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="mr-2">
                    <path d="M19 12H5M12 19l-7-7 7-7" />
                </svg>
                Back to Page
            </button>

            <button onclick="window.location.href='{{ route('home') }}'" class="text-white hover:text-greenish bg-greenish hover:bg-white border border-greenish px-4 py-2 rounded-full bg-img flex flex-row">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="mr-2">
                    <path d="M3 12l9-9 9 9M5 10v10a1 1 0 001 1h3m10-11v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                </svg>
                Back to Home
            </button>
        </div>
    </section>
</main>
@endsection
