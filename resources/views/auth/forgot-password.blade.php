@extends('layouts.bajce')
@section('title', 'Login')
@section('content')
    <!-- ============================ COMPONENT LOGIN   ================================= -->
    <div class="card mx-auto" style="max-width: 450px; margin-top:180px;">
        <div class="card-body mx-auto">
            <h4 class="card-title mb-4">Restablecimiento de contraseña</h4>
            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <div class="text-center">
                    <label for="email" value="{{ __('Email') }}" />
                    <input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus  placeholder="Correo electrónico"/>
                </div>

                <div class="text-center mt-3">
                    <button class="btn btn-primary" type="submit">
                        {{ __('Enviar link de restablecer contraseña') }}
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


