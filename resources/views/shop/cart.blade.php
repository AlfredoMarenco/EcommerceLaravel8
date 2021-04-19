@extends('layouts.template')

@section('css')
    <style>
        .mercadopago-button {
            background-color: #000;
            color: #fff;
            border: 1px solid #111;
            border-radius: 10;
            width: 100%;
        }

    </style>
@endsection

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

                            <div class="card-body border-top">
                                {{-- <a href="#" class="btn btn-dark float-md-right"> Make Purchase <i
                                class="fa fa-chevron-right"></i> </a> --}}
                                <a href="{{ route('shop.home') }}" class="btn btn-light"> <i
                                        class="fa fa-chevron-left"></i> Continuar comprando </a>
                            </div>
                        </div> <!-- card.// -->

                        <div class="alert alert-success mt-3">
                            <p class="icontext"> <i class="fa fa-lock"></i> Renealonso.com mantiene tus datos seguros con certificado SSL</p>
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
                            <h4>Metodos de pago</h4>
                        </div>
                        <div class="accordion" id="accordionExample">
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
                        </div>
{{--                         <div class="card">
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
            <div class="container">
                <h6>Payment and refund policy</h6>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div><!-- container // -->
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
