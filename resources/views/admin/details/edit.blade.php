@extends('adminlte::page')

@section('title', 'Detalles')

@section('content_header')
    <h1>Editar campo de detalle</h1>
@stop

@section('content')
    @if (session('updateSuccess'))
        <div class="alert alert-success">
            <strong>{{ session('updateSuccess') }}</strong>
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            {!! Form::model($detail, ['route' => ['admin.details.update', $detail], 'method' => 'PUT']) !!}
            @include('admin.details.partials.form')
            {!! Form::submit('Editar nuevo campo', ['class' => 'btn btn-success btn-block']) !!}
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
