@extends('layouts.template')


@section('content')
    <header class="section-header">
        <video autoplay="autoplay" loop="loop" id="vidio_background" preload="auto" muted>
            <source src="{{ asset('template/images/rene/01videobase-06.mp4') }}" type="video/mp4" />
        </video>
    </header>

    <!-- ========================= SECTION MAIN END// ========================= -->

    <section id="sec">
        <div class="container">
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
    </section>

    <!-- ========================= SECTION SLIDER  ========================= -->
    <div id="mainCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#mainCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#mainCarousel" data-slide-to="1"></li>
            <li data-target="#mainCarousel" data-slide-to="2"></li>
            <li data-target="#mainCarousel" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner slider">
            <div class="carousel-item slider active">
                <img class="d-block" src="{{ asset('template/images/rene/03-slider20-1536x644.jpg') }}"
                    alt="Second slide" />
            </div>
            <div class="carousel-item slider">
                <img class="d-block" src="{{ asset('template/images/rene/03-slider23-1536x644.jpg') }}"
                    alt="Third slide" />
            </div>
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
                <a href="" class="btn btn-primary">ENTER</a>
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
                <span><a href="">Facebook</a></span> <span class="px-3">|</span>
                <span><a href="">Twitter</a></span> <span class="px-3">|</span>
                <span><a href="">Instagram</a></span> <span class="px-3">|</span>
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
