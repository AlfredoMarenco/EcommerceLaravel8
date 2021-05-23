@extends('layouts.bajce')

@section('content')

    <!-- ========================= SECTION PAGETOP ========================= -->
    <section class="section-pagetop bg-gray">
        <div class="container">
            <h2 class="title-page">Mi cuenta</h2>
        </div> <!-- container //  -->
    </section>
    <!-- ========================= SECTION PAGETOP END// ========================= -->


    <!-- ========================= SECTION CONTENT ========================= -->
    <section class="section-content padding-y">
        <div class="container">

            <div class="row">
                @include('bajce.user.nav-profile')
                <main class="col-md-9">

                    <a href="#" class="btn btn-light mb-3"> <i class="fa fa-plus"></i> Añadir nueva dirección </a>

                    <div class="row">
                        <div class="col-md-6">
                            <article class="box mb-4">
                                <h6>London, United Kingdom</h6>
                                <p>Building: Nestone <br> Floor: 22, Aprt: 12 </p>
                                <a href="#" class="btn btn-light disabled"> <i class="fa fa-check"></i>
                                    Principal
                                </a> <a href="#" class="btn btn-light"> <i class="fa fa-pen"></i> </a> <a href="#"
                                    class="btn btn-light"> <i class="text-danger fa fa-trash"></i> </a>
                            </article>
                        </div> <!-- col.// -->
                        <div class="col-md-6">
                            <article class="box mb-4">
                                <h6>Tashkent, Uzbekistan</h6>
                                <p>Building one <br> Floor: 2, Aprt: 32 </p>
                                <a href="#" class="btn btn-light">Hacer Principal</a> <a href="#" class="btn btn-light"> <i
                                        class="fa fa-pen"></i> </a> <a href="#" class="btn btn-light"> <i
                                        class="text-danger fa fa-trash"></i> </a>
                            </article>
                        </div> <!-- col.// -->

                    </div> <!-- row.// -->

                </main> <!-- col.// -->
            </div>

        </div> <!-- container .//  -->
    </section>
    <!-- ========================= SECTION CONTENT END// ========================= -->


@endsection
