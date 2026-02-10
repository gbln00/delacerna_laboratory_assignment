<x-guest-layout>
    <div class="min-h-screen bg-gray-900 flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="w-full max-w-md">

            <!-- Header Card -->
            <div class="bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 rounded-t-2xl shadow-xl p-8 text-center">
                <div class="flex justify-center mb-4">
                    <div class="bg-white/20 backdrop-blur-sm rounded-full p-4 shadow-lg transform hover:scale-110 transition duration-300">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                        </svg>
                    </div>
                </div>
                <h1 class="text-3xl font-bold text-white">Welcome Back</h1>
                <p class="text-indigo-100 text-sm mt-2">Sign in to your account to continue</p>
                <div class="mt-3 inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-white/20 text-white backdrop-blur-sm">
                    <span class="w-2 h-2 bg-green-400 rounded-full mr-2"></span>
                    Secure Login
                </div>
            </div>

            <!-- Form Card -->
            <div class="bg-gray-800 rounded-b-2xl shadow-xl p-8 border border-gray-700">

                <!-- Session Status -->
                <x-auth-session-status class="mb-5 text-green-400 text-sm bg-green-900/30 border border-green-700 rounded-lg px-4 py-3 flex items-center" :status="session('status')">
                    <svg class="w-4 h-4 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </x-auth-session-status>

                <form method="POST" action="{{ route('login') }}" class="space-y-5">
                    @csrf

                    <!-- Email Address -->
                    <div>
                        <x-input-label for="email" :value="__('Email Address')" class="text-gray-300 text-sm font-medium mb-1 block" />
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <x-text-input id="email"
                                class="block w-full pl-10 pr-4 py-3 bg-gray-700 border border-gray-600 text-white rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent placeholder-gray-400 transition duration-200"
                                type="email" name="email" :value="old('email')"
                                placeholder="you@example.com"
                                required autofocus autocomplete="username" />
                        </div>
                        <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-400 text-xs" />
                    </div>

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

                    <!-- Remember Me & Forgot Password -->
                    <div class="flex items-center justify-between">
                        <label for="remember_me" class="inline-flex items-center cursor-pointer group">
                            <input id="remember_me" type="checkbox"
                                class="rounded bg-gray-700 border-gray-600 text-indigo-500 shadow-sm focus:ring-indigo-500 focus:ring-offset-gray-800"
                                name="remember">
                            <span class="ms-2 text-sm text-gray-400 group-hover:text-gray-300 transition duration-150">
                                {{ __('Remember me') }}
                            </span>
                        </label>

                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}"
                                class="text-sm text-indigo-400 hover:text-indigo-300 font-medium transition duration-150 hover:underline">
                                {{ __('Forgot password?') }}
                            </a>
                        @endif
                    </div>

                    <!-- Divider -->
                    <div class="relative">
                        <div class="absolute inset-0 flex items-center">
                            <div class="w-full border-t border-gray-700"></div>
                        </div>
                        <div class="relative flex justify-center text-xs">
                            <span class="px-3 bg-gray-800 text-gray-500">or continue with</span>
                        </div>
                    </div>

                    <!-- Submit -->
                    <button type="submit"
                        class="w-full flex items-center justify-center px-6 py-3 bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 text-white font-semibold rounded-lg shadow-lg hover:from-indigo-600 hover:via-purple-600 hover:to-pink-600 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-800 transition duration-300 transform hover:scale-[1.02]">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                        </svg>
                        {{ __('Sign In') }}
                    </button>

                    <!-- Register Link -->
                    <div class="text-center pt-1">
                        <p class="text-gray-400 text-sm">
                            Don't have an account?
                            <a href="{{ route('register') }}"
                                class="text-indigo-400 hover:text-indigo-300 font-medium transition duration-150 hover:underline">
                                Create one here
                            </a>
                        </p>
                    </div>

                </form>
            </div>

            <!-- Footer -->
            <p class="text-center text-gray-600 text-xs mt-6">
                Protected by industry-standard encryption
            </p>

        </div>
    </div>
</x-guest-layout>