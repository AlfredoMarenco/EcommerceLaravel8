@extends('adminlte::page')

@section('title', 'Products')

@section('content_header')
    <h1>Asignacion de variantes</h1>
    <small class="text-secondary">Selecciona las variantes que tendra tu producto</small>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::model($product, ['route' => ['admin.variants.store', $product]]) !!}
            <div class="form-control">
                {{ $product->name }}
            </div>
            <div class="row mt-4">
                <div class="col-6">
                    <h2 clas2="h3">Colores</h2>
                    @foreach ($colors as $color)
                        <div>
                            <label style="color:{{ $color->code }};">
                                {!! Form::checkbox('colors[]', $color->id, null) !!}
                                {{ $color->name }}
                            </label>
                        </div>
                    @endforeach
                </div>
                <div class="col-6">
                    <h2 clas2="h3">Tallas</h2>
                    @foreach ($sizes as $size)
                        <div>
                            <label>
                                {!! Form::checkbox('sizes[]', $size->id, null) !!}
                                {{ $size->name }}({{ $size->slug }})
                            </label>
                        </div>
                    @endforeach
                </div>
            </div>
            {!! Form::submit('Crear variacion', ['class' => 'btn btn-success btn-block mt-3']) !!}
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
