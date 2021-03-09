@extends('layouts.template-landing')

@section('slider')
    <!-- ========================= SECTION MAIN  ========================= -->
    <section class="section-intro padding-y">
        <div class="container">
            <!-- ==============  COMPONENT SLIDER  BOOTSTRAP ============  -->
            <div id="carousel1_indicator" class="slider-home-banner carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel1_indicator" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel1_indicator" data-slide-to="1"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="images/banners/slide-lg-3.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img src="images/banners/slide-lg-2.jpg" alt="Second slide">
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
@endsection

@section('content')
    <!-- =============== SECTION 1 =============== -->
    <div class="container">
        <section class="padding-bottom">
            <header class="section-heading mb-4">
                <h3 class="title-section">Recommended items</h3>
            </header>

            <div class="row">
                @if ($products->count())
                    @foreach ($products as $product)
                        <div class="col-xl-3 col-lg-3 col-md-4 col-6">
                            <div class="card card-product-grid">
                                <a href="{{ route('landing.show.product', $product) }}" class="img-wrap">
                                    <img @if ($product->image) src="{{ Storage::url($product->image->url) }}" @else src="https://cdn.pixabay.com/photo/2014/05/02/21/47/laptop-336369_960_720.jpg" @endif>
                                </a>
                                <figcaption class="info-wrap">
                                    {{-- <ul class="rating-stars mb-1">
                                    <li style="width:80%" class="stars-active">
                                        <img src="images/icons/stars-active.svg" alt="">
                                    </li>
                                    <li>
                                        <img src="images/icons/starts-disable.svg" alt="">
                                    </li>
                                </ul> --}}
                                    <div>
                                        <a href="#" class="text-muted">
                                            @foreach ($product->categories as $category)
                                                {{ $category->name }},
                                            @endforeach
                                        </a>
                                        <a href="#" class="title">{{ $product->name }}</a>
                                    </div>
                                    <div class="price h5 mt-2">{{ $product->presentPrice() }}</div> <!-- price.// -->
                                </figcaption>
                            </div>
                        </div> <!-- col.// -->
                    @endforeach
                @else
                    <div class="mx-auto text-center mt-5">
                        <h4>No hay articulos en tu tienda aun</h4>
                        <p>Esperando que el adminstrador del sitio agregue un nuevo producto</p>
                    </div>
                @endif

            </div> <!-- row.// -->
        </section>
        <!-- =============== SECTION 1 END =============== -->


        <!-- =============== SECTION BANNER =============== -->
        <section class="padding-bottom">
            <div class="row">
                <aside class="col-md-6">
                    <div class="card card-banner-lg bg-dark">
                        <img src="images/banners/banner4.jpg" class="card-img opacity">
                        <div class="card-img-overlay text-white">
                            <h2 class="card-title">Big Deal on Clothes</h2>
                            <p class="card-text" style="max-width: 80%">This is a wider card with text below and Lorem
                                ipsum dolor sit amet, consectetur adipisicing elit. Illo ab quae nihil praesentium
                                impedit libero possimus id vero</p>
                            <a href="#" class="btn btn-light">Discover</a>
                        </div>
                    </div>
                </aside>
                <div class="col-md-6">
                    <div class="card card-banner-lg bg-dark">
                        <img src="images/banners/banner5.jpg" class="card-img opacity">
                        <div class="card-img-overlay text-white">
                            <h2 class="card-title">Great Bundle for You</h2>
                            <p class="card-text" style="max-width: 80%">Card with text below and Lorem ipsum dolor sit
                                amet, consectetur adipisicing elit. Illo ab quae nihil praesentium impedit libero
                                possimus id vero</p>
                            <a href="#" class="btn btn-light">Discover</a>
                        </div>
                    </div>
                </div> <!-- col.// -->
            </div> <!-- row.// -->
        </section>
        <!-- =============== SECTION BANNER .//END =============== -->


        <!-- =============== SECTION 2 =============== -->
        {{-- <section class="padding-bottom">

            <header class="section-heading mb-4">
                <h3 class="title-section">Daily deals</h3>
            </header>

            <div class="row row-sm">
                <div class="col-xl-2 col-lg-3 col-md-4 col-6">
                    <div href="#" class="card card-sm card-product-grid">
                        <a href="#" class="img-wrap">
                            <b class="badge badge-danger mr-1">10% OFF</b>
                            <img src="images/items/9.jpg">
                        </a>
                        <figcaption class="info-wrap">
                            <a href="#" class="title">Just another product name</a>
                            <div class="price-wrap">
                                <span class="price">$45</span>
                                <del class="price-old">$90</del>
                            </div> <!-- price-wrap.// -->
                        </figcaption>
                    </div>
                </div> <!-- col.// -->
                <div class="col-xl-2 col-lg-3 col-md-4 col-6">
                    <div href="#" class="card card-sm card-product-grid">
                        <a href="#" class="img-wrap">
                            <b class="badge badge-danger mr-1">85% OFF</b>
                            <img src="images/items/10.jpg">
                        </a>
                        <figcaption class="info-wrap">
                            <a href="#" class="title">Some item name here</a>
                            <div class="price-wrap">
                                <span class="price">$45</span>
                                <del class="price-old">$90</del>
                            </div> <!-- price-wrap.// -->
                        </figcaption>
                    </div>
                </div> <!-- col.// -->
                <div class="col-xl-2 col-lg-3 col-md-4 col-6">
                    <div href="#" class="card card-sm card-product-grid">
                        <a href="#" class="img-wrap">
                            <b class="badge badge-danger mr-1">10% OFF</b>
                            <img src="images/items/11.jpg">
                        </a>
                        <figcaption class="info-wrap">
                            <a href="#" class="title">Great product name here</a>
                            <div class="price-wrap">
                                <span class="price">$45</span>
                                <del class="price-old">$90</del>
                            </div> <!-- price-wrap.// -->
                        </figcaption>
                    </div>
                </div> <!-- col.// -->
                <div class="col-xl-2 col-lg-3 col-md-4 col-6">
                    <div href="#" class="card card-sm card-product-grid">
                        <a href="#" class="img-wrap">
                            <b class="badge badge-danger mr-1">90% OFF</b>
                            <img src="images/items/12.jpg">
                        </a>
                        <figcaption class="info-wrap">
                            <a href="#" class="title">Just another product name</a>
                            <div class="price-wrap">
                                <span class="price">$45</span>
                                <del class="price-old">$90</del>
                            </div> <!-- price-wrap.// -->
                        </figcaption>
                    </div>
                </div> <!-- col.// -->
                <div class="col-xl-2 col-lg-3 col-md-4 col-6">
                    <div href="#" class="card card-sm card-product-grid">
                        <a href="#" class="img-wrap">
                            <b class="badge badge-danger mr-1">20% OFF</b>
                            <img src="images/items/5.jpg">
                        </a>
                        <figcaption class="info-wrap">
                            <a href="#" class="title">Just another product name</a>
                            <div class="price-wrap">
                                <span class="price">$45</span>
                                <del class="price-old">$90</del>
                            </div> <!-- price-wrap.// -->
                        </figcaption>
                    </div>
                </div> <!-- col.// -->
                <div class="col-xl-2 col-lg-3 col-md-4 col-6">
                    <div href="#" class="card card-sm card-product-grid">
                        <a href="#" class="img-wrap">
                            <b class="badge badge-danger mr-1">20% OFF</b>
                            <img src="images/items/6.jpg">
                        </a>
                        <figcaption class="info-wrap">
                            <a href="#" class="title">Some item name here</a>
                            <div class="price-wrap">
                                <span class="price">$45</span>
                                <del class="price-old">$90</del>
                            </div> <!-- price-wrap.// -->
                        </figcaption>
                    </div>
                </div> <!-- col.// -->
            </div> <!-- row.// -->
        </section> --}}
        <!-- =============== SECTION 2 END =============== -->


        <!-- =============== SECTION BANNER =============== -->
        <section class="padding-bottom">
            <article class="box d-flex flex-wrap align-items-center p-5 bg-secondary">
                <div class="text-white mr-auto">
                    <h3>Looking for fashion? </h3>
                    <p> Popular items, discounts and free shipping </p>
                </div>
                <div class="mt-3 mt-md-0"><a href="" class="btn btn-outline-light">Learn more</a></div>
            </article>
        </section>
        <!-- =============== SECTION BANNER .//END =============== -->

    </div>
    <!-- container end.// -->
@endsection
