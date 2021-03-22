<div class="col-3 mb-4" id="catego">
    {{-- <h3>Categorías</h3>
    <a href="">
        <li>Moda</li>
    </a>
    <a href="">
        <li>Lifestyle</li>
    </a> --}}
    <div class="pb-5">
        <h3 class="mt-2">MÁS RECIENTES</h3>
        @foreach ($recents as $post)
            <div class="row">
                <div class="col-4 col-md-4 col-sm-12 ">
                    <div class="recientes-1 ">
                        <a href="{{ route('blog.show', $post) }}"><img class="img-fluid" @if ($post->image) src="{{ Storage::url($post->image->url) }}" @else src="http://ximg.es/1140x445/000/fff" @endif ></a>
                    </div>
                </div>
                <div class="col-8 col-md-8 col-sm-12 px-1">
                    <div class="recientes-1 ">
                        <h5><a href="{{ route('blog.show', $post) }}">{{ $post->title }}</a></h5>
                    </div>
                </div>
                <div class="my-3">
                    <span style="font-size: 12px; margin-top: 20px; color: gray;"
                        class="ml-3">{{ \Carbon\Carbon::parse($post->created_at)->diffForHumans() }}</span>
                </div>
            </div>
        @endforeach
    </div>
</div>
