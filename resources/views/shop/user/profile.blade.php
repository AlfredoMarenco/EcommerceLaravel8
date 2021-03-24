@extends('layouts.template')

@section('content')
    <!-- ========================= SECTION CONTENT ========================= -->
    <section class="section-content padding-y pt-5">
        <div class="container">
            <div class="row mt-5">
                @include('shop.user.nav-profile')
                <main class="col-md-9">

                    <article class="card mb-3">
                        <div class="card-body">
                            <figure class="icontext">
                                <div class="icon">
                                    <img class="rounded-circle img-sm border"
                                        src="{{ asset('images/avatars/avatar3.jpg') }}">
                                </div>
                                <div class="text">
                                    <strong> {{ Auth::user()->name }} {{ Auth::user()->last_name }} </strong> <br>
                                    <p class="mb-2"> {{ Auth::user()->email }} </p>

                                </div>
                            </figure>
                            <hr>
                            <article class="card-group card-stat">
                                <figure class="card bg">
                                    <div class="p-3">
                                        <h4 class="title">{{ $orders->count() }}</h4>
                                        <span>Órdenes</span>
                                    </div>
                                </figure>
                                {{-- <figure class="card bg">
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
                                </figure> --}}
                            </article>
                        </div> <!-- card-body .// -->
                    </article> <!-- card.// -->
                    <article class="card  mb-3">
                        <div class="card-body">
                            <h5 class="card-title mb-4">Órdenes recientes </h5>

                            <div class="row">
                                @foreach ($orders as $order)
                                    <div class="col-md-6">
                                        <figure class="itemside  mb-3">
                                            @foreach ($order->products as $product)
                                                <div class="aside"><img src="{{ Storage::url($product->image->url) }}"
                                                        class="border img-sm"></div>
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
                                                @switch($order->status)
                                                    @case('completed')
                                                    <span class="text-success">Orden recibida</span>
                                                    @break
                                                    @case('charge_pending')
                                                    <span class="text-warning">Cargo no autenticado</span>
                                                    @break
                                                @endswitch
                                            </figcaption>
                                        </figure>
                                    </div>
                                @endforeach
                                <!-- col.// -->
                            </div> <!-- row.// -->

                            <a href="{{ route('user.orders') }}" class="btn btn-outline-primary btn-block"> Ver todas las
                                órdenes <i class="fa fa-chevron-down"></i> </a>
                        </div> <!-- card-body .// -->
                    </article> <!-- card.// -->

                </main> <!-- col.// -->
            </div>

        </div> <!-- container .//  -->
    </section>
    <!-- ========================= SECTION CONTENT END// ========================= -->

@endsection
