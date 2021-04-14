@extends('layouts.template')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/superslides.css') }}">
    <style>
        .botonCenter {
            position: absolute;
            left: 50%;
            top: 60%;
        }

        .title {
            color: #fff;
            font-size: 75px;
        }

        @media (max-width: 500px) {
            .botonCenter {
                position: absolute;
                left: 35%;
                top: 50%;
            }

            .title {
                color: #fff;
                font-size: 75px;
            }
        }

    </style>
@endsection

@section('content')
    <header class="section-header">
        <video autoplay="autoplay" loop="loop" id="vidio_background" preload="auto" muted>
            @foreach ($configurations as $configuration)
                @if ($configuration->name == 'Video')
                    @isset($configuration->image)
                        <source src="{{ Storage::url($configuration->image->url) }}" type="video/mp4" />
                    @else
                        <source src="{{ asset('template/images/rene/01videobase-06.mp4') }}" type="video/mp4" />
                    @endisset
                @endif
            @endforeach
        </video>
    </header>

    <!--Form-->
    <main role="main" class="container">

        <div class="modal fade" id="ventanaModal" tabindex="-1" role="dialog" aria-labelledby="tituloVentana"
            aria-hidden="true">

            <div class="modal-dialog" role="document">

                <div class="modal-content">

                    <div class="modal-header">
                        <h5 id="tituloVentana">Solicita más información </h5>
                        <button class="close" data-dismiss="modal" aria-label="Cerrar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <div class="alert alert-succes">

                            <form class="contact" name="contact-form" method="post" action="enviar.php">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Nombre</label>
                                    <input type="name" name="nombre" class="form-control" id="exampleFormControlInput1"
                                        required="required" placeholder="Escribe tu nombre">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Email</label>
                                    <input type="email" name="email" class="form-control" id="exampleFormControlInput1"
                                        required="required" placeholder="Escribe tu correo electrónico">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Teléfono</label>
                                    <input type="tel" name="telefono" class="form-control" id="phone" pattern="[0-9]{10}"
                                        required="required" placeholder="Escribe tu teléfono">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Mensaje</label>
                                    <textarea class="form-control" name="mensaje" id="exampleFormControlTextarea1"
                                        required="required" rows="3"
                                        placeholder="Ejemplo: Hola, me gustaría saber un poco más..."></textarea>
                                </div>
                                <div class="g-recaptcha" data-sitekey="6LdBBc8ZAAAAACqRaUl6mmUgAfKhUXYmCUpq5nRK"
                                    style="margin-bottom: 10px;"></div>

                                <button type="submit" class="btn btn-secondary">Enviar</button>
                            </form>


                        </div>
                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cerrar</button>
                    </div>

                </div>

            </div>


        </div>
    </main>

    <!-- ========================= SECTION MAIN END// ========================= -->
    <section id="sec">
        <div class="container">
            <div class="row">
                @foreach ($configurations as $configuration)
                    @if ($configuration->name == 'MenLeft')
                        @isset($configuration->image)
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <div
                                    style="background-image: url({{ Storage::url($configuration->image->url) }});background-repeat: no-repeat;background-size: 100%; padding-block-end: 100%; background-position: center; position: relative;">
                                </div>
                            </div>
                        @else
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <div
                                    style="background-image: url('https://ximg.es/1140x445/000/fff');background-repeat: no-repeat;background-size: 100%; padding-block-end: 100%; background-position: center; position: relative;">
                                </div>
                            </div>
                        @endisset
                    @endif
                @endforeach

                @foreach ($configurations as $configuration)
                    @if ($configuration->name == 'MenRight')
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <div
                                style="background-image: url({{ Storage::url($configuration->image->url) }}); background-repeat: no-repeat;background-size: 100%; padding-block-end: 100%; background-position: center; position: relative;">
                                <div class="botonCenter text-center">
                                    <h1 class="title">MEN</h1>
                                    <a href="{{ route('shop.products', 'hombre') }}" class="btn btn-primary">ENTER</a>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>

    {{-- <section id="sec">
        <div class="container">

            <div class="row">
                @foreach ($configurations as $configuration)
                    @if ($configuration->name == 'MenLeft')
                        @isset($configuration->image)
                            <div class="col-lg-6 col-md-6 col-sm-12 izq"
                                style="background-image: url({{ Storage::url($configuration->image->url) }});">
                            </div>
                        @else
                            <div class="col-lg-6 col-md-6 col-sm-12 izq"
                                style="background-image: url('https://ximg.es/1140x445/000/fff');">
                            </div>
                        @endisset
                    @endif
                @endforeach

                @foreach ($configurations as $configuration)
                    @if ($configuration->name == 'MenRight')
                        @isset($configuration->image)
                            <div class="col-lg-6 col-md-6 col-sm-12 der"
                                style="background-image: url({{ Storage::url($configuration->image->url) }});">
                            @else
                                <div class="col-lg-6 col-md-6 col-sm-12 der"
                                    style="background-image: url('https://ximg.es/1140x445/000/fff');">
                                @endisset
                    @endif
                @endforeach
                <div class="medio">
                    <h1>MEN</h1>
                    <a href="{{ route('shop.products', 'hombre') }}" class="btn btn-primary">ENTER</a>
                </div>
            </div>
        </div>
        </div>
    </section> --}}

    <!--slider Jquery-->
    <div id="slides">
        <ul class="slides-container">
            @foreach ($configurations as $configuration)
                @if ($configuration->name == 'Slider')
                    @foreach ($configuration->images as $images)
                        <li>
                            <img src="{{ Storage::url($images->url) }}" alt="">
                        </li>
                    @endforeach
                @endif
            @endforeach
        </ul>
        <nav class="slides-navigation">
            <a href="#" class="next">&#62</a>
            <a href="#" class="prev">&#60</a>
        </nav>
    </div>
    <!-- end slider Jquery-->

    <section id="ther">
        <div class="container mt-5 mb-5">
            <div class="row">
                @foreach ($configurations as $configuration)
                    @if ($configuration->name == 'WomenLeft')
                        @isset($configuration->image)
                            <div class="col-lg-6 col-md-6 col-sm-12 izq"
                                style="background-image: url({{ Storage::url($configuration->image->url) }});">
                            </div>
                        @else
                            <div class="col-lg-6 col-md-6 col-sm-12 izq"
                                style="background-image: url('https://ximg.es/1140x445/000/fff');">
                            </div>
                        @endisset
                    @endif
                @endforeach

                @foreach ($configurations as $configuration)
                    @if ($configuration->name == 'WomenRight')
                        @isset($configuration->image)
                            <div class="col-lg-6 col-md-6 col-sm-12 der"
                                style="background-image: url({{ Storage::url($configuration->image->url) }});">
                            @else
                                <div class="col-lg-6 col-md-6 col-sm-12 der"
                                    style="background-image: url('https://ximg.es/1140x445/000/fff');">
                                @endisset
                    @endif
                @endforeach
                <div class="medio">
                    <h1>WOMEN</h1>
                    <a href="" class="btn btn-primary">ENTER</a>
                </div>
            </div>
        </div>
        </div>
    </section>



    <section id="new-collection">
        @foreach ($configurations as $configuration)
            @if ($configuration->name == 'Collection')
                @isset($configuration->image)
                    <div class="bg-overlay mt-5 mb-5"
                        style="background-image: url({{ Storage::url($configuration->image->url) }});">
                        <div class="container interior">
                            <h2 class="collec">NEW COLLECTION</h2>
                            <a href="{{ route('galery.index') }}" class="btn btn-primary">ENTER</a>
                        </div>
                    </div>
                @else
                    <div class="bg-overlay mt-5 mb-5"
                        style="background-image: url({{ asset('template/images/rene/04-NuevaColeccion03-1024x517.jpg') }});">
                        <div class="container interior">
                            <h2 class="collec">NEW COLLECTION</h2>
                            <a href="{{ route('galery.index') }}" class="btn btn-primary">ENTER</a>
                        </div>
                    </div>
                @endisset
            @endif
        @endforeach
    </section>



    <section id="ther">
        <div class="container">
            <div class="row">
                @foreach ($configurations as $configuration)
                    @if ($configuration->name == 'PublicLeft')
                        @isset($configuration->image)
                            <div class="col-lg-6 col-md-6 col-sm-12 izq"
                                style="background-image: url({{ Storage::url($configuration->image->url) }});">
                            </div>
                        @else
                            <div class="col-lg-6 col-md-6 col-sm-12 izq"
                                style="background-image: url('https://ximg.es/1140x445/000/fff');">
                            </div>
                        @endisset
                    @endif
                @endforeach

                @foreach ($configurations as $configuration)
                    @if ($configuration->name == 'PublicRight')
                        @isset($configuration->image)
                            <div class="col-lg-6 col-md-6 col-sm-12 der"
                                style="background-image: url({{ Storage::url($configuration->image->url) }});">
                            @else
                                <div class="col-lg-6 col-md-6 col-sm-12 der"
                                    style="background-image: url('https://ximg.es/1140x445/000/fff');">
                                @endisset
                    @endif
                @endforeach
                <div class="medio sol"></div>
            </div>
        </div>
        </div>
    </section>

    <!-- ========================= SECTION SUBSCRIBE  ========================= -->
    <section class="padding-y-lg bg-light">
        <div class="container">
            <h1 class="pb-4 text-center">
                Suscríbete a nuestro Newsletter
            </h1>

            <div class="row justify-content-md-center">
                <div class="col-lg-4 col-sm-6">
                    <form class="form-row">
                        <div class="col-8">
                            <input class="form-control" placeholder="Your Email" type="email" />
                        </div>
                        <!-- col.// -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-block btn-dark">
                                Suscribirme
                            </button>
                        </div>
                        <!-- col.// -->
                    </form>
                    <small class="form-text text-center">No compartiremos tus datos personales con terceros.
                    </small>
                </div>
                <!-- col-md-6.// -->
            </div>
            <div class="row justify-content-md-center pt-5">
                <span><a href="https://www.facebook.com/Rene-Alonsomx-103679577867663">Facebook</a></span> <span
                    class="px-3">|</span>
                <span><a
                        href="https://twitter.com/fashionAlonso?fbclid=IwAR3l_ZyGyiXl6Y9gcyFS88jWjReETCdqEZz40zmA9IyiiVQ-vyQ7FPjbxyQ">Twitter</a></span>
                <span class="px-3">|</span>
                <span><a href="https://www.instagram.com/renealonso.mx/">Instagram</a></span> <span class="px-3">|</span>
                <span><a href="{{ route('politicas-de-privacidad') }}">Politicas de privacidad</a></span>
                <span class="px-3">|</span>
                <span><a href="{{ route('condiciones-de-uso') }}">Condiciones de uso y compra</a></span>
            </div>
        </div>
    </section>
    <!-- ========================= SECTION SUBSCRIBE END// ========================= -->
    <div class="container">
        <div style="text-align: center;">
            <img src="{{ asset('template/images/rene/logo-nav.png') }}" class="img-fluid" alt="" />
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('/js/jquery.superslides.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/jquery.js') }}" type="text/javascript"></script>
@endsection
