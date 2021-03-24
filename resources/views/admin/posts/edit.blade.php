@extends('adminlte::page')

@section('title', 'posts')

@section('content_header')
    <h1>Editar post</h1>
@stop

@section('content')
    <div class="card">
        <div class="car-body p-3">
            {!! Form::model($post, ['route' => ['admin.posts.update', $post], 'files' => true ,'method' => 'PUT']) !!}
            @include('admin.posts.partials.form')
            {!! Form::submit('Actualizar post', ['class' => 'btn btn-success btn-block mt-4']) !!}
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
        CKEDITOR.replace( 'extract' );
        CKEDITOR.replace( 'body' );
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
