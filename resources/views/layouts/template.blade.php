<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="pragma" content="no-cache" />
    <meta http-equiv="cache-control" content="max-age=604800" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <title>El Pich Mérida | Alojamiento cómodo, económico y seguro en Mérida</title>


    <meta property="og:title" content="Alojamiento cómodo, económico y seguro en Mérida &mdash; El Pich Mérida">
    <meta property="og:type" content="website" />
    <meta name="description" content="Sencillo complejo de 10 habitaciones que brinda alojamiento, cómodo, económico y seguro." />
    <meta name="og:description" content="Sencillo complejo de 10 habitaciones que brinda alojamiento, cómodo, económico y seguro." />
    <meta name="og:url" content="https://www.elpichmerida.com" />
    <meta name="og:site_name" content="El Pich Mérida" />

    {{-- <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon" /> --}}
    <!-- jQuery -->
    <script src="{{ asset('template/js/jquery-2.0.0.min.js') }}" type="text/javascript"></script>


    <!-- Styles-->
    <link rel="stylesheet" href="{{ asset('template/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('template/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('template/css/ui.css') }}" />
    <link rel="stylesheet" href="{{ asset('template/css/responsive.css') }}" />

    <link rel="stylesheet" href="{{ asset('template/css/politicas.css') }}" />

    <!-- Font awesome 5 -->
    <link href="{{ asset('template/fonts/fontawesome/css/all.min.css') }}" type="text/css" rel="stylesheet" />

    <!-- custom style -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet" />

    <!-- custom javascript -->
    @yield('css')

</head>

<body>
    <nav class="navbar navbar navbar-light bg-light fixed-top">
        <div class="container navbar-in">
            <a class="navbar-brand" href="{{ route('shop.home') }}">
                <img src="{{ asset('template/images/rene/logo-nav.svg') }}" alt="" width="80" 
                    class="d-inline-block align-top" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item ms-2">
                        <a class="nav-link active" aria-current="page" href="{{ route('shop.home') }}">Inicio</a>
                    </li>
                    <li class="nav-item ms-2">
                        <a class="nav-link" href="{{ route('galery.index') }}">Galería</a>
                    </li>
                    {{--<li class="nav-item ms-2">
                        <a class="nav-link" href="{{ route('shop.products', 'mujer') }}">Mujer</a>
                    </li>
                    <li class="nav-item ms-2">
                        <a class="nav-link" href="{{ route('shop.products') }}" tabindex="-1"
                            aria-disabled="true">Tienda</a>
                    </li>
                    <li class="nav-item ms-2">
                        <a class="nav-link" href="{{ route('blog.index') }}" tabindex="-1"
                            aria-disabled="true">Blog</a>
                    </li>
                    <li class="nav-item ms-2">
                        <a class="nav-link" href="{{ route('shop.products', 'discounts') }}" tabindex="-1"
                            aria-disabled="true">Ofertas</a>
                    </li>--}}
                    <li class="nav-item ms-2">
                        <a class="nav-link" href="{{ route('shop.products', 'discounts') }}" tabindex="-1"
                            aria-disabled="true" data-toggle="modal" data-target="#ventanaModal">Contacto</a>
                    </li>
                    {{--@auth
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
                                    <a class="btn btn-link btn-block" href="{{ route('user.profile') }}">Perfil</a>

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
                    @else--}}
                       {{-- <li class="nav-item ms-2">
                            <a class="nav-link" href="{{ route('login') }}" tabindex="-1" aria-disabled="true">Login</a>
                        </li>--}}
                        {{--<li class="nav-item dropdown">
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
                                        --<img @if ($product->image) src="{{ Storage::url($product->image->url) }}" width="20%" @else src="https://cdn.pixabay.com/photo/2014/05/02/21/47/laptop-336369_960_720.jpg" width="20%" @endif> --
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
                    @endauth--}}
                </ul>
            </div>
        </div>
    </nav>
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
    @yield('content')
    <!-- ========================= SECTION FOOTER ========================= -->
    <footer class="bg-dark">
        <div class="container text-center pt-2 pb-2">
            <p class="text-white">
                Todos los derechos reservados © Elpichmerida.com
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
    <!--jquery slider-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    {{-- <script src="js/jquery.backstretch.min.js"></script> --}}

    <!-- end jquery slider-->


    @livewireScripts

    @yield('js')
    @include('sweetalert::alert')

{{--     <script type="text/javascript">
        $(document).ready(function() {

            OpenPay.setId('mgdt89dyjztums3akuyw');
            OpenPay.setApiKey('pk_53958ec473d9464ab007cdb72c2fca3b');
            OpenPay.setSandboxMode(true);
            //Se genera el id de dispositivo
            var deviceSessionId = OpenPay.deviceData.setup("payment-form", "deviceIdHiddenFieldName");
            //console.log(deviceSessionId);

            $('#pay-button').on('click', function(event) {
                event.preventDefault();
                $("#pay-button").prop("disabled", true);
                OpenPay.token.extractFormAndCreate('payment-form', sucess_callbak, error_callbak);
            });

            var sucess_callbak = function(response) {
                var token_id = response.data.id;
                $('#token_id').val(token_id);
                $('#payment-form').submit();
            };

            var error_callbak = function(response) {
                var desc = response.data.description != undefined ? response.data.description : response
                    .message;
                alert("ERROR [" + response.status + "] " + desc);
                $("#pay-button").prop("disabled", false);
            };
        });

    </script> --}}
</body>

</html>
