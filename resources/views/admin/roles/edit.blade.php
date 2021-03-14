@extends('adminlte::page')

@section('title', 'Products')

@section('content_header')
    <h1>Editar Rol</h1>
@stop


@section('content')
    <div class="card">
        @if (session('roleSuccess'))
            <div class="alert alert-success">
                <strong>{{ session('roleSuccess') }}</strong>
            </div>
        @endif
        @if (session('roleUpdate'))
            <div class="alert alert-success">
                <strong>{{ session('roleUpdate') }}</strong>
            </div>
        @endif
        <div class="card-body">
            {!! Form::model($role, ['route' => ['admin.roles.update', $role], 'method' => 'PUT']) !!}
            @include('admin.roles.partials.form')
            {!! Form::submit('Actualizar rol', ['class' => 'btn btn-success btn-block']) !!}
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
