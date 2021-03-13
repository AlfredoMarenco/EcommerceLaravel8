<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="pragma" content="no-cache" />
    <meta http-equiv="cache-control" content="max-age=604800" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <title>Rene Alonso | Shop</title>
    <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <!-- jQuery -->
    <script src="{{ asset('template/js/jquery-2.0.0.min.js') }}" type="text/javascript"></script>

    <!-- Styles-->
    <link rel="stylesheet" href="{{ asset('template/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('template/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('template/css/ui.css') }}" />
    <link rel="stylesheet" href="{{ asset('template/css/responsive.css') }}" />

    <!-- Font awesome 5 -->
    <link href="{{ asset('template/fonts/fontawesome/css/all.min.css') }}" type="text/css" rel="stylesheet" />

    <!-- custom style -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet" />

    <!-- custom javascript -->
    <script src="{{ asset('template/js/script.js') }}" type="text/javascript"></script>

    @yield('css')
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('template/images/rene/logo-nav.png') }}" alt="" width="auto" height="34"
                    class="d-inline-block align-top" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item ms-2">
                        <a class="nav-link active" aria-current="page" href="/">Inicio</a>
                    </li>
                    <li class="nav-item ms-2">
                        <a class="nav-link" href="{{ route('shop.products') }}">Hombre</a>
                    </li>
                    <li class="nav-item ms-2">
                        <a class="nav-link" href="{{ route('shop.products') }}">Mujer</a>
                    </li>
                    <li class="nav-item ms-2">
                        <a class="nav-link" href="{{ route('shop.products') }}" tabindex="-1"
                            aria-disabled="true">Tienda</a>
                    </li>
                    <li class="nav-item ms-2">
                        <a class="nav-link" href="blog.html" tabindex="-1" aria-disabled="true">Blog</a>
                    </li>
                    <li class="nav-item ms-2">
                        <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Ofertas</a>
                    </li>
                    @auth
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-shopping-bag"> <small>{{ Cart::count() }}</small></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown"
                                style="min-width: 20rem;">
                                @foreach (Cart::content() as $product)
                                    <div class="d-flex justify-content-around align-items-center text-truncate">
                                        <img src="{{ Storage::url($product->model->image->url) }}" class="img-fluid"
                                            width="20%" alt="">
                                        <p class="row">
                                            <b class="col-12">{{ $product->name }}</b>
                                            <small class="col-12">
                                                <span>{{ $product->qty }}x</span>
                                                ${{ number_format($product->price, 2) }}
                                            </small>
                                        </p>
                                    </div>
                                    <div class="dropdown-divider"></div>
                                @endforeach
                                @if (Cart::count())
                                    <div class="dropdown-divider"></div>
                                    <div class="d-flex justify-content-around align-items-center">
                                        <div class="font-weight-bold">Subtotal:</div>
                                        <div class="font-weight-bold">${{ Cart::total() }}</div>
                                    </div>
                                    <div class="px-3 py-2">
                                        <a class="btn btn-dark btn-block" href="{{ route('cart') }}">Ir al carrito</a>
                                    </div>
                                @else
                                    <div class="px-3 py-2 font-weigth-bold text-cener">
                                        El carrito esta vacio
                                    </div>
                                @endif

                            </div>

                        </li>
                        <li class="nav-item ms-2">
                            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-user-alt"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right mr-3" aria-labelledby="navbarDropdown"
                                style="min-width: 15rem;">
                                <div class="px-3 py-2">
                                    <a class="btn btn-link btn-block" href="/cart.html">Perfil</a>

                                    <form class="text-center" method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                    this.closest('form').submit();">
                                            Log out
                                        </a>
                                    </form>
                                </div>
                            </div>
                        </li>
                    @else
                        <li class="nav-item ms-2">
                            <a class="nav-link" href="{{ route('login') }}" tabindex="-1" aria-disabled="true">Login</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-shopping-bag"> <small>{{ Cart::count() }}</small></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown"
                                style="min-width: 20rem;">
                                @foreach (Cart::content() as $product)
                                    <div class="d-flex justify-content-around align-items-center text-truncate">
                                        <img src="{{ Storage::url($product->model->image->url) }}" class="img-fluid"
                                            width="20%" alt="">
                                        <p class="row">
                                            <b class="col-12">{{ $product->name }}</b>
                                            <small class="col-12">
                                                <span>{{ $product->qty }}x</span>
                                                ${{ number_format($product->price, 2) }}
                                            </small>
                                        </p>
                                    </div>
                                    <div class="dropdown-divider"></div>
                                @endforeach
                                @if (Cart::count())
                                    <div class="dropdown-divider"></div>
                                    <div class="d-flex justify-content-around align-items-center">
                                        <div class="font-weight-bold">Subtotal:</div>
                                        <div class="font-weight-bold">${{ Cart::total() }}</div>
                                    </div>
                                    <div class="px-3 py-2">
                                        <a class="btn btn-dark btn-block" href="{{ route('cart') }}">Ir al carrito</a>
                                    </div>
                                @else
                                    <div class="px-3 py-2 font-weigth-bold text-cener">
                                        El carrito esta vacio
                                    </div>
                                @endif

                            </div>

                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')
    <!-- ========================= SECTION FOOTER ========================= -->
    <footer class="bg-dark mt-4">
        <div class="container text-center pt-2 pb-2">
            <p class="text-white">
                Todos los derechos reservados © Renealonso.com | Creado por
                <a href="#" style="color: white;">Vandu</a>
            </p>
        </div>
    </footer>
    <!-- ========================= SECTION FOOTER END ========================= -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
    <script>
        $(window).scroll(function() {
            $("nav").toggleClass("scrolled", $(this).scrollTop() > 50);
        });

    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    @livewireScripts

    @yield('js')
    @include('sweetalert::alert')
</body>

</html>
