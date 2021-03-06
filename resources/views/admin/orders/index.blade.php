@extends('adminlte::page')

@section('title', 'Products')

@section('content_header')
    <h1>Ordenes generadas</h1>
@stop

@section('content')
    @livewire('admin.table-orders')
@stop

@section('css')
    @livewireStyles
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@stop

@section('js')
    @livewireScripts
@stop
