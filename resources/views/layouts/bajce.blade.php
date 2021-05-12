<!DOCTYPE HTML>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="pragma" content="no-cache" />
    <meta http-equiv="cache-control" content="max-age=604800" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Grupo Bajce</title>

    <link href="{{ asset('images/favicon.ico') }}" rel="shortcut icon" type="image/x-icon">

    <!-- jQuery -->
    <script src="{{ asset('js/jquery-2.0.0.min.js') }}" type="text/javascript"></script>

    <!-- Bootstrap4 files-->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" />

    <!-- Font awesome 5 -->
    <link href="{{ asset('fonts/fontawesome/css/all.min.css') }}" type="text/css" rel="stylesheet">

    <!-- custom style -->
    <link href="{{ asset('css/ui.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" type="text/css" />

    <!-- custom javascript -->
    <script src="{{ asset('js/script.js') }}" type="text/javascript"></script>

</head>

<body>


    <header class="section-header fixed-top">

        <nav class="navbar d-none d-md-flex p-md-0 navbar-expand-sm navbar-light border-bottomfixed-top bg-light">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTop4"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTop4">

                    <ul class="navbar-nav m-auto">
                        <li>
                            <a href="mailto:contacto@bajce.com" class="nav-link"> <i
                                    class="fas fa-envelope-open-text"></i> contacto@bajce.com</a>
                        </li>
                        <span class="nav-link">|</span>
                        <li>
                            <a href="#" class="nav-link"> <i class="fa fa-phone-square"></i> 999 981 1160</a>
                        </li>
                    </ul> <!-- list-inline //  -->
                </div> <!-- navbar-collapse .// -->
            </div> <!-- container //  -->
        </nav>

        <div class="container">
            <section id="header-main" class="header-main border-bottom">
                <div class="row row-md">
                    <div class="col-3 col-sm col-md col-lg  flex-grow-0">
                        <a href="/" class="brand-wrap">
                            <img class="logo" src="/images/misc/logo-bajce-vrd.png">
                        </a> <!-- brand-wrap.// -->
                    </div>
                    <div class="col-6 col-sm col-md col-lg flex-md-grow-0">
                    </div> <!-- col.// -->
                    <div class="col-lg-6 col-xl col-md-5 col-sm-12 flex-grow-1">
                        {!! Form::open(['class' => 'search-header']) !!}
                        <div class="input-group">
                            {!! Form::text('search', null, ['class' => 'form-control']) !!}
                            {!! Form::select('category', \App\Models\Category::pluck('name', 'id'), null, ['class' => 'custom-select border-left']) !!}
                        </div>
                        {!! Form::close() !!}
                    </div> <!-- col.// -->
                    <div class="col col-lg col-md flex-grow-0">
                        <a href="{{ route('cart') }}" class="nav-link"> <i class="fa fa-shopping-cart"></i> </a>
                    </div>
                    <div class="col col-lg col-md flex-grow-0">
                        <a href="/perfil" class="nav-link"> <i class="fa fa-user"></i> </a>
                    </div>
                    <span>
                        <div class="col col-lg col-md flex-grow-0">
                            <a href="/login" class="btn btn-primary">Iniciar sesión</a>
                        </div>
                    </span>
                </div> <!-- row.// -->
            </section> <!-- header-main .// -->

            <nav class="navbar navbar-main navbar-expand pl-0">
                <ul class="navbar-nav flex-wrap m-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Inicio</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/nosotros">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('catalogue.index') }}">Catálogos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('shop.index') }}">Tienda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('blog.index') }}">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contacto</a>
                    </li>
                </ul>
            </nav> <!-- navbar-main  .// -->

        </div> <!-- container.// -->
    </header> <!-- section-header.// -->

    @yield('content')


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
                                    <li> <a href="/nosotros">Nosotros</a></li>
                                    <li> <a href="/catalogo">Catálogos</a></li>
                                    <li> <a href="/tienda">Tienda</a></li>

                                </ul>
                            </div>
                            <div class="col-6">
                                <ul class="list-unstyled">

                                    <li> <a href="/blog">Blog</a></li>
                                    <li> <a href="#">Contacto</a></li>

                                </ul>
                            </div>
                        </div>



                        <p class="text-white-50 mb-2">Síguenos en redes sociales</p>
                        <div>
                            <a href="#" class="btn btn-icon btn-outline-light"><i class="fab fa-facebook-f"></i></a>

                            <a href="#" class="btn btn-icon btn-outline-light"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="btn btn-icon btn-outline-light"><i class="fab fa-youtube"></i></a>
                        </div>

                    </aside>

                    <aside class="col-md-4 col-12">
                        <article class="mr-md-4">
                            <h5 class="title">Contáctanos</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer in feugiat lorem. </p>
                            <ul class="list-icon">
                                <li> <i class="icon fa fa-map-marker"> </i>542 Fake Street, Cityname 10021 Netheerlends
                                </li>
                                <li> <i class="icon fa fa-envelope"> </i> info@example.com</li>
                                <li> <i class="icon fa fa-phone"> </i> (800) 060-0730, (800) 060-0730</li>
                                <li> <i class="icon fa fa-clock"> </i>Mon-Sat 10:00pm - 7:00pm</li>
                            </ul>
                        </article>
                    </aside>
                </div> <!-- row.// -->
            </section> <!-- footer-top.// -->

            <section class="text-center">
                <p class="text-white">
                    <a href="" style="text-decoration: none; color: #fff;">Política de privacidad</a>
                    <span>
                        -
                    </span>
                    <a href="" style="text-decoration: none; color: #fff;">Términos de uso</a>
                </p>
                <p class="text-muted"> &copy 2021 Grupo Bajce, Todos los derechos reservados </p>
                <br>
            </section>
    </footer>
    <!-- ========================= FOOTER END // ========================= -->
    @livewireScripts
</body>

</html>
