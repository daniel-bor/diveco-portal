<x-guest-layout>
    <div class="text-center mb-8">
        <h1 class="text-3xl font-bold text-zinc-900 dark:text-white mb-2">{{ __('Crear cuenta') }}</h1>
        <p class="text-gray-600 dark:text-gray-400">{{ __('Completa el formulario para registrarte') }}</p>
    </div>

    <form method="POST" action="{{ route('register') }}" class="space-y-5">
        @csrf

        <!-- Name -->
        <div class="fade-in-up" style="animation-delay: 0.1s">
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Tu nombre completo" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="fade-in-up" style="animation-delay: 0.2s">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block w-full" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="nombre@ejemplo.com" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="fade-in-up" style="animation-delay: 0.3s">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password"
                            placeholder="••••••••" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="fade-in-up" style="animation-delay: 0.4s">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block w-full"
                            type="password"
                            name="password_confirmation"
                            required autocomplete="new-password"
                            placeholder="••••••••" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="pt-2 fade-in-up" style="animation-delay: 0.5s">
            <x-primary-button class="w-full justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                </svg>
                {{ __('Register') }}
            </x-primary-button>
        </div>

        <div class="text-center mt-6 text-sm text-gray-600 dark:text-gray-400 fade-in-up" style="animation-delay: 0.6s">
            {{ __('Already registered?') }}
            <a class="text-sky-600 hover:text-sky-700 dark:text-sky-400 dark:hover:text-sky-300 transition-colors duration-300" href="{{ route('login') }}">
                {{ __('Log in') }}
            </a>
        </div>
    </form>
</x-guest-layout>
