@extends('layouts.bajce')
@section('title', 'Login')
@section('content')
    <!-- ============================ COMPONENT LOGIN   ================================= -->
    <div class="card mx-auto" style="max-width: 380px; margin-top:180px;">
        <div class="card-body">
            <h4 class="card-title mb-4">Iniciar sesion</h4>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <a href="{{ route('login.drive','facebook') }}" class="btn btn-facebook btn-block mb-2"> <i class="fab fa-facebook-f"></i> &nbsp Ingresar con
                    Facebook</a>
                <a href="{{ route('login.drive','google') }}" class="btn btn-google btn-block mb-4"> <i class="fab fa-google"></i> &nbsp Ingresar con
                    Google</a>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Correo">
                </div> <!-- form-group// -->
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Contraseña">
                </div> <!-- form-group// -->

                <div class="form-group">
                    <a href="{{ route('password.request') }}" class="float-right">Olvidaste tu contraseña?</a>
                    <label class="float-left custom-control custom-checkbox"> <input type="checkbox"
                            class="custom-control-input" checked="">
                        <div class="custom-control-label"> Recordarme </div>
                    </label>
                </div> <!-- form-group form-check .// -->
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block"> Ingresar </button>
                </div> <!-- form-group// -->
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
