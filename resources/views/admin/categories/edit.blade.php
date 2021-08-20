@extends('adminlte::page')

@section('title', 'Products')

@section('content_header')
    <h1>Editar categoria</h1>
@stop

@section('content')
    @if (session('updateSuccess'))
        <div class="alert alert-success">
            <strong>{{ session('updateSuccess') }}</strong>
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            {!! Form::model($category, ['route' => ['admin.categories.update', $category], 'method' => 'PUT']) !!}
            @include('admin.categories.partials.form')
            {!! Form::submit('Editar categoria', ['class' => 'btn btn-success btn-block']) !!}
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
    @include('sweetalert::alert')
@stop
