@extends('layouts.template')


@section('content')

    <section id="cabecera-1" class="mb-5" style="text-align: center; margin-top: 70px">
        <div class="container-fluid">
            <img src="{{ asset('template/images/rene/galeria.jpg') }}" class="img-fluid" alt="">

        </div>
    </section>

    <section id="imagenes">
        <div class="container">
            @foreach ($collections as $collection)
                <div class="row mt-4">
                    <div class="col-lg-6 col-md-6 col-sm-12 imagenes-int" style="text-align: right">
                        <img src="{{ Storage::url($collection->image1) }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 imagenes-pequenas" style="text-align: center">
                        <img src="{{ Storage::url($collection->image2) }}" class="img-fluid" alt="">
                        <img src="{{ Storage::url($collection->image3) }}" class="img-fluid pt-4" alt="">
                    </div>

                </div>
            @endforeach
        </div>
    </section>

@endsection
