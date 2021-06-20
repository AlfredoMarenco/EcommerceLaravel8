@extends('adminlte::page')

@section('title', 'inventario')

@section('content_header')
    <h1>Inventario</h1>
@stop


@section('content')
    @livewire('admin.table-inventary')
@endsection
