@extends('adminlte::page')

@section('title', 'Products')

@section('content_header')
    <h1>Lista de Productos</h1>
@stop

@section('content')
    @if (session('Success'))
        <div class="alert alert-success">
            <strong>{{ session('Success') }}</strong>
        </div>
    @endif
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
