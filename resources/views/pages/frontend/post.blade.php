@extends('layouts.layout')

@section('meta')
    <title>Post</title>
    <meta name="description" content="Post">
    <meta name="keywords" content="Post">
    <meta name="author" content="Deblew">
    <link rel="canonical" href="{{ url()->current() }}">
    <meta name="robots" content="index, follow">
@endsection

@section('content')
<div class="max-w-7xl mx-auto flex flex-col md:flex-row gap-2 lg:gap-4 mt-4 single-post">
    <div class="flex flex-col gap-5 w-full md:w-[66%] lg:w-[75%]">
        <article class="flex flex-col">
            <img src="https://technicalthought.com/Demo/Jop-Site/wp-content/uploads/2025/04/cover.jpg" alt="" class="object-cover aspect-[16/9] rounded">

            <div class="w-[95%] mx-auto -mt-20 p-5 border border-gray-200 flex flex-col gap-5 rounded-lg bg-white">
                <div class="flex flex-row items-center space-x-2">
                    <a href="{{ route('home') }}" class="text-gray-700 hover:text-greenish font-semibold"><i class="fa-solid fa-house mr-2 text-sm"></i> Home</a>
                    <i class="fa-solid fa-chevron-right text-xs text-gray-700"></i>
                    <a href="{{ route('blog') }}" class="text-gray-700 hover:text-greenish font-semibold">Blog</a>
                    <i class="fa-solid fa-chevron-right text-xs text-gray-700"></i>
                    <span class="text-greenish font-semibold">Post</span>
                </div>
                <h1 class="text-2xl font-bold">SSC GD Constable Revised Vacancy Details Various Post Recruitment 2025</h1>

                <div class="flex flex-wrap lg:flex-row gap-4 w-full lg:items-center">
                    <div class="flex flex-row gap-2 items-center w-full lg:max-w-fit">
                        <a href="{{ route('author') }}" aria-label=""><img src="{{ asset('images/branding/Deblew-Favicon.png') }}" alt="" class="w-[40px] h-[40px] rounded-full border-2"></a>

                        <span class="font-bold">Admin</span>
                    </div>

                    <div class="flex flex-row gap-5 items-center ml-auto">
                        <span class="flex flex-row gap-2 items-center text-gray-700 text-sm"><i class="fa fa-comments"></i>100</span>
                        <span class="flex flex-row gap-2 items-center text-gray-700 text-sm"><i class="fa fa-eye"></i>1000</span>
                        <span class="flex flex-row gap-2 items-center text-gray-700 text-sm"><i class="fa fa-clock"></i>13/9/2025</span>
                    </div>
                </div>

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer eget lorem ut dolor suscipit pulvinar. Mauris eget nunc maximus, porttitor sapien quis, bibendum purus. Aenean vestibulum ante id odio tempor feugiat. Nam magna est, efficitur sed fermentum in, fermentum eu odio. Fusce mollis tempor eros, nec fringilla purus facilisis in. Proin cursus cursus blandit. Donec lobortis, nisl non imperdiet eleifend, quam neque pharetra urna, at elementum tellus ligula quis metus. Nunc at pretium velit, quis interdum orci. Nam ultrices congue pharetra. Sed vehicula varius metus, vitae efficitur odio tincidunt sit amet. Suspendisse ligula nulla, sollicitudin id pellentesque vulputate, consequat sed purus. Etiam elementum ipsum metus, a porta erat lacinia id. In euismod arcu suscipit neque placerat, quis bibendum metus sagittis. Maecenas lobortis leo eu auctor blandit. Praesent libero nunc, venenatis sed maximus vitae, rhoncus id felis.</p>
                <p>Integer vestibulum libero ante. Pellentesque rutrum tortor nec dui dapibus, vel pulvinar eros efficitur. Phasellus eget nisi imperdiet, vulputate metus sit amet, varius sem. Maecenas diam ipsum, tempor et lectus eu, porttitor rutrum diam. Aliquam ullamcorper risus sed ante auctor, blandit egestas nulla elementum. Nam egestas sit amet neque sit amet consectetur. Praesent lacus est, scelerisque in malesuada sed, bibendum id magna. Cras pellentesque nisi massa, non sagittis urna pharetra id. Proin accumsan lectus eget pretium auctor. In semper est a felis ultrices rhoncus. Etiam porta, arcu vel sollicitudin eleifend, lectus metus ullamcorper lectus, vel posuere mi augue sit amet leo. In hac habitasse platea dictumst. Quisque et interdum libero. Phasellus tristique aliquam quam et luctus. Maecenas tincidunt malesuada felis. Donec laoreet, mauris in eleifend condimentum, dolor massa iaculis nibh, vel accumsan nunc nisi eu ex.</p>
                <p>Integer eget turpis in nisl venenatis mollis. Nam fermentum, mi sodales auctor posuere, sapien tellus condimentum tellus, in molestie massa tortor eu ante. Mauris ac felis faucibus, dignissim quam at, iaculis dolor. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse lobortis tincidunt turpis vel tempus. Duis viverra interdum tristique. Nam quis diam vitae dolor viverra bibendum. Cras quis justo eu purus blandit feugiat. Cras faucibus porttitor ante, in auctor tellus rhoncus et. Interdum et malesuada fames ac ante ipsum primis in faucibus. Phasellus quis ante at eros egestas rutrum non quis massa. Donec placerat enim mauris, id finibus risus aliquet sed. Quisque luctus erat ut cursus varius. Mauris ac feugiat quam. Sed ligula ipsum, iaculis eu diam in, pretium fermentum lectus.</p>
                <p>In hac habitasse platea dictumst. Integer gravida auctor magna in posuere. Nam erat lectus, rutrum in rutrum vitae, sagittis sed arcu. Nam sed commodo massa. Morbi faucibus lectus libero, non congue nulla molestie non. Ut accumsan turpis et rhoncus condimentum. Nulla accumsan, orci vel accumsan suscipit, dolor leo ullamcorper ligula, non dignissim dui libero eu arcu. Cras faucibus dapibus lectus, vitae bibendum turpis consectetur a. In nec viverra ex. Nam tortor sem, convallis et libero quis, tincidunt gravida leo. Integer varius egestas convallis.</p>
                <p>Nam volutpat lacinia augue, at tempus ligula sodales nec. Nulla tincidunt felis sollicitudin, fringilla est eu, fringilla orci. Quisque consequat lorem non leo dignissim varius. Nulla facilisi. Nulla eu aliquam neque. In nunc libero, tempus a lobortis eget, tincidunt id erat. Aliquam sollicitudin auctor eros, in malesuada ipsum dignissim et. Vestibulum consectetur placerat dolor, eu efficitur orci sodales quis. Pellentesque consectetur arcu at massa aliquam, at suscipit ex aliquam. Curabitur ex urna, facilisis sit amet lorem non, sagittis cursus tortor.</p>
            </div>
        </article>

        <!-- Author Section -->
        <section class="w-full p-4 border border-greenish flex flex-col md:flex-row items-center justify-center gap-5 rounded bg-white p-5">
            <img src="{{ asset('images/branding/Deblew-Favicon.png') }}" alt="" class="w-[100px] h-[100px] rounded-full border-2">

            <div>
                <h3 class="font-bold text-lg text-greenish">Admin</h3>
                <p class="text-gray-700 text-justify my-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Architecto optio omnis sed perferendis magnam dolore labore vel accusantium necessitatibus, delectus non. Sint accusamus error reprehenderit aliquam laudantium ad, quaerat nihil. Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus earum voluptate amet eius alias sunt tenetur dolor delectus cupiditate quo est voluptatibus maiores qui esse, obcaecati nostrum veritatis repudiandae. Quam!</p>

                <!-- Social Media Icons -->
                <div class="flex flex-row gap-3">
                    <i class="fa-solid fa-earth text-greenish text-lg"></i>
                    <i class="fa-brands fa-facebook text-greenish text-lg"></i>
                    <i class="fa-brands fa-twitter text-greenish text-lg"></i>
                    <i class="fa-brands fa-linkedin text-greenish text-lg"></i>
                    <i class="fa-brands fa-instagram text-greenish text-lg"></i>
                    <i class="fa-brands fa-telegram text-greenish text-lg"></i>
                </div>
            </div>
        </section>

        <!-- Related Posts Section -->
        @include('components.related-posts.related')
    </div>
    
    @include('components.sidebar.sidebar')
</div>
@endsection
