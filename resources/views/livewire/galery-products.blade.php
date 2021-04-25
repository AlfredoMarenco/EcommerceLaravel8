<aside class="col-md-6">
    <div class="card">
        <article class="gallery-wrap">
            <div class="img-big-wrap">
                <div> <a href="#"><img class="img-fluid" src="{{ Storage::url($product->image->url) }}"></a></div>
            </div> <!-- slider-product.// -->
            <div class="thumbs-wrap">
                @foreach ($product->images as $image)
                    <a href="#" class="item-thumb"> <img src="{{ Storage::url($image->url) }}"></a>
                @endforeach
            </div> <!-- slider-nav.// -->
        </article> <!-- gallery-wrap .end// -->
    </div> <!-- card.// -->
</aside>
