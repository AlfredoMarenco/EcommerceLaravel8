@extends('adminlte::page')

@section('title', 'Videos')

@section('content_header')
    <h1>Editar Video</h1>
@stop

@section('content')
    @if (session('updateSuccess'))
        <div class="alert alert-success">
            <strong>{{ session('updateSuccess') }}</strong>
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            {!! Form::model($video, ['route' => ['admin.videos.update', $video], 'method' => 'PUT']) !!}
            @include('admin.videos.partials.form')
            {!! Form::submit('Editar video', ['class' => 'btn btn-success btn-block']) !!}
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
