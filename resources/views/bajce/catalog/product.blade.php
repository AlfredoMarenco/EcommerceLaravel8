@extends('layouts.bajce')
@section('title', 'Cátalogo')
@section('content')


    <!-- ========================= SECTION CONTENT ========================= -->
    <section class="section-content bg-white padding-y">
        <div class="container">
            <section class="py-3 bg-light">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('index') }}">Inicio</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('catalogue.index') }}">Catálogo</a></li>
                        @if ($catalogue)
                            <li class="breadcrumb-item"><a
                                    href="{{ route('catalogue.products', $catalogue->category_id) }}">{{ $catalogue->name }}</a>
                            </li>
                        @endif
                        @if ($product)
                            <li class="breadcrumb-item active" aria-current="page">{{ $product->name }}</li>
                        @endif
                    </ol>
                </div>
            </section>

            <!-- ============================ ITEM DETAIL ======================== -->
            <div class="row">
                <aside class="col-md-6 flexslider">
                    <!-- Place somewhere in the <body> of your page -->
                    <ul class="slides">
                        @foreach ($product->images as $image)
                            <li data-thumb="{{ Storage::url($image->url) }}">
                                <img src="{{ Storage::url($image->url) }}">
                            </li>
                        @endforeach
                    </ul>
                </aside>
                <main class="col-md-6">
                    <article class="product-info-aside">

                        <h2 class="title mt-3">{{ $product->name }}</h2>
                        {{-- @if ($product->discount)
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
                        @endif --}}
                        <p>{!! $product->extract !!}</p>
                        <dl class="row">
                            <dt class="col-1"><i class="fas fa-box" style="color: orange;"></i></dt>
                            <dd class="col-11"><a href="#">Envío gratis dentro de Mérida</a></dd>
                        </dl>
                        {{-- <div class="form-row  mt-4">
                            <form action="{{ route('wishlist.addItem', $product) }}" method="POST">
                            <div class="form-group col-md flex-grow-0">
                                @livewire('count-items-to-cart')
                            </div> <!-- col.// -->
                        </div> <!-- row.// -->
                        <div class="form-group col-md">
                            <a href="http://wa.me/5219992211629" class="btn btn-block  btn-success">
                                <i class="fab fa-whatsapp"></i> <span class="text">CONSULTAR EN SUCURSAL</span>
                            </a>
                            <div class="agregar-a mt-4">

                                    @csrf
                                    <button type="submit" class="btn btn-block btn-primary"><i class="fas fa-cart-plus"></i>
                                        <span class="text">AÑADIR A LA LISTA</span></button>
                                </form>
                            </div>
                            <p class="mt-3">* Solicita cotizaciones en linea</p>
                        </div> <!-- col.// --> --}}
                        <form action="{{ route('wishlist.addItem', $product) }}" method="POST" class="mt-5">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md flex-grow-0">
                                    @livewire('count-items-to-cart')
                                </div> <!-- col.// -->
                                <div class="form-group form-inline">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fas fa-shopping-cart"></i><span class="text">Añadir a lista</span>
                                    </button>
                        </form>

                        <a href="http://wa.me/5219992211629" class="btn btn-success margen-btn-1">
                            <i class="fab fa-whatsapp"></i> <span class="text">Contactar sucursal</span>
                        </a>

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
                    <h5 class="title-description">Descripción</h5>
                    <p>
                        {!! $product->description !!}
                    </p>
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

                </div> <!-- col.// -->


            </div> <!-- row.// -->

        </div> <!-- container .//  -->
    </section>
    <!-- ========================= SECTION CONTENT END// ========================= -->
    <section id="catalogo">
        <div class="cabecera">
            <h3 style="text-align: center; text-transform: uppercase;" class="mt-5">
                MÁS PRODUCTOS EN EL CATÁLOGO
            </h3>
            {{-- <p style="text-align: center;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae deserunt
                quos similique natus quaerat omnis!</p> --}}
        </div>
        <div class="row mt-4">
            @foreach ($products as $product)
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="card">
                        <div class="contenido-2">
                            <div class="imagen-producto">
                                <img src="{{ Storage::url($product->image->url) }}" class="img-fluid"
                                    alt="{{ $product->name }}">
                            </div>
                            <div class="info-producto py-2">
                                <h5>{{ $product->name }}</h5>
                                <p>{!! $product->extract !!}</p>
                                <a href="{{ route('catalogue.product', [$product, $catalogue->id]) }}"
                                    class="btn btn-block btn-primary"></i> VER PRODUCTO
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
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
