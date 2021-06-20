@extends('layouts.bajce')
@section('title', 'Usuario')
@section('content')

    <!-- ========================= SECTION PAGETOP ========================= -->
    <section class="section-pagetop bg-gray">
        <div class="container">
            <h2 class="title-page">My account</h2>
        </div> <!-- container //  -->
    </section>
    <!-- ========================= SECTION PAGETOP END// ========================= -->

    <!-- ========================= SECTION CONTENT ========================= -->
    <section class="section-content padding-y">
        <div class="container">

            <div class="row">
                <aside class="col-md-3">
                    <nav class="list-group">
                        <a class="list-group-item active" href="{{ route('user.profile') }}"> Mi cuenta </a>
                        {{-- <a class="list-group-item" href="mi-direccion.html"> Mi dirección </a> --}}
                        <a class="list-group-item" href="{{ route('user.orders') }}"> Mis Órdenes </a>
                        <a class="list-group-item" href="{{ route('user.settings') }}"> Configurar cuenta </a>
                        {{-- <a class="list-group-item" href="#"> Ayuda </a> --}}
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a class="list-group-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                    this.closest('form').submit();"> Cerrar sesión </a>
                        </form>
                    </nav>
                </aside> <!-- col.// -->
                <main class="col-md-9">
                    <article class="card mb-3">
                        <div class="card-body">

                            <figure class="icontext">
                                <div class="icon">
                                    <img class="img-fluid"
                                        src="{{ asset('images/misc/logo-bajce-vrd.png') }}">
                                </div>
                                <div class="text">
                                    <strong> {{ auth()->user()->name }} {{ auth()->user()->last_name }}</strong> <br>
                                    <p class="mx-1"> {{ auth()->user()->email }} </p>
                                    <p class="mx-1"> {{ auth()->user()->phone }} </p>
                                    {{-- <a href="#" class="btn btn-light btn-sm">Edit</a> --}}
                                </div>
                            </figure>
                        </div> <!-- card-body .// -->
                    </article> <!-- card.// -->

                    <article class="card  mb-3">
                        <div class="card-body">
                            <h5 class="card-title mb-4">Órdenes recientes </h5>
                            <div class="row">
                                @if ($orders->count() >= 0)
                                    @foreach ($orders as $order)
                                        <div class="col-md-6">
                                            <figure class="itemside  mb-3">
                                                <figcaption class="info">
                                                    <time class="text-muted"><i class="fa fa-calendar-alt"></i>
                                                        {{ $order->created_at }}</time>
                                                    <p>Orden numero: {{ $order->id }} </p>
                                                    <p>Total: ${{ number_format($order->amount, 2) }} </p>
                                                    @switch($order->status)
                                                        @case('charge.succeeded')
                                                            <span class="text-success">Aceptada</span>
                                                        @break
                                                        @case('charge_pending')
                                                            <span class="text-warning">Procesando pago</span>
                                                        @break
                                                        @case('charge.refunded')
                                                            <span class="text-danger">Reembolsada</span>
                                                        @break
                                                        @case('charge.failed')
                                                            <span class="text-danger">Cargo rechazado</span>
                                                        @break
                                                        @case('charge.expired')
                                                            <span class="text-info">No autenticado</span>
                                                        @break
                                                        @case('charge.created')
                                                            <span class="text-warning">Pago pendiente</span>
                                                        @break
                                                    @endswitch
                                                </figcaption>
                                            </figure>
                                        </div> <!-- col.// -->
                                    @endforeach
                                    {{ $orders->links() }}
                                @else
                                    <div class="mx-auto">
                                        <h4>No cuentas con compras aun</h4>
                                    </div>
                                @endif
                            </div> <!-- row.// -->
                        </div> <!-- card-body .// -->
                    </article> <!-- card.// -->

                </main> <!-- col.// -->
            </div>

        </div> <!-- container .//  -->
    </section>
    <!-- ========================= SECTION CONTENT END// ========================= -->

@endsection
