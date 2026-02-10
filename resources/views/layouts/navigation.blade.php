<nav x-data="{ open: false, notificationsOpen: false }" class="bg-gradient-to-r from-indigo-600 to-purple-600 shadow-lg">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}" class="flex items-center space-x-2 group">
                        <x-application-logo class="block h-10 w-auto fill-current text-white transition-transform duration-300 group-hover:scale-110" />
                        <span class="text-white font-bold text-xl hidden md:block">MyApp</span>
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" 
                        class="inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium leading-5 transition duration-150 ease-in-out focus:outline-none
                        {{ request()->routeIs('dashboard') ? 'border-white text-white' : 'border-transparent text-indigo-100 hover:text-white hover:border-indigo-200' }}">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                        {{ __('Dashboard') }}
                    </x-nav-link>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <!-- Notifications Bell -->
                <div class="relative" x-data="{ open: false }">
                    <button @click="open = !open" class="relative p-2 text-indigo-100 hover:text-white transition duration-150 ease-in-out mr-4 rounded-lg hover:bg-white/10">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                        </svg>
                        <span class="absolute top-1 right-1 block h-2 w-2 rounded-full bg-red-400 ring-2 ring-indigo-600"></span>
                    </button>

                    <!-- Notifications Dropdown -->
                    <div x-show="open" 
                         @click.away="open = false"
                         x-transition:enter="transition ease-out duration-200"
                         x-transition:enter-start="opacity-0 scale-95"
                         x-transition:enter-end="opacity-100 scale-100"
                         x-transition:leave="transition ease-in duration-75"
                         x-transition:leave-start="opacity-100 scale-100"
                         x-transition:leave-end="opacity-0 scale-95"
                         class="absolute right-0 mt-2 w-80 rounded-lg shadow-xl bg-white dark:bg-gray-800 ring-1 ring-black ring-opacity-5 z-50"
                         style="display: none;">
                        
                        <!-- Header -->
                        <div class="px-4 py-3 border-b border-gray-200 dark:border-gray-700 bg-gradient-to-r from-indigo-50 to-purple-50 dark:from-gray-700 dark:to-gray-700 rounded-t-lg">
                            <div class="flex items-center justify-between">
                                <h3 class="text-sm font-semibold text-gray-900 dark:text-white">Notifications</h3>
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-indigo-100 text-indigo-800 dark:bg-indigo-900 dark:text-indigo-200">
                                    5 New
                                </span>
                            </div>
                        </div>

                        <!-- Notifications List -->
                        <div class="max-h-96 overflow-y-auto">
                            <!-- Notification 1 -->
                            <a href="#" class="block px-4 py-3 hover:bg-gray-50 dark:hover:bg-gray-700 transition duration-150 ease-in-out border-b border-gray-100 dark:border-gray-700">
                                <div class="flex items-start">
                                    <div class="flex-shrink-0">
                                        <div class="rounded-full bg-blue-100 dark:bg-blue-900 p-2">
                                            <svg class="w-5 h-5 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="ml-3 flex-1">
                                        <p class="text-sm font-medium text-gray-900 dark:text-white">
                                            New user registered
                                        </p>
                                        <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">
                                            John Smith just created an account
                                        </p>
                                        <p class="text-xs text-gray-400 dark:text-gray-500 mt-1">2 minutes ago</p>
                                    </div>
                                    <span class="flex-shrink-0 ml-2 h-2 w-2 rounded-full bg-blue-500"></span>
                                </div>
                            </a>

                            <!-- Notification 2 -->
                            <a href="#" class="block px-4 py-3 hover:bg-gray-50 dark:hover:bg-gray-700 transition duration-150 ease-in-out border-b border-gray-100 dark:border-gray-700">
                                <div class="flex items-start">
                                    <div class="flex-shrink-0">
                                        <div class="rounded-full bg-green-100 dark:bg-green-900 p-2">
                                            <svg class="w-5 h-5 text-green-600 dark:text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="ml-3 flex-1">
                                        <p class="text-sm font-medium text-gray-900 dark:text-white">
                                            Task completed
                                        </p>
                                        <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">
                                            "Update dashboard design" was marked as done
                                        </p>
                                        <p class="text-xs text-gray-400 dark:text-gray-500 mt-1">1 hour ago</p>
                                    </div>
                                    <span class="flex-shrink-0 ml-2 h-2 w-2 rounded-full bg-green-500"></span>
                                </div>
                            </a>

                            <!-- Notification 3 -->
                            <a href="#" class="block px-4 py-3 hover:bg-gray-50 dark:hover:bg-gray-700 transition duration-150 ease-in-out border-b border-gray-100 dark:border-gray-700">
                                <div class="flex items-start">
                                    <div class="flex-shrink-0">
                                        <div class="rounded-full bg-yellow-100 dark:bg-yellow-900 p-2">
                                            <svg class="w-5 h-5 text-yellow-600 dark:text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="ml-3 flex-1">
                                        <p class="text-sm font-medium text-gray-900 dark:text-white">
                                            System update required
                                        </p>
                                        <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">
                                            A new version is available. Update now
                                        </p>
                                        <p class="text-xs text-gray-400 dark:text-gray-500 mt-1">3 hours ago</p>
                                    </div>
                                    <span class="flex-shrink-0 ml-2 h-2 w-2 rounded-full bg-yellow-500"></span>
                                </div>
                            </a>

                            <!-- Notification 4 -->
                            <a href="#" class="block px-4 py-3 hover:bg-gray-50 dark:hover:bg-gray-700 transition duration-150 ease-in-out border-b border-gray-100 dark:border-gray-700">
                                <div class="flex items-start">
                                    <div class="flex-shrink-0">
                                        <div class="rounded-full bg-purple-100 dark:bg-purple-900 p-2">
                                            <svg class="w-5 h-5 text-purple-600 dark:text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="ml-3 flex-1">
                                        <p class="text-sm font-medium text-gray-900 dark:text-white">
                                            New comment on your post
                                        </p>
                                        <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">
                                            Sarah Johnson commented: "Great work!"
                                        </p>
                                        <p class="text-xs text-gray-400 dark:text-gray-500 mt-1">5 hours ago</p>
                                    </div>
                                    <span class="flex-shrink-0 ml-2 h-2 w-2 rounded-full bg-purple-500"></span>
                                </div>
                            </a>

                            <!-- Notification 5 -->
                            <a href="#" class="block px-4 py-3 hover:bg-gray-50 dark:hover:bg-gray-700 transition duration-150 ease-in-out">
                                <div class="flex items-start">
                                    <div class="flex-shrink-0">
                                        <div class="rounded-full bg-red-100 dark:bg-red-900 p-2">
                                            <svg class="w-5 h-5 text-red-600 dark:text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="ml-3 flex-1">
                                        <p class="text-sm font-medium text-gray-900 dark:text-white">
                                            Security alert
                                        </p>
                                        <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">
                                            New login from Chrome on Windows
                                        </p>
                                        <p class="text-xs text-gray-400 dark:text-gray-500 mt-1">1 day ago</p>
                                    </div>
                                    <span class="flex-shrink-0 ml-2 h-2 w-2 rounded-full bg-red-500"></span>
                                </div>
                            </a>
                        </div>

                        <!-- Footer -->
                        <div class="px-4 py-3 border-t border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-700 rounded-b-lg">
                            <a href="#" class="text-sm font-medium text-indigo-600 dark:text-indigo-400 hover:text-indigo-500 dark:hover:text-indigo-300 flex items-center justify-center">
                                View all notifications
                                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <x-dropdown align="right" width="56">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-4 py-2 border-2 border-white/20 text-sm leading-4 font-medium rounded-lg text-white bg-white/10 hover:bg-white/20 backdrop-blur-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-indigo-600 transition ease-in-out duration-150">
                            <div class="flex items-center">
                                <div class="w-8 h-8 rounded-full bg-gradient-to-br from-yellow-400 to-orange-500 flex items-center justify-center text-white font-bold mr-3">
                                    {{ substr(Auth::user()->name, 0, 1) }}
                                </div>
                                <div class="text-left">
                                    <div class="text-sm font-semibold">{{ Auth::user()->name }}</div>
                                    <div class="text-xs text-indigo-100">View Profile</div>
                                </div>
                                <svg class="ms-2 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <div class="px-4 py-3 border-b border-gray-100">
                            <p class="text-sm font-medium text-gray-900">Signed in as</p>
                            <p class="text-sm text-gray-500 truncate">{{ Auth::user()->email }}</p>
                        </div>
                        
                        <x-dropdown-link :href="route('profile.edit')" class="flex items-center">
                            <svg class="w-4 h-4 mr-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                            {{ __('Profile Settings') }}
                        </x-dropdown-link>

                        <div class="border-t border-gray-100"></div>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault(); this.closest('form').submit();"
                                    class="flex items-center text-red-600 hover:bg-red-50">
                                <svg class="w-4 h-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                </svg>
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-white hover:bg-white/10 focus:outline-none focus:bg-white/10 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden bg-indigo-700">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')"
                class="flex items-center {{ request()->routeIs('dashboard') ? 'bg-indigo-800 border-l-4 border-white text-white' : 'text-indigo-100 hover:bg-indigo-600 hover:text-white' }}">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                </svg>
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-indigo-600">
            <div class="px-4 flex items-center">
                <div class="w-10 h-10 rounded-full bg-gradient-to-br from-yellow-400 to-orange-500 flex items-center justify-center text-white font-bold">
                    {{ substr(Auth::user()->name, 0, 1) }}
                </div>
                <div class="ml-3">
                    <div class="font-medium text-base text-white">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-indigo-200">{{ Auth::user()->email }}</div>
                </div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')" class="text-indigo-100 hover:bg-indigo-600 hover:text-white flex items-center">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault(); this.closest('form').submit();"
                            class="text-red-200 hover:bg-red-600 hover:text-white flex items-center">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                        </svg>
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>