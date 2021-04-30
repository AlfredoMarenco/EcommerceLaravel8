@extends('layouts.bajce')

@section('content')

    <section class="py-3 bg-light">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Category name</a></li>
                <li class="breadcrumb-item"><a href="#">Sub category</a></li>
                <li class="breadcrumb-item active" aria-current="page">Items</li>
            </ol>
        </div>
    </section>

    <!-- ========================= SECTION CONTENT ========================= -->
    <section class="section-content bg-white padding-y">
        <div class="container">

            <!-- ============================ ITEM DETAIL ======================== -->
            <div class="row">
                <aside class="col-md-6">
                    <div class="card">
                        <article class="gallery-wrap">
                            <div class="img-big-wrap">
                                <div> <a href="#"><img src="{{ Storage::url($product->image->url) }}"></a></div>
                            </div> <!-- slider-product.// -->
                            <div class="thumbs-wrap">
                                @foreach ($product->images as $image)
                                    <a href="#" class="item-thumb"> <img src="{{ Storage::url($image->url) }}"></a>
                                @endforeach
                            </div> <!-- slider-nav.// -->
                        </article> <!-- gallery-wrap .end// -->
                    </div> <!-- card.// -->
                </aside>
                <main class="col-md-6">
                    <article class="product-info-aside">

                        <h2 class="title mt-3">{{ $product->name }}</h2>

                        <div class="rating-wrap my-3">
                            <ul class="rating-stars">
                                <li style="width:80%" class="stars-active">
                                    <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </li>
                            </ul>
                            <small class="label-rating text-muted">132 Opiniones</small>
                            <small class="label-rating text-success"> <i class="fa fa-clipboard-check"></i> Envío gratis en
                                zona Mérida </small>
                        </div> <!-- rating-wrap.// -->

                        <div class="mb-3">
                            <var class="price h4">MXN {{ $product->presentPrice() }}</var>
                        </div> <!-- price-detail-wrap .// -->

                        <p>{!! $product->description !!} </p>


                        <dl class="row">

                            <dt class="col-sm-3">SKU</dt>
                            <dd class="col-sm-9">{{ $product->SKU }}</dd>

                            <dt class="col-sm-3">Garantía</dt>
                            <dd class="col-sm-9">2 años</dd>

                            <dt class="col-sm-3">Envío</dt>
                            <dd class="col-sm-9">3 - 4 días hábiles</dd>

                            <dt class="col-sm-3">Disponibilidad</dt>
                            <dd class="col-sm-9">En Stock</dd>
                        </dl>

                        <div class="form-row  mt-4">
                            <div class="form-group col-md flex-grow-0">
                                <div class="input-group mb-3 input-spinner">
                                    <div class="input-group-prepend">
                                        <button class="btn btn-light" type="button" id="button-plus"> + </button>
                                    </div>
                                    <input type="text" class="form-control" value="1">
                                    <div class="input-group-append">
                                        <button class="btn btn-light" type="button" id="button-minus"> &minus; </button>
                                    </div>
                                </div>
                            </div> <!-- col.// -->
                            <div class="form-group col-md">
                                <a href="#" class="btn  btn-primary">
                                    <i class="fas fa-shopping-cart"></i> <span class="text">Añadir al carrito</span>
                                </a>
                                <a href="#" class="btn btn-success">
                                    <i class="fab fa-whatsapp"></i> <span class="text">Consultar en tienda</span>
                                </a>
                            </div> <!-- col.// -->
                        </div> <!-- row.// -->

                    </article> <!-- product-info-aside .// -->
                </main> <!-- col.// -->
            </div> <!-- row.// -->

            <!-- ================ ITEM DETAIL END .// ================= -->


        </div> <!-- container .//  -->
    </section>
    <!-- ========================= SECTION CONTENT END// ========================= -->

    <!-- ========================= SECTION  ========================= -->
    <section id="section-name-cat" class="section-name padding-y bg">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <div class="cabecera-opciones">
                        <div class="row">
                            <div class="col-4">
                                <h5 class="title-description">Description </h5>
                            </div>
                            <div class="col-4">
                                <a href="">
                                    <h5>Ficha Técnica</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                    <p>
                        Lava stone grill, suitable for natural gas, with cast-iron cooking grid, piezo ignition, stainless
                        steel burners, water tank, and thermocouple. Thermostatic adjustable per zone. Comes complete with
                        lava rocks. Adjustable legs. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                        eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat.
                    </p>
                    <ul class="list-check">
                        <li>Material: Stainless steel</li>
                        <li>Weight: 82kg</li>
                        <li>built-in drip tray</li>
                        <li>Open base for pots and pans</li>
                        <li>On request available in propane execution</li>
                    </ul>

                    <h5 class="title-description">Valoraciones</h5>
                    <div class="opinion">
                        <h5 class="mt-4">ARMANDO CARBALLO</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur ipsa voluptatem blanditiis
                            perferendis, ea distinctio quas enim illum repellendus deserunt veniam quos! Molestiae maiores
                            esse nostrum doloribus dolorum dicta atque.</p>
                        <div class="rating-wrap my-3">
                            <ul class="rating-stars">
                                <li style="width:80%" class="stars-active">
                                    <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </li>
                            </ul>
                        </div>

                    </div> <!-- rating-wrap.// -->

                    <div class="opinion">
                        <h5 class="mt-4">MARIA LUISA</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur ipsa voluptatem blanditiis
                            perferendis, ea distinctio quas enim illum repellendus deserunt veniam quos! Molestiae maiores
                            esse nostrum doloribus dolorum dicta atque.</p>
                        <div class="rating-wrap my-3">
                            <ul class="rating-stars">
                                <li style="width:80%" class="stars-active">
                                    <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </li>
                            </ul>
                        </div>

                    </div> <!-- rating-wrap.// -->
                    <div class="opinion">
                        <h5 class="mt-4">LUCÍA RODRIGUEZ</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur ipsa voluptatem blanditiis
                            perferendis, ea distinctio quas enim illum repellendus deserunt veniam quos! Molestiae maiores
                            esse nostrum doloribus dolorum dicta atque.</p>
                        <div class="rating-wrap my-3">
                            <ul class="rating-stars">
                                <li style="width:80%" class="stars-active">
                                    <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </li>
                            </ul>
                        </div>

                    </div> <!-- rating-wrap.// -->



                </div> <!-- col.// -->


            </div> <!-- row.// -->

        </div> <!-- container .//  -->
    </section>
    <!-- ========================= SECTION CONTENT END// ========================= -->



    <section id="productos-sugeridos">
        <div class="container">
            <h5 class="title-description mb-5" style="text-align: center;">Te podría interesar </h5>
            <div class="row">

                <div class="col-md-3">
                    <figure class="card card-product-grid">
                        <div class="img-wrap">
                            <img src="images/items/bridas.png">
                        </div> <!-- img-wrap.// -->
                        <figcaption class="info-wrap">
                            <a href="#" class="title mb-2">BRIDAS PARA TUBO GRIS 7.5 X 2.3 CM</a>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum ipsum corporis recusandae
                                odit ab.</p>
                            <div class="price-wrap">
                                <span class="price">$350.00</span>
                                <small class="text-muted">/ pza</small>

                                <p class="mb-2"> <small>SKU:</small> 455379 </p>
                            </div> <!-- price-wrap.// -->

                            <div class="rating-wrap my-3">
                                <ul class="rating-stars">
                                    <li style="width:80%" class="stars-active">
                                        <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </li>
                                </ul>
                                <small class="label-rating text-muted">132 Opiniones</small>


                            </div> <!-- rating-wrap.// -->

                            <hr>





                            <a href="#" class="btn btn-primary"> <i class="fas fa-cart-plus"></i> Agregar al carrito </a>

                        </figcaption>
                    </figure>
                </div> <!-- col.// -->

                <div class="col-md-3">
                    <figure class="card card-product-grid">
                        <div class="img-wrap">
                            <img src="images/items/bridas.png">
                        </div> <!-- img-wrap.// -->
                        <figcaption class="info-wrap">
                            <a href="#" class="title mb-2">BRIDAS PARA TUBO GRIS 7.5 X 2.3 CM</a>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum ipsum corporis recusandae
                                odit ab.</p>
                            <div class="price-wrap">
                                <span class="price">$350.00</span>
                                <small class="text-muted">/ pza</small>

                                <p class="mb-2"> <small>SKU:</small> 455379 </p>
                            </div> <!-- price-wrap.// -->

                            <div class="rating-wrap my-3">
                                <ul class="rating-stars">
                                    <li style="width:80%" class="stars-active">
                                        <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </li>
                                </ul>
                                <small class="label-rating text-muted">132 Opiniones</small>


                            </div> <!-- rating-wrap.// -->

                            <hr>





                            <a href="#" class="btn btn-primary"> <i class="fas fa-cart-plus"></i> Agregar al carrito </a>

                        </figcaption>
                    </figure>
                </div> <!-- col.// -->

                <div class="col-md-3">
                    <figure class="card card-product-grid">
                        <div class="img-wrap">
                            <img src="images/items/bridas.png">
                        </div> <!-- img-wrap.// -->
                        <figcaption class="info-wrap">
                            <a href="#" class="title mb-2">BRIDAS PARA TUBO GRIS 7.5 X 2.3 CM</a>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum ipsum corporis recusandae
                                odit ab.</p>
                            <div class="price-wrap">
                                <span class="price">$350.00</span>
                                <small class="text-muted">/ pza</small>

                                <p class="mb-2"> <small>SKU:</small> 455379 </p>
                            </div> <!-- price-wrap.// -->

                            <div class="rating-wrap my-3">
                                <ul class="rating-stars">
                                    <li style="width:80%" class="stars-active">
                                        <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </li>
                                </ul>
                                <small class="label-rating text-muted">132 Opiniones</small>


                            </div> <!-- rating-wrap.// -->

                            <hr>





                            <a href="#" class="btn btn-primary"> <i class="fas fa-cart-plus"></i> Agregar al carrito </a>

                        </figcaption>
                    </figure>
                </div> <!-- col.// -->

                <div class="col-md-3">
                    <figure class="card card-product-grid">
                        <div class="img-wrap">
                            <img src="images/items/bridas.png">
                        </div> <!-- img-wrap.// -->
                        <figcaption class="info-wrap">
                            <a href="#" class="title mb-2">BRIDAS PARA TUBO GRIS 7.5 X 2.3 CM</a>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum ipsum corporis recusandae
                                odit ab.</p>
                            <div class="price-wrap">
                                <span class="price">$350.00</span>
                                <small class="text-muted">/ pza</small>

                                <p class="mb-2"> <small>SKU:</small> 455379 </p>
                            </div> <!-- price-wrap.// -->

                            <div class="rating-wrap my-3">
                                <ul class="rating-stars">
                                    <li style="width:80%" class="stars-active">
                                        <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </li>
                                </ul>
                                <small class="label-rating text-muted">132 Opiniones</small>


                            </div> <!-- rating-wrap.// -->

                            <hr>





                            <a href="#" class="btn btn-primary"> <i class="fas fa-cart-plus"></i> Agregar al carrito </a>

                        </figcaption>
                    </figure>
                </div> <!-- col.// -->
            </div>
        </div>
    </section>




    <!--========== NEWSLETTER =============-->
    <section id="newsletter">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <h2>Recibe ofertas especialedades</h2>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem perspiciatis laborum suscipit
                        quae sequi at nihil vel, iusto molestias in!</p>
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
