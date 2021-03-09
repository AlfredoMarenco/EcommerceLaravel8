@extends('layouts.template-landing')


@section('content')
    <!-- ========================= SECTION CONTENT ========================= -->
    <section class="section-content bg-white padding-y">
        <div class="container">

            <!-- ============================ ITEM DETAIL ======================== -->
            <div class="row">
                <aside class="col-md-6">
                    <div class="card">
                        <article class="gallery-wrap">
                            <div class="img-big-wrap">
                                <div> <a href="#"><img @if ($product->image) src="{{ Storage::url($product->image->url) }}" @else src="https://cdn.pixabay.com/photo/2014/05/02/21/47/laptop-336369_960_720.jpg" @endif></a>
                                </div>
                            </div> <!-- slider-product.// -->
                            <div class="thumbs-wrap">
                                @foreach ($product->images as $image)
                                <a href="#" class="item-thumb"> <img @if ($product->images) src="{{ Storage::url($image->url) }}" @else src="https://cdn.pixabay.com/photo/2014/05/02/21/47/laptop-336369_960_720.jpg" @endif></a>
                                @endforeach
                            </div> <!-- slider-nav.// -->
                        </article> <!-- gallery-wrap .end// -->
                    </div> <!-- card.// -->
                </aside>
                <main class="col-md-6">
                    <article class="product-info-aside">
                        <h2 class="title mt-5">{{ $product->name }}</h2>
{{--
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
                            <small class="label-rating text-muted">132 reviews</small>
                            <small class="label-rating text-success"> <i class="fa fa-clipboard-check"></i> 154 orders
                            </small>
                        </div> <!-- rating-wrap.// --> --}}

                        <div class="mb-3">
                            <var class="price h4 mb-5">{{ $product->presentPrice() }}</var>
                            <span class="text-muted">MXN</span>
                        </div> <!-- price-detail-wrap .// -->
                        <p class="mt-5">{!! $product->description !!} </p>

                        {{-- <dl class="row">
                            <dt class="col-sm-3">Manufacturer</dt>
                            <dd class="col-sm-9"><a href="#">Great textile Ltd.</a></dd>

                            <dt class="col-sm-3">Article number</dt>
                            <dd class="col-sm-9">596 065</dd>

                            <dt class="col-sm-3">Guarantee</dt>
                            <dd class="col-sm-9">2 year</dd>

                            <dt class="col-sm-3">Delivery time</dt>
                            <dd class="col-sm-9">3-4 days</dd>

                            <dt class="col-sm-3">Availabilty</dt>
                            <dd class="col-sm-9">in Stock</dd>
                        </dl> --}}
                        <form action="{{ route('cart.addItem', $product) }}" method="POST">
                            @csrf
                            <div class="row mt-4">
                                <div class="form-group col-md flex-grow-0">
                                    <livewire:count-items-to-cart/>
                                </div> <!-- col.// -->
                                <div class="form-group col-md">
                                    <button class="btn text-white btn-primary mr-2">
                                        <i class="fas fa-shopping-cart"></i> <span class="text">Add to Cart</span>
                                    </button>
                                    {{-- <a href="#" class="btn btn-light">
                                        <i class="fas fa-envelope"></i> <span class="text">Contact supplier</span>
                                    </a> --}}
                                </div> <!-- col.// -->
                            </div> <!-- row.// -->
                        </form>
                    </article> <!-- product-info-aside .// -->
                </main> <!-- col.// -->
            </div> <!-- row.// -->

            <!-- ================ ITEM DETAIL END .// ================= -->


        </div> <!-- container .//  -->
    </section>
    <!-- ========================= SECTION CONTENT END// ========================= -->

    <!-- ========================= SECTION  ========================= -->
    <section class="section-name padding-y bg">
        <div class="container">

            <div class="row">
                <div class="col-md-8">
                    <h5 class="title-description">Description</h5>
                    <p>
                       {!! $product->description !!}
                    </p>
                    {{-- <ul class="list-check">
                        <li>Material: Stainless steel</li>
                        <li>Weight: 82kg</li>
                        <li>built-in drip tray</li>
                        <li>Open base for pots and pans</li>
                        <li>On request available in propane execution</li>
                    </ul> --}}

                    {{-- <h5 class="title-description">Specifications</h5>
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
                            <td>{{ $product->width }}</td>
                        </tr>
                        <tr>
                            <td>Depth</td>
                            <td>{{ $product->depth }}</td>
                        </tr>
                        <tr>
                            <td>Height </td>
                            <td>{{ $product->height }}</td>
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

                    </table> --}}
                </div> <!-- col.// -->
{{--
                <aside class="col-md-4">

                    <div class="box">

                        <h5 class="title-description">Files</h5>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>

                        <h5 class="title-description">Videos</h5>


                        <article class="media mb-3">
                            <a href="#"><img class="img-sm mr-3" src="images/posts/3.jpg"></a>
                            <div class="media-body">
                                <h6 class="mt-0"><a href="#">How to use this item</a></h6>
                                <p class="mb-2"> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus
                                    scelerisque
                                    ante
                                    sollicitudin </p>
                            </div>
                        </article>

                        <article class="media mb-3">
                            <a href="#"><img class="img-sm mr-3" src="images/posts/2.jpg"></a>
                            <div class="media-body">
                                <h6 class="mt-0"><a href="#">New tips and tricks</a></h6>
                                <p class="mb-2"> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus
                                    scelerisque
                                    ante
                                    sollicitudin </p>
                            </div>
                        </article>

                        <article class="media mb-3">
                            <a href="#"><img class="img-sm mr-3" src="images/posts/1.jpg"></a>
                            <div class="media-body">
                                <h6 class="mt-0"><a href="#">New tips and tricks</a></h6>
                                <p class="mb-2"> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus
                                    scelerisque
                                    ante
                                    sollicitudin </p>
                            </div>
                        </article>



                    </div> <!-- box.// -->
                </aside> <!-- col.// --> --}}
            </div> <!-- row.// -->

        </div> <!-- container .//  -->
    </section>
    <!-- ========================= SECTION CONTENT END// ========================= -->



    <!-- ========================= SECTION SUBSCRIBE  ========================= -->
    <section class="padding-y-lg bg-light border-top">
        <div class="container">

            <p class="pb-2 text-center">Delivering the latest product trends and industry news straight to your inbox
            </p>

            <div class="row justify-content-md-center">
                <div class="col-lg-4 col-sm-6">
                    <form class="form-row">
                        <div class="col-8">
                            <input class="form-control" placeholder="Your Email" type="email">
                        </div> <!-- col.// -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-block btn-warning"> <i class="fa fa-envelope"></i>
                                Subscribe
                            </button>
                        </div> <!-- col.// -->
                    </form>
                    <small class="form-text">We’ll never share your email address with a third-party. </small>
                </div> <!-- col-md-6.// -->
            </div>


        </div>
    </section>
    <!-- ========================= SECTION SUBSCRIBE END// ========================= -->

@endsection
