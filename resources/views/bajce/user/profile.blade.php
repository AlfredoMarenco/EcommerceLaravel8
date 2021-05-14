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
                        <a class="list-group-item active" href="perfil.html"> Mi cuenta </a>
                        <a class="list-group-item" href="mi-direccion.html"> Mi dirección </a>
                        <a class="list-group-item" href="mis-ordenes.html"> Mis Órdenes </a>
                        <a class="list-group-item" href="configuracion.html"> Configurar cuenta </a>
                        <a class="list-group-item" href="#"> Ayuda </a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a class="list-group-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                        this.closest('form').submit();"> Cerrar sesión </a>
                        </form>
                    </nav>
                </aside> <!-- col.// -->
                <main class="col-md-9">

                    <article class="card mb-3">
                        <div class="card-body">

                            <figure class="icontext">
                                <div class="icon">
                                    <img class="rounded-circle img-sm border" src="images/avatars/avatar2.jpg">
                                </div>
                                <div class="text">
                                    <strong> Alvar Buenfil Vandu </strong> <br>
                                    <p class="mb-2"> ab@agenciavandu.com </p>
                                    <a href="#" class="btn btn-light btn-sm">Edit</a>
                                </div>
                            </figure>
                            <hr>
                            <p>
                                <i class="fa fa-map-marker text-muted"></i> &nbsp; My address:
                                <br>
                                Mérida, Yucatán.

                            </p>

                        </div> <!-- card-body .// -->
                    </article> <!-- card.// -->

                    <article class="card  mb-3">
                        <div class="card-body">
                            <h5 class="card-title mb-4">Órdenes recientes </h5>

                            <div class="row">
                                <div class="col-md-6">
                                    <figure class="itemside  mb-3">
                                        <div class="aside"><img src="images/items/bridas.png" class="border img-sm"></div>
                                        <figcaption class="info">
                                            <time class="text-muted"><i class="fa fa-calendar-alt"></i> 12.09.2019</time>
                                            <p>Bridas </p>
                                            <span class="text-success">Orden confirmada </span>
                                        </figcaption>
                                    </figure>
                                </div> <!-- col.// -->
                                <div class="col-md-6">
                                    <figure class="itemside  mb-3">
                                        <div class="aside"><img src="images/items/bisagras.png" class="border img-sm"></div>
                                        <figcaption class="info">
                                            <time class="text-muted"><i class="fa fa-calendar-alt"></i> 12.09.2019</time>
                                            <p>Bisagras</p>
                                            <span class="text-success">Enviada</span>
                                        </figcaption>
                                    </figure>
                                </div> <!-- col.// -->

                            </div> <!-- row.// -->

                            <a href="#" class="btn btn-outline-primary btn-block"> Ver todas mis órdenes </a>
                        </div> <!-- card-body .// -->
                    </article> <!-- card.// -->

                </main> <!-- col.// -->
            </div>

        </div> <!-- container .//  -->
    </section>
    <!-- ========================= SECTION CONTENT END// ========================= -->

@endsection
