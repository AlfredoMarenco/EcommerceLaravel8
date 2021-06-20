@extends('adminlte::page')

@section('title', 'Products')

@section('content_header')
    <h1>Editar configuration</h1>
@stop


@section('content')
    <div class="card">
        @if (session('configurationSuccess'))
            <div class="alert alert-success">
                <strong>{{ session('configurationSuccess') }}</strong>
            </div>
        @endif
        @if (session('configurationUpdate'))
            <div class="alert alert-success">
                <strong>{{ session('configurationUpdate') }}</strong>
            </div>
        @endif
        <div class="card-body">
            {!! Form::model($configuration, ['route' => ['admin.configurations.update', $configuration], 'files' => true, 'method' => 'PUT']) !!}
            @include('admin.landing.partials.form')
            {!! Form::submit('Actualizar configuration', ['class' => 'btn btn-success btn-block']) !!}
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
    <script>
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
@stop
