@extends('adminlte::page')

@section('title', 'Videos')

@section('content_header')
    <h1>Links de videos</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            @livewire('admin.table-videos')
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
