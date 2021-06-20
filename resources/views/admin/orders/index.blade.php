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
@stop

@section('js')
    @livewireScripts
@stop
