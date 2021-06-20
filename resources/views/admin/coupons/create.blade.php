@extends('adminlte::page')

@section('title', 'Cupones')

@section('content_header')
    <h1>Crear nuevo cupon</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.coupons.store']) !!}
            @include('admin.coupons.partials.form')
            {!! Form::submit('Crear nuevo cupon', ['class' => 'btn btn-success btn-block']) !!}
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
