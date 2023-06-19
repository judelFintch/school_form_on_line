<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="{{asset('assets/css/main.css')}}" rel="stylesheet" />
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    @livewireStyles
</head>

<body>
    <header class="sticky bg-white border-b border-b-gray-200 h-16 flex items-center z-40">
        <div class="px-4 sm:px-10 md:px-12 lg:px-10 max-w-7xl mx-auto w-full  flex items-center justify-between">
        <div class="">
            <a href="" class="flex items-center gap-x-2">
            <img src="favicon.png" alt="logo" class="w-auto h-10">
            <div class="flex flex-wrap">
                <span class="w-full text-lg sm:text-xl font-bold text-gray-800">{{ config('app.name')}}</span>
                <span class="w-full text-xs font-normal text-blue-600">Complexe-scolaire</span>
            </div>
            </a>
        </div>
        </div>
    </header>

        {{ $slot }}
    @livewireScripts

    <script src="{{asset('assets/js/main.js')}}"></script>
</body>
</html>
