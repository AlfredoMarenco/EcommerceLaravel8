@extends('layouts.template-landing')

@section('profile')
    <!-- ========================= SECTION CONTENT ========================= -->
    <section class="section-content padding-y">
        <div class="container">
            <div class="row">
                @include('landing.user.nav-profile')
                <main class="col-md-9">

                    <article class="card mb-3">
                        <div class="card-body">
                            <figure class="icontext">
                                <div class="icon">
                                    <img class="rounded-circle img-sm border" src="{{ asset('images/avatars/avatar3.jpg') }}">
                                </div>
                                <div class="text">
                                    <strong> {{ Auth::user()->name }} {{ Auth::user()->last_name }} </strong> <br>
                                    <p class="mb-2"> {{ Auth::user()->email }} </p>
                                    <a href="#" class="btn btn-light btn-sm">Edit</a>
                                </div>
                            </figure>
                            <hr>
                            <p>
                                <i class="fa fa-map-marker text-muted"></i> &nbsp; My address:
                                <br>
                                Tashkent city, Street name, Building 123, House 321 &nbsp
                                <a href="#" class="btn-link"> Edit</a>
                            </p>



                            <article class="card-group card-stat">
                                <figure class="card bg">
                                    <div class="p-3">
                                        <h4 class="title">{{ $orders->count() }}</h4>
                                        <span>Orders</span>
                                    </div>
                                </figure>
                                <figure class="card bg">
                                    <div class="p-3">
                                        <h4 class="title">5</h4>
                                        <span>Wishlists</span>
                                    </div>
                                </figure>
                                <figure class="card bg">
                                    <div class="p-3">
                                        <h4 class="title">12</h4>
                                        <span>Awaiting delivery</span>
                                    </div>
                                </figure>
                                <figure class="card bg">
                                    <div class="p-3">
                                        <h4 class="title">50</h4>
                                        <span>Delivered items</span>
                                    </div>
                                </figure>
                            </article>


                        </div> <!-- card-body .// -->
                    </article> <!-- card.// -->
                    <article class="card  mb-3">
                        <div class="card-body">
                            <h5 class="card-title mb-4">Recent orders </h5>

                            <div class="row">
                                @foreach ($orders as $order)
                                    <div class="col-md-6">
                                        <figure class="itemside  mb-3">
                                            @foreach ($order->products as $product)

                                            <div class="aside"><img src="{{ Storage::url($product->image->url) }}" class="border img-sm"></div>
                                            @endforeach
                                            <figcaption class="info">
                                                <time class="text-muted"><i class="fa fa-calendar-alt"></i>
                                                    {{ $order->created_at }}</time>
                                                @foreach ($order->products as $product)
                                                    <p>
                                                        {{ $product->name }}
                                                    </p>
                                                @endforeach
                                                <p>$ {{ number_format($order->amount, 2) }}</p>
                                                <span class="text-success">Order {{ $order->status }} </span>
                                            </figcaption>
                                        </figure>
                                    </div>
                                @endforeach
                                <!-- col.// -->
                            </div> <!-- row.// -->

                            <a href="#" class="btn btn-outline-primary btn-block"> See all orders <i
                                    class="fa fa-chevron-down"></i> </a>
                        </div> <!-- card-body .// -->
                    </article> <!-- card.// -->

                </main> <!-- col.// -->
            </div>

        </div> <!-- container .//  -->
    </section>
    <!-- ========================= SECTION CONTENT END// ========================= -->

@endsection
