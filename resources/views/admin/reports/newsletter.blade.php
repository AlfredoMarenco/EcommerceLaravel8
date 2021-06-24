@extends('adminlte::page')

@section('title', 'inventario')

@section('content_header')
    <h1>Inventario</h1>
@stop


@section('content')
    <div class="container-fluid">
        <div>
            <a class="btn btn-success float-right my-2" href="{{ route('reports.newsletter.export') }}">Exportar datos</a>
        </div>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Email</th>
                    <th scope="col">Fecha de inscripción</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($newsletters as $newsletter)
                    <tr>
                        <th scope="row">{{ $newsletter->id }}</th>
                        <td>{{ $newsletter->email }}</td>
                        <td>{{ $newsletter->created_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $newsletters->links() }}
    </div>
@endsection
