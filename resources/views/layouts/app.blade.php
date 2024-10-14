<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Favicon -->
        <link rel="icon" href="{{ asset('assets/images/logo-icon.png') }}" type="image/png">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite([
            'resources/css/global.css',
            'resources/css/app.css',
            'resources/js/app.js'
        ])
        
        <!-- Additional Conditional Scripts -->
        {{ $scripts ?? '' }}
        <script>
            // show pop up
            const showOverlayPopup = () => {
                document.getElementById("overlay-popup").classList.remove("hidden");
                document.getElementById("overlay-popup").classList.add("flex");
            };
            const hideOverlayPopup = () => {
                document.getElementById("overlay-popup").classList.remove("flex");
                document.getElementById("overlay-popup").classList.add("hidden");
            };
            const showOverlayLoading = () => {
                document.getElementById("overlay-loading").classList.remove("hidden");
                document.getElementById("overlay-loading").classList.add("flex");
            };
            const hideOverlayLoading = () => {
                document.getElementById("overlay-loading").classList.remove("flex");
                document.getElementById("overlay-loading").classList.add("hidden");
            };
        </script>
    </head>
    <body class="bg-light-primaryBg dark:bg-primaryBg text-light-primaryFont dark:text-primaryFont">
        <div class="w-full">
            @include('layouts.navigation')
            @include('layouts.header')
            <!-- Main Content -->
            <div class="main-container pl-2 md:pl-4 pr-2 pb-4 pt-2 md:ml-[250px] mt-16 md:mt-0 transition-all">
                {{ $slot }}
            </div>
            <x-auth-popup />
            <x-loading-overlay />
        </div>
    </body>
</html>
