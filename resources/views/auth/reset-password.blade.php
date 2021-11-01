@extends('layouts.bajce')
@section('title', 'Login')
@section('content')
    <!-- ============================ COMPONENT LOGIN   ================================= -->
    <div class="card mx-auto" style="max-width: 450px; margin-top:180px;">
        <div class="card-body mx-auto">
            <h4 class="card-title mb-4">Restablecimiento de contraseña</h4>
            <form method="POST" action="{{ route('password.update') }}">
                @csrf

                <input type="hidden" name="token" value="{{ $token }}">
                {{-- <input type="hidden" name="token" value="{{ $request->route('token') }}"> --}}

                <div class="block">
                    <x-jet-label for="email" value="{{ __('Email') }}" />
                    <x-jet-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus />
                    {{-- <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus /> --}}
                </div>

                <div class="mt-4">
                    <x-jet-label for="password" value="{{ __('Password') }}" />
                    <x-jet-input id="password" class="form-control" type="password" name="password" required autocomplete="new-password" />
                </div>

                <div class="mt-4">
                    <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                    <x-jet-input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
                </div>

                <div class="text-center mt-4">
                    <button class="btn btn-primary">
                        {{ __('Reset Password') }}
                    </button>
                </div>
            </form>
        </div> <!-- card-body.// -->
    </div> <!-- card .// -->

    <p class="text-center mt-4">No tienes cuenta? <a href="{{ route('register') }}">Registrarse</a></p>
    <br><br>
    <!-- ============================ COMPONENT LOGIN  END.// ================================= -->
@endsection

@section('js')
    @include('sweetalert::alert')
@endsection
