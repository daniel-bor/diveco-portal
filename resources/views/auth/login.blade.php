<x-guest-layout>
    <div class="text-center mb-8">
        <h1 class="text-3xl font-bold text-zinc-900 dark:text-white mb-2">{{ __('Bienvenido') }}</h1>
        <p class="text-gray-600 dark:text-gray-400">{{ __('Inicia sesión para continuar') }}</p>
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="space-y-6">
        @csrf

        <!-- Email Address -->
        <div class="fade-in-up" style="animation-delay: 0.1s">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block w-full" type="email" name="email" :value="old('email')" required
                autofocus autocomplete="username" placeholder="nombre@ejemplo.com" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="fade-in-up" style="animation-delay: 0.2s">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block w-full" type="password" name="password" required
                autocomplete="current-password" placeholder="••••••••" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="flex items-center justify-between fade-in-up" style="animation-delay: 0.3s">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                    class="rounded dark:bg-zinc-900 border-gray-300 dark:border-zinc-700 text-sky-600 shadow-sm focus:ring-sky-500 dark:focus:ring-sky-500 dark:focus:ring-offset-zinc-800"
                    name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>

            @if (Route::has('password.request'))
                <a class="text-sm text-sky-600 hover:text-sky-700 dark:text-sky-400 dark:hover:text-sky-300 transition-colors duration-300"
                    href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif
        </div>

        <div class="pt-2 fade-in-up" style="animation-delay: 0.4s">
            <x-primary-button class="w-full justify-center">
                {{ __('Log in') }}
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                </svg>
            </x-primary-button>
        </div>

        @if (Route::has('register'))
            <div class="text-center mt-6 text-sm text-gray-600 dark:text-gray-400 fade-in-up"
                style="animation-delay: 0.5s">
                {{ __('Don\'t have an account?') }}
                <a class="text-sky-600 hover:text-sky-700 dark:text-sky-400 dark:hover:text-sky-300 transition-colors duration-300"
                    href="{{ route('register') }}">
                    {{ __('Register') }}
                </a>
            </div>
        @endif
    </form>
</x-guest-layout>
