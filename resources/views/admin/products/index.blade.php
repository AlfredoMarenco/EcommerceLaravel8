@extends('adminlte::page')

@section('title', 'Products')

@section('content_header')
    <h1>Lista de Productos</h1>
@stop

@section('content')
    @livewire('admin.table-products')
@stop

@section('css')
    @livewireStyles
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@stop

@section('js')
    @livewireScripts
@stop
