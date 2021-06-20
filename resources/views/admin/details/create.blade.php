@extends('adminlte::page')

@section('title', 'Detalles de producto')

@section('content_header')
    <h1>Crear nuevo campo de detalle</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.details.store']) !!}
            @include('admin.details.partials.form')
            {!! Form::submit('Crear nuevo detalle', ['class' => 'btn btn-success btn-block']) !!}
            {!! Form::close() !!}
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
