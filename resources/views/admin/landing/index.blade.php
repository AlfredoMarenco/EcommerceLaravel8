@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Landing</h1>
@stop
@section('css')
    <style>
        .wrap {
            width: 650px;
            height: 192px;
            padding: 0;
            overflow: hidden;
        }

        .frame {
            width: 1280px;
            height: 786px;
            border: 0;
            -ms-transform: scale(0.25);
            -moz-transform: scale(0.25);
            -o-transform: scale(0.25);
            -webkit-transform: scale(0.25);
            transform: scale(0.25);

            -ms-transform-origin: 0 0;
            -moz-transform-origin: 0 0;
            -o-transform-origin: 0 0;
            -webkit-transform-origin: 0 0;
            transform-origin: 0 0;
        }

    </style>
@stop

@section('content')
    <div class="row">
        <div id="wrap" class="col-md-4 wrap">
            <iframe id="frame" class="frame" src="{{ route('index') }}" allow="fullscreen"></iframe>
        </div>
        <div class="col-md-8">
            <div class="table-responsive">
                <table class="table table-sm table-striped text-center">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($configurations as $configuration)
                            <tr>
                                <th scope="row">{{ $configuration->id }}</th>
                                <td>{{ $configuration->name }}</td>
                                <td class="d-flex justify-content-center">
                                    <a href="{{ route('admin.configurations.edit', $configuration) }}"
                                        class="btn btn-success btn-md mx-1">Editar</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection


@section('js')

@stop
