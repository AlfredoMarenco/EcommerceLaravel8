{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <input id="remember_me" type="checkbox" class="form-checkbox" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900"
                        href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Login') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}

@extends('layouts.template')
@section('content')

    <!-- ============================ COMPONENT LOGIN   ================================= -->
    <div class="card mx-auto" style="max-width: 380px; margin-top:100px;">
        <div class="card-body">
            <h4 class="card-title mb-4">Sign in</h4>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <a href="{{ route('login.drive','facebook') }}" class="btn btn-facebook btn-block mb-2"> <i class="fab fa-facebook-f"></i> &nbsp Sign in with
                    Facebook</a>
                <a href="{{ route('login.drive','google') }}" class="btn btn-google btn-block mb-4"> <i class="fab fa-google"></i> &nbsp Sign in with
                    Google</a>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Username">
                </div> <!-- form-group// -->
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Password">
                </div> <!-- form-group// -->

                <div class="form-group">
                    <a href="{{ route('password.request') }}" class="float-right">Forgot password?</a>
                    <label class="float-left custom-control custom-checkbox"> <input type="checkbox"
                            class="custom-control-input" checked="">
                        <div class="custom-control-label"> Remember </div>
                    </label>
                </div> <!-- form-group form-check .// -->
                <div class="form-group">
                    <button type="submit" class="btn btn-dark btn-block"> Login </button>
                </div> <!-- form-group// -->
            </form>
        </div> <!-- card-body.// -->
    </div> <!-- card .// -->

    <p class="text-center mt-4">Don't have account? <a href="{{ route('register') }}">Sign up</a></p>
    <br><br>
    <!-- ============================ COMPONENT LOGIN  END.// ================================= -->

@endsection
