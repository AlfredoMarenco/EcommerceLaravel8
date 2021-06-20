@extends('adminlte::page')

@section('title', 'Sliders')

@section('content_header')
    <h1>Administracion de Mosaico</h1>
@stop

@section('content')
    @if (session('Success'))
        <div class="alert alert-success">
            <strong>{{ session('Success') }}</strong>
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            @livewire('admin.table-mosaic')
        </div>
    </div>
@stop

@section('css')
    @livewireStyles
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@stop

@section('js')
    @include('sweetalert::alert')
    @livewireScripts
@stop
