@extends('layouts.bajce')
@section('title', 'Blog')
@section('content')


    <section id="contenido-entrada">
        <div class="container">
            <h3>Más recientes</h3>
            <div class="row">
                <div class="col-9">
                    <div class="row">
                        @foreach ($posts as $post)
                            @if ($post->status = 3)
                                <div class="col-lg-12 col-md-9 col-sm-12 mb-5">
                                    <div class="imagen-destacada">
                                        <img src="{{ Storage::url($post->image->url) }}" class="img-fluid" alt="">
                                    </div>
                                    <p class="mt-3" style="color: gray;">
                                        {{ $post->created_at->diffForHumans(['options' => 0]) }}
                                    </p>
                                    <h3>{{ $post->title }}</h3>
                                    <p>{!! $post->extract !!}</p>
                                    <a href="{{ route('blog.show', $post) }}"> Ver más <i
                                            class="far fa-arrow-alt-circle-right"></i></a>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
                <div class="col-3">
                    <div class="row">
                        <h3>Lo más destacado</h3>
                        <div class="row">
                            @foreach ($recents as $recent)
                                <div class="col-5 my-3">
                                    <img src="{{ Storage::url($recent->image->url) }}" class="img-fluid" alt="">
                                </div>
                                <div class="col-7 my-3">
                                    <p>
                                        <b>{{ $recent->title }}
                                        </b>
                                        <br>
                                        <span>{{ $recent->created_at->diffForHumans(['options' => 0]) }} </span>
                                        <span> <br>
                                            <a href="{{ route('blog.show', $recent) }}"> Ver más <i
                                                    class="far fa-arrow-alt-circle-right"></i></a>
                                        </span>
                                    </p>
                                </div>
                                <!--Destacado 2-->
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            {{ $posts->links() }}
        </div>

    </section>

    









@endsection
