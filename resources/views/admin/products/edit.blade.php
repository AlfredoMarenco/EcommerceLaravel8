@extends('adminlte::page')

@section('title', 'Products')

@section('content_header')
    <h1>Editar producto</h1>
@stop

@section('content')
    <div class="card">
        <div class="car-body p-3">
            {{-- @livewire('admin.form-new-product') --}}
            {!! Form::model($product, ['route' => ['admin.products.update', $product], 'files' => true, 'method' => 'PUT']) !!}

            @include('admin.products.partials.form')

            {!! Form::submit('Actualizar producto', ['class' => 'btn btn-success btn-block mt-4']) !!}
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
        });
        CKEDITOR.replace('description', {
            filebrowserUploadUrl: "{{ route('ckeditor.upload', ['_token' => csrf_token()]) }}",
            filebrowserUploadMethod: 'form',
        });

    </script>
    @include('sweetalert::alert')

    <script>
        $(document).ready(function() {
            $("#name").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });
    </script>
@stop
