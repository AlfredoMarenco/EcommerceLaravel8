@extends('layouts.bajce')
@section('content')
    <!-- ============================ COMPONENT REGISTER   ================================= -->
    <div class="card mx-auto" style="max-width:520px; margin-top:180px;">
        <article class="card-body">
            <header class="mb-4">
                <h4 class="card-title">Registrarse</h4>
            </header>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-row">
                    <div class="col form-group">
                        <label>First name</label>
                        <input name="name" type="text" class="form-control" placeholder="" value="{{ old('name') }}">
                    </div>
                    <div class="col form-group">
                        <label>Last name</label>
                        <input name="last_name" type="text" class="form-control" placeholder=""
                            value="{{ old('last_name') }}">
                    </div>
                    <!-- form-group end.// -->
                </div>
                <div class="form-group">
                    <label>Phone</label>
                    <input name="phone" type="phone" class="form-control" placeholder="" value="{{ old('phone') }}">
                </div>
                <!-- form-row end.// -->
                <div class="form-group">
                    <label>Email</label>
                    <input name="email" type="email" class="form-control" placeholder="" value="{{ old('email') }}">
                    <small class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <!-- form-group end.// -->

                <!-- form-row.// -->
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Create password</label>
                        <input name="password" class="form-control" type="password">
                    </div> <!-- form-group end.// -->
                    <div class="form-group col-md-6">
                        <label>Repeat password</label>
                        <input name="password_confirmation" class="form-control" type="password">
                    </div>
                    <!-- form-group end.// -->
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block"> Register </button>
                </div>
                <!-- form-group// -->
                <div class="form-group">
                    <label class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" checked="">
                        <div class="custom-control-label text-dark"> I am agree with <a href="{{ route('login') }}">terms
                                and
                                contitions</a> </div>
                    </label>
                </div>
                <!-- form-group end.// -->
            </form>
        </article>
        <!-- card-body.// -->
    </div>
    <!-- card .// -->
    <p class="text-center mt-4">Have an account? <a href="">Log In</a></p>
    <br><br>
    <!-- ============================ COMPONENT REGISTER  END.// ================================= -->


@endsection
