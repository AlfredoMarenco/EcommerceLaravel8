<!DOCTYPE HTML>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="pragma" content="no-cache" />
    <meta http-equiv="cache-control" content="max-age=604800" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <title>Ecommerce Laravel 8</title>

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
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://openpay.s3.amazonaws.com/openpay.v1.min.js"></script>
    <script type='text/javascript' src="https://openpay.s3.amazonaws.com/openpay-data.v1.min.js"></script>

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.conekta.io/js/latest/conekta.js"></script>
    <script src="https://secure.mlstatic.com/sdk/javascript/v1/mercadopago.js"></script>
    @livewireStyles

</head>

<body>
    <header class="section-header">
        <section class="header-main border-bottom">
            <div class="container">
                <div class="row row-sm align-items-center">
                    <div class="col-lg-2 col-md-3 col-6">
                        <a href="{{ route('landing.home') }}" class="brand-wrap">
                            <img class="logo" src="../images/logo.png">
                        </a> <!-- brand-wrap.// -->
                    </div>
                    <div class="col-lg col-sm col-md col-6 flex-grow-0">
                        <div class="category-wrap dropdown d-inline-block float-md-right">
                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-bars"></i> All category
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Machinery / Mechanical Parts / Tools </a>
                                <a class="dropdown-item" href="#">Consumer Electronics / Home Appliances </a>
                                <a class="dropdown-item" href="#">Auto / Transportation</a>
                                <a class="dropdown-item" href="#">Apparel / Textiles / Timepieces </a>
                                <a class="dropdown-item" href="#">Home & Garden / Construction / Lights </a>
                                <a class="dropdown-item" href="#">Beauty & Personal Care / Health </a>
                            </div>
                        </div> <!-- category-wrap.// -->
                    </div> <!-- col.// -->
                    <div class="col-lg  col-md-6 col-sm-12 col">
                        <form action="#" class="search-header">
                            <div class="input-group w-100">
                                <input type="text" class="form-control" style="width:60%;" placeholder="Search">
                                <select class="custom-select border-left" name="category_name">
                                    <option value="">All type</option>
                                    <option value="codex">Special</option>
                                    <option value="comments">Only best</option>
                                    <option value="content">Latest</option>
                                </select>
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form> <!-- search-wrap .end// -->
                    </div> <!-- col.// -->
                    <div class="col-lg-3 col-sm-12 col-md-12 col-12">
                        <div class="widgets-wrap float-md-right">
                            <a href="{{ route('cart') }}" class="widget-header mr-2">
                                <i class="icon icon-sm rounded-circle border fa fa-shopping-cart"></i>
                                <span class="notify">{{ Cart::count() }}</span>
                            </a>
                            <a href="#" class="widget-header mr-2">
                                <i class="icon icon-sm rounded-circle border fa fa-heart"></i>
                            </a>
                            <div class="widget-header dropdown">
                                @auth
                                <a href="{{ route('user.profile') }}">
                                    <div class="icontext">
                                        <div class="icon">
                                            <i class="icon-sm rounded-circle border fa fa-user"></i>
                                        </div>
                                            <div class="text">
                                                <div>{{ Auth::user()->name }} <i class="fa fa-caret-down"></i> </div>
                                                <form method="POST" action="{{ route('logout') }}">
                                                    @csrf
                                                    <a href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                                this.closest('form').submit();">
                                                        <small class="text-muted">Log out</small>
                                                    </a>
                                                </form>
                                            </div>
                                        @else
                                            <div class="text">
                                                <a href="{{ route('login') }}"><small class="text-muted">Sign in <br>
                                                        Register</small></a>
                                            </div>
                                        @endauth

                                    </div>
                                </a>
                            </div> <!-- widget-header .// -->
                        </div> <!-- widgets-wrap.// -->
                    </div> <!-- col.// -->
                </div> <!-- row.// -->
            </div> <!-- container.// -->
        </section> <!-- header-main .// -->


        {{-- <nav class="navbar navbar-main navbar-expand-lg border-bottom">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav4"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="main_nav4">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link pl-0" href="#"> <strong>All category</strong></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Fashion</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Supermarket</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Electronics</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Baby &amp Toys</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Fitness sport</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="http://example.com" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">More</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Foods and Drink</a>
                                <a class="dropdown-item" href="#">Home interior</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Category 1</a>
                                <a class="dropdown-item" href="#">Category 2</a>
                                <a class="dropdown-item" href="#">Category 3</a>
                            </div>
                        </li>
                    </ul>
                </div> <!-- collapse .// -->
            </div> <!-- container .// -->
        </nav> <!-- navbar main end.// --> --}}

    </header> <!-- section-header.// -->
    <!-- section-header.// -->

    @yield('slider')

    @yield('content')

    @yield('profile')

    <!-- ========================= FOOTER ========================= -->
    <footer class="section-footer bg-secondary text-white">
        <div class="container">
            <section class="footer-top  padding-y-lg">
                <div class="row">
                    <aside class="col-md-4 col-12">
                        <article class="mr-md-4">
                            <h5 class="title">Contact us</h5>
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
                    <aside class="col-md col-6">
                        <h5 class="title">Information</h5>
                        <ul class="list-unstyled">
                            <li> <a href="#">About us</a></li>
                            <li> <a href="#">Career</a></li>
                            <li> <a href="#">Find a store</a></li>
                            <li> <a href="#">Rules and terms</a></li>
                            <li> <a href="#">Sitemap</a></li>
                        </ul>
                    </aside>
                    <aside class="col-md col-6">
                        <h5 class="title">My Account</h5>
                        <ul class="list-unstyled">
                            <li> <a href="#">Contact us</a></li>
                            <li> <a href="#">Money refund</a></li>
                            <li> <a href="#">Order status</a></li>
                            <li> <a href="#">Shipping info</a></li>
                            <li> <a href="#">Open dispute</a></li>
                        </ul>
                    </aside>
                    <aside class="col-md-4 col-12">
                        <h5 class="title">Newsletter</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer in feugiat lorem. </p>

                        <form class="form-inline mb-3">
                            <input type="text" placeholder="Email" class="border-0 w-auto form-control" name="">
                            <button class="btn ml-2 btn-warning"> Subscribe</button>
                        </form>

                        <p class="text-white-50 mb-2">Follow us on social media</p>
                        <div>
                            <a href="#" class="btn btn-icon btn-outline-light"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="btn btn-icon btn-outline-light"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="btn btn-icon btn-outline-light"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="btn btn-icon btn-outline-light"><i class="fab fa-youtube"></i></a>
                        </div>

                    </aside>
                </div> <!-- row.// -->
            </section> <!-- footer-top.// -->

            <section class="footer-bottom text-center">
                <p class="text-white">Privacy Policy - Terms of Use - User Information Legal Enquiry Guide</p>
                <p class="text-muted"> &copy 2019 Company name, All rights reserved </p>
                <br>
            </section>
        </div><!-- //container -->
    </footer>
    <!-- ========================= FOOTER END // ========================= -->
    @yield('scripts')
    @livewireScripts
</body>

</html>
