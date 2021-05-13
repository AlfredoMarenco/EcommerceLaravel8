@extends('layouts.bajce')

@section('content')

    <!-- ========================= SECTION CONTENT ========================= -->
    <section id="section-content-cart" class="section-content padding-y">
        <div class="container" style="max-width: 720px;">
            <div class="card mb-4 ">
                <div class="card-body">
                    <h4 class="card-title mb-3">Información de envío</h4>
                    <!--
              <div class="form-row">
                    <div class="form-group col-sm-6">
                        <label class="js-check box active">
                            <input type="radio" name="dostavka" value="option1" checked>
                            <h6 class="title">Standart delivery</h6>
                            <p class="text-muted">Free by airline within 20 days</p>
                        </label>
                    </div>
                    <div class="form-group col-sm-6">
                        <label class="js-check box">
                            <input type="radio" name="dostavka" value="option1">
                            <h6 class="title">Fast delivery</h6>
                            <p class="text-muted">Extra 20$ will be charged </p>
                        </label>
                    </div>
                </div> -->
                    <div class="form-row">
                        <div class="col form-group">
                            <label>Nombres</label>
                            <input type="text" class="form-control" placeholder="">
                        </div> <!-- form-group end.// -->
                        <div class="col form-group">
                            <label>Apellidos</label>
                            <input type="text" class="form-control" placeholder="">
                        </div> <!-- form-group end.// -->
                    </div> <!-- form-row end.// -->

                    <div class="form-row">
                        <div class="col form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" placeholder="">
                        </div> <!-- form-group end.// -->
                        <div class="col form-group">
                            <label>Teléfono</label>
                            <input type="text" class="form-control" placeholder="">
                        </div> <!-- form-group end.// -->
                    </div> <!-- form-row end.// -->

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Estado</label>
                            <select id="inputState" class="form-control">
                                <option> Choose...</option>
                                <option>Uzbekistan</option>
                                <option>Russia</option>
                                <option selected="">United States</option>
                                <option>India</option>
                                <option>Afganistan</option>
                            </select>
                        </div> <!-- form-group end.// -->
                        <div class="form-group col-md-6">
                            <label>Ciudad</label>
                            <input type="text" class="form-control">
                        </div> <!-- form-group end.// -->
                    </div> <!-- form-row.// -->
                    <div class="form-group">
                        <label>Dirección</label>
                        <textarea class="form-control" rows="2"></textarea>
                    </div> <!-- form-group// -->

                </div> <!-- card-body.// -->
            </div> <!-- card .// -->


            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="card-title mb-4">Método de pago</h4>
                    <form role="form">
                        <div class="form-group">
                            <label for="username">Nombre del titular</label>
                            <input type="text" class="form-control" name="username" placeholder="Ex. John Smith"
                                required="">
                        </div> <!-- form-group.// -->
                        <div class="form-group">
                            <label for="cardNumber">Número de tarjeta</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="cardNumber" placeholder="">
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="fab fa-cc-visa"></i> &nbsp; <i class="fab fa-cc-amex"></i> &nbsp;
                                        <i class="fab fa-cc-mastercard"></i>
                                    </span>
                                </div>
                            </div> <!-- input-group.// -->
                        </div> <!-- form-group.// -->

                        <div class="row">
                            <div class="col-md flex-grow-0">
                                <div class="form-group">
                                    <label class="hidden-xs">Fecha de expiración</label>
                                    <div class="form-inline" style="min-width: 220px">
                                        <select class="form-control" style="width:100px">
                                            <option>MM</option>
                                            <option>01 - Enero</option>
                                            <option>02 - Febrero</option>
                                            <option>03 - Marzo</option>
                                        </select>
                                        <span style="width:20px; text-align: center"> / </span>
                                        <select class="form-control" style="width:100px">
                                            <option>AA</option>
                                            <option>2018</option>
                                            <option>2019</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label data-toggle="tooltip" title="3 digits code on back side of the card">CVV <i
                                            class="fa fa-question-circle"></i></label>
                                    <input class="form-control" required="" type="text">
                                </div> <!-- form-group.// -->
                            </div>
                        </div> <!-- row.// -->
                        <button class="subscribe btn btn-primary btn-block" type="button"> Confirmar </button>
                    </form>
                </div> <!-- card-body.// -->
            </div> <!-- card .// -->
            <br>
            <br>
        </div> <!-- container .//  -->
    </section>
    <!-- ========================= SECTION CONTENT END// ========================= -->
@endsection
