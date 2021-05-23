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
                @include('bajce.user.nav-profile')
                <main class="col-md-9">
                    @foreach ($orders as $order)
                        <article class="card mb-4">
                            <header class="card-header">
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
                                        <span class="text-success">
                                            <i class="fab fa-lg fa-cc-visa"></i>
                                            Visa **** 4216
                                        </span>
                                        <p>Subtotal: ${{ number_format($order->amount, 2) }} <br>
                                            <span class="b">Total: ${{ number_format($order->amount, 2) }} </span>
                                        </p>
                                    </div>
                                </div> <!-- row.// -->
                            </div> <!-- card-body .// -->
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <tbody>
                                        @foreach ($order->products as $product)
                                            <tr>
                                                <td width="85">
                                                    <img src="{{ Storage::url($product->image->url) }}"
                                                        class="img-md border">
                                                </td>
                                                <td>
                                                    <p class="title mb-0">{{ $product->name }} </p>
                                                    <p class="title mb-0">SKU: {{ $product->SKU }} </p>
                                                    <p class="title mb-0">Cantidad: {{ $product->pivot->quanty }} </p>
                                                    <var class="price text-muted">${{ $product->pivot->price }}</var>
                                                </td>
                                                {{-- <td> Vendedor <br> Grupo Bajce </td> --}}
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div> <!-- table-responsive .end// -->
                        </article> <!-- card order-item .// -->
                    @endforeach
                </main> <!-- col.// -->
            </div>

        </div> <!-- container .//  -->
    </section>
    <!-- ========================= SECTION CONTENT END// ========================= -->


@endsection
