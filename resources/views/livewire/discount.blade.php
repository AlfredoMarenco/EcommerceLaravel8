<div>
    <!-- ========================= SECTION CONTENT ========================= -->
    <section class="section-content padding-y">
        <div class="container pt-4">
            <!-- ============================  FILTER TOP  ================================= -->
            <div class="card mb-3 mt-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-2">Filter by</div>
                        <!-- col.// -->
                        <div class="d-flex justify-content-end col-md-10">
                            <ul class="list-inline">
                                Colors:
                                @foreach ($colors as $color)
                                    <li class="list-inline-item mr-1">
                                        <label style="background-color: {{ $color->code }};" class="colors">
                                            <input type="checkbox" wire:model="color" value="{{ $color->id }}">
                                        </label>
                                    </li>
                                @endforeach
                                Sizes:
                                @foreach ($sizes as $size)
                                    <li class="list-inline-item mr-1">
                                        <label class="mx-1">
                                            <input type="checkbox" wire:model="size" value="{{ $size->id }}">
                                            <p class="sizes-label">{{ $size->slug }}</p>
                                        </label>
                                    </li>
                                @endforeach

                                <li class="list-inline-item mr-3">
                                    <div class="form-inline">
                                        <label class="mr-2">Price</label>
                                        <input class="form-control form-control-sm" placeholder="Min" type="number"
                                            wire:model="priceMin" />
                                        <span class="px-2"> - </span>
                                        <input class="form-control form-control-sm" placeholder="Max" type="number"
                                            wire:model="priceMax" />
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- col.// -->
                    </div>
                    <!-- row.// -->
                </div>
                <!-- card-body .// -->
            </div>
            <!-- card.// -->
            <!-- ============================ FILTER TOP END.// ================================= -->
            <header class="mb-3">
                <div class="form-inline">
                    <strong class="mr-md-auto">{{ $products->count() }} Items found </strong>
            </header>
            <!-- sect-heading -->
            <div class="row">
                @foreach ($products as $product)
                    <div class="col-md-3">
                        <figure class="card card-product-grid">
                            @if ($product->discount)
                                <div class="img-wrap">
                                    <span class="badge badge-danger"> DESCUENTO </span>
                                    <img @if ($product->image) src="{{ Storage::url($product->image->url) }}" @else src="https://cdn.pixabay.com/photo/2014/05/02/21/47/laptop-336369_960_720.jpg" @endif>
                                </div>
                                <!-- img-wrap.// -->
                                <figcaption class="info-wrap">
                                    <a href="{{ route('shop.product', $product) }}"
                                        class="title mb-2">{{ $product->name }}</a>

                                    <div class="price-wrap">
                                        <strike><span class="price">Antes:
                                                {{ $product->presentPrice() }}</span></strike>
                                        <span class="price"> / </span>
                                        <span class="price" style="color: green;">Ahora:
                                            {{ $product->presentPriceDiscount() }}</span>
                                        {{-- <small class="text-muted">/Cada una</small> --}}
                                    </div>
                                @else
                                    <div class="img-wrap">
                                        <img @if ($product->image) src="{{ Storage::url($product->image->url) }}" @else src="https://cdn.pixabay.com/photo/2014/05/02/21/47/laptop-336369_960_720.jpg" @endif>
                                    </div>
                                    <!-- img-wrap.// -->
                                    <figcaption class="info-wrap">
                                        <a href="{{ route('shop.product', $product) }}"
                                            class="title mb-2">{{ $product->name }}</a>
                                        <div class="price-wrap">
                                            <span class="price">Precio:
                                                {{ $product->presentPrice() }}</span>
                                            {{-- <small class="text-muted">/Cada una</small> --}}
                                        </div>
                            @endif
                            <!-- price-wrap.// -->
                            <div class="rating-wrap mb-2">
                                <ul class="rating-stars">
                                    <li style="width: 100%;" class="stars-active">
                                        <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </li>
                                </ul>
                                <div class="label-rating">9/10</div>
                            </div>
                            <!-- rating-wrap.// -->
                            <hr />
                            {{-- {!! Form::open(['route' => ['cart.addItem',$product]]) !!}
                                {!! Form::hidden('qty', 1) !!}
                                {!! Form::submit('Agregar al Carrito', ['class' => 'btn btn-dark']) !!}
                                {!! Form::close() !!} --}}
                            <a href="{{ route('shop.product', $product) }}" class="btn btn-block btn-dark">Ver
                                detalles del producto</a>
                            </figcaption>
                        </figure>
                    </div>
                @endforeach
                <!-- col.// -->
            </div>
            <!-- row end.// -->
            <div class="d-flex justify-content-center">
                {{ $products->links() }}
            </div>
    </section>
    <!-- ========================= SECTION CONTENT END// ========================= -->
</div>
