@extends('adminlte::page')

@section('title', 'Create Product')

@section('content_header')
    <h1>Crear nuevo producto</h1>
@stop

@section('content')
    <div class="card">
        <div class="car-body p-3">
            {!! Form::open(['route' => 'admin.products.store', 'name' => 'form', 'files' => true]) !!}
            @include('admin.products.partials.form')
            {!! Form::submit('Crear producto', ['class' => 'btn btn-success btn-block mt-4']) !!}

            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    @livewireStyles
    <style>
        .image-wrapper {
            position: relative;
            padding-bottom: 56.25%;
        }

        .image-wrapper img {
            position: absolute;
            object-fit: contain;
            width: 100%;
            height: 100%;
        }

    </style>
@stop


@section('js')
    @livewireScripts
    <script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js') }}"></script>

    <script>
        CKEDITOR.replace('extract', {
            filebrowserUploadUrl: "{{ route('ckeditor.upload', ['_token' => csrf_token()]) }}",
            filebrowserUploadMethod: 'form',
            config.extraPlugins: 'bootstraptable',
        });
        CKEDITOR.replace('description', {
            filebrowserUploadUrl: "{{ route('ckeditor.upload', ['_token' => csrf_token()]) }}",
            filebrowserUploadMethod: 'form',
            config.extraPlugins: 'bootstraptable',
        });
    </script>

@stop
