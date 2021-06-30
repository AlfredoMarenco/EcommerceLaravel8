@extends('layouts.bajce')
@section('title', 'Tienda')
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
                                        <th scope="col" class="text-right" width="200"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach (Cart::instance('default')->content() as $product)
                                        <tr>
                                            <td>
                                                <figure class="itemside">
                                                    <div class="aside">
                                                        <img @if ($product->model->image) src="{{ Storage::url($product->model->image->url) }}" @else src="{{ asset('images/banners/bajce-enviar.jpg') }}" @endif class="img-sm">
                                                    </div>
                                                    <figcaption class="info">
                                                        <a href="{{ route('shop.product', $product->id) }}"
                                                            class="title text-dark">{{ $product->name }}</a>
                                                        <p class="text-muted small">SKU: {{ $product->model->SKU }}
                                                            <br>
                                                            Marca: {{ $product->model->brand->name }}
                                                        </p>
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
                                            <td colspan="4" class="text-center">
                                                <hr>
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
                                                        <p class="text-muted small">SKU: {{ $product->model->SKU }}
                                                            <br>
                                                            Marca: {{ $product->model->brand->name }}
                                                        </p>
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
                                                    <var class="price">{{-- ${{ number_format($product->price, 2) }} --}}<br></var>
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
                                <a href="/tienda" class="btn btn-light"> <i class="fa fa-chevron-left"></i> Seguir comprando
                                </a>

                                @if (Cart::instance('wishlist')->count() > 0)
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary float-right" data-toggle="modal"
                                        data-target="#exampleModal">
                                        Solicitar cotización
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Informacion de contacto
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('wishlist.sendCotizacion') }} " method="POST">
                                                        @csrf
                                                        <div class="form-group">
                                                            <label for="name">Nombre completo</label>
                                                            <input type="text" name="name" class="form-control">
                                                            <label for="">Correo</label>
                                                            <input type="text" name="email" class="form-control">
                                                            <label for="">Telefono</label>
                                                            <input type="text" name="phone" class="form-control">
                                                            <label for="comment">Comentario(Opcional)</label>
                                                            <textarea class="form-control" name="comment"
                                                                rows="5"></textarea>
                                                        </div>
                                                </div>
                                                <div class="modal-footer">
                                                    {{-- <button type="button" class="btn btn-default"
                                                        data-dismiss="modal">Close</button> --}}
                                                    <button type="submit" class="btn btn-primary">Enviar</button>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div> <!-- card.// -->
                    </main> <!-- col.// -->

                    <aside class="col-md-3">
                        @if (!session('coupon'))
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
                                        <dd class="text-right h5"><strong>${{ Cart::instance('default')->total() }}
                                                MXN</strong></dd>
                                    </dl>
                                    <hr>
                                @endif
                                {{-- @if (Cart::instance('wishlist')->count() > 0)
                                    <dl class="dlist-align">
                                        <h6>Cotizacion de productos del catálogo</h6>
                                    </dl>
                                    <dl class="dlist-align">
                                        <dt>Precio total:</dt>
                                        <dd class="text-right">${{ Cart::instance('wishlist')->subtotal() }} MXN</dd>
                                    </dl>
                                    <dl class="dlist-align">
                                        <dt>Total:</dt>
                                        <dd class="text-right  h5"><strong>${{ Cart::instance('wishlist')->total() }}
                                                MXN</strong></dd>
                                    </dl>
                                    <hr>
                                @endif --}}
                                <p class="text-center mb-3">
                                    @if (Cart::instance('default')->count() > 0)
                                        <a href="{{ route('checkout.index') }}" class="btn btn-primary my-1 btn-block">
                                            Pagar con tarjeta
                                            <i class="far fa-credit-card"></i> </a>
                                        <a href="{{ route('checkout.cash') }}" class="btn btn-primary my-2 btn-block">
                                            Pagar en efectivo
                                            <i class="far fa-money-bill-alt"></i> </a>
                                    @endif
                                    <img class="mt-2" src="images/misc/payments.png" height="26">
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
            <p>Como parte de los mecanismos para manifestar negativa al tratamiento de datos personales, en todo momento
                podrá consultar su información, rectificarla u oponerte al tratamiento de tus datos personales, por lo que
                para ello podrá llamar a los teléfonos (999) 2 21 1629 o página web <a
                    href="https://www.bajce.com.">www.bajce.com.</a>

            </p>


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
                                <p>{!! $product->extract !!}</p>
                                <div class="price-wrap">
                                    @if ($product->discount)
                                        <strike class="price text-warning">{{ $product->presentPrice() }}</strike>
                                        <small class="text-muted">/</small>
                                        <span class="price text-success">{{ $product->presentPriceDiscount() }}</span>
                                        <small class="text-muted">/ pza</small>
                                    @else
                                        <span class="price">{{ $product->presentPrice() }}</span>
                                        <small class="text-muted">/ pza</small>
                                    @endif
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
@endsection

@section('js')
    @include('sweetalert::alert')
@endsection
