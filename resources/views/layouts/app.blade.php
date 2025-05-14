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
    <body class="font-sans antialiased">
        <div x-data="{ sidebarOpen: true, isMobile: window.innerWidth < 768 }" 
             x-init="isMobile = window.innerWidth < 768; 
                    sidebarOpen = !isMobile;
                    window.addEventListener('resize', () => { 
                        isMobile = window.innerWidth < 768;
                        if (isMobile) sidebarOpen = false;
                    });" 
             class="min-h-screen bg-gray-100 dark:bg-gray-900 flex">
            
            <!-- Side Navigation -->
            <div :class="{'side-nav': true, 'side-nav-open': sidebarOpen && isMobile, 'side-nav-closed': !sidebarOpen && isMobile}"
                 class="bg-white dark:bg-gray-800 border-r border-gray-200 dark:border-gray-700 shadow-sm">
                @include('layouts.navigation')
            </div>
            
            <div :class="{'side-content': sidebarOpen && !isMobile, 'side-content-full': !sidebarOpen || isMobile}"
                 class="flex flex-col flex-grow">
                <!-- Mobile Nav Toggle -->
                <div class="bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700 p-4 flex items-center md:hidden">
                    <button @click="sidebarOpen = !sidebarOpen"
                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{ 'hidden': sidebarOpen, 'inline-flex': !sidebarOpen }" class="inline-flex"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{ 'hidden': !sidebarOpen, 'inline-flex': sidebarOpen }" class="hidden" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                    <div class="ml-4 font-semibold text-gray-800 dark:text-gray-200">{{ config('app.name', 'Laravel') }}</div>
                </div>

                <!-- Page Heading -->
                @isset($header)
                    <header class="bg-white dark:bg-gray-800 shadow">
                        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                            {{ $header }}
                        </div>
                    </header>
                @endisset

                <!-- Page Content -->
                <main class="flex-grow">
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
