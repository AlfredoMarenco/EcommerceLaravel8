@extends('layouts.template')


@section('content')
    <div class="container pr-4 pb-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('shop.home') }}">Inicio</a></li>
                <li class="breadcrumb-item"><a href="{{ route('blog.index') }}">Blog</a></li>
                <li class="breadcrumb-item">{{ $post->title }}</li>

            </ol>
            <hr>
        </nav>

        <div class="row">
            <div class="col-9 pr-4">
                <div class="row">
                    <img class="img-fluid" @if ($post->image) src="{{ Storage::url($post->image->url) }}" @else src="http://ximg.es/1140x445/000/fff" @endif width="1140px" height="445px">
                    <div class="col-md-12">
                        <h2 class="titular-post">{{ $post->title }}</h2>
                        <div class="text-dark text-justify">
                            {!! $post->body !!}
                        </div>
                    </div>

                    <div class="comparte-este">
                        <h3><i class="fas fa-share"></i> Comparte este post</h3>
                        <div class="share-links"><a
                                href="https://www.facebook.com/sharer.php?u=https://renealonso.com/significado-de-moda/"
                                target="_blank" rel="nofollow" data-tooltip="" data-placement="bottom" title=""
                                class="share-facebook" data-original-title="Facebook"><i
                                    class="fab fa-facebook-square"></i></a>
                            <a href="https://twitter.com/intent/tweet?text=SIGNIFICADO+DE+MODA&amp;url=https://renealonso.com/significado-de-moda/"
                                target="_blank" rel="nofollow" data-tooltip="" data-placement="bottom" title=""
                                class="share-twitter" data-original-title="Twitter"> <i
                                    class="fab fa-twitter-square"></i></a>
                        </div>
                    </div>



                </div>
                <!--no borres este-->


            </div>

            @include('blog.partials.recents')
        </div>
    </div>
@endsection
