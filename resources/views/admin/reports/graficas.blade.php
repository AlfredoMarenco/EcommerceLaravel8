@extends('adminlte::page')

@section('title', 'Graficas')

@section('content_header')
    <h1>Graficas</h1>
@stop


@section('content')
    <div class="row container-fluid">
        {{-- <div class="col-md-12">
            <div class="container px-4 mx-auto">
                <div class="p-6 m-20 bg-white rounded shadow">
                    {!! $chart3->container() !!}
                </div>
            </div>
        </div> --}}
        <div class="col-md-6 mt-5">
            <div class="container px-4 mx-auto">
                <div class="p-6 m-20 bg-white rounded shadow">
                    {!! $chart->container() !!}
                </div>
            </div>
        </div>
        <div class="col-md-6 mt-5">
            <div class="container px-4 mx-auto">
                <div class="p-6 m-20 bg-white rounded shadow">
                    {!! $chart2->container() !!}
                </div>
            </div>
        </div>
    </div>
    @endsection


    @section('js')

        <script src="{{ LarapexChart::cdn() }}"></script>
        {{ $chart->script() }}
        {{ $chart2->script() }}
        {{-- {{ $chart3->script() }} --}}
    @stop
