@extends('adminlte::page')

@section('title', 'Products')

@section('content_header')
    <h1>Mostrar detalles de Producto</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            @livewire('admin.table-products')
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
