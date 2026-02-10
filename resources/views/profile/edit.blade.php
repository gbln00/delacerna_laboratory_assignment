<x-app-layout>
   <x-slot name="header">
    <div class="bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600 rounded-lg  shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-4">
                    <div class="bg-white/10 backdrop-blur-sm rounded-lg p-3 shadow-lg transform hover:scale-110 transition duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </div>
                    <div>
                        <h2 class="font-bold text-2xl text-white leading-tight flex items-center">
                            {{ __('Profile') }}
                            <span class="ml-3 inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-indigo-600/60 text-white backdrop-blur-sm">
                                Settings
                            </span>
                        </h2>
                        <p class="text-gray-400 text-sm mt-1">
                            Manage your account settings and preferences
                        </p>
                    </div>
                </div>
                <div class="hidden md:flex items-center space-x-4">
                    <div class="bg-white/10 backdrop-blur-sm rounded-lg px-4 py-2 border border-white/20 shadow-lg hover:bg-white/20 transition duration-300">
                        <div class="flex items-center space-x-2">
                            <svg class="w-5 h-5 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <span class="text-gray-300 font-medium text-sm">
                                {{ now()->format('l, F j, Y') }}
                            </span>
                        </div>
                    </div>
                    <div class="bg-white/10 backdrop-blur-sm rounded-lg px-4 py-2 border border-white/20 shadow-lg hover:bg-white/20 transition duration-300">
                        <div class="flex items-center space-x-2">
                            <svg class="w-5 h-5 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span class="text-gray-300 font-medium text-sm">
                                {{ now()->format('g:i A') }}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            
            <!-- Profile Header Card -->
            <div class="bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-8 text-white">
                    <div class="flex items-center space-x-6">
                        <div class="w-24 h-24 rounded-full bg-gradient-to-br from-yellow-400 to-orange-500 flex items-center justify-center text-white font-bold text-4xl shadow-2xl ring-4 ring-white">
                            {{ substr(Auth::user()->name, 0, 1) }}
                        </div>
                        <div>
                            <h1 class="text-3xl font-bold mb-2">
                                {{ Auth::user()->name }}
                            </h1>
                            <p class="text-indigo-100 text-lg">
                                {{ Auth::user()->email }}
                            </p>
                            <div class="mt-3 flex items-center space-x-2">
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-white/20 text-white backdrop-blur-sm">
                                    <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>
                                    Verified Account
                                </span>
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-white/20 text-white backdrop-blur-sm">
                                    Member since {{ Auth::user()->created_at->format('Y') }}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Profile Information Card -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg transform hover:shadow-2xl transition duration-300">
                <div class="p-6 border-b border-gray-200 dark:border-gray-700 bg-gradient-to-r from-indigo-50 to-purple-50 dark:from-gray-700 dark:to-gray-700">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-3">
                            <div class="bg-indigo-100 dark:bg-indigo-900 rounded-lg p-2">
                                <svg class="w-6 h-6 text-indigo-600 dark:text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                    Profile Information
                                </h3>
                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                    Update your account's profile information and email address
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-6 sm:p-8">
                    <div class="max-w-xl">
                        @include('profile.partials.update-profile-information-form')
                    </div>
                </div>
            </div>

            <!-- Update Password Card -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg transform hover:shadow-2xl transition duration-300">
                <div class="p-6 border-b border-gray-200 dark:border-gray-700 bg-gradient-to-r from-purple-50 to-pink-50 dark:from-gray-700 dark:to-gray-700">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-3">
                            <div class="bg-purple-100 dark:bg-purple-900 rounded-lg p-2">
                                <svg class="w-6 h-6 text-purple-600 dark:text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                    Update Password
                                </h3>
                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                    Ensure your account is using a long, random password to stay secure
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-6 sm:p-8">
                    <div class="max-w-xl">
                        @include('profile.partials.update-password-form')
                    </div>
                </div>
            </div>

            <!-- Delete Account Card -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg border-2 border-red-200 dark:border-red-900 transform hover:shadow-2xl transition duration-300">
                <div class="p-6 border-b border-red-200 dark:border-red-900 bg-gradient-to-r from-red-50 to-pink-50 dark:from-gray-700 dark:to-gray-700">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-3">
                            <div class="bg-red-100 dark:bg-red-900 rounded-lg p-2">
                                <svg class="w-6 h-6 text-red-600 dark:text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                    Delete Account
                                </h3>
                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                    Permanently delete your account and all associated data
                                </p>
                            </div>
                        </div>
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-red-100 text-red-800 dark:bg-red-900 dark:text-red-200">
                            Danger Zone
                        </span>
                    </div>
                </div>
                <div class="p-6 sm:p-8 bg-red-50/50 dark:bg-gray-800/50">
                    <div class="max-w-xl">
                        @include('profile.partials.delete-user-form')
                    </div>
                </div>
            </div>

            <!-- Quick Stats -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-lg sm:rounded-lg p-6 transform hover:scale-105 transition duration-300">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <div class="rounded-full bg-green-100 dark:bg-green-900 p-3">
                                <svg class="w-6 h-6 text-green-600 dark:text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <p class="text-sm font-medium text-gray-600 dark:text-gray-400">Account Status</p>
                            <p class="text-lg font-semibold text-gray-900 dark:text-white">Active</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-lg sm:rounded-lg p-6 transform hover:scale-105 transition duration-300">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <div class="rounded-full bg-blue-100 dark:bg-blue-900 p-3">
                                <svg class="w-6 h-6 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <p class="text-sm font-medium text-gray-600 dark:text-gray-400">Member Since</p>
                            <p class="text-lg font-semibold text-gray-900 dark:text-white">{{ Auth::user()->created_at->format('M Y') }}</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-lg sm:rounded-lg p-6 transform hover:scale-105 transition duration-300">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <div class="rounded-full bg-purple-100 dark:bg-purple-900 p-3">
                                <svg class="w-6 h-6 text-purple-600 dark:text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <p class="text-sm font-medium text-gray-600 dark:text-gray-400">Last Updated</p>
                            <p class="text-lg font-semibold text-gray-900 dark:text-white">{{ Auth::user()->updated_at->diffForHumans() }}</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>