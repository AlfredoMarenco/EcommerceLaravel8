@extends('layouts.bajce')
@section('title', 'Inicio')

@section('css')
    <style>
        .carousel li {
            display: none;
        }

    </style>
@endsection

@section('content')
    <!-- ========================= SECTION MAIN  ========================= -->
    @if ($sliders->count() > 0)
        <section class="section-intro">
            <div class="container-fluid p-0">
                <!-- ==============  COMPONENT SLIDER  BOOTSTRAP ============  -->
                <div id="carousel1_indicator" class="slider-home-banner carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        @foreach ($sliders as $slider)
                            <li data-target="#carousel1_indicator" data-slide-to="{{ $loop->index }}" @if ($loop->first) class="active" @endif></li>
                        @endforeach
                    </ol>
                    <div class="carousel-inner">
                        @foreach ($sliders as $slider)
                            <div class="carousel-item @if ($loop->first) active @endif">
                                <img src="{{ Storage::url($slider->image->url) }}" alt="{{ $slider->text }}">
                                <div class=" carousel-caption carousel-caption-1 d-md-block">
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
    @else
        <section class="section-intro ">
            <div class="container-fluid p-0">
                <!-- ==============  COMPONENT SLIDER  BOOTSTRAP ============  -->
                <div id="carousel1_indicator" class="slider-home-banner carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel1_indicator" data-slide-to="1" class="active"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item-1 active">
                            <img src="{{ asset('images/banners/cabecera.png') }}" alt="img" class="img-fluid"
                                style="width: 100%">
                            <div class="carousel-caption carousel-caption-1 d-md-block">
                                <h1>La mejor madera del Sureste</h1>
                                <a href="{{ route('shop.index') }}" class="btn btn-primary">Ir a la Tienda</a>
                            </div>
                        </div>
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
    @endisset
    <!-- ========================= SECTION MAIN END// ========================= -->
    @if ($mosaics->count() > 0)
        <section id="info-destacada" class="no-cel">
            <div class="container mt-5 ">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-12 info-destacada-r no-cel">
                        @foreach ($mosaics as $mosaic)
                            @if ($mosaic->id == 1)
                                <div class="d-1">
                                    <a href="{{ $mosaic->link }}">
                                        <img @if ($mosaic->image) src="{{ Storage::url($mosaic->image->url) }}" @else src="{{ asset('images/banners/d-1-2.png') }}" @endif class="img-fluid radio" alt="">
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
                                                <img @if ($mosaic->image) src="{{ Storage::url($mosaic->image->url) }}" @else src="{{ asset('images/banners/d-2-2.png') }}" @endif class="img-fluid radio" alt="">
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
                                                <img @if ($mosaic->image) src="{{ Storage::url($mosaic->image->url) }}" @else src="{{ asset('images/banners/d-3-2.png') }}" @endif class="img-fluid radio" alt="">
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
                                                <img @if ($mosaic->image) src="{{ Storage::url($mosaic->image->url) }}" @else src="{{ asset('images/banners/d-4-2.png') }}" @endif class="img-fluid radio" alt="">
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
                                                <img @if ($mosaic->image) src="{{ Storage::url($mosaic->image->url) }}" @else src="{{ asset('images/banners/d-6-2.png') }}" @endif class="img-fluid radio" alt="">
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
                                                <img @if ($mosaic->image) src="{{ Storage::url($mosaic->image->url) }}" @else src="{{ asset('images/banners/d-5-2.png') }}" @endif class="img-fluid radio" alt="">
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
    @else
        <section id="info-destacada" class="no-cel">
            <div class="container mt-5 ">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-12 info-destacada-r no-cel">
                        <div class="d-1">
                            <a href="#">
                                <img src="{{ asset('images/banners/d-1-2.png') }}" class="img-fluid radio" alt="">
                                <div class="carousel-caption carousel-caption-2">
                                    <h5>Titulo del mosaico</h5>
                                    <p>Descripcion de mosaico</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-9 info-destacada-p no-cel">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <div class="d-2 mb-3">
                                    <a href="#">
                                        <img src="{{ asset('images/banners/d-2-2.png') }}" class="img-fluid radio"
                                            alt="">
                                        <div class="carousel-caption carousel-caption-2">
                                            <h5>Titulo del mosaico</h5>
                                            <p>Descripcion de mosaico</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <div class="d-2 mb-3">
                                    <a href="#">
                                        <img src="{{ asset('images/banners/d-3-2.png') }}" class="img-fluid radio"
                                            alt="">
                                        <div class="carousel-caption carousel-caption-2">
                                            <h5>Titulo del mosaico</h5>
                                            <p>Descripcion de mosaico</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <div class="d-2 mb-3">
                                    <a href="#">
                                        <img src="{{ asset('images/banners/d-4-2.png') }}" class="img-fluid radio"
                                            alt="">
                                        <div class="carousel-caption carousel-caption-2">
                                            <h5>Titulo del mosaico</h5>
                                            <p>Descripcion de mosaico</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="info-destacada-inner no-cel">
                            <div class="row">
                                <div class="col-8 radio">
                                    <a href="#">
                                        <img src="{{ asset('images/banners/d-6-2.png') }}" class="img-fluid radio"
                                            alt="">
                                        <div class="carousel-caption carousel-caption-2">
                                            <h5>Titulo del mosaico</h5>
                                            <p>Descripcion de mosaico</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-4 no-cel">
                                    <a href="#">
                                        <img src="{{ asset('images/banners/d-5-2.png') }}" class="img-fluid radio"
                                            alt="">
                                        <div class="carousel-caption carousel-caption-2">
                                            <h5>Titulo del mosaico</h5>
                                            <p>Descripcion de mosaico</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    @endif
    <div class="container">
        <section id="servicios">
            <h3 style="text-align: center;" class=" mt-5 mb-5">
                CONOCE NUESTROS SERVICIOS
            </h3>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <i class="fas fa-desktop iconos"></i>
                    <h5 class="titulo-servicio">Optimizador de corte</h5>
                    <p class="p-servicio mb-3">Contamos con un software que maximiza el rendimiento de los tableros de
                        madera, calculando la cantidad de piezas necesarias según el diseño, reduciendo costos y tiempo.
                    </p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <i class="fas fa-layer-group iconos"></i>
                    <h5 class="titulo-servicio">Aplicación de Tapacanto</h5>
                    <p class="p-servicio mb-3">Una vez cortado el tablero podrás sellar los cantos (o los bordes) con
                        nuestra máquina de enchapado automático.</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <i class="fas fa-tools iconos"></i>
                    <h5 class="titulo-servicio">Perforación de bisagras</h5>
                    <p class="p-servicio mb-3">Genera el espacio necesario para la aplicación de bisagras. Ideal en la
                        fabricación de puertas para muebles de baños, closet y armarios.</p>
                </div>
            </div>
            <div id="servicios-2" class="mt-5">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <i class="fas fa-toolbox iconos"></i>
                        <h5 class="titulo-servicio">Cortes de madera</h5>
                        <p class="p-servicio mb-3">A través de nuestras herramientas especializadas se realizan cortes
                            lineales a la medida del largo y ancho que se requiera y así lograr ensambles exactos de los
                            productos adquiridos en nuestras tiendas.
                        </p>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <i class="fas fa-table iconos"></i>
                        <h5 class="titulo-servicio">Aplicación de Tapacanto</h5>
                        <p class="p-servicio mb-3">Una vez cortado el tablero podrás sellar los cantos (o los bordes)
                            con
                            nuestra máquina de enchapado automático.</p>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <i class="fas fa-truck iconos"></i>
                        <h5 class="titulo-servicio">Servicio a domicilio
                        </h5>
                        <p class="p-servicio mb-3">Recibe los productos de cualquiera de nuestras sucursales o de
                            nuestra tienda en línea en tu domicilio.</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <section id="tienda" style="margin-top: 100px; ">
        <div class="contenido-tienda">
            <h3 style="text-align: center;" class="mt-5">
                Conoce nuestros artículos disponibles
            </h3>

            <div class="boton-ir">
                <a href="{{ route('shop.index') }}" class="btn btn-secondary">
                    Ir a la tienda
                </a>

            </div>
            <div class="botones-tienda">
                <div class="row">
                    @foreach ($buttons as $button)
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="boton-ir">
                                <a href="{{ route('shop.products.category', $button->category_id) }}"
                                    class="btn btn-primary btn-block">
                                    {{ $button->text }}
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    @if ($catalogues->count() > 0)
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
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis recusandae ad
                                        suscipit
                                        nisi quis aperiam reiciendis voluptate repellat! Eum, quisquam.</p>
                                    <a href="{{ route('catalogue.products', $catalogue->category_id) }}"
                                        class="btn btn-primary btn-block">Ver catálogo</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="boton-entradas">
                <a href="{{ route('catalogue.index') }}" class="btn btn-primary boton-entradas-2">Ver más</a>
            </div>
        </section>
    @else
        <section id="catalogo">
            <div class="cabecera">
                <h3 style="text-align: center; text-transform: uppercase;" class="mt-5">
                    Aun no se ha creado ningun catalogo
                </h3>
                <p style="text-align: center;">Proximamente estaremos publicando nuevas noticias</p>
            </div>
        </section>
    @endif
    @if ($cuponfs->count() > 0)
        <section id="codigo" class="p-0">
            @foreach ($cuponfs as $cuponf)
                <div
                    style="background-image: url({{ Storage::url($cuponf->image->url) }}); background-position: center;  background-size: 100%; background-repeat: no-repeat; min-height:450px;">
                    <div class="contenido">
                        <h2>
                            {{ $cuponf->text }}
                        </h2>
                        @if ($cuponf->button != '')
                            <a href="{{ $cuponf->link }}" class="btn btn-primary">{{ $cuponf->button }}</a>
                        @endif
                    </div>
                </div>
            @endforeach
        </section>
    @else
        <section id="codigo" class="p-0">
            <div style="background-image: url({{ asset('images/banners/mueble1-lg.png') }}); ">
                <div class="contenido">
                    <h2>
                        Usa nuestro cupon de descuento: BAJCESHOP
                    </h2>
                    <a href="{{ route('shop.index') }}" class="btn btn-primary">Ir a la tienda</a>
                </div>
            </div>
        </section>
    @endif
    <section id="sucursales">
        <div class="cabecera-sucursales">
            <h3 style="text-align: center; text-transform: uppercase;">
                Nuestras sucursales
            </h3>
        </div>

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>

            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="logos-sucursales">
                                <img src="/images/icons/oriente.png" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="detalles-sucursal">
                                <h4>MADERAS ORIENTE</h4>
                                <p class="lead" style="text-transform: uppercase;">Calle 65 N° 160 por 11 y 14 Col.
                                    Miraflores <br>
                                    C.P.
                                    97179, Mérida, Yucatán, México <br>
                                    <span>
                                        (999) 983 0592 / (999) 983 0376

                                    </span>
                                </p>
                                <div class="maps" style="margin-bottom: 20px;">
                                    <a style="margin-bottom: 20px;" href="https://goo.gl/maps/dWLHfbHpYsHisatb9"
                                        target="blank_"><img src="/images/icons/google-maps.png" class="img-fluid"
                                            alt=""></a> <br><br><br>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="logos-sucursales">
                                <img src="/images/icons/canek.png" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="detalles-sucursal">
                                <h4 style="text-transform: uppercase">maderas bajce Canek</h4>
                                <p class="lead" style="text-transform: uppercase;">Av.59-A No. 300 x 128 y 132 Col.
                                    Yucalpeten <br>
                                    C.P. 97248, Mérida, Yucatán, México <br>
                                    <span>
                                        (999) 912 3370
                                    </span>
                                </p>
                                <div class="maps" style="margin-bottom: 20px;">
                                    <a style="margin-bottom: 20px;" href="https://goo.gl/maps/dQ5oACV6PwScnHrH7"
                                        target="blank_"><img src="/images/icons/google-maps.png" class="img-fluid"
                                            alt=""></a> <br><br><br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="logos-sucursales">
                                <img src="/images/icons/chuburna.png" alt="Maderas bajce" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="detalles-sucursal">
                                <h4 style="text-transform: uppercase">Placacentro Chuburná</h4>
                                <p class="lead" style="text-transform: uppercase;">Calle 20 x 23 #107 Chuburná Hidalgo
                                    <br>
                                    C.P.
                                    97200, Mérida, Yucatán, México <br>
                                    <span>
                                        (999) 981 3970

                                    </span>
                                </p>
                                <div class="maps" style="margin-bottom: 20px;">
                                    <a style="margin-bottom: 20px;" href="https://goo.gl/maps/hMpD9WdYvXBuWWU37"
                                        target="blank_"><img src="/images/icons/google-maps.png" class="img-fluid"
                                            alt=""></a> <br><br><br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="logos-sucursales">
                                <img src="/images/icons/centro.png" alt="Maderas bajce" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="detalles-sucursal">
                                <h4 style="text-transform: uppercase">Maderas Bajce Centro</h4>
                                <p class="lead" style="text-transform: uppercase;">Calle 48 N. 520D X71 y 73 Col. Centro
                                    <br>
                                    C.P.
                                    97000, Mérida, Yucatán, México <br>
                                    <span>
                                        (999) 923 1756
                                    </span>
                                </p>
                                <div class="maps" style="margin-bottom: 20px;">
                                    <a style="margin-bottom: 20px;" href="https://goo.gl/maps/u6AYnmZ2w3JMoTHF7"
                                        target="blank_"><img src="/images/icons/google-maps.png" class="img-fluid"
                                            alt=""></a> <br><br><br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="logos-sucursales">
                                <img src="/images/icons/express.png" alt="Maderas bajce express" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="detalles-sucursal">
                                <h4 style="text-transform: uppercase">Maderas Bajce Express</h4>
                                <p class="lead" style="text-transform: uppercase;">Calle 6 n.357 x 7 y 7-A Col. Gustavo
                                    Díaz
                                    Ordaz <br>
                                    C.P. 97130, Mérida, Yucatán, México <br>
                                    <span>
                                        (999) 196 2825

                                    </span>
                                </p>
                                <div class="maps" style="margin-bottom: 20px;">
                                    <a style="margin-bottom: 20px;" href="https://goo.gl/maps/Un5byaEB23btbvAg8"
                                        target="blank_"><img src="/images/icons/google-maps.png" class="img-fluid"
                                            alt=""></a> <br><br><br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="logos-sucursales">
                                <img src="/images/icons/periferico.png" alt="Maderas bajce Periférico"
                                    class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="detalles-sucursal">
                                <h4 style="text-transform: uppercase">Maderas Bajce Periférico</h4>
                                <p class="lead" style="text-transform: uppercase;">Anillo periférico entre periférico
                                    oriente <br> y carretera 35
                                    <br>
                                    C.P. 97306, Mérida, Yucatán, México <br>
                                    <span>
                                        (999) 611 6021 / (999) 611 6249

                                    </span>
                                </p>
                                <div class="maps" style="margin-bottom: 20px;">
                                    <a style="margin-bottom: 20px;" href="https://goo.gl/maps/Dozjna1nEaY42aiu9"
                                        target="blank_"><img src="/images/icons/google-maps.png" class="img-fluid"
                                            alt=""></a> <br><br><br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="logos-sucursales">
                                <img src="/images/icons/cancun.png" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="detalles-sucursal">
                                <h4 style="text-transform: uppercase">Maderas Bajce Cancún</h4>
                                <p class="lead" style="text-transform: uppercase;">Av. Puerto Juárez. 119 No L-01 al 04
                                    entre 75 Región 92
                                    Municipio: Benito Juárez

                                    <br>
                                    C.P. 77516. Benito Juarez, Quintana Roo <br>
                                    <span>
                                        (998) 888 6890 / (998) 888 2830 / (998) 840 0306


                                    </span>
                                </p>
                                <div class="maps" style="margin-bottom: 20px;">
                                    <a style="margin-bottom: 20px;" href="https://goo.gl/maps/yQZmwXthxgLfYNGT6"
                                        target="blank_"><img src="/images/icons/google-maps.png" class="img-fluid"
                                            alt=""></a> <br><br><br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </section>





    @if ($posts->count() > 0)
        <section id="blog">
            <div class="cabecera">
                <h3 style="text-align: center; text-transform: uppercase;" class="mt-5">
                    Noticias más relevantes
                </h3>
                <p style="text-align: center;">Encuentra información relevante sobre la industria y novedades sobre
                    nuestras
                    operaciones</p>
            </div>
            <div class="row mt-5">
                @foreach ($posts as $post)
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="card">
                            <div class="contenido-2">
                                <div class="imagen-producto">
                                    <img @if ($post->image) src="{{ Storage::url($post->image->url) }}" @else src="{{ asset('images/banners/bajce-enviar.jpg') }}" @endif class="img-fluid radio" alt="">
                                </div>
                                <div class="info-producto">
                                    <h5>{{ $post->title }}</h5>
                                    <p>{!! $post->extract !!}</p>
                                    <p class="autor">Por: <span>{{ $post->user->name }}
                                            {{ $post->user->last_name }}</span>
                                        <span>|</span> <span>{{ $post->created_at->diffForHumans() }}</span>
                                    </p>
                                    <a href="{{ route('blog.show', $post) }}" class="btn btn-success btn-block">LEER
                                        MÁS</a>
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
    @else
        <section id="blog">
            <div class="cabecera">
                <h3 style="text-align: center; text-transform: uppercase;" class="mt-5">
                    Noticias más relevantes
                </h3>
                <p style="text-align: center;">Proximamente daremos a conocer noticias importantes</p>
            </div>
        </section>
    @endif
    @if ($brands->count() > 0)
        <section id="marcas">
            <div class="cabecera-marcas">
                <h3 style="text-align: center; text-transform: uppercase;" class="mt-5">
                    Marcas con las que trabajamos
                </h3>
                <!-- Place somewhere in the <body> of your page -->
                <div class="flexslider carousel">
                    <ul class="slides">
                        @foreach ($brands as $brand)
                            <li class="p-md-4">
                                <img @if ($brand->image) src="{{ Storage::url($brand->image->url) }}" @else src="{{ asset('images/misc/logo-bajce-vrd-2.png') }}" @endif alt="">
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="boton-entradas">
                <a href="/blog" class="btn btn-primary boton-entradas-2">Ver más</a>
            </div>
        </section>
    @else
        <section id="blog">
            <div class="cabecera">
                <h3 style="text-align: center; text-transform: uppercase;" class="mt-5">
                    Noticias más relevantes
                </h3>
                <p style="text-align: center;">Proximamente daremos a conocer noticias importantes</p>
            </div>
        </section>
    @endif
    @if ($brands->count() > 0)
        <section id="marcas">
            <div class="cabecera-marcas">
                <h3 style="text-align: center; text-transform: uppercase;" class="mt-5">
                    Marcas con las que trabajamos
                </h3>
                <!-- Place somewhere in the <body> of your page -->
                <div class="flexslider carousel">
                    <ul class="slides">
                        @foreach ($brands as $brand)
                            <li class="p-4">
                                <img @if ($brand->image) src="{{ Storage::url($brand->image->url) }}" @else src="{{ asset('images/misc/logo-bajce-vrd-2.png') }}" @endif alt="">
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </section>
    @else
        <section id="marcas">
            <div class="cabecera-marcas">
                <h3 style="text-align: center; text-transform: uppercase;" class="mt-5">
                    Marcas con las que trabajamos
                </h3>
            </div>
        </section>
    @endif
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
        </div>
    </section>

@endsection

@section('js')
    <script>
        $(window).load(function() {
            $('.flexslider').flexslider({
                animation: "slide",
                animationLoop: true,
                itemWidth: 150,
                itemMargin: 25,
                minItems: 1,
                maxItems: 4
            });
        });
    </script>
@endsection
