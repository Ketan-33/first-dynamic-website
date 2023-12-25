<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Our Articles @if(isset($title)) {{ ' | '.$title}} @endif</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans bg-gray-100">
    <div class="container mx-auto p-8">
        <!-- Header -->
        @if (isset($header))
        <div class="text-5xl font-bold mb-8 text-center text-purple-800">
            <a href="/">{{ $header }}</a>
        </div>
        @endif
        {{ $slot }}
        <footer class="text-center bg-gray-400 text-white p-8 mt-8">
            <div class="container">
                <section class="mb-4">
                    <div class="logos flex justify-center p-3 gap-8 rounded-xl">
                        <a href="#"><img class="h-10 w-10 mx-2" src='{{asset("images/github.svg")}}' alt="github"></a>
                        <a href="#"><img class="h-10 w-10 mx-2" src='{{asset("images/instagram.svg")}}' alt="instagram"></a>
                        <a href="#"><img class="h-10 w-10 mx-2" src='{{asset("images/linkedin.svg")}}' alt="linkedin"></a>
                        <a href="#"><img class="h-10 w-10 mx-2" src='{{asset("images/twitter.svg")}}' alt="twitter"></a>
                    </div>
                </section>
            </div>
            <div>
                <p class="text-center text-gray-900">&copy; 2023 Copyright: KetanPardhi</p>
            </div>
        </footer>
    </div>
</body>
</html>
