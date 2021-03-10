@extends('adminlte::page')

@section('title', 'Products')

@section('content_header')
    <h1>Crear nueva talla</h1>
@stop


@section('content')
    @if (session('sizeSuccess'))
        <div class="alet-success">
            <strong>{{ session('sizeSuccess') }}</strong>
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.sizes.store']) !!}
            @include('admin.sizes.partials.form')
            {!! Form::submit('Crear nueva talla', ['class' => 'btn btn-success btn-block']) !!}
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
