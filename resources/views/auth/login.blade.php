{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif



            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

@extends('layouts.sign')

<!-- Session Status -->
<div class="mb-4">
    @if (session('status'))
        <x-auth-session-status :status="session('status')" />
    @endif
</div>

<section class="sign-in-form section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto col-12">

                <h1 class="hero-title text-center mb-5">Sign In</h1>

                <div class="row">
                    <div class="col-lg-8 col-11 mx-auto">
                        <form method="POST" action="{{ route('login') }}" role="form">
                            @csrf

                            <div class="form-floating mb-4 p-0">
                                <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email" required>

                                <label for="email">Email</label>
                            </div>

                            <div class="form-floating p-0">
                                <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>

                                <label for="password">Password</label>
                            </div>

                            <button type="submit" class="btn custom-btn form-control mt-4 mb-3">
                                Masuk
                            </button>

                            <p class="text-center">Belum Mempunyai Akun? <a href="{{ route('register') }}">Daftar</a></p>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

