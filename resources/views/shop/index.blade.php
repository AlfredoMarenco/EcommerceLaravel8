@extends('layouts.template')


@section('content')
    <header class="section-header">
        <video autoplay="autoplay" loop="loop" id="vidio_background" preload="auto" muted>
            @foreach ($configurations as $configuration)
                @if ($configuration->name == 'Video')
                    <source src="{{ Storage::url($configuration->image->url) }}" type="video/mp4" />
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
                        <div class="col-lg-6 col-md-6 col-sm-12 izq"
                            style="background-image: url({{ Storage::url($configuration->image->url) }});">
                        </div>
                    @endif
                @endforeach

                @foreach ($configurations as $configuration)
                    @if ($configuration->name == 'MenRight')
                        <div class="col-lg-6 col-md-6 col-sm-12 der"
                            style="background-image: url({{ Storage::url($configuration->image->url) }});">
                    @endif
                @endforeach
                <div class="medio">
                    <h1>MEN</h1>
                    <a href="{{ route('shop.products', 'hombre') }}" class="btn btn-primary">ENTER</a>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- ========================= SECTION SLIDER  ========================= -->
    <div id="mainCarousel" class="carousel slide" data-ride="carousel">
        {{-- <ol class="carousel-indicators">
            <li data-target="#mainCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#mainCarousel" data-slide-to="1"></li>
            <li data-target="#mainCarousel" data-slide-to="2"></li>
            <li data-target="#mainCarousel" data-slide-to="3"></li>
        </ol> --}}
        <div class="carousel-inner slider">
            @foreach ($configurations as $configuration)
                @if ($configuration->name == 'Slider')
                    @foreach ($configuration->images as $image)
                        <div class="carousel-item slider @if ($loop->first) active @endif
                            ">
                            <img class="d-block" src="{{ Storage::url($image->url) }}" alt="Second slide" />
                        </div>
                    @endforeach
                @endif
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#mainCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#mainCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


    <section id="tsec">
        <div class="container">
            <div class="row">
                @foreach ($configurations as $configuration)
                    @if ($configuration->name == 'WomenLeft')
                        <div class="col-lg-6 col-md-6 col-sm-12 izq"
                            style="background-image: url({{ Storage::url($configuration->image->url) }});">
                        </div>
                    @endif
                @endforeach

                @foreach ($configurations as $configuration)
                    @if ($configuration->name == 'WomenRight')
                        <div class="col-lg-6 col-md-6 col-sm-12 der"
                            style="background-image: url({{ Storage::url($configuration->image->url) }});">
                    @endif
                @endforeach
                <div class="tmedio">
                    <h1>WOMEN</h1>
                    <a href="{{ route('shop.products', 'mujer') }}" class="btn btn-primary">ENTER</a>
                </div>
            </div>
        </div>
        </div>
    </section>


    <!-- =========================
                                                        <hr>
                                                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                                            <div class="carousel-inner">
                                                                <div class="carousel-item active">
                                                                    <img src="{{ asset('template/images/rene/slider-4.jpg') }}" class="d-block wv-100 h-100" alt="..." />
                                                                </div>
                                                                <div class="carousel-item">
                                                                    <img src="{{ asset('template/images/rene/slider-4.jpg') }}" class="d-block w-100 h-100" alt="..." />
                                                                </div>
                                                            </div>
                                                            <a class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                                <span class="sr-only">Previous</span>
                                                            </a>
                                                            <a class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                                <span class="sr-only">Next</span>
                                                            </a>
                                                        </div>

                                                        <section id="ther">
                                                            <div class="container mt-5 mb-5">
                                                                <div class="row">
                                                                    <div class="col-lg-6 col-md-6 col-sm-12 izq"
                                                                        style="background-image: url({{ asset('template/images/rene/02-imagencuadrada03-1-1.jpg') }});">
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-6 col-sm-12 der"
                                                                        style="background-image: url({{ asset('template/images/rene/02-imagencuadrada06.jpg') }});">
                                                                        <div class="medio">
                                                                            <h1>MEN</h1>
                                                                            <a href="" class="btn btn-primary">ENTER</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </section>  -->
    <!-- find de segundo slider -->



    <section id="new-collection">
        <div class="bg-overlay mt-5 mb-5"
            style="background-image: url({{ asset('template/images/rene/04-NuevaColeccion03-1024x517.jpg') }});">
            <div class="container interior">
                <h2 class="collec">NEW COLLECTION</h2>
                <a href="{{ route('galery.index') }}" class="btn btn-primary">ENTER</a>
            </div>
        </div>
    </section>



    <section id="ther">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 izq"
                    style="background-image: url({{ asset('template/images/rene/02-imagencuadrada03-1-1.jpg') }});">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 der"
                    style="background-image: url({{ asset('template/images/rene/02-imagencuadrada06.jpg') }});">
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
                <span><a href="">Politicas de privacidad</a></span>
                <span class="px-3">|</span>
                <span><a href="">Condiciones de uso y compra</a></span>
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
