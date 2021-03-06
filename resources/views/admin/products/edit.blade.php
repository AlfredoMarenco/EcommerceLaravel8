@extends('adminlte::page')

@section('title', 'Products')

@section('content_header')
    <h1>Editar producto</h1>
@stop

@section('content')
    <div class="card">
        <div class="car-body p-3">
            {{-- @livewire('admin.form-new-product') --}}
            {!! Form::model($product, ['route' => ['admin.products.update', $product], 'files' => true ,'method' => 'PUT']) !!}

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
    <script src="https://cdn.ckeditor.com/ckeditor5/26.0.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#description'))
            .catch(error => {
                console.error(error);
            });
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
@include('sweetalert::alert')
@stop
