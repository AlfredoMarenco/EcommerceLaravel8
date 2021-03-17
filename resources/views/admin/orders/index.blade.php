@extends('adminlte::page')

@section('title', 'Products')

@section('content_header')
    <h1>Ordenes generadas</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <table class="table table-striped text-center">
                <thead class="thead-dark">
                    <tr>
                        <th>Id</th>
                        <th>Client</th>
                        <th>Amount</th>
                        <th>Status</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                        <tr>
                            <td>{{ $order->id }}</td>
                            <td>{{ $order->user->name }} {{ $order->user->last_name }}</td>
                            <td>{{ $order->amount }}</td>
                            <td>
                                @switch($order->status)
                                    @case('process')
                                    <strong class="text-warning">
                                        {{ $order->status }}
                                    </strong>
                                        @break
                                    @case('')

                                        @break
                                    @default

                                @endswitch
                            </td>
                            <td>
                                <a href="{{ route('admin.orders.show', $order) }}" class="btn btn-dark btn-sm">Ver
                                    detalles</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
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
