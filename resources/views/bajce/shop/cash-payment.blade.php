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
            <div class="container mb-3 mt-5">
                <div class="row">
                    <main class="col-md-8 mx-auto">
                        <div class="card p-5">
                            <h4>Dirección de envio</h4>
                            <form action="{{ route('checkout.storeOpenpay') }}" method="POST" role="form"
                                id="payment-form">
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
                                        <input type="text" class="form-control" name="state" placeholder="Yucatán">
                                    </div>
                                    <div class="form-group col-4">
                                        <label for="city">Ciudad</label>
                                        <input type="text" class="form-control" name="city" placeholder="Mérida">
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
                    <aside class="col-md-3">
                        @if (Cart::discount() <= 0 && Cart::instance('default')->count() > 0)
                            <div class="card mb-3">
                                <div class="card-body">
                                    <form action="{{ route('cart.applyCoupon') }}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <label>¿Tienes un cupón?</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="coupon"
                                                    placeholder="Código de cupón">
                                                <span class="input-group-append">
                                                    <button type="submit" class="btn btn-primary">Aplicar</button>
                                                </span>
                                            </div>
                                        </div>
                                    </form>
                                </div> <!-- card-body.// -->
                            </div> <!-- card .// -->
                        @endif
                        <div class="card">
                            <div class="card-body">
                                @if (Cart::instance('default')->count() > 0)
                                    <dl class="dlist-align">
                                        <h6>Total a pagar en linea</h6>
                                    </dl>
                                    <dl class="dlist-align">
                                        <dt>Precio total:</dt>
                                        @if (Cart::discount() < 0)
                                            <dd class="text-right">${{ Cart::instance('default')->subtotal() }} MXN</dd>
                                        @else
                                            @php
                                                $subtotal = str_replace(',', '', Cart::instance('default')->subtotal());
                                                $discount = str_replace(',', '', Cart::discount());
                                                $subtotal = $subtotal + $discount;
                                            @endphp
                                            <dd class="text-right">${{ number_format($subtotal, 2) }} MXN</dd>
                                        @endif
                                    </dl>
                                    <dl class="dlist-align">
                                        <dt>Descuento:</dt>
                                        @if (Cart::discount() > 0)
                                            <dd class="text-right">
                                                $-{{ Cart::discount(2, '.', ',') }} MXN
                                                <small><a href="{{ route('cart.deleteCoupon') }}">Eliminar</a></small>
                                            </dd>
                                        @else
                                            <dd class="text-right">${{ Cart::discount(2, '.', ',') }} MXN</dd>
                                        @endif
                                    </dl>
                                    <dl class="dlist-align">
                                        <dt>Total:</dt>
                                        <dd class="text-right  h5"><strong>${{ Cart::instance('default')->total() }}
                                                MXN</strong></dd>
                                    </dl>
                                    <hr>
                                @endif
                                @if (Cart::instance('wishlist')->count() > 0)
                                    <dl class="dlist-align">
                                        <h6>Cotizacion de productos del catálogo</h6>
                                    </dl>
                                    <dl class="dlist-align">
                                        <dt>Precio total:</dt>
                                        <dd class="text-right">${{ Cart::instance('wishlist')->subtotal() }} MXN</dd>
                                    </dl>
                                    {{-- <dl class="dlist-align">
                                <dt>Descuento:</dt>
                                <dd class="text-right">MXN 120</dd>
                            </dl> --}}
                                    <dl class="dlist-align">
                                        <dt>Total:</dt>
                                        <dd class="text-right  h5"><strong>${{ Cart::instance('wishlist')->total() }}
                                                MXN</strong></dd>
                                    </dl>
                                    <hr>
                                @endif
                            </div> <!-- card-body.// -->
                        </div> <!-- card .// -->
                    </aside> <!-- col.// -->
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
