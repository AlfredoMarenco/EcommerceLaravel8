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
                @include('bajce.user.nav-profile')
                <main class="col-md-9">

                    <div class="card">
                        <div class="card-body">
                            <form class="row">
                                <div class="col-md-9">
                                    <div class="form-row">
                                        <div class="col form-group">
                                            <label>Nombre</label>
                                            <input type="text" class="form-control" value="Alvar Buenfil">
                                        </div> <!-- form-group end.// -->
                                        <div class="col form-group">
                                            <label>Email</label>
                                            <input type="email" class="form-control" value="ab@agenciavandu.com">
                                        </div> <!-- form-group end.// -->
                                    </div> <!-- form-row.// -->

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Estado</label>
                                            <select id="inputState" class="form-control">
                                                <option> Escoge uno...</option>
                                                <option>Veracruz</option>
                                                <option>Campeche</option>
                                                <option selected="">Yucatán</option>
                                                <option>Quintana Roo</option>
                                                <option>Chiapas</option>
                                            </select>
                                        </div> <!-- form-group end.// -->
                                        <div class="form-group col-md-6">
                                            <label>Ciudad</label>
                                            <input type="text" class="form-control">
                                        </div> <!-- form-group end.// -->
                                    </div> <!-- form-row.// -->

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Código Postal</label>
                                            <input type="text" class="form-control" value="123009">
                                        </div> <!-- form-group end.// -->
                                        <div class="form-group col-md-6">
                                            <label>Teléfono</label>
                                            <input type="text" class="form-control" value="+123456789">
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
