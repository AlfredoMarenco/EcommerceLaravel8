@extends('layouts.bajce')
@section('content')
    <!-- ============================ COMPONENT LOGIN   ================================= -->
    <div class="card mx-auto" style="max-width: 380px; margin-top:180px;">
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
                    <button type="submit" class="btn btn-primary btn-block"> Login </button>
                </div> <!-- form-group// -->
            </form>
        </div> <!-- card-body.// -->
    </div> <!-- card .// -->

    <p class="text-center mt-4">Don't have account? <a href="{{ route('register') }}">Sign up</a></p>
    <br><br>
    <!-- ============================ COMPONENT LOGIN  END.// ================================= -->

@endsection

@section('js')
    @include('sweetalert::alert')
@endsection
