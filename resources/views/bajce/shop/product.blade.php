@extends('layouts.bajce')
@section('title', $product->name)
@section('titleFacebook', $product->name)
@section('url', url('catalogos/') . $product->slug)

@section('imageFacebook', Storage::url($product->image->url))

@section('titleTwitter', $product->name)
@section('imageTwitter', Storage::url($product->image->url))

@section('titleMeta', $product->name)
@section('imageMeta', Storage::url($product->image->url))


@section('content')
    <!-- ========================= SECTION CONTENT ========================= -->
    <section class="section-content bg-white padding-y">
        <div class="container mt-5 mb-3">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                <li class="breadcrumb-item"><a href="{{ route('shop.index') }}">Tienda</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $product->name }}</li>
            </ol>
        </div>
        <div class="container-fluid">

            <!-- ============================ ITEM DETAIL ======================== -->
            <div class="row">
                <aside class="col-md-6 flexslider p-5 text-center">
                    <ul class="slides">
                        @foreach ($product->images as $image)
                            <li data-thumb="{{ Storage::url($image->url) }}">
                                <img style="width: 100%;" @if ($product->images) src="{{ Storage::url($image->url) }}" @else src="{{ asset('images/banners/bajce-enviar.jpg') }}" @endif>
                            </li>
                        @endforeach
                    </ul>
                </aside>
                <main class="col-md-6">
                    <article class="product-info-aside">
                        <h2 class="title mt-3">{{ $product->name }}</h2>
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
                            <small class="label-rating text-muted">{{ $product->reviews_count }} Opiniones</small>
                            {{-- <small class="label-rating text-success"> <i class="fa fa-clipboard-check"></i> Envío gratis en
                                Mérida </small> --}}
                        </div>

                        @if ($product->discount)
                            <div class="mb-3">
                                <strike><var class="price h4 text-warning">{{ $product->presentPrice() }}
                                        MXN</var></strike>
                                <span class="h4">/</span>
                                <var class="price h4">{{ $product->presentPriceDiscount() }} MXN</var>
                            </div>
                        @else
                            <div class="mb-3">
                                <var class="price h4">{{ $product->presentPrice() }} MXN</var>
                            </div>
                        @endif
                        <p>{!! $product->extract !!} </p>


                        <dl class="row">

                            <dt class="col-sm-3">SKU</dt>
                            <dd class="col-sm-9">{{ $product->SKU }}</dd>

                            @if ($product->garantia_visible == 1)
                                <dt class="col-sm-3">Garantía</dt>
                                <dd class="col-sm-9">{{ $product->garantia }}</dd>
                            @endif

                            <dt class="col-sm-3">En stock</dt>
                        </dl>
                        <form action="{{ route('cart.addItems', $product) }}" method="POST" class="mt-5">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md flex-grow-0">
                                    @livewire('count-items-to-cart')
                                </div>
                                <div class="form-group form-inline">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fas fa-shopping-cart"></i><span class="text">Añadir al
                                            carrito</span>
                                    </button>
                        </form>
                        <form action="{{ route('cart.addItems', $product) }}" method="POST">
                            @csrf
                            <input type="hidden" readonly="true" name="redirect" value="1">
                            <input type="hidden" readonly="true" name="qty" value="1">

                            <button class="btn btn-success margen-btn">
                                <i class="fas fa-shopping-basket"></i><span class="text">Comprar ahora</span>
                            </button>

                        </form>
            </div>
            <!-- col.// -->
        </div> <!-- row.// -->
        </article> <!-- product-info-aside .// -->
        </main> <!-- col.// -->
        </div> <!-- row.// -->

        <!-- ================ ITEM DETAIL END .// ================= -->


        </div> <!-- container .//  -->
    </section>
    <!-- ========================= SECTION CONTENT END// ========================= -->

    <!-- ========================= SECTION  ========================= -->
    <section id="section-name-cat" class="section-name padding-y bg">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <div class="cabecera-opciones">
                        <div class="row">
                            <div class="col-4">
                                <h5 class="title-description">Descripción </h5>
                            </div>

                        </div>
                    </div>
                    <p>
                        {!! $product->description !!}
                    </p>
                    <div class="cabecera-opciones">
                        <div class="row">
                            <div class="col-4">
                                <h5 class="title-description">Ficha técnica </h5>
                            </div>

                        </div>
                    </div>
                    <ul class="list-check">
                        @if ($product->folio_visible == 1)
                            <li>Folio: {{ $product->folio }}</li>
                        @endif
                        @if ($product->categoria_visible == 1)
                            <li>Categoria: {{ $product->categoria }}</li>
                        @endif
                        @if ($product->ficha_visible == 1)
                            <li>Ficha: {{ $product->ficha }}</li>
                        @endif
                        @if ($product->garantia_visible == 1)
                            <li>Garantía: {{ $product->garantia }}</li>
                        @endif
                        @if ($product->usos_visible == 1)
                            <li>Usos: {{ $product->usos }}</li>
                        @endif
                        @if ($product->contenido_visible == 1)
                            <li>Contenido: {{ $product->contenido }}</li>
                        @endif
                        @if ($product->montaje_visible == 1)
                            <li>Montaje: {{ $product->montaje }}</li>
                        @endif
                        @if ($product->capacidad_visible == 1)
                            <li>Capacidad: {{ $product->capacidad }}</li>
                        @endif
                        @if ($product->marca_visible == 1)
                            <li>Marca: {{ $product->marca }}</li>
                        @endif
                        @if ($product->material_visible == 1)
                            <li>Material: {{ $product->material }}</li>
                        @endif
                        @if ($product->medidas_visible == 1)
                            <li>Medidas del Herraje: {{ $product->medidas }}</li>
                        @endif
                        @if ($product->medidasmodulo_visible == 1)
                            <li>Medidas del Modulo: {{ $product->medidasmodulo }}</li>
                        @endif
                        @if ($product->acabado_visible == 1)
                            <li>Acabado: {{ $product->acabado }}</li>
                        @endif
                    </ul>

                    <h5 class="title-description">Valoraciones</h5>
                    @if ($product->reviews_count > 0)
                        @foreach ($reviews as $review)
                            @if ($review->status == 1)
                                <div class="opinion">
                                    <h5 class="mt-4">{{ $review->user->name }}
                                        {{ $review->user->last_name }}</h5>
                                    <p>{{ $review->comment }}</p>
                                    <div class="rating-wrap my-3">
                                        <ul class="rating-stars">
                                            <li style="width:{{ ($review->rating * 100) / 5 }}%" class="stars-active">
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
                                    </div>
                                </div> <!-- rating-wrap.// -->
                            @endif
                        @endforeach
                    @else
                        <div class="text-center">No hay valoraciones aun</div>
                    @endif

                </div> <!-- col.// -->
                {{ $reviews->links() }}
            </div> <!-- row.// -->
        </div> <!-- container .//  -->
    </section>
    <!-- ========================= SECTION CONTENT END// ========================= -->

    <section id="productos-sugeridos">
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
                                <a href="{{ route('shop.product', $product->id) }}"
                                    class="title mb-2">{{ $product->name }}</a>
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
                                    <button type="submit" class="btn btn-block btn-primary"><i
                                            class="fas fa-cart-plus"></i>
                                        Añadir al carrito </button>
                                </form>
                                <a class="btn btn-success mt-2 btn-block" href="{{ route('shop.product', $product) }}">
                                    Ver producto
                                </a>
                            </figcaption>
                        </figure>
                    </div> <!-- col.// -->
                @endforeach
            </div>
        </div>
    </section>
@endsection


@section('js')
    <script>
        // Can also be used with $(document).ready()
        $(window).load(function() {
            $('.flexslider').flexslider({
                animation: "slide",
                controlNav: "thumbnails"
            });
        });
    </script>
@endsection
