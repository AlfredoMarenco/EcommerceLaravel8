@extends('adminlte::page')

@section('title', 'collections')

@section('content_header')
    <h1>Editar collection</h1>
@stop

@section('content')
    <div class="card">
        <div class="car-body p-3">
            {!! Form::model($collection, ['route' => ['admin.collections.update', $collection], 'files' => true ,'method' => 'PUT']) !!}
            @include('admin.collections.partials.form')
            {!! Form::submit('Actualizar collection', ['class' => 'btn btn-success btn-block mt-4']) !!}
            {!! Form::close() !!}
        </div>
    </div>
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
