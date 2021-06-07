@extends('layouts.bajce')

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
                        <a class="list-group-item" href="{{ route('user.profile') }}"> Mi cuenta </a>
                        {{-- <a class="list-group-item" href="mi-direccion.html"> Mi dirección </a> --}}
                        <a class="list-group-item active" href="{{ route('user.orders') }}"> Mis Órdenes </a>
                        <a class="list-group-item" href="{{ route('user.settings') }}"> Configurar cuenta </a>
                        {{-- <a class="list-group-item" href="#"> Ayuda </a> --}}
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a class="list-group-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                                                                                                                                                                                                                                this.closest('form').submit();">
                                Cerrar
                                sesión
                            </a>
                        </form>
                    </nav>
                </aside> <!-- col.// -->
                <main class="col-md-9">
                    @foreach ($orders as $order)
                        <article class="card mb-4">
                            <header class="card-header">
                                @switch($order->tracker_status)
                                    @case('standby')
                                        <a href="#" class="float-right text-danger mx-2">
                                            <i class="fas fa-truck-moving"></i>
                                            No enviada
                                        </a>
                                    @break
                                    @case('sending')
                                        @switch($order->tracker_company)
                                            @case('bajce')
                                                <a href="#" class="float-right text-warning mx-2">
                                                    <i class="fas fa-truck-moving"></i>
                                                    En camino (No rastreable)
                                                </a>
                                            @break
                                            @case('dhl')
                                                <a href="https://www.dhl.com/mx-es/home/tracking/tracking-express.html?submit=1&tracking-id={{ $order->tracker_guide }}"
                                                    target="_blank" class="float-right text-warning mx-2">
                                                    <i class="fas fa-truck-moving"></i>
                                                    En camino (Guia #{{ $order->tracker_guide }})
                                                </a>
                                            @break
                                            @case('estafeta')
                                                <a href="https://www.estafeta.com/Herramientas/Rastreo" target="_blank"
                                                    class="float-right text-warning mx-2">
                                                    <i class="fas fa-truck-moving"></i>
                                                    En camino (Guia #{{ $order->tracker_guide }})
                                                </a>
                                            @break
                                            @case('ups')
                                                <a href="https://www.ups.com/track?loc=es_MX&requester=ST/" target="_blank"
                                                    class="float-right text-warning mx-2">
                                                    <i class="fas fa-truck-moving"></i>
                                                    En camino (Guia #{{ $order->tracker_guide }})
                                                </a>
                                            @break
                                        @endswitch
                                    @break
                                    @case('complete')
                                        <a href="#" class="float-right text-success mx-2">
                                            <i class="fas fa-truck-moving"></i>
                                            Entregada
                                        </a>
                                    @break

                                @endswitch
                                @switch($order->status)
                                    @case('charge_pending')
                                        <a href="#" class="float-right text-warning">
                                            <i class="fa fa-receipt"></i>
                                            Procesando tu pago
                                        </a>
                                    @break
                                    @case('charge.created')
                                        <a href="#" class="float-right text-warning">
                                            <i class="fa fa-receipt"></i>
                                            Pago pendiente
                                        </a>
                                    @break
                                    @case('charge.succeeded')
                                        <a href="#" class="float-right text-success">
                                            <i class="fa fa-receipt"></i>
                                            Aceptada
                                        </a>
                                    @break
                                    @case('charge.refunded')
                                        <a href="#" class="float-right text-info">
                                            <i class="fa fa-receipt"></i>
                                            Reembolsada
                                        </a>
                                    @break
                                    @case('charge.failed')
                                        <a href="#" class="float-right text-danger">
                                            <i class="fa fa-receipt"></i>
                                            Cargo rechazado
                                        </a>
                                    @break
                                    @case('charge.cancelled')
                                        <a href="#" class="float-right text-danger">
                                            <i class="fa fa-receipt"></i>
                                            Referencia expirada
                                        </a>
                                    @break
                                    @case('charge.expired')
                                        <a href="#" class="float-right text-danger">
                                            <i class="fa fa-receipt"></i>
                                            No autenticado
                                        </a>
                                    @break
                                    @default

                                @endswitch

                                <strong class="d-inline-block mr-3">Orden ID: {{ $order->id }}</strong>
                                <span>{{ $order->created_at->toDayDateTimeString() }}</span>
                            </header>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h6 class="text-muted">Enviar a</h6>
                                        <p>{{ $order->user->name }} {{ $order->user->last_name }}<br>
                                            Phone {{ $order->user->phone }}<br>
                                            Email: {{ $order->user->email }} <br>
                                            Location: {{ $order->shipping_address->street }}
                                            #{{ $order->shipping_address->number }} por
                                            {{ $order->shipping_address->crosses }}
                                            {{ $order->shipping_address->suburb }},
                                            {{ $order->shipping_address->city }}
                                            {{ $order->shipping_address->state }}. <br>
                                            C.P. {{ $order->shipping_address->postal_code }}
                                        </p>
                                    </div>
                                    <div class="col-md-4">
                                        <h6 class="text-muted">Metodo de pago</h6>
                                        {{-- <span class="text-success">
                                            <i class="fab fa-lg fa-cc-visa"></i>
                                            Visa **** 4216
                                        </span> --}}
                                        <p>Subtotal: ${{ number_format($order->amount, 2) }} <br>
                                            <span class="b">Total: ${{ number_format($order->amount, 2) }} </span>
                                        </p>
                                        @if ($order->type == 'store')
                                            <div>
                                                <a href="{{ config('openpay.dashboard_path') }}/paynet-pdf/{{ config('openpay.merchant_id') }}/{{ $order->reference }}"
                                                    target="_blank" class="btn btn-dark mt-2">Imprimir orden de
                                                    pago</a>
                                            </div>
                                        @endif
                                    </div>
                                </div> <!-- row.// -->
                            </div> <!-- card-body .// -->
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        @foreach ($order->products as $product)
                                            <tr>
                                                <td width="85">
                                                    <a href="{{ route('shop.product', $product) }}"> <img
                                                            src="{{ Storage::url($product->image->url) }}"
                                                            class="img-md border">
                                                    </a>
                                                </td>
                                                <td>{{--  --}}
                                                    <p class="title mb-0">{{ $product->name }} </p>
                                                    <p class="title mb-0">SKU: {{ $product->SKU }} </p>
                                                    <p class="title mb-0">Cantidad: {{ $product->pivot->quanty }}
                                                    </p>
                                                    <var class="price text-muted">${{ $product->pivot->price }}</var>
                                                </td>
                                                <td>
                                                    @if ($order->tracker_status == 'complete')
                                                        @if ($order->reviews->count() > 0)
                                                            @foreach ($order->reviews as $review)
                                                                @if ($review->product_id == $product->id)
                                                                    <div class="opinion">
                                                                        <h5 class="mt-4">{{ $review->user->name }}
                                                                            {{ $review->user->last_name }}</h5>
                                                                        <p>{{ $review->comment }}</p>
                                                                        <div class="rating-wrap my-3">
                                                                            <ul class="rating-stars">
                                                                                <li style="width:{{ ($review->rating * 100) / 5 }}%"
                                                                                    class="stars-active">
                                                                                    <i class="fa fa-star"></i>
                                                                                    <i class="fa fa-star"></i>
                                                                                    <i class="fa fa-star"></i>
                                                                                    <i class="fa fa-star"></i>
                                                                                    <i class="fa fa-star"></i>
                                                                                </li>
                                                                                <li>
                                                                                    <i class="fa fa-star"></i>
                                                                                    <i class="fa fa-star"></i>
                                                                                    <i class="fa fa-star"></i>
                                                                                    <i class="fa fa-star"></i>
                                                                                    <i class="fa fa-star"></i>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div> <!-- rating-wrap.// -->

                                                                @endif
                                                            @endforeach
                                                        @else
                                                            @livewire('products-reviews', ['product' => $product,'order' =>
                                                            $order])
                                                        @endif
                                                    @endif
                                                </td>
                                                {{-- <td> Vendedor <br> Grupo Bajce </td> --}}
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div> <!-- table-responsive .end// -->
                        </article> <!-- card order-item .// -->
                    @endforeach
                    {{ $orders->links() }}
                </main> <!-- col.// -->
            </div>
        </div> <!-- container .//  -->
    </section>
    <!-- ========================= SECTION CONTENT END// ========================= -->


@endsection


@section('css')
@livewireStyles
@stop

@section('js')
@livewireScripts
@stop
