@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop


@section('content')
    <div class="container-fluid text-center">
        {{-- <div class="col-md-12">
            <div class="container px-4 mx-auto">
                <div class="p-6 m-20 bg-white rounded shadow">
                    {!! $chart3->container() !!}
                </div>
            </div>
        </div> --}}
        {{-- <div class="col-md-6 mt-5">
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
    </div> --}}
        <h1 class="text-success text-bold">Ecommerce - Grupo Bajce v.1.0.1</h1>
        <img class="w-50 rounded-lg" src="{{ asset('images/posts/2.jpg') }}">

        <div>
            <small>
                Sistema desarrollado por <a class="text-info" href="https://agenciavandu.com">Agencia Vandu</a> ©<script>
                    document.write(new Date().getFullYear());

                </script>
            </small>
        </div>
    @endsection


    @section('js')

        {{-- <script src="{{ LarapexChart::cdn() }}"></script>
        {{ $chart->script() }}
        {{ $chart2->script() }} --}}
        {{-- {{ $chart3->script() }} --}}
    @stop
