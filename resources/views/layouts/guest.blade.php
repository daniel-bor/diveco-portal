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
        @vite(['resources/css/app.css', 'resources/css/auth.css', 'resources/js/app.js'])

        <style>
            .auth-image-bg {
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
            }
            .auth-form-transition {
                transition: all 0.5s ease-in-out;
            }
            .auth-image-transition {
                transition: transform 0.6s ease-in-out, opacity 0.6s ease-in-out;
            }
            @keyframes fadeInUp {
                from {
                    opacity: 0;
                    transform: translateY(20px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }
            .fade-in-up {
                animation: fadeInUp 0.6s ease-out forwards;
            }
            .auth-card-hover {
                transition: transform 0.3s ease, box-shadow 0.3s ease;
            }
            .auth-card-hover:hover {
                transform: translateY(-5px);
                box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
            }
            @keyframes pulse {
                0%, 100% {
                    opacity: 1;
                }
                50% {
                    opacity: 0.8;
                }
            }
            .logo-pulse:hover {
                animation: pulse 1.5s infinite;
            }
        </style>
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col md:flex-row">
            <!-- Formulario (siempre primero tanto en móvil como en escritorio) -->
            <div class="w-full md:w-1/2 flex flex-col p-4 md:p-8 lg:p-12 auth-form-transition fade-in-up" style="animation-delay: 0.2s;">
                <div class="mb-6 flex justify-center md:justify-start">
                    <a href="/" class="logo-pulse">
                        <x-application-logo class="h-8 md:h-12 bg-white p-1 rounded-md" />
                    </a>
                </div>

                <div class="flex-1 flex flex-col justify-center">
                    <div class="w-full max-w-md mx-auto auth-card-hover bg-white dark:bg-zinc-800 shadow-xl rounded-xl overflow-hidden">
                        <div class="px-6 py-8">
                            {{ $slot }}
                        </div>
                    </div>
                </div>
            </div>

            <!-- Imagen ilustrativa -->
            <div class="w-full md:w-1/2 min-h-[30vh] md:min-h-screen bg-sky-500 auth-image-transition auth-image-bg flex items-center justify-center overflow-hidden fade-in-up flex-col relative">
                <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-b from-sky-600 to-sky-400 opacity-60"></div>
                <img src="{{ asset('images/logo-olympia.webp') }}" alt="Logo" class="w-3/4 md:w-1/2 lg:w-3/5 xl:w-1/2 object-cover bg-white p-3 rounded-2xl shadow-lg z-10 mb-8" />
                <img src="{{ asset('images/dormilones.png') }}" alt="dormilones" class="w-3/4 mx-auto object-cover bottom-0 absolute z-10" />
            </div>
        </div>
    </body>
</html>
