<!-- Side Navigation Menu -->
<div class="h-full flex flex-col">
    <!-- Logo Section -->
    <div class="p-6 flex justify-center border-b border-gray-200 dark:border-gray-700">
        <a href="{{ route('dashboard') }}" class="flex items-center">
            <x-application-logo class="block h-12 w-auto fill-current text-gray-800 dark:text-gray-200" />
        </a>
    </div>
    
    <!-- User Info Section -->
    <div class="p-4 border-b border-gray-200 dark:border-gray-700">
        <div class="text-center">
            <div class="font-medium text-base text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}</div>
            <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
        </div>
    </div>

    <!-- Navigation Links -->
    <div class="p-4 flex-grow">
        <div class="space-y-1">
            <a href="{{ route('dashboard') }}" 
               class="block w-full px-4 py-2 {{ request()->routeIs('dashboard') ? 'bg-gray-100 dark:bg-gray-700 text-indigo-600 dark:text-indigo-400 rounded-md' : 'text-gray-600 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-700 hover:text-gray-900 dark:hover:text-gray-100 rounded-md' }}">
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    <span>{{ __('Dashboard') }}</span>
                </div>
            </a>
            
            <a href="{{ route('profile.edit') }}" 
               class="block w-full px-4 py-2 {{ request()->routeIs('profile.edit') ? 'bg-gray-100 dark:bg-gray-700 text-indigo-600 dark:text-indigo-400 rounded-md' : 'text-gray-600 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-700 hover:text-gray-900 dark:hover:text-gray-100 rounded-md' }}">
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                    <span>{{ __('Profile') }}</span>
                </div>
            </a>
            
            <!-- Add more menu items here as needed -->
        </div>
    </div>

    <!-- Logout Section -->
    <div class="p-4 border-t border-gray-200 dark:border-gray-700">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" 
                    onclick="event.preventDefault(); this.closest('form').submit();"
                    class="w-full px-4 py-2 text-left text-red-600 dark:text-red-400 hover:bg-red-50 dark:hover:bg-gray-700 hover:text-red-800 dark:hover:text-red-300 rounded-md">
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                    </svg>
                    <span>{{ __('Log Out') }}</span>
                </div>
            </button>
        </form>
    </div>
</div>
