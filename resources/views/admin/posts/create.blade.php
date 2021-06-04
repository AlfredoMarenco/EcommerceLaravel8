@extends('adminlte::page')

@section('title', 'Create Product')

@section('content_header')
    <h1>Crear nuevo producto</h1>
@stop

@section('content')
    <div class="card">
        <div class="car-body p-3">
            {!! Form::open(['route' => 'admin.posts.store', 'files' => true]) !!}
            @include('admin.posts.partials.form')
            {!! Form::submit('Crear Post', ['class' => 'btn btn-success btn-block mt-4']) !!}

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
    @include('sweetalert::alert')
    @livewireScripts
    <script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js') }}"></script>
    <script>
        extract = CKEDITOR.replace('extract');
        CKFinder.setupCKEDITOR(extract, {!! asset('vendor/ckfinder/ckfinder.js') !!})
        body = CKEDITOR.replace('body');

        //Cambiar imagen
        document.getElementById("file").addEventListener('change', cambiarImagen);

        function cambiarImagen(event) {
            var file = event.target.files[0];

            var reader = new FileReader();
            reader.onload = (event) => {
                document.getElementById("picture").setAttribute('src', event.target.result);
            };

            reader.readAsDataURL(file);
        }

    </script>

    <script>
        $(document).ready(function() {
            $("#title").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });

    </script>
@stop
