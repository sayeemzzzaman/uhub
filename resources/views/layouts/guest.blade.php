<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="hero place-items-start font-sans text-gray-900 antialiased bg-no-repeat bg-[length:100%_130%]" style="background-image: url('storage/images/bg.jpg');">
        <div class="hero-overlay bg-opacity-60"></div>
        <div class="min-h-screen flex flex-col sm:justify-center items-left pl-24 pt-6 sm:pt-0" >
            <div class="">
                <a href="/">
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500 " />
                </a>
            </div>

            <div class="w-96 sm:max-w-md  px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
