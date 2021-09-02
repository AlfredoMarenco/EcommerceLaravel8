@extends('layouts.bajce')
@section('title', $post->title )
@section('extractPost', $post->extract)
@section('imagePost', Storage::url($post->image->url) )

@section('content')

    <section id="interior-entrada">
        <div class="container">
            <div class="imagen-interior">
                <img class="w-100 h-50" src="{{ Storage::url($post->image->url) }}" alt="">
            </div>

        </div>
    </section>

    <article id="info-entrada">
        <div class="container">
            <div class="contenido-interior">
                <h2>{{ $post->title }}</h2>
                <p class="my-4">{{ $post->created_at->toFormattedDateString() }}
                    <span>|</span>
                    <span>{{ $post->user->name }} {{ $post->user->last_name }}</span>
                </p>
                {!! $post->body !!}
            </div>

    </article>

    <div class="botones-redes">
        <div class="container">
            <div class="row">
                <div class="facebook mt-4">
                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ url()->full() }}" class="facebook-btn"
                        target="_blank">Compartir en Facebook</a>
                </div>
                <div class="twitter mt-4">
                    <a href="https://twitter.com/intent/tweet?url={{ url()->full() }}2&text=" class="twitter-btn"
                        target="_blank">Compartir
                        en twitter</a>
                </div>
            </div>
        </div>
    </div>

    <section id="sugerencias">
        <div class="container">
            <h4>Tal vez te interese</h4>
            <div class="row">
                @foreach ($recents as $recent)
                    @if ($recent->status == 3)
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="row">
                                <!--Destacado 2-->
                                <div class="col-5 mt-4">
                                    <img src="{{ Storage::url($recent->image->url) }}" class="img-fluid" alt="">
                                </div>
                                <div class="col-7 mt-4">
                                    <p>
                                        <b>{{ $recent->title }}
                                        </b>
                                        <span>{{ $recent->created_at->toFormattedDateString() }}
                                        </span>
                                        <span> <br>
                                            <a href="{{ route('blog.show', $recent) }}"> Ver más <i
                                                    class="far fa-arrow-alt-circle-right"></i></a>
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>

                    @endif
                @endforeach
            </div>
        </div>
    </section>

    @auth
        <section id="comentarios">
            <div class="container card">
                <form action="{{ route('blog.store.comment') }}" method="POST">
                    @csrf
                    <div class="form-group col-md-8">
                        <input type="hidden" name="post" value="{{ $post->id }}">
                        <label for="body">Ingresa tu comentario</label>
                        <textarea name="body" rows="5" class="form-control"></textarea>
                        <button class="btn btn-primary float-right mt-2" type="submit">Comentar</button>
                    </div>
                </form>
                <h4>Comentarios</h4>
                @foreach ($post->comments as $comment)
                    <div class="comentarios-escr mt-3 px-4 card">
                        <h5>{{ $comment->user->name }} {{ $comment->user->last_name }}</h5>
                        <p>{{ $comment->body }}</p>
                    </div>
                @endforeach
            </div>
        </section>
    @endauth








@endsection
