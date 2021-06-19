@extends('layouts.bajce')
@section('title', 'Nosotros')
@section('content')
    <section id="header-nosotros">
        <div class="container">
            <div class="bg-nosotros">
                <div class="cont-nosotros">
                    <div class="imagen-nosotros">
                        <img src="/images/misc/logo-bajce-bco-2.png" class="img-fluid" alt="">
                    </div>
                    <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sed justo faucibus
                        tortor venenatis, facilisis. Sed pellentesque quis nullam iaculis non sit porta odio. Congue dictum
                        maecenas ultrices cursus purus nunc vel. Ipsum condimentum magna massa adipiscing suspendisse.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="videos">
        <div class="container">
            <div class="cabecera-videos mb-5">
                <h3>IMPULSAMOS TU CREATIVIDAD</h3>
            </div>
            <div class="row">
                @foreach ($videos as $video)
                    @if ($videos->count() == 1)
                        <div class="col-lg-12 col-md-12 col-sm-12 mb-5">
                            <div class="embed-responsive embed-responsive-16by9">
                                {!! $video->url !!}
                            </div>
                        </div>
                    @else
                        <div class="col-lg-4 col-md-4 col-sm-12 mb-5">
                            <div class="embed-responsive embed-responsive-16by9">
                                {!! $video->url !!}
                            </div>
                        </div>
                    @endif

                @endforeach
            </div>
        </div>
    </section>

    <section id="sucursales-nosotros">
        <div class="container">
            <div class="sucursales-change" style="text-align: center;">
                <h2>SUCURSALES</h2>
                <p> MÉRIDA
                    <span>-</span>
                    <span>CANCÚN</span>
                </p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6 mb-4">
                    <div class="detalles-sucursal">

                        <img src="/images/misc/logo-bajce-vrd-2.png" alt="" class="img-fluid">
                        <h4 class="mt-4">MADERAS ORIENTE</h4>
                        <p class="lead" style="text-transform: uppercase;">Calle 65 N° 160 por 11 y 14 Col. Miraflores <br>
                            C.P. 97179, Mérida, Yucatán, México <br>
                            <span>
                                (999) 983 0353 / (999) 983 1026 <br>(999) 983 0592 / (999) 983 0376
                            </span>
                        </p>
                        <img src="/images/icons/google-maps.png" class="img-fluid" alt="">


                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 mb-4">
                    <div class="detalles-sucursal">

                        <img src="/images/misc/logo-bajce-vrd-2.png" alt="" class="img-fluid">
                        <h4 class="mt-4">MADERAS ORIENTE</h4>
                        <p class="lead" style="text-transform: uppercase;">Calle 65 N° 160 por 11 y 14 Col. Miraflores <br>
                            C.P. 97179, Mérida, Yucatán, México <br>
                            <span>
                                (999) 983 0353 / (999) 983 1026 <br>(999) 983 0592 / (999) 983 0376
                            </span>
                        </p>
                        <img src="/images/icons/google-maps.png" class="img-fluid" alt="">


                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 mb-4">
                    <div class="detalles-sucursal">

                        <img src="/images/misc/logo-bajce-vrd-2.png" alt="" class="img-fluid">
                        <h4 class="mt-4">MADERAS ORIENTE</h4>
                        <p class="lead" style="text-transform: uppercase;">Calle 65 N° 160 por 11 y 14 Col. Miraflores <br>
                            C.P. 97179, Mérida, Yucatán, México <br>
                            <span>
                                (999) 983 0353 / (999) 983 1026 <br>(999) 983 0592 / (999) 983 0376
                            </span>
                        </p>
                        <img src="/images/icons/google-maps.png" class="img-fluid" alt="">


                    </div>
                </div>
            </div>
            <div class="sucursales-2 mt-5">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6 mb-4">
                        <div class="detalles-sucursal">

                            <img src="/images/misc/logo-bajce-vrd-2.png" alt="" class="img-fluid">
                            <h4 class="mt-4">MADERAS ORIENTE</h4>
                            <p class="lead" style="text-transform: uppercase;">Calle 65 N° 160 por 11 y 14 Col. Miraflores
                                <br> C.P. 97179, Mérida, Yucatán, México <br>
                                <span>
                                    (999) 983 0353 / (999) 983 1026 <br>(999) 983 0592 / (999) 983 0376
                                </span>
                            </p>
                            <img src="/images/icons/google-maps.png" class="img-fluid" alt="">


                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 mb-4">
                        <div class="detalles-sucursal">

                            <img src="/images/misc/logo-bajce-vrd-2.png" alt="" class="img-fluid">
                            <h4 class="mt-4">MADERAS ORIENTE</h4>
                            <p class="lead" style="text-transform: uppercase;">Calle 65 N° 160 por 11 y 14 Col. Miraflores
                                <br> C.P. 97179, Mérida, Yucatán, México <br>
                                <span>
                                    (999) 983 0353 / (999) 983 1026 <br>(999) 983 0592 / (999) 983 0376
                                </span>
                            </p>
                            <img src="/images/icons/google-maps.png" class="img-fluid" alt="">


                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 mb-4">
                        <div class="detalles-sucursal">

                            <img src="/images/misc/logo-bajce-vrd-2.png" alt="" class="img-fluid">
                            <h4 class="mt-4">MADERAS ORIENTE</h4>
                            <p class="lead" style="text-transform: uppercase;">Calle 65 N° 160 por 11 y 14 Col. Miraflores
                                <br> C.P. 97179, Mérida, Yucatán, México <br>
                                <span>
                                    (999) 983 0353 / (999) 983 1026 <br>(999) 983 0592 / (999) 983 0376
                                </span>
                            </p>
                            <img src="/images/icons/google-maps.png" class="img-fluid" alt="">


                        </div>
                    </div>
                </div>
            </div>
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
                        <img @if ($brand->image) src="{{ Storage::url($brand->image->url) }}" @else src="{{ asset('images/misc/logo-bajce-vrd-2.png') }}" @endif class="img-fluid" alt="">
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
