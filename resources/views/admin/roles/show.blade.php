@extends('adminlte::page')

@section('title', 'Products')

@section('content_header')
    <h1>Mostrar rol</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            @livewire('admin.table-sizes')
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
