@extends('adminlte::page')

@section('title', 'Cupones')

@section('content_header')
    <h1>Cupones de descuento</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            @livewire('admin.table-coupons')
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
