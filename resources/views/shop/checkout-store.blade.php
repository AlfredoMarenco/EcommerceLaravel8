@extends('layouts.template')

@section('css')
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://openpay.s3.amazonaws.com/openpay.v1.min.js"></script>
    <script type='text/javascript' src="https://openpay.s3.amazonaws.com/openpay-data.v1.min.js"></script>
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
                        <div class="card p-5">
                            <h4>Dirección de envio</h4>
                            <form action="{{ route('checkout.storeOpenpay') }}" method="POST" id="payment-form">
                                @csrf
                                {{-- Start Adress Shipping --}}
                                <div class="row">
                                    <div class="form-group col-3">
                                        <label for="street">Calle</label>
                                        <input type="text" class="form-control" name="street" placeholder="C. 473">
                                    </div>
                                    <div class="form-group col-3">
                                        <label for="crosses">Numero</label>
                                        <input type="text" class="form-control" name="number" placeholder="#605">
                                    </div>
                                    <div class="form-group col-3">
                                        <label for="crosses">Cruzamientos</label>
                                        <input type="text" class="form-control" name="crosses" placeholder="por 40 y 42">
                                    </div>
                                    <div class="form-group col-3">
                                        <label for="suburb">Colonia</label>
                                        <input type="text" class="form-control" name="suburb" placeholder="Col. Los heroes">
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
                                        <label for="postal_code">Codigo postal</label>
                                        <input type="text" class="form-control" name="postal_code" placeholder="97000">
                                    </div>
                                    <div class="form-group col-12">
                                        <label for="reference">Referencias</label>
                                        <input type="text" class="form-control" name="reference" placeholder="Casa de 2 pisos de color blanco">
                                    </div>
                                </div>
                                {{-- End Adress Shipping --}}
                                <p class="alert alert-success"> <i class="fa fa-lock"></i> Some secureity information Lorem
                                    ipsum
                                    dolor
                                    sit
                                    amet, consectetur adipisicing elit, sed do eiusmod</p>

                                <div class="card-body border-top">
                                    {{-- <a href="#" class="btn btn-dark float-md-right"> Make Purchase <i
                                class="fa fa-chevron-right"></i> </a> --}}
                                    <a href="{{ route('shop.home') }}" class="btn btn-light"> <i
                                            class="fa fa-chevron-left"></i> Continue shopping </a>
                                </div>
                        </div> <!-- card.// -->



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
                                <div class="alert alert-success mt-3">
                                    <p class="icontext"><i class="icon text-success fa fa-truck"></i> Free Delivery within
                                        1-2 weeks
                                    </p>
                                </div>
                                <dl class="dlist-align">
                                    <dt>Total price:</dt>
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
                                <p class="text-center mb-3">
                                    <img src="{{ asset('images/misc/payments.png') }}" height="26">
                                </p>

                            </div> <!-- card-body.// -->
                        </div> <!-- card .// -->
                        <div class="card">
                            <div class="card-body">
                                <button class="subscribe btn btn-dark mercadopago-button btn-block"> Confirm
                                </button>
                            </div>
                        </div>
                        </form>
                        <div class="container">
                            <h6>Payment and refund policy</h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div><!-- container // -->
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
                            El carrito se encuentra vacio
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
