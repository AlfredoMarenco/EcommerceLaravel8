@extends('adminlte::page')

@section('title', 'Create Product')

@section('content_header')
    <h1>Nuevo producto</h1>
@stop

@section('content')
    @livewire('admin.form-new-product')
@stop

@section('css')
    @livewireStyles
@stop

@section('js')
    @livewireScripts
@stop
