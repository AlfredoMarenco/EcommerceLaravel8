@extends('adminlte::page')

@section('title', 'Ventas')

@section('content_header')
    <h1>Filto para buscar ventas</h1>
@stop


@section('content')
    <p>Establece los filtros con los que deseas realizar tu busqueda</p>
    <div class="p-2">
        {!! Form::open(['route' => 'admin.reports.getReport']) !!}
        <div class="form-row">
            <div class="form-group col-md-3">
                {!! Form::label('date_start', 'Fecha inicio', ['class' => 'px-1']) !!}
                {!! Form::date('date_start', \Carbon\Carbon::create(2000, 1, 1), ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-md-3">
                {!! Form::label('date_end', 'Fecha final', ['class' => 'px-1']) !!}
                {!! Form::date('date_end', \Carbon\Carbon::now(), ['class' => 'form-control']) !!}
            </div>
        </div>
        {{-- <div class="form-row">
            <div class="form-group col-md-6">
                {!! Form::label('user_id', 'Cliente', ['class' => 'px-1']) !!}
                {!! Form::select('user_id', $users, $users->count(), ['class' => 'form-control']) !!}
            </div>
        </div> --}}
        <div class="form-row">
            <div class="form-group col-md-6">
                {!! Form::submit('Obtener reporte', ['class' => 'btn btn-info float-right']) !!}<i class="fas fa-search"></i>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
@endsection
