@extends('adminlte::page')

@section('title', 'posts')

@section('content_header')
    <h1>Lista de colecciones</h1>
@stop

@section('content')
    @if (session('Success'))
        <div class="alert alert-success">
            <strong>{{ session('Success') }}</strong>
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            @livewire('admin.table-collections')
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
