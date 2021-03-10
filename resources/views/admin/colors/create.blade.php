@extends('adminlte::page')

@section('title', 'Products')

@section('content_header')
    <h1>Crear nuevo color</h1>
@stop


@section('content')
    @if (session('colorSuccess'))
        <div class="alet-success">
            <strong>{{ session('colorSuccess') }}</strong>
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.colors.store']) !!}
            @include('admin.colors.partials.form')
            {!! Form::submit('Crear nuevo color', ['class' => 'btn btn-success btn-block']) !!}
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
