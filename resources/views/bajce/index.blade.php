@extends('layouts.bajce')
@section('content')
    <!-- ========================= SECTION MAIN  ========================= -->
<section class="section-intro ">
    <div class="container-fluid p-0">
    <!-- ==============  COMPONENT SLIDER  BOOTSTRAP ============  -->

    <!---->
    <div id="carousel1_indicator" class="slider-home-banner carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carousel1_indicator" data-slide-to="0" class="active"></li>
        <li data-target="#carousel1_indicator" data-slide-to="1"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/banners/banner-bajce-lg.png" alt="First slide">
          <div class="carousel-caption carousel-caption-1 d-md-block">
            <h1>La madera más <br>
                fuerte del sureste</h1>
            <a href="/tienda" class="btn btn-primary">COMPRAR</a>
          </div>
        </div>

      </div>
      <a class="carousel-control-prev" href="#carousel1_indicator" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carousel1_indicator" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <!-- ============ COMPONENT SLIDER BOOTSTRAP end.// ===========  .// -->
    </div> <!-- container end.// -->
    </section>
    <!-- ========================= SECTION MAIN END// ========================= -->


    <section id="info-destacada" class="no-cel">
        <div class="container mt-5 ">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12 info-destacada-r no-cel">
                    <div class="d-1">
                        <img src="/images/banners/d-1-2.png" class="img-fluid radio" alt="">
                        <div class="carousel-caption carousel-caption-2">
                            <h5>Productos especiales</h5>
                            <p>Conoce nuestros productos seleccionados
                                especialmente para ti.</p>
                        </div>
                    </div>
                </div>
                <div class="col-9 info-destacada-p no-cel">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="d-2">
                                <img src="/images/banners/d-2-2.png" class="img-fluid radio" alt="">
                                <div class="carousel-caption carousel-caption-2">
                                    <h5>Productos especiales</h5>
                                    <p>Conoce nuestros productos seleccionados
                                        especialmente para ti.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 no-cel">
                            <div class="d-3">
                                <img src="/images/banners/d-3-2.png" class="img-fluid radio" alt="">
                                <div class="carousel-caption carousel-caption-2">
                                    <h5>Productos especiales</h5>
                                    <p>Conoce nuestros productos seleccionados
                                        especialmente para ti.</p>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 no-cel">
                            <div class="d-4">
                                <img src="/images/banners/d-4-2.png" class="img-fluid radio" alt="">
                                <div class="carousel-caption carousel-caption-2">
                                    <h5>Productos especiales</h5>
                                    <p>Conoce nuestros productos seleccionados
                                        especialmente para ti.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="info-destacada-inner no-cel">
                        <div class="row">
                            <div class="col-8 radio">
                                <img src="/images/banners/d-6-2.png" class="img-fluid radio" alt="">
                                <div class="carousel-caption carousel-caption-2">
                                    <h5>Productos especiales</h5>
                                    <p>Conoce nuestros productos seleccionados
                                        especialmente para ti.</p>
                                </div>
                            </div>

                            <div class="col-4 no-cel">
                                <img src="/images/banners/d-5-2.png" class="img-fluid radio" alt="">
                                <div class="carousel-caption carousel-caption-2">
                                    <h5>Productos especiales</h5>
                                    <p>Conoce nuestros productos seleccionados
                                        especialmente para ti.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>


    <div class="container">

        <section id="servicios">

                <h3 style="text-align: center;" class=" mt-5 mb-5">
                    CONOCE NUESTROS SERVICIOS
                </h3>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <i class="fas fa-table iconos"></i>
                        <h5 class="titulo-servicio">DIMENSIONADO DE TABLERO</h5>
                        <p class="p-servicio mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae sit saepe eaque delectus necessitatibus impedit sequi ipsa repellendus atque cum!</p>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <i class="fas fa-table iconos"></i>
                        <h5 class="titulo-servicio">DIMENSIONADO DE TABLERO</h5>
                        <p class="p-servicio mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae sit saepe eaque delectus necessitatibus impedit sequi ipsa repellendus atque cum!</p>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <i class="fas fa-table iconos"></i>
                        <h5 class="titulo-servicio">DIMENSIONADO DE TABLERO</h5>
                        <p class="p-servicio mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae sit saepe eaque delectus necessitatibus impedit sequi ipsa repellendus atque cum!</p>
                    </div>
                </div>
                <div id="servicios-2" class="mt-5">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <i class="fas fa-table iconos"></i>
                            <h5 class="titulo-servicio">DIMENSIONADO DE TABLERO</h5>
                            <p class="p-servicio mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae sit saepe eaque delectus necessitatibus impedit sequi ipsa repellendus atque cum!</p>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <i class="fas fa-table iconos"></i>
                            <h5 class="titulo-servicio">DIMENSIONADO DE TABLERO</h5>
                            <p class="p-servicio mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae sit saepe eaque delectus necessitatibus impedit sequi ipsa repellendus atque cum!</p>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <i class="fas fa-table iconos"></i>
                            <h5 class="titulo-servicio">DIMENSIONADO DE TABLERO</h5>
                            <p class="p-servicio mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae sit saepe eaque delectus necessitatibus impedit sequi ipsa repellendus atque cum!</p>
                        </div>
                    </div>
                </div>

        </section>
    </div>


    <section id="tienda" style="margin-top: 100px;">

        <div class="contenido-tienda">
            <h3 style="text-align: center;" class="mt-5">
                Tienda en linea
            </h3>
            <p class="descripcion-tienda" style="text-align: center;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam magni itaque atque explicabo at dicta hic voluptatum repellendus quas reiciendis.</p>
            <div class="boton-ir">
                <a href="/tienda" class="btn btn-secondary">
                    Ir a la tienda
                </a>
            </div>
            <div class="botones-tienda">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="boton-ir">
                    <a href="/tienda" class="btn btn-primary btn-block">
                        Artículos de cocina
                    </a>
                </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="boton-ir">
                    <a href="/tienda" class="btn btn-primary btn-block">
                        Artículos de cocina
                    </a>
                </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="boton-ir">
                    <a href="/tienda" class="btn btn-primary btn-block">
                        Artículos de cocina
                    </a>
                </div>
                    </div>
                </div>
            </div>
        </div>

    </section>


    <section id="catalogo">
        <div class="cabecera">
            <h3 style="text-align: center; text-transform: uppercase;" class="mt-5">
                Consulta nuestro catálogo en linea
            </h3>
            <p style="text-align: center;">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
        </div>

        <div class="row mt-5">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="card">
                    <div class="contenido-2">
                        <div class="imagen-producto">
                            <img src="/images/items/tablones-de-madera.png" class="img-fluid" alt="">
                        </div>
                    <div class="info-producto">
                    <h5>Tablones de madera</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis recusandae ad suscipit nisi quis aperiam reiciendis voluptate repellat! Eum, quisquam.</p>
                    <a href="{{ route('catalogue.products') }}" class="btn btn-primary btn-block">Ver catálogo</a>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="card">
                    <div class="contenido-2">
                        <div class="imagen-producto">
                            <img src="/images/items/tablones-de-madera.png" class="img-fluid" alt="">
                        </div>
                    <div class="info-producto">
                        <h5>Tablones de madera</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis recusandae ad suscipit nisi quis aperiam reiciendis voluptate repellat! Eum, quisquam.</p>
                    <a href="{{ route('catalogue.products') }}" class="btn btn-primary btn-block">Ver catálogo</a>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="card">
                    <div class="contenido-2">
                        <div class="imagen-producto">
                            <img src="/images/items/tablones-de-madera.png" class="img-fluid" alt="">
                        </div>
                    <div class="info-producto">
                        <h5>Tablones de madera</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis recusandae ad suscipit nisi quis aperiam reiciendis voluptate repellat! Eum, quisquam.</p>
                    <a href="{{ route('catalogue.products') }}" class="btn btn-primary btn-block">Ver catálogo</a>
                    </div>
                    </div>
                </div>
            </div>
        </div>

    </section>




    <section id="codigo" class="p-0">
        <div class="bg-codigo">
            <div class="contenido">
                <h2>Utilia nuestro código:
                     <b>BIENVENIDO</b>
                </h2>
                <a href="/tienda" class="btn btn-primary">Ir a la tienda</a>
            </div>
        </div>
    </section>




        <section id="sucursales">
            <div class="cabecera-sucursales">
                <h3 style="text-align: center; text-transform: uppercase;">
                    Nuestras sucursales
                </h3>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="logos-sucursales">
                        <img src="/images/icons/logo-maderas.png" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="detalles-sucursal">
                        <h4>MADERAS ORIENTE</h4>
                        <p class="lead" style="text-transform: uppercase;">Calle 65 N° 160 por 11 y 14 Col. Miraflores <br> C.P. 97179, Mérida, Yucatán, México <br>
                        <span>
                            (999) 983 0353 / (999) 983 1026 <br>(999) 983 0592 / (999) 983 0376
                        </span>
                        </p>
                        <img src="/images/icons/google-maps.png" class="img-fluid" alt="">


                    </div>
                </div>
            </div>
        </section>



        <section id="blog">
            <div class="cabecera">
                <h3 style="text-align: center; text-transform: uppercase;" class="mt-5">
                    Noticias más relevantes
                </h3>
                <p style="text-align: center;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae deserunt quos similique natus quaerat omnis!</p>
            </div>

            <div class="row mt-5">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="card">
                        <div class="contenido-2">
                            <div class="imagen-producto">
                                <img src="/images/banners/entradas.png" class="img-fluid" alt="">
                            </div>
                        <div class="info-producto">
                        <h5>Tablones de madera</h5>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maiores ratione error esse labore ipsa sequi voluptate est sunt deserunt, quam repudiandae, odio animi, praesentium perspiciatis officiis ullam?</p>
                        <p class="autor">Por: <span>Marina Rodriguez</span> <span>|</span> <span>10 de Mayo</span>
                        </p>
                        <a href="/artiuclo" class="btn btn-success btn-block">LEER MÁS</a>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="card">
                        <div class="contenido-2">
                            <div class="imagen-producto">
                                <img src="/images/banners/entradas.png" class="img-fluid" alt="">
                            </div>
                        <div class="info-producto">
                            <h5>Tablones de madera</h5>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maiores ratione error esse labore ipsa sequi voluptate est sunt deserunt, quam repudiandae, odio animi, praesentium perspiciatis officiis ullam?</p>
                        <p class="autor">Por: <span>Marina Rodriguez</span> <span>|</span> <span>10 de Mayo</span>
                        </p>
                        <a href="/artiuclo" class="btn btn-success btn-block">LEER MÁS</a>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="card">
                        <div class="contenido-2">
                            <div class="imagen-producto">
                                <img src="/images/banners/entradas.png" class="img-fluid" alt="">
                            </div>
                        <div class="info-producto">
                            <h5>Tablones de madera</h5>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maiores ratione error esse labore ipsa sequi voluptate est sunt deserunt, quam repudiandae, odio animi, praesentium perspiciatis officiis ullam?</p>
                        <p class="autor">Por: <span>Marina Rodriguez</span> <span>|</span> <span>10 de Mayo</span>
                        </p>
                        <a href="/artiuclo" class="btn btn-success btn-block">LEER MÁS</a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="boton-entradas">
                <a href="/blog" class="btn btn-primary boton-entradas-2">Ver más</a>
            </div>

        </section>


        <section id="marcas">

            <div class="cabecera-marcas">
                <h3 style="text-align: center; text-transform: uppercase;" class="mt-5">
                    Marcas con las que trabajamos
                </h3>

            </div>

            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <div class="marcas-logo">
                        <img src="/images/misc/marcas.png" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <div class="marcas-logo">
                        <img src="/images/misc/marcas.png" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <div class="marcas-logo">
                        <img src="/images/misc/marcas.png" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <div class="marcas-logo">
                        <img src="/images/misc/marcas.png" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </section>

    <!--========== NEWSLETTER =============-->
    <section id="newsletter">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <h2>Recibe ofertas especialedades</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem perspiciatis laborum suscipit quae sequi at nihil vel, iusto molestias in!</p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="formulario-newsletter">
                    <input type="email" class="form-control" placeholder="Correo electrónico">
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-12">
                <div class="boton-newsletter">
                    <button class="btn btn-success btn-md btn-block">Enviar</button>
                </div>
            </div>
        </div>
    </div>
    </section>

@endsection
