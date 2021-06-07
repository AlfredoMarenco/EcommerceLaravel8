@extends('layouts.bajce')

@section('content')

    <!-- ========================= SECTION PAGETOP ========================= -->
    <section class="section-pagetop bg-gray">
        <div class="container">
            <h2 class="title-page">My account</h2>
        </div> <!-- container //  -->
    </section>
    <!-- ========================= SECTION PAGETOP END// ========================= -->


    <!-- ========================= SECTION CONTENT ========================= -->
    <section class="section-content padding-y">
        <div class="container">

            <div class="row">
                <aside class="col-md-3">
                    <nav class="list-group">
                        <a class="list-group-item" href="{{ route('user.profile') }}"> Mi cuenta </a>
                        {{-- <a class="list-group-item" href="mi-direccion.html"> Mi dirección </a> --}}
                        <a class="list-group-item" href="{{ route('user.orders') }}"> Mis Órdenes </a>
                        <a class="list-group-item active" href="{{ route('user.settings') }}"> Configurar cuenta </a>
                        {{-- <a class="list-group-item" href="#"> Ayuda </a> --}}
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a class="list-group-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                                                                                this.closest('form').submit();">
                                Cerrar
                                sesión
                            </a>
                        </form>
                    </nav>
                </aside> <!-- col.// -->
                <main class="col-md-9">

                    <div class="card">
                        <div class="card-body">

                            <form action="{{ route('user.update.profile') }}" method="POST" class="row">
                                @csrf
                                <div class="col-md-9">
                                    <div class="form-row">
                                        <div class="col form-group">
                                            <label>Nombre</label>
                                            <input type="text" name="name" class="form-control" value="{{ $user->name }}">
                                        </div> <!-- form-group end.// -->
                                        <div class="col form-group">
                                            <label>Apellido</label>
                                            <input type="text" name="last_name" class="form-control"
                                                value="{{ $user->last_name }}">
                                        </div> <!-- form-group end.// -->
                                    </div> <!-- form-row.// -->

                                    <div class="form-row">
                                        <div class="col form-group">
                                            <label>Email</label>
                                            <input type="email" name="email" class="form-control"
                                                value="{{ $user->email }}">
                                        </div> <!-- form-group end.// -->
                                        <div class="form-group col-md-6">
                                            <label>Teléfono</label>
                                            <input type="text" name="phone" class="form-control"
                                                value="{{ $user->phone }}">
                                        </div> <!-- form-group end.// -->
                                    </div> <!-- form-row.// -->

                                    <button type="submit" class="btn btn-primary float-right">Guardar</button>
                            </form>

                            <form method="POST" action="{{ route('user.update.password') }}">
                                @csrf
                                <div class="col-md-12 mt-5">
                                    <div class="form-row">
                                        <div class="col form-group col-12">
                                            <label>Current Password</label>
                                            <input type="password" name="current_password" class="form-control">
                                        </div> <!-- form-group end.// -->
                                        <div class="form-group col-md-6">
                                            <label>New Password</label>
                                            <input type="password" name="password" class="form-control">
                                        </div> <!-- form-group end.// -->
                                        <div class="form-group col-md-6">
                                            <label>Confirm Password</label>
                                            <input type="password" name="password_confirmation" class="form-control">
                                        </div> <!-- form-group end.// -->
                                    </div> <!-- form-row.// -->
                                    <button class="btn btn-dark btn-block">Cambiar contraseña</button>
                                </div>
                            </form>

                        </div> <!-- col.// -->

                    </div> <!-- card-body.// -->
            </div> <!-- card .// -->



            </main> <!-- col.// -->
        </div>

        </div> <!-- container .//  -->
    </section>
    <!-- ========================= SECTION CONTENT END// ========================= -->

@endsection

@section('js')
    @include('sweetalert::alert')
@endsection
