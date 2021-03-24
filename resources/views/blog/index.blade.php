@extends('layouts.template')


@section('content')
    <div class="container pr-4 pb-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('shop.home') }}">Inicio</a></li>
                <li class="breadcrumb-item"><a href="{{ route('blog.index') }}">Blog</a></li>
            </ol>
            <hr>
        </nav>
        <div class="row">
            <div class="col-9 pr-4">
                @foreach ($posts as $post)
                    <div class="row">
                        <!--1140x445-->
                        <img class="img-fluid" @if ($post->image) src="{{ Storage::url($post->image->url) }}" @else src="http://ximg.es/1140x445/000/fff" @endif width="1140px" height="445px">
                        <div class="col-2 col-md-2 col-sm-12 c-entrada mt-3">
                            <h1 class="text-center">{{ $carbon->parse($post->created_at)->day }}</h1>
                            <p class="bg-dark text-capitalize h2">
                                {{ $carbon->parse($post->created_at)->locale('es')->monthName }}</p>

                        </div>
                        <div class="col-10 col-md-10 col-sm-12 py-2">
                            <a href="#">
                                <h2>{{ $post->title }}</h2>
                            </a>
                            Tags:
                            @foreach ($post->tags as $tag)
                                <span class="badge badge-dark">{{ $tag->name }}</span>
                            @endforeach

                            <div class="text-dark mt-1 text-justify">
                                {!! $post->extract !!}
                            </div >
                            <div class="d-flex justify-content-start mt-4">
                                <a href="{{ route('blog.show', $post) }}" class="btn btn-dark btn-md">Leer más</a>
                            </div>

                        </div>
                    </div>
                    <hr>
                @endforeach
                <div class="d-flex justify-content-center">
                    {{ $posts->links() }}
                </div>
            </div>
            @include('blog.partials.recents')
        </div>
    </div>
@endsection
