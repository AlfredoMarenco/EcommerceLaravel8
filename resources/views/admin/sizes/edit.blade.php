@extends('adminlte::page')

@section('title', 'Products')

@section('content_header')
    <h1>Editar color</h1>
@stop


@section('content')
    <div class="card">
        @if (session('sizeSuccess'))
            <div class="alert alert-success">
                <strong>{{ session('sizeSuccess') }}</strong>
            </div>
        @endif
        @if (session('sizeUpdate'))
            <div class="alert alert-success">
                <strong>{{ session('sizeUpdate') }}</strong>
            </div>
        @endif
        <div class="card-body">
            {!! Form::model($size, ['route' => ['admin.sizes.update', $size], 'files' => true, 'method' => 'PUT']) !!}
            @include('admin.sizes.partials.form')
            {!! Form::submit('Actualizar talla', ['class' => 'btn btn-success btn-block']) !!}
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
