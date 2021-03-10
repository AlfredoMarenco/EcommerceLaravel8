@extends('adminlte::page')

@section('title', 'Products')

@section('content_header')
    <h1>Editar color</h1>
@stop


@section('content')
    <div class="card">
        @if (session('colorSuccess'))
            <div class="alert alert-success">
                <strong>{{ session('colorSuccess') }}</strong>
            </div>
        @endif
        @if (session('colorUpdate'))
            <div class="alert alert-success">
                <strong>{{ session('colorUpdate') }}</strong>
            </div>
        @endif
        <div class="card-body">
            {!! Form::model($color, ['route' => ['admin.colors.update', $color], 'files' => true, 'method' => 'PUT']) !!}
            @include('admin.colors.partials.form')
            {!! Form::submit('Actualizar color', ['class' => 'btn btn-success btn-block']) !!}
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
