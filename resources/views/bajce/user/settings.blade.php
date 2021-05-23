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
                            <a class="list-group-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                    this.closest('form').submit();"> Cerrar sesión </a>
                        </form>
                    </nav>
                </aside> <!-- col.// -->
                <main class="col-md-9">

                    <div class="card">
                        <div class="card-body">
                            <form class="row">
                                <div class="col-md-9">
                                    <div class="form-row">
                                        <div class="col form-group">
                                            <label>Nombre</label>
                                            <input type="text" class="form-control" value="{{ $user->name }}">
                                        </div> <!-- form-group end.// -->
                                        <div class="col form-group">
                                            <label>Apellido</label>
                                            <input type="text" class="form-control" value="{{ $user->last_name }}">
                                        </div> <!-- form-group end.// -->
                                    </div> <!-- form-row.// -->

                                    <div class="form-row">
                                        <div class="col form-group">
                                            <label>Email</label>
                                            <input type="email" class="form-control" value="{{ $user->email }}">
                                        </div> <!-- form-group end.// -->
                                        <div class="form-group col-md-6">
                                            <label>Teléfono</label>
                                            <input type="text" class="form-control" value="{{ $user->phone }}">
                                        </div> <!-- form-group end.// -->
                                    </div> <!-- form-row.// -->

                                    <button class="btn btn-primary">Guardar</button>
                                    <button class="btn btn-light">Cambiar contraseña</button>

                                    <br><br><br><br><br><br>

                                </div> <!-- col.// -->
                                <div class="col-md">
                                    <img src="images/avatars/avatar2.jpg" class="img-md rounded-circle border">
                                </div> <!-- col.// -->
                            </form>
                        </div> <!-- card-body.// -->
                    </div> <!-- card .// -->



                </main> <!-- col.// -->
            </div>

        </div> <!-- container .//  -->
    </section>
    <!-- ========================= SECTION CONTENT END// ========================= -->

@endsection
