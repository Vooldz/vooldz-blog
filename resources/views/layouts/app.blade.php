<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $metaTitle ?: 'Vooldz Blog' }}</title>
    <meta name="author" content="{{ $metaAuthor ?: 'VOOLDZ' }}">
    <meta name="description" content="{{ $metaDescription ?: 'Vooldz Blog' }}">

    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');

        .font-family-karla {
            font-family: karla;
        }
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"
        integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
</head>

<body class="bg-gray-50 font-family-karla">

    <!-- Top Bar Nav -->
    <nav class="w-full py-4 bg-blue-800 shadow">
        <div class="w-full container mx-auto flex flex-wrap items-center justify-between">

            <nav>
                <ul class="flex items-center justify-between font-bold text-sm text-white uppercase no-underline">
                    <li><a class="hover:text-gray-200 hover:underline px-4" href="#">Shop</a></li>
                    <li><a class="hover:text-gray-200 hover:underline px-4" href="{{ route('about-us') }}">About</a></li>
                </ul>
            </nav>

            <div class="flex items-center text-lg no-underline text-white pr-6">
                <a class="" href="#">
                    <i class="fab fa-facebook"></i>
                </a>
                <a class="pl-6" href="#">
                    <i class="fab fa-instagram"></i>
                </a>
                <a class="pl-6" href="#">
                    <i class="fab fa-twitter"></i>
                </a>
                <a class="pl-6" href="#">
                    <i class="fab fa-linkedin"></i>
                </a>
            </div>
        </div>

    </nav>

    <!-- Text Header -->
    <header class="w-full container mx-auto">
        <div class="flex flex-col items-center py-8">
            <a class="font-bold text-gray-800 uppercase hover:text-gray-700 text-5xl" href="{{ route('home') }}">
                {{ App\Models\TextWidget::getTitle('blog-title') }}
            </a>
            <p class="text-lg text-gray-600 pt-3">
                {!! App\Models\TextWidget::getContent('blog-title') !!}
            </p>
        </div>
    </header>

    <!-- Topic Nav -->
    <nav class="w-full py-4 border-t border-b bg-gray-100" x-data="{ open: false }">
        <div class="block sm:hidden">
            <a href="#"
                class="block md:hidden text-base font-bold uppercase text-center flex justify-center items-center"
                @click="open = !open">
                Topics <i :class="open ? 'fa-chevron-down' : 'fa-chevron-up'" class="fas ml-2"></i>
            </a>
        </div>

            <div :class="open ? 'block' : 'hidden'" class="w-full flex-grow sm:flex sm:items-center sm:w-auto">
                <div
                    class="w-full container mx-auto flex flex-col sm:flex-row items-center justify-center text-sm font-bold uppercase mt-0 px-6 py-2">
                    @foreach ($categories as $category)
                    <a href="{{ route('by-category', $category->slug)}}" class="hover:bg-blue-600 hover:text-white rounded py-2 px-4 mx-2">{{ $category->title }}</a>
                    @endforeach
                    <a href="{{ route('about-us') }}" class="hover:bg-blue-600 hover:text-white rounded py-2 px-4 mx-2">About Us</a>
                </div>
            </div>

    </nav>


    <div class="container mx-auto flex flex-wrap py-6">

        <!-- Posts Section -->

        {{ $slot }}

    </div>

    <footer class="w-full border-t bg-white pb-12">
        <div class="w-full container mx-auto flex flex-col items-center">
            <div class="flex flex-col md:flex-row text-center md:text-left md:justify-between py-6">
                <a href="{{ route('about-us') }}" class="uppercase px-3 hover:text-blue-500">About Us</a>
                <a href="#" class="uppercase px-3 hover:text-blue-500">Privacy Policy</a>
                <a href="#" class="uppercase px-3 hover:text-blue-500">Terms & Conditions</a>
                <a href="#" class="uppercase px-3 hover:text-blue-500">Contact Us</a>
            </div>
            <div class="uppercase pb-6">&copy; V o o l d z</div>
        </div>
    </footer>
</body>
</html>
