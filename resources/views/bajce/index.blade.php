@extends('layouts.bajce')
@section('content')
    <!-- ========================= SECTION MAIN  ========================= -->
    <section class="section-intro ">
        <div class="container-fluid p-0">
            <!-- ==============  COMPONENT SLIDER  BOOTSTRAP ============  -->

            <!---->
            <div id="carousel1_indicator" class="slider-home-banner carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    @foreach ($sliders as $slider)
                        <li data-target="#carousel1_indicator" data-slide-to="{{ $loop->index }}" @if ($loop->first) class="active" @endif></li>
                    @endforeach
                </ol>
                <div class="carousel-inner">
                    @foreach ($sliders as $slider)
                        <div class="carousel-item @if ($loop->first) active @endif">
                            <img src="{{ Storage::url($slider->image->url) }}" alt="{{ $slider->text }}"
                                style="width: 100%; max-height: 500px;">
                            <div class="carousel-caption carousel-caption-1 d-md-block">
                                @if ($slider->text != '')
                                    <h1>{{ $slider->text }}</h1>
                                @endif
                                @if ($slider->button != '')
                                    <a href="{{ $slider->link }}" class="btn btn-primary">{{ $slider->button }}</a>
                                @endif
                            </div>
                        </div>
                    @endforeach

                </div>
                <a class="carousel-control-prev" href="#carousel1_indicator" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel1_indicator" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <!-- ============ COMPONENT SLIDER BOOTSTRAP end.// ===========  .// -->
        </div> <!-- container end.// -->
    </section>
    <!-- ========================= SECTION MAIN END// ========================= -->


    <section id="info-destacada" class="no-cel">
        <div class="container mt-5 ">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12 info-destacada-r no-cel">
                    @foreach ($mosaics as $mosaic)
                        @if ($mosaic->id == 1)
                            <div class="d-1">
                                <a href="{{ $mosaic->link }}">
                                    <img src="{{ Storage::url($mosaic->image->url) }}" class="img-fluid radio" alt="">
                                    <div class="carousel-caption carousel-caption-2">
                                        <h5>{{ $mosaic->text }}</h5>
                                        <p>{!! $mosaic->description !!}</p>
                                    </div>
                                </a>
                            </div>
                        @endif
                    @endforeach
                </div>
                <div class="col-9 info-destacada-p no-cel">
                    <div class="row">
                        @foreach ($mosaics as $mosaic)
                            @if ($mosaic->id == 2)
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="d-2 mb-3">
                                        <a href="{{ $mosaic->link }}">
                                            <img src="{{ Storage::url($mosaic->image->url) }}" class="img-fluid radio"
                                                alt="">
                                            <div class="carousel-caption carousel-caption-2">
                                                <h5>{{ $mosaic->text }}</h5>
                                                <p>{!! $mosaic->description !!}</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                        @foreach ($mosaics as $mosaic)
                            @if ($mosaic->id == 3)
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="d-2 mb-3">
                                        <a href="{{ $mosaic->link }}">
                                            <img src="{{ Storage::url($mosaic->image->url) }}" class="img-fluid radio"
                                                alt="">
                                            <div class="carousel-caption carousel-caption-2">
                                                <h5>{{ $mosaic->text }}</h5>
                                                <p>{!! $mosaic->description !!}</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                        @foreach ($mosaics as $mosaic)
                            @if ($mosaic->id == 4)
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="d-2 mb-3">
                                        <a href="{{ $mosaic->link }}">
                                            <img src="{{ Storage::url($mosaic->image->url) }}" class="img-fluid radio"
                                                alt="">
                                            <div class="carousel-caption carousel-caption-2">
                                                <h5>{{ $mosaic->text }}</h5>
                                                <p>{!! $mosaic->description !!}</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="info-destacada-inner no-cel">
                        <div class="row">
                            @foreach ($mosaics as $mosaic)
                                @if ($mosaic->id == 5)
                                    <div class="col-8 radio">
                                        <a href="{{ $mosaic->link }}">
                                            <img src="{{ Storage::url($mosaic->image->url) }}" class="img-fluid radio"
                                                alt="">
                                            <div class="carousel-caption carousel-caption-2">
                                                <h5>{{ $mosaic->text }}</h5>
                                                <p>{!! $mosaic->description !!}</p>
                                            </div>
                                        </a>
                                    </div>
                                @endif
                            @endforeach
                            @foreach ($mosaics as $mosaic)
                                @if ($mosaic->id == 6)
                                    <div class="col-4 no-cel">
                                        <a href="{{ $mosaic->link }}">
                                            <img src="{{ Storage::url($mosaic->image->url) }}" class="img-fluid radio"
                                                alt="">
                                            <div class="carousel-caption carousel-caption-2">
                                                <h5>{{ $mosaic->text }}</h5>
                                                <p>{!! $mosaic->description !!}</p>
                                            </div>
                                        </a>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>


    <div class="container">

        <section id="servicios">

            <h3 style="text-align: center;" class=" mt-5 mb-5">
                CONOCE NUESTROS SERVICIOS
            </h3>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <i class="fas fa-table iconos"></i>
                    <h5 class="titulo-servicio">DIMENSIONADO DE TABLERO</h5>
                    <p class="p-servicio mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae sit saepe
                        eaque delectus necessitatibus impedit sequi ipsa repellendus atque cum!</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <i class="fas fa-table iconos"></i>
                    <h5 class="titulo-servicio">DIMENSIONADO DE TABLERO</h5>
                    <p class="p-servicio mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae sit saepe
                        eaque delectus necessitatibus impedit sequi ipsa repellendus atque cum!</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <i class="fas fa-table iconos"></i>
                    <h5 class="titulo-servicio">DIMENSIONADO DE TABLERO</h5>
                    <p class="p-servicio mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae sit saepe
                        eaque delectus necessitatibus impedit sequi ipsa repellendus atque cum!</p>
                </div>
            </div>
            <div id="servicios-2" class="mt-5">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <i class="fas fa-table iconos"></i>
                        <h5 class="titulo-servicio">DIMENSIONADO DE TABLERO</h5>
                        <p class="p-servicio mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae sit
                            saepe eaque delectus necessitatibus impedit sequi ipsa repellendus atque cum!</p>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <i class="fas fa-table iconos"></i>
                        <h5 class="titulo-servicio">DIMENSIONADO DE TABLERO</h5>
                        <p class="p-servicio mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae sit
                            saepe eaque delectus necessitatibus impedit sequi ipsa repellendus atque cum!</p>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <i class="fas fa-table iconos"></i>
                        <h5 class="titulo-servicio">DIMENSIONADO DE TABLERO</h5>
                        <p class="p-servicio mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae sit
                            saepe eaque delectus necessitatibus impedit sequi ipsa repellendus atque cum!</p>
                    </div>
                </div>
            </div>

        </section>
    </div>


    <section id="tienda" style="margin-top: 100px; background-size: 100%;">

        <div class="contenido-tienda">
            <h3 style="text-align: center;" class="mt-5">
                Tienda en linea
            </h3>
            <p class="descripcion-tienda" style="text-align: center;">Lorem ipsum dolor sit amet consectetur adipisicing
                elit. Laboriosam magni itaque atque explicabo at dicta hic voluptatum repellendus quas reiciendis.</p>
            <div class="boton-ir">
                <a href="/tienda" class="btn btn-secondary">
                    Ir a la tienda
                </a>
            </div>
            <div class="botones-tienda">
                <div class="row">
                    @foreach ($buttons as $button)
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="boton-ir">
                                <a href="{{ route('shop.products.category',$button->category_id) }}" class="btn btn-primary btn-block">
                                    {{ $button->text }}
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    </section>


    <section id="catalogo">
        <div class="cabecera">
            <h3 style="text-align: center; text-transform: uppercase;" class="mt-5">
                Consulta nuestro catálogo en linea
            </h3>
            <p style="text-align: center;">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
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
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis recusandae ad suscipit
                                    nisi quis aperiam reiciendis voluptate repellat! Eum, quisquam.</p>
                                <a href="{{ route('catalogue.products', $catalogue->category_id) }}"
                                    class="btn btn-primary btn-block">Ver catálogo</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </section>




    <section id="codigo" class="p-0">
        @foreach ($cuponfs as $cuponf)
            <div style="background-image: url({{ Storage::url($cuponf->image->url) }}); background-position: center;  background-size: 100%; background-repeat: no-repeat; min-height:450px;">
                <div class="contenido">
                    <h2>
                        {{ $cuponf->text }}
                    </h2>
                    <a href="/tienda" class="btn btn-primary">Ir a la tienda</a>
                </div>
            </div>
        @endforeach
    </section>




    <section id="sucursales">
        <div class="cabecera-sucursales">
            <h3 style="text-align: center; text-transform: uppercase;">
                Nuestras sucursales
            </h3>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="logos-sucursales">
                    <img src="/images/icons/logo-maderas.png" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="detalles-sucursal">
                    <h4>MADERAS ORIENTE</h4>
                    <p class="lead" style="text-transform: uppercase;">Calle 65 N° 160 por 11 y 14 Col. Miraflores <br> C.P.
                        97179, Mérida, Yucatán, México <br>
                        <span>
                            (999) 983 0353 / (999) 983 1026 <br>(999) 983 0592 / (999) 983 0376
                        </span>
                    </p>
                    <img src="/images/icons/google-maps.png" class="img-fluid" alt="">


                </div>
            </div>
        </div>
    </section>



    <section id="blog">
        <div class="cabecera">
            <h3 style="text-align: center; text-transform: uppercase;" class="mt-5">
                Noticias más relevantes
            </h3>
            <p style="text-align: center;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae deserunt
                quos similique natus quaerat omnis!</p>
        </div>

        <div class="row mt-5">
            @foreach ($posts as $post)
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="card">
                        <div class="contenido-2">
                            <div class="imagen-producto">
                                <img src="{{ Storage::url($post->image->url) }}" class="img-fluid" alt="">
                            </div>
                            <div class="info-producto">
                                <h5>{{ $post->title }}</h5>
                                <p>{!! $post->extract !!}</p>
                                <p class="autor">Por: <span>{{ $post->user->name }}
                                        {{ $post->user->last_name }}</span>
                                    <span>|</span> <span>{{ $post->created_at->diffForHumans() }}</span>
                                </p>
                                <a href="{{ route('blog.show', $post) }}" class="btn btn-success btn-block">LEER MÁS</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="boton-entradas">
            <a href="/blog" class="btn btn-primary boton-entradas-2">Ver más</a>
        </div>

    </section>


    <section id="marcas">
        <div class="cabecera-marcas">
            <h3 style="text-align: center; text-transform: uppercase;" class="mt-5">
                Marcas con las que trabajamos
            </h3>

        </div>

        <div class="row">
            @foreach ($brands as $brand)
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <div class="marcas-logo">
                        <img src="{{ Storage::url($brand->image->url) }}" class="img-fluid mx-2 px-4" alt="">
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
