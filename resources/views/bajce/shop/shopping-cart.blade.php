@extends('layouts.bajce')

@section('content')

    <!-- ========================= SECTION CONTENT ========================= -->
    <section id="section-content-cart" class="section-content padding-y">
        <div class="container">

            <div class="row">
                @if (Cart::instance('wishlist')->count() + Cart::instance('default')->count() > 0)
                    <main class="col-md-9">
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
                                    @foreach (Cart::instance('default')->content() as $product)
                                        <tr>
                                            <td>
                                                <figure class="itemside">
                                                    <div class="aside">{{-- <img
                                                            src="{{ Storage::url($product->model->image->url) }}"
                                                            class="img-sm"> --}}
                                                            <img @if ($product->model->image) src="{{ Storage::url($product->model->image->url) }}" @else src="{{ asset('images/banners/bajce-enviar.jpg') }}" @endif class="img-sm"></div>
                                                    <figcaption class="info">
                                                        <a href="#" class="title text-dark">{{ $product->name }}</a>
                                                        <p class="text-muted small">SKU: {{ $product->model->SKU }} <br>
                                                            Garantía: 2 años</p>
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
                                                    <a href="{{ route('cart.remove', $product->rowId) }}"><small
                                                            class="text-muted">Eliminar </small></a>
                                                </div> <!-- price-wrap .// -->
                                            </td>
                                            <td class="text-right">
                                                <a href="{{ route('shop.product', $product->model->id) }}"
                                                    class="btn btn-block btn-light">Detalles</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    @if (Cart::instance('wishlist')->count() > 0)
                                        <tr>
                                            <td class="text-center">
                                                <h6 class="text-warning">Productos de la lista (no se pueden comprar en
                                                    linea)</h6>
                                            </td>
                                        </tr>
                                    @endif
                                    @foreach (Cart::instance('wishlist')->content() as $product)
                                        <tr>
                                            <td>
                                                <figure class="itemside">
                                                    <div class="aside"><img
                                                            src="{{ Storage::url($product->model->image->url) }}"
                                                            class="img-sm"></div>
                                                    <figcaption class="info">
                                                        <a href="#" class="title text-dark">{{ $product->name }}</a>
                                                        <p class="text-muted small">SKU: {{ $product->model->SKU }} <br>
                                                            Garantía: 2 años</p>
                                                    </figcaption>
                                                </figure>
                                            </td>
                                            <td>
                                                <form action="{{ route('wishlist.update', $product->rowId) }}">
                                                    @csrf
                                                    @method('PUT')
                                                    <input type="number" min="1" value="{{ $product->qty }}" name="qty"
                                                        class="form-control" onchange="this.form.submit()">
                                                </form>
                                            </td>
                                            <td>
                                                <div class="price-wrap">
                                                    <var class="price">${{ number_format($product->price, 2) }}</var>
                                                    <a href="{{ route('wishlist.remove', $product->rowId) }}"><small
                                                            class="text-muted">Eliminar </small></a>
                                                </div> <!-- price-wrap .// -->
                                            </td>
                                            <td class="text-right">
                                                <a href="{{ route('shop.product', $product->model->id) }}"
                                                    class="btn btn-block btn-light">Detalles</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            <div class="card-body border-top">
                                @if (Cart::instance('default')->count() > 0)
                                    <a href="{{ route('checkout.index') }}" class="btn btn-primary float-md-right mx-1">
                                        Pagar con tarjeta
                                        <i class="far fa-credit-card"></i> </a>
                                    <a href="{{ route('checkout.cash') }}" class="btn btn-primary float-md-right mx-1">
                                        Pagar en efectivo
                                        <i class="far fa-money-bill-alt"></i> </a>
                                @endif
                                <a href="/tienda" class="btn btn-light"> <i class="fa fa-chevron-left"></i> Seguir comprando
                                </a>
                            </div>
                        </div> <!-- card.// -->

                    </main> <!-- col.// -->
                    <aside class="col-md-3">
                        @if (Cart::discount() <= 0)
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
                                <p class="text-center mb-3">
                                    <img src="images/misc/payments.png" height="26">
                                </p>
                            </div> <!-- card-body.// -->
                        </div> <!-- card .// -->
                    </aside> <!-- col.// -->
                @else
                    <h3 class="mx-auto mt-4">No tienes ningun producto agregado al carrito y/o lista</h3>
                @endif
            </div>
        </div> <!-- container .//  -->
    </section>
    <!-- ========================= SECTION CONTENT END// ========================= -->

    <!-- ========================= SECTION  ========================= -->
    <section id="productos-sugeridos-2" class="section-name border-top padding-y">
        <div class="container">
            <h6>Política de privacidad</h6>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

        </div><!-- container // -->
    </section>
    <!-- ========================= SECTION  END// ========================= -->


    <section id="productos-sugeridos-2">
        <div class="container">
            <h5 class="title-description mb-5" style="text-align: center;">Te podría interesar </h5>
            <div class="row">
                @foreach ($products as $product)
                    <div class="col-md-3">
                        <figure class="card card-product-grid">
                            <div class="img-wrap">
                                <a href="{{ route('shop.product', $product) }}">
                                    <img @if ($product->image) src="{{ Storage::url($product->image->url) }}" @else src="{{ asset('images/banners/bajce-enviar.jpg') }}" @endif>
                                </a>
                            </div> <!-- img-wrap.// -->
                            <figcaption class="info-wrap">
                                <a href="/producto" class="title mb-2">{{ $product->name }}</a>
                                <p>{!! $product->description !!}</p>
                                <div class="price-wrap">
                                    <span class="price">{{ $product->presentPrice() }}</span>
                                    <small class="text-muted">/ pza</small>

                                    <p class="mb-2"> <small>SKU:</small> {{ $product->SKU }} </p>
                                </div> <!-- price-wrap.// -->

                                <div class="rating-wrap my-3">
                                    <ul class="rating-stars">
                                        <li style="width:{{ ($product->rating * 100) / 5 }}%" class="stars-active">
                                            <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </li>
                                    </ul>
                                    <small class="label-rating text-muted">{{ $product->reviews_count }}
                                        Opiniones</small>
                                </div> <!-- rating-wrap.// -->
                                <hr>
                                <form action="{{ route('cart.addItem', $product) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-block btn-primary"><i class="fas fa-cart-plus"></i>
                                        Añadir al carrito </button>
                                </form>

                            </figcaption>
                        </figure>
                    </div> <!-- col.// -->
                @endforeach
            </div>
        </div>
    </section>




    <!--========== NEWSLETTER =============-->
    <section id="newsletter">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <h2>Recibe ofertas especialedades</h2>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem perspiciatis laborum suscipit
                        quae sequi at nihil vel, iusto molestias in!</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="formulario-newsletter">
                        <input type="email" class="form-control" placeholder="Correo electrónico">
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-12">
                    <div class="boton-newsletter">
                        <button class="btn btn-success btn-md btn-block">Enviar</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
    @include('sweetalert::alert')
@endsection
