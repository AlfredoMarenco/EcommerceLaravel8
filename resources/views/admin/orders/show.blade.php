@extends('adminlte::page')

@section('title', 'Orders')

@section('content_header')
    <h1>Detalles de la compra</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Informacion del cliente</th>
                        <th scope="col">Metodo de pago</th>
                        <th scope="col">Estado de la orden</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <p>
                            <h5>Cliente</h5>
                            Nombre: {{ $order->user->name }}
                            <br>
                            Apellido: {{ $order->user->last_name }}
                            <br>
                            Email: {{ $order->user->email }}
                            <br>
                            Telefono: {{ $order->user->phone }}
                            <br>
                            </p>
                            <h5>Direccion</h5>
                            <div><span>Street:</span> {{ $order->shipping_address->street }}.</div>
                            <div><span>Number:</span> {{ $order->shipping_address->number }}.</div>
                            <div><span>Crosses:</span> {{ $order->shipping_address->crosses }}, Col.
                                {{ $order->shipping_address->suburb }}.</div>
                            <div><span>Location:</span> {{ $order->shipping_address->state }},
                                {{ $order->shipping_address->city }}.
                            </div>
                            <div><span>C.P.</span> {{ $order->shipping_address->postal_code }}.</div>
                            <div><span>Reference:</span> {{ $order->shipping_address->reference }}.</div>
                        </td>
                        <td>

                            <p>
                            <h4>Importe: ${{ number_format($order->amount, 2) }} MXN </h4>
                            </p>
                            @if ($card)
                                <p>Tarjeta:
                                    <span class="text-success">
                                        <i class="far fa-lg fa-credit-card"></i>
                                        {{ $card['card_number'] }}
                                    </span>
                                </p>
                            @endif
                            <p>
                                Fecha del cargo: {{ $order->created_at }}
                            </p>
                        </td>
                        <td>
                            <h5>Order: {{ $order->id }}</h5>
                            @switch($order->status)
                                @case('charge_pending')
                                    <h4 class="float-center text-warning">
                                        <i class="fa fa-receipt"></i>
                                        Pendiente/Tarjeta
                                    </h4>
                                @break
                                @case('charge.created')
                                    <h4 class="float-center text-warning">
                                        <i class="fa fa-receipt"></i>
                                        Pendiente/Efectivo
                                    </h4>
                                @break
                                @case('charge.succeeded')
                                    <h4 class="float-center text-success">
                                        <i class="fa fa-receipt"></i>
                                        Completada
                                    </h4>
                                    @livewire('admin.tracker-options', ['order' => $order])
                                @break
                                @case('charge.refunded')
                                    <h4 class="float-center text-danger">
                                        <i class="fa fa-receipt"></i>
                                        Cancelada/Reembolsada
                                    </h4>
                                    <p>Orden cancelada: {{ $order->updated_at }}</p>
                                @break
                                @case('charge.failed')
                                    <h4 class="float-center text-danger">
                                        <i class="fa fa-receipt"></i>
                                        Cancelada/Rechazada
                                    </h4>
                                    <p>Orden cancelada: {{ $order->updated_at }}</p>
                                @break
                                @case('charge.cancelled')
                                    <h4 class="float-center text-danger">
                                        <i class="fa fa-receipt"></i>
                                        Referencia expirada
                                    </h4>
                                    <p>Orden cancelada: {{ $order->updated_at }}</p>
                                @break
                                @case('charge.expired')
                                    <h4 class="float-center text-danger">
                                        <i class="fa fa-receipt"></i>
                                        No autenticado
                                    </h4>
                                    <p>Orden cancelada: {{ $order->updated_at }}</p>
                                @break
                            @endswitch
                        </td>
                    </tr>

                </tbody>
            </table>
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
                                </td>
                                <td>
                                    @if ($product->color || $product->size)
                                        Color:
                                        {{ $product->color }}
                                        <br>
                                        Size: {{ $product->size }}
                                    @else
                                        SKU: {{ $product->SKU }}
                                    @endif
                                </td>
                                <td clss="text-center">
                                    <p>Precio unitario: {{ $product->pivot->quanty }} x ${{ number_format($product->pivot->price, 2) }}</p>
                                    <p class="title mb-0">Costos de envio: {{ number_format($product->pivot->quanty*$product->pivot->envio,2) }} <small>({{ $product->pivot->quanty }} x ${{ number_format($product->pivot->envio,2) }})</small></p>
                                </td>
                                <td>
                                    @foreach ($order->reviews as $review)
                                        @if ($review->product_id == $product->id)
                                            <div class="opinion">
                                                <p>{{ $review->comment }}</p>
                                                <div class="rating-wrap my-1">
                                                    <i class="text-warning fa fa-star"></i>({{ $review->rating }})
                                                </div>
                                                <div>
                                                    @livewire('admin.reviews-aproved', ['review' => $review])
                                                </div>
                                            </div> <!-- rating-wrap.// -->
                                        @endif
                                    @endforeach
                                </td>
                            </tr>
                        @endforeach
                        <tr>
                            <td>
                            </td>
                            <td>
                            </td>
                            <td>
                            </td>
                            <td>
                                <div class="h3">
                                    Total: ${{ number_format($order->amount, 2) }}
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                @if ($order->status != 'canceled' || $order->status != 'charge_pending')

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger float-right" data-toggle="modal"
                        data-target="#staticBackdrop">
                        Cancelar y reembolsar
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false"
                        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Cancelacion de orden
                                    </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body text-center">
                                    Cancelar la orden es un proceso irreversible.<br>
                                    ¿Estas seguro que deseas cancelar la orden?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-dark" data-dismiss="modal">No</button>
                                    <form action="{{ route('admin.orders.destroy', $order->id_gateway) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-light">Si, deacuerdo</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div> <!-- table-responsive .end// -->
        </div>
    </div>
@stop

@section('css')
    @livewireStyles
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@stop

@section('js')
    @livewireScripts
@stop
