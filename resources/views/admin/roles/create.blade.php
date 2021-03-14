@extends('adminlte::page')

@section('title', 'Products')

@section('content_header')
    <h1>Crear nuevo Rol</h1>
@stop


@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.roles.store']) !!}
            @include('admin.roles.partials.form')
            {!! Form::submit('Crear nuevo rol', ['class' => 'btn btn-success btn-block']) !!}
            {!! Form::close() !!}
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
