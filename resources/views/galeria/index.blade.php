@extends('layouts.template')


@section('content')

<section id="cabecera">
    <div class="container-fluid">
        <img src="/images/rene/galeria.jpg" class="img-fluid"  alt="">
    </div>
 </section>

 <section id="imagenes">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 imagenes-int">
                <img src="({{ asset('template/images/rene/05-GaleriaImagenVertical02.jpg') }});" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 imagenes-pequenas">
                <img src="({{ asset('template/images/rene/06-galeriaimagenhorizontal04.jpg') }});" class="img-fluid" alt="">
                <img src="({{ asset('template/images/rene/06-galeriaimagenhorizontal04.jpg') }});" class="img-fluid pt-4" alt="">
            </div>
        </div>
    </div>
 </section>
    
@endsection
