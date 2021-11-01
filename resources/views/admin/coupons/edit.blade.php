@extends('adminlte::page')

@section('title', 'Cupones')

@section('content_header')
    <h1>Editar Cupon</h1>
@stop

@section('content')
    @if (session('updateSuccess'))
        <div class="alert alert-success">
            <strong>{{ session('updateSuccess') }}</strong>
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            {!! Form::model($coupon, ['route' => ['admin.coupons.update', $coupon], 'method' => 'PUT']) !!}
            @include('admin.coupons.partials.formedit')
            {!! Form::submit('Crear nueva categoria', ['class' => 'btn btn-success btn-block']) !!}
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
