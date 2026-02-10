<x-guest-layout>
    <div class="min-h-screen bg-gray-900 flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="w-full max-w-md">

            <!-- Header Card -->
            <div class="bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 rounded-t-2xl shadow-xl p-8 text-center">
                <div class="flex justify-center mb-4">
                    <div class="bg-white/20 backdrop-blur-sm rounded-full p-4 shadow-lg transform hover:scale-110 transition duration-300">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                </div>
                <h1 class="text-3xl font-bold text-white">Secure Area</h1>
                <p class="text-indigo-100 text-sm mt-2">Confirm your password to continue</p>
                <div class="mt-3 inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-white/20 text-white backdrop-blur-sm">
                    <span class="w-2 h-2 bg-yellow-400 rounded-full mr-2"></span>
                    Authentication Required
                </div>
            </div>

            <!-- Form Card -->
            <div class="bg-gray-800 rounded-b-2xl shadow-xl p-8 border border-gray-700">

                <!-- Info Message -->
                <div class="mb-5 text-gray-300 text-sm bg-gray-700/50 border border-gray-600 rounded-lg px-4 py-3 flex items-start">
                    <svg class="w-5 h-5 mr-2 flex-shrink-0 text-yellow-400 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                    </svg>
                    <span>{{ __('This is a secure area of the application. Please confirm your password before continuing.') }}</span>
                </div>

                <form method="POST" action="{{ route('password.confirm') }}" class="space-y-5">
                    @csrf

                    <!-- Password -->
                    <div>
                        <x-input-label for="password" :value="__('Password')" class="text-gray-300 text-sm font-medium mb-1 block" />
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                </svg>
                            </div>
                            <x-text-input id="password"
                                class="block w-full pl-10 pr-4 py-3 bg-gray-700 border border-gray-600 text-white rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent placeholder-gray-400 transition duration-200"
                                type="password" name="password"
                                placeholder="••••••••"
                                required autocomplete="current-password" />
                        </div>
                        <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-400 text-xs" />
                    </div>

                    <!-- Submit -->
                    <button type="submit"
                        class="w-full flex items-center justify-center px-6 py-3 bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 text-white font-semibold rounded-lg shadow-lg hover:from-indigo-600 hover:via-purple-600 hover:to-pink-600 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-800 transition duration-300 transform hover:scale-[1.02]">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        {{ __('Confirm') }}
                    </button>

                </form>
            </div>

            <!-- Footer -->
            <p class="text-center text-gray-600 text-xs mt-6">
                Protected by industry-standard encryption
            </p>

        </div>
    </div>
</x-guest-layout>