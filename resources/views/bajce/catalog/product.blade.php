@extends('layouts.bajce')
@section('title', 'Catalogo')
@section('content')


    <!-- ========================= SECTION CONTENT ========================= -->
    <section class="section-content bg-white padding-y">
        <div class="container">
            <section class="py-3 bg-light">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('index') }}">Inicio</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('catalogue.index') }}">Catálogo</a></li>
                        <li class="breadcrumb-item"><a href="">Productos</a></li>

                        <li class="breadcrumb-item active" aria-current="page">Tablones de madera</li>
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

                        <p>{!! $product->extract !!}</p>


                        <dl class="row">
                            <dt class="col-1"><i class="fas fa-box" style="color: orange;"></i></dt>
                            <dd class="col-11"><a href="#">Envío gratis dentro de Mérida</a></dd>


                        </dl>

                        <div class="form-row  mt-4">
                            <div class="form-group col-md flex-grow-0">
                                <div class="input-group mb-3 input-spinner">
                                    <div class="input-group-prepend">
                                        <button class="btn btn-light" type="button" id="button-minus"> &minus; </button>
                                    </div>
                                    <input type="text" class="form-control" value="1">
                                    <div class="input-group-append">
                                        <button class="btn btn-light" type="button" id="button-plus"> + </button>
                                    </div>
                                </div>
                            </div> <!-- col.// -->
                        </div> <!-- row.// -->

                        <div class="form-group col-md">
                            <a href="http://wa.me/5219992211629" class="btn btn-block  btn-success">
                                <i class="fab fa-whatsapp"></i> <span class="text">CONSULTAR EN SUCURSAL</span>
                            </a>
                            <div class="agregar-a mt-4">
                                <form action="{{ route('wishlist.addItem', $product) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-block btn-primary"><i class="fas fa-cart-plus"></i>
                                        <span class="text">AÑADIR A LA LISTA</span></button>
                                </form>
                            </div>
                            <p class="mt-3">* Solicita cotizaciones en linea</p>
                        </div> <!-- col.// -->

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
                    <h5 class="title-description">Description</h5>
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
            <p style="text-align: center;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae deserunt
                quos similique natus quaerat omnis!</p>
        </div>

        <div class="row mt-5">
            @foreach ($catalogues as $catalogue)
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="card">
                        <div class="contenido-2">
                            <div class="imagen-producto">
                                <img src="{{ Storage::url($catalogue->image->url) }}" class="img-fluid"
                                    alt="{{ $catalogue->name }}">
                            </div>
                            <div class="info-producto">
                                <h5>{{ $catalogue->name }}</h5>
                                <a href="{{ route('catalogue.products', $catalogue->category_id) }}"
                                    class="btn btn-primary btn-block">Ver catálogo</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </section>


    <!--========== NEWSLETTER =============-->
    <section id="newsletter">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <h2>Recibe ofertas especialedades</h2>
                    <p>Suscríbete para recibir noticias y promociones exclusivas de nuestra tienda en linea.</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="formulario-newsletter">
                        <input type="email" class="form-control" placeholder="Correo electrónico">
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-12">
                    <div class="boton-newsletter">
                        <button class="btn btn-success btn-md btn-block">Suscribirme</button>
                    </div>
                </div>
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
