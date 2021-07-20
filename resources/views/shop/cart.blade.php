@extends('layouts.template')

@section('css')
    <style>
        .cho-container .mercadopago-button {
            background-color: #000;
            color: #fff;
            border: 1px solid #111;
            border-radius: 10;
            width: 100%;
            font-weight: bold;
            font-size: 16px;
        }

    </style>
@endsection
@php
// SDK de Mercado Pago
require base_path('/vendor/autoload.php');
// Agrega credenciales
MercadoPago\SDK::setAccessToken(config('services.mercadopago.token'));

// Crea un objeto de preferencia
$preference = new MercadoPago\Preference();

// Crea un ítem en la preferencia
foreach (Cart::content() as $product) {
    $item = new MercadoPago\Item();

    $item->title = $product->name;
    $item->quantity = $product->qty;
    $item->unit_price = $product->price;
    $products[] = $item;
}
$preference = new MercadoPago\Preference();

$preference->back_urls = [
    'success' => route('pay'),
    'failure' => 'http://www.tu-sitio/failure',
    'pending' => 'http://www.tu-sitio/pending',
];

/* $preference->payment_methods = [
    'excluded_payment_types' => [

        ['id' => 'ticket'],
        ['id' => 'atm'],
        ['id' => 'account_money'],
        ['id' => 'digital_wallet'],

        ]
]; */

$preference->auto_return = 'approved';

$preference->items = $products;
$preference->save();
@endphp
@section('content')
    <!-- ========================= SECTION CONTENT ========================= -->
    @if (Cart::count())
        <section class="section-content padding-y">
            <div class="container mb-3 mt-5 py-3">

                <div class="row">
                    <main class="col-md-8">
                        <div class="card">

                            <table class="table table-borderless table-shopping-cart">
                                <thead class="text-muted">
                                    <tr class="small text-uppercase">
                                        <th scope="col">Producto</th>
                                        <th scope="col" width="120">Cantidad</th>
                                        <th scope="col" width="120">Precio</th>
                                        <th scope="col" class="text-right" width="200"> </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach (Cart::content() as $product)
                                        {{-- {{ dd($product->options) }} --}}
                                        <tr>
                                            <td>
                                                <figure class="itemside">
                                                    <div class="aside"><img
                                                            src="{{ Storage::url($product->model->image->url) }}"
                                                            class="img-sm"></div>
                                                    <figcaption class="info">
                                                        <a href="#" class="title text-dark">{{ $product->name }}</a>
                                                        @if ($product->options->size != null || $product->options->color != null)
                                                            <p class="text-muted small">Size:
                                                                {{ $product->options->size }},
                                                                Color: {{ $product->options->color }}</p>
                                                        @endif
                                                    </figcaption>
                                                </figure>
                                            </td>
                                            <td>
                                                <form action="{{ route('cart.update', $product->rowId) }}">
                                                    @csrf
                                                    @method('PUT')
                                                    <input type="number" min="1" value="{{ $product->qty }}" name="qty"
                                                        class="form-control" onchange="this.form.submit()">
                                                </form>
                                            </td>
                                            <td>
                                                <div class="price-wrap">
                                                    <var class="price">${{ number_format($product->price, 2) }}</var>
                                                </div> <!-- price-wrap .// -->
                                            </td>
                                            <td class="text-right">
                                                <a href="{{ route('cart.remove', $product->rowId) }}"
                                                    class="btn btn-light">
                                                    Eliminar</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            @if (!session('address'))
                                <div class="card-body border-top p-4">
                                    {{-- Start Adress Shipping --}}
                                    <h2>Agregar direccion de envío</h2>
                                    <form action="{{ route('checkout.setAddress') }}" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="form-group col-3">
                                                <label for="street">Calle</label>
                                                <input type="text" class="form-control" name="street" placeholder="C. 473">
                                            </div>
                                            <div class="form-group col-3">
                                                <label for="crosses">Número</label>
                                                <input type="text" class="form-control" name="number" placeholder="#605">
                                            </div>
                                            <div class="form-group col-3">
                                                <label for="crosses">Cruzamientos</label>
                                                <input type="text" class="form-control" name="crosses"
                                                    placeholder="por 40 y 42">
                                            </div>
                                            <div class="form-group col-3">
                                                <label for="suburb">Colonia</label>
                                                <input type="text" class="form-control" name="suburb"
                                                    placeholder="Col. Los heroes">
                                            </div>
                                            <div class="form-group col-3">
                                                <label for="state">Estado</label>
                                                <input type="text" class="form-control" name="state" placeholder="Mérida">
                                            </div>
                                            <div class="form-group col-3">
                                                <label for="city">Ciudad</label>
                                                <input type="text" class="form-control" name="city" placeholder="Yucatán">
                                            </div>
                                            <div class="form-group col-3">
                                                <label for="postal_code">Código postal</label>
                                                <input type="text" class="form-control" name="postal_code"
                                                    placeholder="97000">
                                            </div>
                                            <div class="form-group col-12">
                                                <label for="reference">Referencias</label>
                                                <input type="text" class="form-control" name="reference"
                                                    placeholder="Casa de 2 pisos de color blanco">
                                            </div>
                                            <div class="form-group col-12">
                                                <button type="submit" class="btn btn-dark btn-block">Establecer direccion de
                                                    envío</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            @else
                                <div class="card my-3">
                                    <div class="card-body">
                                        <div class="card-header">
                                            <h3>Dirección de envío</h3>
                                        </div>
                                        <div class="m-3 row">
                                            <div class="col-6">
                                                <b>Calle:</b> {{ session('street') }}<br>
                                                <b>Numero:</b> {{ session('number') }}<br>
                                                <b>Cruzamientos:</b> {{ session('crosses') }}<br>
                                                <b>Colonia:</b> {{ session('suburb') }}<br>
                                            </div>
                                            <div class="col-6">
                                                <b>Estado:</b> {{ session('state') }}<br>
                                                <b>Ciudad:</b> {{ session('city') }}<br>
                                                <b>Código Postal:</b> {{ session('postal_code') }}<br>
                                                <b>Referencia:</b> {{ session('reference') }}<br>
                                            </div>
                                        </div>
                                        <form action="{{ route('checkout.setAddress') }}" method="POST">
                                            @csrf
                                            <div class="row">
                                                <div class="form-group col-12">
                                                    <button type="submit" class="btn btn-dark btn-block">Cambiar dirección
                                                        de
                                                        envío</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            @endif
                            <div class="card-body border-top">
                                {{-- <a href="#" class="btn btn-dark float-md-right"> Make Purchase <i
                                class="fa fa-chevron-right"></i> </a> --}}
                                <a href="{{ route('shop.home') }}" class="btn btn-light"> <i
                                        class="fa fa-chevron-left"></i> Continuar comprando </a>
                            </div>
                        </div> <!-- card.// -->

                        <div class="alert alert-success mt-3">
                            <p class="icontext"> <i class="fa fa-lock"></i> Renealonso.com mantiene tus datos seguros con
                                certificado SSL</p>
                        </div>

                    </main> <!-- col.// -->
                    <aside class="col-md-4">
                        {{-- @if (!session()->has('coupon'))
                            <div class="card mb-3">
                                <div class="card-body">
                                    <form action="{{ route('coupon.store') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label>Have coupon?</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="coupon_code"
                                                    placeholder="Coupon code">
                                                <span class="input-group-append">
                                                    <button class="btn btn-dark">Apply</button>
                                                </span>
                                            </div>
                                        </div>
                                    </form>

                                </div> <!-- card-body.// -->
                            </div> <!-- card .// -->
                        @endif --}}
                        <div class="card">
                            <div class="card-body">
                                <dl class="dlist-align">
                                    <dt>Total de compra:</dt>
                                    <dd class="text-right">${{ Cart::subtotal() }} MXN</dd>
                                </dl>
                                {{-- <dl class="dlist-align">
                                    @if (session()->has('coupon'))
                                        <dt class="d-flex">Discount: ({{ session()->get('coupon')['name'] }})
                                            <form action="{{ route('coupon.destroy') }}" method="post"
                                                style="display:inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-link btn-sm p-0 ml-1 ">Delete</button>
                                            </form>
                                        </dt>
                                        <dd class="text-right">
                                            -${{ number_format(session()->get('coupon')['discount'], 2)}} MXN
                                        </dd>
                                    @endif
                                </dl> --}}
                                <hr>
                                <dl class="dlist-align">
                                    <dt>Subtotal:</dt>
                                    <dd class="text-right h6"><strong>${{ Cart::subtotal() }} MXN</strong></dd>
                                </dl>
                                <hr>
                                <dl class="dlist-align">
                                    <dt>Total:</dt>
                                    <dd class="text-right h5"><strong>${{ Cart::total() }} MXN</strong></dd>
                                </dl>
                                <hr>
                            </div> <!-- card-body.// -->
                        </div> <!-- card .// -->
                        <div class="text-center mt-3">
                            <h4>Realizar PAgo</h4>
                        </div>
                        <div class="card">
                            @if (session('address'))
                                <div class="card-body cho-container"></div>
                            @else
                                <div class="card-body text-center">
                                    <a href="" class="btn btn-dark btn-block mercadopago-button disabled" disabled>Pagar
                                        orden</a>
                                    <small>Ingresa una dirección de envío para poder continuar</small>
                                </div>
                            @endif
                        </div>
                        {{-- <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h3 class="mb-0">
                                        <button class="btn btn-link btn-block text-left" type="button"
                                            data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            Pago con tarjeta
                                        </button>
                                    </h3>
                                </div>

                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-center mb-3">
                                            <img width="35%" src="{{ asset('images/openpay/openpay_color.png') }}" alt="">
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <i class="fab fa-cc-mastercard fa-2x text-dark"></i>
                                            <i class="fab fa-cc-visa fa-2x ml-2 text-secondary"></i>
                                        </div>
                                        <a class="btn btn-dark mercadopago-button mt-3"
                                            href="{{ route('checkout.index') }}">Pago con
                                            tarjeta</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h3 class="mb-0">
                                        <button class="btn btn-link btn-block text-left collapsed" type="button"
                                            data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                            Pago en efectivo
                                        </button>
                                    </h3>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-center mb-3">
                                            <img width="35%" src="{{ asset('images/openpay/paynet.png') }}" alt="">
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <i class="fas fa-money-bill fa-2x text-success"></i>
                                        </div>
                                        <a class="btn btn-dark mercadopago-button mt-3"
                                            href="{{ route('checkout.storeReference') }}">Pago en efectivo</a>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        {{-- <div class="card">
                            <div class="card-body">
                                <hr>
                                <form action="{{ route('checkout.chargeMercadoPago') }}" method="POST">
                                    @csrf
                                <script src="https://www.mercadopago.com.mx/integrations/v1/web-tokenize-checkout.js"
                                data-public-key="TEST-00d1db82-ccd9-4cbc-b92e-66ad0079742b"
                                data-preference-id={!! $preference->id !!}
                                data-button-label="Realizar Pago"
                                data-elements-color="#212529"
                                data-input-label="Direccion"
                                data-transaction-amount="{{ (int) str_replace(',', '', Cart::total()) }}">
                            </script>
                                    <script src="https://www.mercadopago.com.mx/integrations/v1/web-payment-checkout.js"
                                        data-preference-id="{!! $preference->id !!}">
                                    </script>
                                </form>
                            </div>
                        </div> --}}
                    </aside> <!-- col.// -->
                </div>
            </div> <!-- container .//  -->
        </section>

        <!-- ========================= SECTION  ========================= -->
        <section class="section-name border-top padding-y">

        </section>
        <!-- ========================= SECTION  END// ========================= -->
    @else
        <section class="section-content padding-y">
            <div class="container mb-3 mt-5 py-3">

                <div class="row">
                    <main class="col-md-12">
                        <div class="d-flex justify-content-center font-weight-bold">
                            El carrito se encuentra vacío
                        </div>
                        <div class="my-5 text-center">
                            <a class="btn btn-dark btn-lg" href="{{ route('shop.home') }}">Ir al inicio</a>
                        </div>
                    </main>
                </div>
            </div>
        </section>
    @endif
    <!-- ========================= SECTION CONTENT END// ========================= -->

@endsection

@section('js')
    <script src="https://sdk.mercadopago.com/js/v2"></script>
    <script>
        // Agrega credenciales de SDK
        const mp = new MercadoPago("{{ config('services.mercadopago.key') }}", {
            locale: 'es-MX'
        });

        // Inicializa el checkout
        mp.checkout({
            preference: {
                id: "{{ $preference->id }}"
            },
            render: {
                container: '.cho-container', // Indica dónde se mostrará el botón de pago
                label: 'Pagar órden', // Cambia el texto del botón de pago (opcional)
            }
        });
    </script>
@endsection
