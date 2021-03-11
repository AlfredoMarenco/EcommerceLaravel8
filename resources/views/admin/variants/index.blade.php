@extends('adminlte::page')

@section('title', 'Products')

@section('content_header')
    <h1>Variantes de productos</h1>
    <small class="text-secondary">Puedes agregarle diferentes variaciones a tu producto, solo tienes que darle clic en el boton crear variacion en el producto que desees.</small>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            @livewire('admin.table-variants')
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
