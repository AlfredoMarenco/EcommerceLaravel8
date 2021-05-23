@extends('layouts.bajce')

@section('content')



    <section class="section-intro ">
        <div class="container-fluid p-0">
            <!-- ==============  COMPONENT SLIDER  BOOTSTRAP ============  -->

            <!---->
            <div id="carousel1_indicator" class="slider-home-banner carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    @foreach ($catalogues as $catalogue)
                    <li data-target="#carousel1_indicator" data-slide-to="{{ $loop->index }}" @if ($loop->first) class="active" @endif></li>
                    @endforeach
                </ol>
                <div class="carousel-inner">
                    @foreach ($catalogues as $catalogue)
                        <div class="carousel-item  @if ($loop->first) active @endif">
                            <img src="{{ Storage::url($catalogue->image->url) }}" alt="First slide">
                            <div class="carousel-caption carousel-caption-3 d-md-block">
                                <h1>Catálogo de <br>
                                    {{ $catalogue->name }}</h1>
                                <a href="{{ route('catalogue.products',$catalogue->category_id) }}" class="btn btn-primary">Ver catálogo</a>
                            </div>
                        </div>
                    @endforeach
                    <a class="carousel-control-prev" href="#carousel1_indicator" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel1_indicator" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <!-- ============ COMPONENT SLIDER BOOTSTRAP end.// ===========  .// -->
            </div> <!-- container end.// -->
    </section>


@endsection
