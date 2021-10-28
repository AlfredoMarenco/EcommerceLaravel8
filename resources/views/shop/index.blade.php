@extends('layouts.template')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/superslides.css') }}">
    <style>
        .botonCenterMen {
            position: absolute;
            left: 42%;
            top: 60%;
        }

        .titleMen {
            color: #fff;
            font-size: 85px;
        }

        .botonCenterWomen {
            position: absolute;
            left: 35% !important;
            top: 60%;
        }
        .titleWomen {
            font-size: 85px !important;
        }

        .collec{
            padding-top: 250px !important;
        } 
        @media (max-width: 500px) {
            .botonCenterMen {
                position: absolute;
                left: 35%;
                top: 50%;
            }

            .titleMen {
                color: #fff;
                font-size: 75px;
            }
        }

        .botonCenterWomen {
            position: absolute;
            left: 44%;
            top: 60%;
        }

        .titleWomen {
            color: #fff;
            font-size: 75px;
        }

        .botonCenterWomen {
            
            left: 25% !important;
            top: 60%;
        }

        @media (max-width: 500px) {
            .botonCenterWomen {
                position: absolute;
                left: 27%;
                top: 50%;
            }

            .titleWomen {
                color: #fff;
                font-size: 75px;
            }
        }
            .collec {
                font-size: 75px !important;
            }

    </style>
@endsection

@section('content')
    <header class="section-header">
        <video autoplay="autoplay" loop="loop" id="vidio_background" preload="auto" muted playsinline>
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



    <!-- ========================= SECTION MAIN END// ========================= -->
    <section id="sec">
        <div class="container">
            <div class="row">
                
                @foreach ($configurations as $configuration)
                    @if ($configuration->name == 'MenLeft')
                        @isset($configuration->image)
                            <div class="col-sm-12 col-md-6 col-lg-6 pt-2">
                                <div
                                    style="background-image: url({{ Storage::url($configuration->image->url) }});background-repeat: no-repeat;background-size: 100%; padding-block-end: 100%; background-position: center; position: relative;">
                                </div>
                            </div>
                        @else
                            <div class="col-sm-12 col-md-6 col-lg-6 pt-2">
                                <div
                                    style="background-image: url('https://ximg.es/1140x445/000/fff');background-repeat: no-repeat;background-size: 100%; padding-block-end: 100%; background-position: center; position: relative;">
                                </div>
                            </div>
                        @endisset
                    @endif
                @endforeach

                @foreach ($configurations as $configuration)
                    @if ($configuration->name == 'MenRight')
                        <div class="col-sm-12 col-md-6 col-lg-6 pt-2">
                            <div
                                style="background-image: url({{ Storage::url($configuration->image->url) }}); background-repeat: no-repeat;background-size: 100%; padding-block-end: 100%; background-position: center; position: relative;">
                                {{--<div class="botonCenterMen text-center">
                                    <h1 class="titleMen">MEN</h1>
                                    <a href="{{ route('shop.products', 'hombre') }}" class="btn btn-primary">ENTER</a>
                                </div>--}}
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>


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
    <section id="ther" class="pt-5">
        <div class="container">
            <div class="row">
                @foreach ($configurations as $configuration)
                    @if ($configuration->name == 'WomenLeft')
                        @isset($configuration->image)
                            <div class="col-sm-12 col-md-6 col-lg-6 pt-2">
                                <div
                                    style="background-image: url({{ Storage::url($configuration->image->url) }});background-repeat: no-repeat;background-size: 100%; padding-block-end: 100%; background-position: center; position: relative;">
                                </div>
                            </div>
                        @else
                            <div class="col-sm-12 col-md-6 col-lg-6 pt-2">
                                <div
                                    style="background-image: url('https://ximg.es/1140x445/000/fff');background-repeat: no-repeat;background-size: 100%; padding-block-end: 100%; background-position: center; position: relative;">
                                </div>
                            </div>
                        @endisset
                    @endif
                @endforeach

                @foreach ($configurations as $configuration)
                    @if ($configuration->name == 'WomenRight')
                        <div class="col-sm-12 col-md-6 col-lg-6 pt-2">
                            <div
                                style="background-image: url({{ Storage::url($configuration->image->url) }}); background-repeat: no-repeat;background-size: 100%; padding-block-end: 100%; background-position: center; position: relative;">
                               {{-- <div class="botonCenterWomen text-center">
                                    <h1 class="titleWomen">WOMEN</h1>
                                    <a href="{{ route('shop.products', 'mujer') }}" class="btn btn-primary">ENTER</a>
                                </div>
                            </div>--}}
                        </div>
                    @endif
                @endforeach
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
                            {{--<h2 class="collec">NEW COLLECTION</h2>--}}
                            <a href="{{ route('galery.index') }}" class="btn btn-primary">GALERIA</a>
                        </div>
                    </div>
                @else
                    <div class="bg-overlay mt-5 mb-5"
                        style="background-image: url({{ asset('template/images/rene/04-NuevaColeccion03-1024x517.jpg') }});">
                        <div class="container justify-content-md-center text-center">
                            {{--<h2 class="collec">NEW COLLECTION</h2>
                            <a href="{{ route('galery.index') }}" class="btn btn-primary ">ENTER</a>--}}
                        </div>
                    </div>
                @endisset
            @endif
        @endforeach
    </section>


    <section id="ther">
        <div class="container pb-5">
            <div class="row">
                @foreach ($configurations as $configuration)
                    @if ($configuration->name == 'PublicLeft')
                        @isset($configuration->image)
                            <div class="col-sm-12 col-md-6 col-lg-6 pt-2">
                                <div
                                    style="background-image: url({{ Storage::url($configuration->image->url) }});background-repeat: no-repeat;background-size: 100%; padding-block-end: 100%; background-position: center; position: relative;">
                                </div>
                            </div>
                        @else
                            <div class="col-sm-12 col-md-6 col-lg-6 pt-2">
                                <div
                                    style="background-image: url('https://ximg.es/1140x445/000/fff');background-repeat: no-repeat;background-size: 100%; padding-block-end: 100%; background-position: center; position: relative;">
                                </div>
                            </div>
                        @endisset
                    @endif
                @endforeach

                @foreach ($configurations as $configuration)
                    @if ($configuration->name == 'PublicRight')
                        <div class="col-sm-12 col-md-6 col-lg-6 pt-2">
                            <div
                                style="background-image: url({{ Storage::url($configuration->image->url) }}); background-repeat: no-repeat;background-size: 100%; padding-block-end: 100%; background-position: center; position: relative;">
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>
    <section> 
        <div class="container pb-5 text-center">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="mapa text-center">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.4654517172157!2d-89.64193518540469!3d20.973971395023042!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f56732dac60f6df%3A0xf7dd1a940362da68!2sEl%20Pich!5e0!3m2!1ses-419!2smx!4v1633206333418!5m2!1ses-419!2smx" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 pich">
                    <img src="{{asset('template/images/rene/logo-nav-2.svg')}}"  width="120" alt="Logo el Pich Mérida">
                    <h3>El Pich Mérida <br> 
                        <span class="lead" style="font-weight: 500; color: rgb(62, 62, 62)">Alojamiento cómodo, económico y seguro en Mérida</span></h3>
                    <p>Calle 84A # 500M x 59 y 59A Centro 97000<br>
                    <span><a href="tel:9991195390">Teléfono: 999 119 5390</a></span></p>
                    
                </div>
            </div>
        </div>
    </section>

    <!-- ========================= SECTION SUBSCRIBE  ========================= -->
    <section class="padding-y-lg bg-verde">
        <div class="container">
            <h1 class="pb-4 text-center" style="color: #fff">
                Suscríbete a nuestro Newsletter
            </h1>

            <div class="row justify-content-md-center">
                <div class="col-lg-4 col-sm-6">
                    <form class="form-row">
                        <div class="col-8">
                            <input class="form-control" placeholder="Escribe tu correo electrónico" type="email" />
                        </div>
                        <!-- col.// -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-block btn-dark">
                                Suscribirme
                            </button>
                        </div>
                        <!-- col.// -->
                    </form>
                    <small class="form-text text-center pt-2" style="color: #fff">No compartiremos tus datos personales con terceros.
                    </small>
                </div>
                <!-- col-md-6.// -->
            </div>
            <div class="text-center pt-4">
                <div class="row espacio-redes" style="color: #fff">
                    <div class="col" >
                        <a href="https://www.facebook.com/elpichdepartamentos" target="_blank" style="color: #fff">Facebook</a>
                    </div>
                    {{--<div class="col">
                        <a href="https://twitter.com/fashionAlonso?fbclid=IwAR3l_ZyGyiXl6Y9gcyFS88jWjReETCdqEZz40zmA9IyiiVQ-vyQ7FPjbxyQ" target="_blank" style="color: #fff">Twitter</a>
                           
                    </div>--}}
                    <div class="col">
                        <a href="https://www.instagram.com/elpichmerida/" target="_blank" style="color: #fff">Instagram</a> <span class="px-2"></span>
                    </div>
                    <div class="col">
                        <div class="row">
                            <a href="http://api.whatsapp.com/send/?phone=529991195390" target="_blank" style="color: #fff"><i class="fab fa-whatsapp"></i> Whatsapp</a>
                        </div> <span class="px-2"></span>
                    </div>
                    <span>
                    <span>
                    <span>
                    {{--<span><a href="{{ route('politicas-de-privacidad') }}" target="_blank">Políticas de privacidad</a></span>
                    <span class="px-3">|</span>
                    <span><a href="{{ route('condiciones-de-uso') }}" target="_blank">Condiciones de uso y compra</a></span>--}}
                </div>
            </div>
        </div>
    </section>
    <!-- ========================= SECTION SUBSCRIBE END// ========================= -->
    {{--<div class="container">
        <div style="text-align: center;">
            <img src="{{ asset('template/images/rene/logo-nav.png') }}" class="img-fluid" alt="" />
        </div>
    </div>--}}
@endsection

@section('js')
    <script src="{{ asset('/js/jquery.superslides.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/jquery.js') }}" type="text/javascript"></script>
@endsection
