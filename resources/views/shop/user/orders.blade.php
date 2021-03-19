@extends('layouts.template')

@section('content')
    <!-- ========================= SECTION CONTENT ========================= -->
    <section class="section-content padding-y pt-5">
        <div class="container">
            <div class="row mt-5">
                @include('shop.user.nav-profile')
                <main class="col-md-9">

                    @foreach ($orders as $order)
                        <article class="card mb-4">
                            <header class="card-header">
                                {{-- <a href="#" class="float-right"> <i class="fa fa-print"></i> Print</a> --}}
                                <strong class="d-inline-block mr-3">Order ID: {{ $order->id }}</strong>
                                <span>Order Date: {{ $order->created_at->toDayDateTimeString() }}</span>
                            </header>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h6 class="text-muted">Direccion de envio</h6>
                                        <p>{{ $order->user->name }} {{ $order->user->last_name }} <br>
                                            Phone: {{ auth()->user()->phone }} Email: {{ auth()->user()->email }} <br>
                                            Location: {{ $order->shipping_address->street }} #
                                            {{ $order->shipping_address->number }} entre
                                            {{ $order->shipping_address->crosses }}
                                            {{ $order->shipping_address->suburb }},
                                            {{ $order->shipping_address->state }},{{ $order->shipping_address->city }},
                                            CP: {{ $order->shipping_address->postal_code }} <br>
                                        </p>
                                    </div>
                                    <div class="col-md-4">
                                        <h6 class="text-muted">Payment</h6>
                                        <span class="b">Total: $ {{ number_format($order->amount, 2) }} </span>
                                        </p>
                                    </div>
                                </div> <!-- row.// -->
                            </div> <!-- card-body .// -->
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <tbody>
                                        @foreach ($order->products as $product)
                                            <tr>
                                                <td width="65">
                                                    <img src="{{ Storage::url($product->image->url) }}" class="img-md border">
                                                </td>
                                                <td>
                                                    <p class="title mb-0">{{ $product->name }}</p>
                                                    <p class="title mb-0">Quanty:{{ $product->quanty }}</p>
                                                    <var class="price text-muted">${{ number_format($product->price,2) }}</var>
                                                </td>
                                                <td>
                                                    @if ($product->color || $product->size)
                                                    Color:
                                                    {{ $product->color }}
                                                    <br>
                                                    Size: {{ $product->size }}
                                                @else
                                                    SKU: {{ $product->SKU }}
                                                @endif </td>
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
