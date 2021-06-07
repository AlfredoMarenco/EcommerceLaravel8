@extends('adminlte::page')

@section('title', 'Products')

@section('content_header')
    <h1>Crear nueva categoria</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.videos.store']) !!}
            @include('admin.videos.partials.form')
            {!! Form::submit('Crear nuevo video', ['class' => 'btn btn-success btn-block']) !!}
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
