@extends('layouts.bajce')
@section('title', 'Tienda')
@section('css')
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://openpay.s3.amazonaws.com/openpay.v1.min.js"></script>
    <script type='text/javascript' src="https://openpay.s3.amazonaws.com/openpay-data.v1.min.js"></script>
@endsection


@section('content')
    <!-- ========================= SECTION CONTENT ========================= -->
    @if (Cart::count())
        <section class="section-content padding-y">
            <div class="container mb-3 mt-5 py-3">
                <div class="row">
                    <main class="col-md-8 mx-auto">
                        <div class="card p-5">
                            <h4>Dirección de envio</h4>
                            <form action="{{ route('checkout.storeOpenpay') }}" method="POST" role="form" id="payment-form">
                                @csrf
                                {{-- Start Adress Shipping --}}
                                <div class="row mb-3">
                                    <div class="form-group col-4">
                                        <label for="street">Calle</label>
                                        <input type="text" class="form-control" name="street" placeholder="C. 473">
                                    </div>
                                    <div class="form-group col-4">
                                        <label for="crosses">Numero</label>
                                        <input type="text" class="form-control" name="number" placeholder="#605">
                                    </div>
                                    <div class="form-group col-4">
                                        <label for="crosses">Cruzamientos</label>
                                        <input type="text" class="form-control" name="crosses" placeholder="por 40 y 42">
                                    </div>
                                    <div class="form-group col-4">
                                        <label for="suburb">Colonia</label>
                                        <input type="text" class="form-control" name="suburb" placeholder="Col. Los heroes">
                                    </div>
                                    <div class="form-group col-4">
                                        <label for="state">Estado</label>
                                        <input type="text" class="form-control" name="state" placeholder="Mérida">
                                    </div>
                                    <div class="form-group col-4">
                                        <label for="city">Ciudad</label>
                                        <input type="text" class="form-control" name="city" placeholder="Yucatán">
                                    </div>
                                    <div class="form-group col-8">
                                        <label for="postal_code">Codigo postal</label>
                                        <input type="text" class="form-control" name="postal_code" placeholder="97000">
                                    </div>
                                    <div class="form-group col-12">
                                        <label for="reference">Referencias</label>
                                        <input type="text" class="form-control" name="reference"
                                            placeholder="Casa de 2 pisos de color blanco">
                                    </div>
                                </div>
                                {{-- End Adress Shipping --}}
                                <button class="btn btn-primary btn-block"> Crear orden de pago
                                </button>
                            </form>
                        </div> <!-- card.// -->
                    </main> <!-- col.// -->
                </div>
            </div> <!-- container .//  -->
        </section>
    @else
        <section class="section-content padding-y">
            <div class="container mb-3 mt-5 py-3">

                <div class="row">
                    <main class="col-md-12">
                        <div class="d-flex justify-content-center font-weight-bold">
                            El carrito se encuentra vacio
                        </div>
                        <div class="my-5 text-center">
                            <a class="btn btn-dark btn-lg" href="">Ir al inicio</a>
                        </div>
                    </main>
                </div>
            </div>
        </section>
    @endif
    <!-- ========================= SECTION CONTENT END// ========================= -->
@endsection
