@extends('adminlte::page')

@section('title', 'Create Product')

@section('content_header')
    <h1>Crear nuevo producto</h1>
@stop

@section('content')
    <div class="card">
        <div class="car-body p-3">
            {!! Form::open(['route' => 'admin.collections.store', 'files' => true]) !!}
            @include('admin.collections.partials.form')
            {!! Form::submit('Crear Coleccion', ['class' => 'btn btn-success btn-block mt-4']) !!}
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
        CKEDITOR.replace('extract');
        CKEDITOR.replace('body');
        //Cambiar imagen
        document.getElementById("image1").addEventListener('change', cambiarImagen1);

        function cambiarImagen1(event) {
            var file = event.target.files[0];

            var reader = new FileReader();
            reader.onload = (event) => {
                document.getElementById("picture1").setAttribute('src', event.target.result);
            };

            reader.readAsDataURL(file);
        }
        //Cambiar imagen
        document.getElementById("image2").addEventListener('change', cambiarImagen2);

        function cambiarImagen2(event) {
            var file = event.target.files[0];

            var reader = new FileReader();
            reader.onload = (event) => {
                document.getElementById("picture2").setAttribute('src', event.target.result);
            };

            reader.readAsDataURL(file);
        }
        //Cambiar imagen
        document.getElementById("image3").addEventListener('change', cambiarImagen3);

        function cambiarImagen3(event) {
            var file = event.target.files[0];

            var reader = new FileReader();
            reader.onload = (event) => {
                document.getElementById("picture3").setAttribute('src', event.target.result);
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
