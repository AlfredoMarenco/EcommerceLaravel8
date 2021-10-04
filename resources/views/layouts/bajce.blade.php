<!DOCTYPE HTML>
<html lang="es">

<head>
    <meta name="facebook-domain-verification" content="cplrzmke5me3xagafb6cy8w6xgz02c" />
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-181054511-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-181054511-1');
    </script>

    <meta charset="utf-8">
    <meta http-equiv="pragma" content="no-cache" />
    <meta http-equiv="cache-control" content="max-age=604800" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>@yield('title') | Grupo Bajce</title>

    <!-- Open Graph para Facebook -->
    <meta property="og:title" content=@yield('titleFacebook')>
    <meta property="og:type" content="website">
    <meta property="og:url" content="http://www.bajce.com/">
    <meta property="og:image" content=@yield('imageFacebook')>
    <meta property="og:description" content="Grupo Bajce">
    <meta property="og:site_name" content="Grupo Bajce">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content=@yield('titleTwitter')>
    <meta name="twitter:description" content="Grupo Bajce">
    <meta name="twitter:creator" content=@yield('authTwitter')>
    <meta name="twitter:image" content=@yield('imageTwitter')>

    <!-- Schema.org para Google+ -->
    <meta itemprop="name" content=@yield('titleMeta')>
    <meta itemprop="description" content="Grupo Bajce">
    <meta itemprop="image" content=@yield('imageMeta')>

    <link href="{{ asset('images/favicon.ico') }}" rel="shortcut icon" type="image/x-icon">

    <!-- jQuery -->
    <script src="{{ asset('js/jquery-2.0.0.min.js') }}" type="text/javascript"></script>

    <!-- Bootstrap4 files-->
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" />

    <!-- Font awesome 5 -->
    <link href="{{ asset('fonts/fontawesome/css/all.min.css') }}" type="text/css" rel="stylesheet">

    <!-- custom style -->
    <link href="{{ asset('css/ui.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('vendor/flexslider/flexslider.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/glider-js/1.7.7/glider.min.css"
        integrity="sha512-YM6sLXVMZqkCspZoZeIPGXrhD9wxlxEF7MzniuvegURqrTGV2xTfqq1v9FJnczH+5OGFl5V78RgHZGaK34ylVg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- custom javascript -->
    <script src="{{ asset('js/script.js') }}" type="text/javascript"></script>

    @yield('css')

    <!-- Facebook Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '2877616512502507');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=2877616512502507&ev=PageView&noscript=1" /></noscript>
    <!-- End Facebook Pixel Code -->
    <script src="https://www.google.com/recaptcha/api.js?render=6Ld-QKscAAAAADoOdY66_JQJPPz5omDhFSkYHIHQ"></script>
    <script>
        function onClick(e) {
          e.preventDefault();
          grecaptcha.ready(function() {
            grecaptcha.execute('6Ld-QKscAAAAADoOdY66_JQJPPz5omDhFSkYHIHQ', {action: 'submit'
            }).then(function(token) {
                // Add your logic to submit to your backend server here.
            });
          });
        }
    </script>
</head>

<body>

    <header class="section-header fixed-top">
        <!--Nueva-->
        <nav class="navbar navbar-dark navbar-default bg-dark d-block d-sm-none pt-2">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="pt-2 pb-2">
                    <a href="/" class="brand-wrap">
                        <img class="logo img-fluid" src="{{ asset('/images/misc/bajce-bco.png') }}">
                    </a> <!-- brand-wrap.// -->

                    <!--<a class="navbar-brand" href="#"><img class="logo" src="/images/misc/logo-bajce-vrd.png"></a>-->
                </div>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <i class="fas fa-bars"></i>


                </button>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav ">
                        <li class="nav-item active">
                            <a class="nav-link" href="/">Inicio</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('about') }}">Nosotros</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('catalogue.index') }}">Catálogos</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('shop.index') }}">Tienda</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('blog.index') }}">Blog</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#" data-toggle="modal"
                                data-target="#ventanaModal">Contacto</a>
                        </li>
                        <li class="nav-item active">
                            <a href="mailto:info@bajce.com" class="nav-link"> <i
                                    class="fas fa-envelope-open-text"></i>
                                info@bajce.com</a>
                        </li>
                        <li class="nav-item active">
                            <a href="tel:9999446707" class="nav-link"> <i class="fa fa-phone-square"></i> (999)
                                221
                                1629</a>
                        </li>

                    </ul>

                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <!-- END Nueva-->
        <nav class="navbar d-none d-md-block p-md-0 navbar-expand-sm navbar-light border-bottomfixed-top bg-light">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTop4"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTop4">
                    <ul class="navbar-nav m-auto">
                        <li>
                            <a href="mailto:info@bajce.com" class="nav-link"> <i
                                    class="fas fa-envelope-open-text"></i>
                                info@bajce.com</a>
                        </li>
                        <span class="nav-link">|</span>
                        <li>
                            <a href="tel:9999446707" class="nav-link"> <i class="fa fa-phone-square"></i> (999)
                                221
                                1629</a>
                        </li>
                    </ul> <!-- list-inline //  -->
                </div> <!-- navbar-collapse .// -->
            </div> <!-- container //  -->
        </nav>

        <div class="container-fluid">

            <section id="header-main" class="header-main border-bottom">
                <div class="row row-md">
                    <div class="col-3 col-sm col-md col-lg disp  flex-grow-0">
                        <a href="/" class="brand-wrap">
                            <img class="logo" src="/images/misc/logo-bajce-vrd.png">
                        </a> <!-- brand-wrap.// -->
                    </div>
                    <div class="col-6 col-sm col-md col-lg flex-md-grow-0">
                    </div> <!-- col.// -->
                    <div class="col-lg-6 col-xl col-md-5 col-sm-12 flex-grow-1">
                        {!! Form::open(['route' => 'search', 'method' => 'get', 'class' => 'search-header']) !!}
                        @csrf
                        <div class="input-group">
                            {!! Form::text('search', null, ['class' => 'form-control']) !!}
                            {{-- <select name="category_id" class="custom-select border-left">
                                <option value="0" class="text-xs">Todos los productos</option>
                                @foreach (App\Models\Category::all() as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select> --}}
                            {{-- {!! Form::select('category_id', \App\Models\Category::pluck('name', 'id'), null, ['class' => 'custom-select border-left']) !!} --}}
                            <button class="btn btn-primary rounded-right" type="submit"><i
                                    class="fas fa-search"></i></button>
                        </div>
                        {!! Form::close() !!}
                    </div> <!-- col.// -->
                    <div class="col col-lg col-md flex-grow-0">
                        <a href="{{ route('cart') }}" class="nav-link"><span
                                class="notify">{{ Cart::instance('default')->count() + Cart::instance('wishlist')->count() }}</span>
                            <i class="fa fa-shopping-cart"></i></a>
                    </div>
                    <div class="col col-lg col-md flex-grow-0">
                        <a href="{{ route('user.profile') }}" class="nav-link"> <i class="fa fa-user"></i>
                        </a>
                    </div>
                    <span>
                        @auth
                            <div class="col col-lg col-md flex-grow-0 mt-2">
                                <b>Hola, {{ auth()->user()->name }} 👋🏻</b>
                            </div>
                        @else
                            <div class="col col-lg col-md flex-grow-0">
                                <a href="/login" class="btn btn-primary">Iniciar sesión</a>
                            </div>
                        @endauth
                    </span>
                </div> <!-- row.// -->

            </section> <!-- header-main .// -->



        </div> <!-- container.// -->
        <div class="disp" style="background-color: #007433;">
            <nav class="navbar navbar-dark  navbar-main navbar-expand pl-0">
                <ul class="navbar-nav flex-wrap m-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Inicio</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('about') }}">Nosotros</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('catalogue.index') }}">Catálogos</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('shop.index') }}">Tienda</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('blog.index') }}">Blog</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#" data-toggle="modal" data-target="#ventanaModal">Contacto</a>
                    </li>
                </ul>
            </nav> <!-- navbar-main  .// -->
        </div>
    </header> <!-- section-header.// -->

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
                            <form class="contact" name="contact-form" method="post"
                                action="{{ route('send.contact') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Nombre</label>
                                    <input type="name" name="name" class="form-control" id="exampleFormControlInput1"
                                        required="required" placeholder="Escribe tu nombre">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Email</label>
                                    <input type="email" name="email" class="form-control"
                                        id="exampleFormControlInput2" required="required"
                                        placeholder="Escribe tu correo electrónico">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput2">Teléfono</label>
                                    <input type="tel" name="phone" class="form-control" id="phone" pattern="[0-9]{10}"
                                        required="required" placeholder="Escribe tu teléfono">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Mensaje</label>
                                    <textarea class="form-control" name="message" id="exampleFormControlTextarea1"
                                        required="required" rows="3"
                                        placeholder="Ejemplo: Hola, me gustaría saber un poco más..."></textarea>
                                </div>
                                <div >
                                    <button class="g-recaptcha btn btn-secondary" 
                                    data-sitekey="6Ld-QKscAAAAADoOdY66_JQJPPz5omDhFSkYHIHQ" 
                                    data-callback='onSubmit' 
                                    data-action='submit'
                                    type="submit">Enviar</button>
                                </div>
                               {{-- <button type="submit" class="btn btn-secondary">Enviar</button>--}}
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
    @yield('content')

    <!--========== NEWSLETTER =============-->
    <section id="newsletter">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <h2>Recibe ofertas especiales</h2>
                    <p>Suscríbete para recibir noticias y promociones exclusivas.</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="formulario-newsletter">
                        <form action="{{ route('newsletter') }}" method="post">
                            @csrf
                            <input type="email" name="email" class="form-control" placeholder="Correo electrónico">
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-12">
                    <div class="boton-newsletter">
                        <button type="submit" class="btn btn-success btn-md btn-block">Suscribirme</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>



    <!-- ========================= FOOTER ========================= -->
    <footer class="section-footer bg-secondary text-white">
        <div class="container">
            <section class="footer-top  padding-y-lg">
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <div class="logo-footer">
                            <img src="/images/misc/logo-bajce-bco.png" class="img-fluid" alt="">
                        </div>
                    </div>
                    <aside class="col-md-4 col-12">
                        <h5 class="title">Mapa del sitio</h5>
                        <div class="row">
                            <div class="col-6">
                                <ul class="list-unstyled">
                                    <li> <a href="{{ route('about') }}">Nosotros</a></li>
                                    <li> <a href="{{ route('catalogue.index') }}">Catálogos</a></li>
                                    <li> <a href="{{ route('shop.index') }}">Tienda</a></li>
                                </ul>
                            </div>
                            <div class="col-6">
                                <ul class="list-unstyled">
                                    <li> <a href="{{ route('blog.index') }}">Blog</a></li>
                                    <li> <a data-dismiss="modal" data-toggle="modal" data-target="#ventanaModal"
                                            href="">Contacto</a></li>
                                </ul>
                            </div>
                        </div>
                        <p class="text-white-50 mb-2">Síguenos en redes sociales</p>
                        <div>
                            <a href="https://www.facebook.com/Bajcegrupo" class="btn btn-icon btn-outline-light"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a href="https://www.instagram.com/grupobajce/" class="btn btn-icon btn-outline-light"><i
                                    class="fab fa-instagram"></i></a>
                            <a href="https://www.youtube.com/user/grupobajce" class="btn btn-icon btn-outline-light"><i
                                    class="fab fa-youtube"></i></a>
                        </div>
                    </aside>
                    <aside class="col-md-4 col-12">
                        <article class="mr-md-4">
                            <h5 class="title">Contáctanos</h5>
                            <p>MADERAS BAJCE, S.A. DE C.V</p>
                            <ul class="list-icon">
                                {{-- <li> <i class="icon fa fa-map-marker"> </i>Calle 19 No. 176 x12 y 14 Col. México Oriente
                                    C.P. 97137
                                </li> --}}
                                <li> <i class="icon fa fa-envelope"> </i> ventasonline@bajce.com</li>
                                <li> <i class="icon fa fa-phone"> </i> (999) 221 1629
                                </li>
                                <li> <i class="icon fa fa-clock"> </i>Lunes a viernes de 9:00 am a 6:00pm
                                    Sábado 9:00 am a 2:00 pm
                                </li>
                            </ul>
                        </article>
                    </aside>
                </div> <!-- row.// -->
            </section> <!-- footer-top.// -->
            <section class="text-center">
                <p class="text-white">
                    <a href="{{ asset('documents/aviso_de_privacidad.pdf') }}" target="_blank"
                        style="text-decoration: none; color: #fff;">Política de privacidad</a>
                    <span>
                        -
                    </span>
                    <a href="{{ asset('documents/terminos_y_condiciones.pdf') }}" target="_blank"
                        style="text-decoration: none; color: #fff;">Términos de uso</a>
                </p>
                <p class="text-muted"> &copy 2021 Grupo Bajce, Todos los derechos reservados </p>
                <br>
            </section>
    </footer>
    <!-- ======================== FOOTER END // ========================= -->
    {{-- <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="tituloVentana" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 id="tituloVentana">AVISO DE INTERRUPCIÓN DEL SERVIDOR</h5>

                    <button class="close" data-dismiss="modal" aria-label="Cerrar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body py-4">
                    <div data-type="countdown" data-id="2658366" class="tickcounter"
                        style="width: 100%; position: relative; padding-bottom: 25%">
                        <a href="//www.tickcounter.com/countdown/2658366/tiempo-restante" title="Tiempo restante">Tiempo
                            restante</a><a href="//www.tickcounter.com/" title="Countdown">Countdown</a>
                    </div>
                    <script>
                        (function(d, s, id) {
                            var js, pjs = d.getElementsByTagName(s)[0];
                            if (d.getElementById(id)) return;
                            js = d.createElement(s);
                            js.id = id;
                            js.src = "//www.tickcounter.com/static/js/loader.js";
                            pjs.parentNode.insertBefore(js, pjs);
                        }(document, "script", "tickcounter-sdk"));
                    </script>
                    <div class="alert alert-success">Todas las funcionalidades y diseño fueron aprobadas el 19 de Julio del 2021</div>
                </div>
            </div>
        </div>
    </div> --}}

    @livewireScripts
    @include('sweetalert::alert')
    <script src="https://widget.sirena.app/get?token=fb863dbedaff4482a2461426d274bbb0"> </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/glider-js/1.7.7/glider.min.js"
        integrity="sha512-tHimK/KZS+o34ZpPNOvb/bTHZb6ocWFXCtdGqAlWYUcz+BGHbNbHMKvEHUyFxgJhQcEO87yg5YqaJvyQgAEEtA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('vendor/flexslider/jquery.flexslider-min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/glider-js/1.7.7/glider.min.js"
        integrity="sha512-tHimK/KZS+o34ZpPNOvb/bTHZb6ocWFXCtdGqAlWYUcz+BGHbNbHMKvEHUyFxgJhQcEO87yg5YqaJvyQgAEEtA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @yield('js')
    @stack('script')
    <script>
        $(document).ready(function() {
            $('#myModal').modal('toggle')
        });
    </script>
</body>

</html>
