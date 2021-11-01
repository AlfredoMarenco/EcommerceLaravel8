@extends('layouts.bajce')
@section('title', 'Nosotros')

@section('css')
    <style>
        .carousel li {
            display: none;
        }

    </style>
@endsection
@section('content')
    <section id="header-nosotros" class="fade-in">
        <div class="container">
            <div class="bg-nosotros">
                <div class="cont-nosotros">
                    <div class="imagen-nosotros">
                        <img src="/images/misc/logo-bajce-bco-2.png" class="img-fluid" alt="">
                    </div>
                    <p class="mt-3">Más de 37 años de historia ligada a los productos forestales de calidad, que inspiran
                        soluciones que edifican y mejoran la vida de las personas.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="videos" class="fade-in-2">
        <div class="container">
            <div class="cabecera-videos mb-5">
                <p class="text-center">
                    Compartiendo valores, habilidades y conocimiento que nos impulsan a ser una de las compañías líderes del
                    sureste mexicano que genera las mejores prácticas y estándares de la industria.
                    En nuestros diferentes puntos de venta en Mérida y Cancún día a día continuamos trabajando para
                    ofrecerte un servicio eficiente, con la confianza de ser un socio estratégico que brinda experiencia y
                    apoyo en la creación de grandes proyectos para construcción, carpintería, diseño e interiorismo.
                    Nos impulsa el deseo de innovar, afrontar los retos de la actualidad y seguir compartiendo el camino
                    contigo.
                    Somos de buena madera, la raíz de los grandes proyectos, somos grupo Bajce.
                </p>
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
    <section id="sucursales-1"></section>
    <section id="sucursales" class="fade-in-2">
        <div class="cabecera-sucursales">
            <h1 style="text-align: center; text-transform: uppercase;">
                Nuestras sucursales
            </h1>
        </div>
        <div class="sucur">
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
                                    <h4 style="text-transform: uppercase">Tablered Chuburná</h4>
                                    <p class="lead" style="text-transform: uppercase;">Calle 20 x 23 #107 Chuburná Hidalgo <br>
                                        C.P.
                                        97200, Mérida, Yucatán, México <br>
                                        <span>
                                            (999) 981 1160 / (999) 981 3970
    
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
                                    <p class="lead" style="text-transform: uppercase;">Calle 6 n.357 x 7 y 7-A Col. Gustavo Díaz
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
                                    <img src="/images/icons/periferico.png" alt="Maderas bajce Periférico" class="img-fluid">
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
                <a class="carousel-control-prev text-secondary h4" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="fas fa-angle-double-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next text-secondary h4" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="fas fa-angle-double-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <!--
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators" >
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
                                <h4 style="text-transform: uppercase">TABLERED Chuburná</h4>
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
        </div>-->

    </section>

    <!--
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
                        </section> -->

    <section id="marcas" class="fade-in-2">
        <div class="cabecera-marcas">
            <h3 style="text-align: center; text-transform: uppercase;" class="mt-5">
                Marcas con las que trabajamos
            </h3>
        </div>
        <div>
            <div class="glider-contain">
                <div class="glider">
                    @foreach ($brands as $brand)
                        <div class="px-2 text-center">
                            <img @if ($brand->image) src="{{ Storage::url($brand->image->url) }}" @else src="{{ asset('images/misc/logo-bajce-vrd-2.png') }}" @endif alt="">
                        </div>
                    @endforeach
                </div>
                <button aria-label="Previous" class="glider-prev">«</button>
                <button aria-label="Next" class="glider-next">»</button>
                <div role="tablist" class="dots"></div>
            </div>
        </div>
    </section>



@endsection

@push('script')
    <script>
        window.addEventListener('load', function() {
            var slider = new Glider(document.querySelector('.glider'), {
                slidesToShow: 4,
                slidesToScroll: 4,
                draggable: true,
                arrows: {
                    prev: '.glider-prev',
                    next: '.glider-next'
                },
                responsive: [{
                    // screens greater than >= 775px
                    breakpoint: 360,
                    settings: {
                        // Set to `auto` and provide item width to adjust to viewport
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        itemWidth: 150,
                        duration: 0.25
                    }
                }, {
                    // screens greater than >= 1024px
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 1,
                        itemWidth: 150,
                        duration: 0.25
                    }
                }]
            })
            slideAutoPaly(slider, '.glider');

            function slideAutoPaly(glider, selector, delay = 2000, repeat = true) {
                let autoplay = null;
                const slidesCount = glider.track.childElementCount;
                let nextIndex = 1;
                let pause = true;

                function slide() {
                    autoplay = setInterval(() => {
                        if (nextIndex >= slidesCount) {
                            if (!repeat) {
                                clearInterval(autoplay);
                            } else {
                                nextIndex = 0;
                            }
                        }
                        glider.scrollItem(nextIndex++);
                    }, delay);
                }

                slide();

                var element = document.querySelector(selector);
                element.addEventListener('mouseover', (event) => {
                    if (pause) {
                        clearInterval(autoplay);
                        pause = false;
                    }
                }, 300);

                element.addEventListener('mouseout', (event) => {
                    if (!pause) {
                        slide();
                        pause = true;
                    }
                }, 300);
            }
        })
    </script>
@endpush
