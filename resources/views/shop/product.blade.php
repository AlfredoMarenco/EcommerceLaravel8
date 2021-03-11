@extends('layouts.template')


@section('content')
    <section class="py-4 bg-light">
        <div class="container">
            <!-- <ol class="breadcrumb">
                                                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                                                            <li class="breadcrumb-item"><a href="#">Category name</a></li>
                                                            <li class="breadcrumb-item"><a href="#">Sub category</a></li>
                                                            <li class="breadcrumb-item active" aria-current="page">Items</li>
                                                          </ol> -->
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

                        {{-- <div class="rating-wrap my-3">
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
                            <small class="label-rating text-muted">132 reviews</small>
                            <small class="label-rating text-success"> <i class="fa fa-clipboard-check"></i> 154 orders
                            </small>
                        </div> <!-- rating-wrap.// --> --}}

                        <div class="mb-3">
                            <var class="price h4">{{ $product->presentPrice() }}</var>
                        </div> <!-- price-detail-wrap .// -->

                        <p>{{ $product->description }}</p>
                        <form action="{{ route('cart.addItem', $product) }}" method="POST">
                            @csrf
                            <div class="row mt-4">
                                <div class="form-group col-md flex-grow-0">
                                    <livewire:count-items-to-cart />
                                </div>
                                <div class="form-group col-md">
                                    <button class="btn text-white btn-dark mr-2">
                                        <i class="fas fa-shopping-cart"></i> <span class="text">Add to Cart</span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </article>
                </main>
            </div>

            <!-- ================ ITEM DETAIL END .// ================= -->
        </div> <!-- container .//  -->
    </section>
    <!-- ========================= SECTION CONTENT END// ========================= -->

    <!-- ========================= SECTION  ========================= -->
    <section class="section-name padding-y bg">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <h5 class="title-description">Description</h5>
                    <p>
                        {{ $product->description }}
                    </p>
                    <!-- <ul class="list-check">
                                                                        <li>Material: Stainless steel</li>
                                                                        <li>Weight: 82kg</li>
                                                                        <li>built-in drip tray</li>
                                                                        <li>Open base for pots and pans</li>
                                                                        <li>On request available in propane execution</li>
                                                                      </ul>

                                                                      <h5 class="title-description">Specifications</h5>
                                                                      <table class="table table-bordered">
                                                                        <tr>
                                                                          <th colspan="2">Basic specs</th>
                                                                        </tr>
                                                                        <tr>
                                                                          <td>Type of energy</td>
                                                                          <td>Lava stone</td>
                                                                        </tr>
                                                                        <tr>
                                                                          <td>Number of zones</td>
                                                                          <td>2</td>
                                                                        </tr>
                                                                        <tr>
                                                                          <td>Automatic connection </td>
                                                                          <td> <i class="fa fa-check text-success"></i> Yes </td>
                                                                        </tr>

                                                                        <tr>
                                                                          <th colspan="2">Dimensions</th>
                                                                        </tr>
                                                                        <tr>
                                                                          <td>Width</td>
                                                                          <td>500mm</td>
                                                                        </tr>
                                                                        <tr>
                                                                          <td>Depth</td>
                                                                          <td>400mm</td>
                                                                        </tr>
                                                                        <tr>
                                                                          <td>Height </td>
                                                                          <td>700mm</td>
                                                                        </tr>

                                                                        <tr>
                                                                          <th colspan="2">Materials</th>
                                                                        </tr>
                                                                        <tr>
                                                                          <td>Exterior</td>
                                                                          <td>Stainless steel</td>
                                                                        </tr>
                                                                        <tr>
                                                                          <td>Interior</td>
                                                                          <td>Iron</td>
                                                                        </tr>

                                                                        <tr>
                                                                          <th colspan="2">Connections</th>
                                                                        </tr>
                                                                        <tr>
                                                                          <td>Heating Type</td>
                                                                          <td>Gas</td>
                                                                        </tr>
                                                                        <tr>
                                                                          <td>Connected load gas</td>
                                                                          <td>15 Kw</td>
                                                                        </tr>

                                                                      </table> -->
                </div>
            </div>
        </div>
    </section>

    <!-- ========================= SECTION CONTENT END// ========================= -->



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

                        <div class="col-4">
                            <button type="submit" class="btn btn-block btn-dark">
                                Suscribirme
                            </button>
                        </div>

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

        <!-- ========================= SECTION SUBSCRIBE END// ========================= -->
        <div class="container">
            <div style="text-align: center;">
                <img src="/images/rene/logo-nav.png" class="img-fluid" alt="" />
            </div>
        </div>
        </div>
    </section>
@endsection
