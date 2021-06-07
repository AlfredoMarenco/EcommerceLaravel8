@extends('layouts.bajce')

@section('content')
    {{-- @livewire('products',['category_id' => $category_id]) --}}
    <section class="section-content padding-y">
        <div class="container">
            <!-- ============================  FILTER TOP  ================================= -->
            <div class="card mb-3">
                <div class="card-body">
                    <ol class="breadcrumb float-left">
                        <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                        <li class="breadcrumb-item"><a href="#">Tienda</a></li>
                        <li class="breadcrumb-item active">Productos</li>
                    </ol>
                </div> <!-- card-body .// -->
            </div> <!-- card.// -->
            <!-- ============================ FILTER TOP END.// ================================= -->
            <div class="row">
                <aside class="col-md-2">
                    <form action="{{ route('shop.products.filter') }}" method="POST">
                        @csrf
                        <article class="filter-group">
                            <h6 class="title">
                                <a href="#" class="dropdown-toggle" data-toggle="collapse" data-target="#collapse_1">
                                    Categorias
                                </a>
                            </h6>
                            <div class="filter-content collapse show" id="collapse_1">
                                <div class="inner">
                                    @foreach ($categories as $category)
                                        @if ($category->products_count > 0)
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" name="categories[]" class="custom-control-input"
                                                    value="{{ $category->id }}">
                                                <div class="custom-control-label">{{ $category->name }}
                                                    <b
                                                        class="badge badge-pill badge-light float-right">{{ $category->products_count }}</b>
                                                </div>
                                            </label>
                                        @endif
                                    @endforeach
                                </div> <!-- inner.// -->
                            </div>
                        </article> <!-- filter-group .// -->
                        <article class="filter-group">
                            <h6 class="title">
                                <a href="#" class="dropdown-toggle" data-toggle="collapse" data-target="#collapse_2"> Marcas
                                </a>
                            </h6>
                            <div class="filter-content collapse show" id="collapse_2">
                                <div class="inner">
                                    @foreach ($brands as $brand)
                                        @if ($brand->products_count > 0)
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" name="brands[]" class="custom-control-input"
                                                    value="{{ $brand->id }}">
                                                <div class="custom-control-label">{{ $brand->name }}
                                                    <b
                                                        class="badge badge-pill badge-light float-right">{{ $brand->products_count }}</b>
                                                </div>
                                            </label>
                                        @endif
                                    @endforeach
                                </div> <!-- inner.// -->
                            </div>
                        </article> <!-- filter-group .// -->
                        <article class="filter-group">
                            <h6 class="title">
                                <a href="#" class="dropdown-toggle" data-toggle="collapse" data-target="#collapse_3"> Rango
                                    de
                                    precio </a>
                            </h6>
                            <div class="filter-content collapse show" id="collapse_3">
                                <div class="inner">
                                    {{-- <input type="range" class="custom-range" min="0" max="100" name=""> --}}
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Min</label>
                                            <input class="form-control" name="price_min" value="1" placeholder="$0"
                                                type="number">
                                        </div>
                                        <div class="form-group text-right col-md-6">
                                            <label>Max</label>
                                            <input class="form-control" name="price_max" value="99999" placeholder="$1,000"
                                                type="number">
                                        </div>
                                    </div> <!-- form-row.// -->
                                </div> <!-- inner.// -->
                            </div>
                        </article> <!-- filter-group .// -->

                        <article class="filter-group">
                            <h6 class="title">
                                <a href="#" class="dropdown-toggle" data-toggle="collapse" data-target="#collapse_5">
                                    Condicion
                                </a>
                            </h6>
                            <div class="filter-content collapse show" id="collapse_5">
                                <div class="inner">
                                    <label class="custom-control custom-radio">
                                        <input type="radio" name="condition" checked="true" value="0"
                                            class="custom-control-input">
                                        <div class="custom-control-label">Todo</div>
                                    </label>

                                    <label class="custom-control custom-radio">
                                        <input type="radio" name="condition" value="1" class="custom-control-input">
                                        <div class="custom-control-label">Precio especial</div>
                                    </label>
                                </div> <!-- inner.// -->
                            </div>
                        </article> <!-- filter-group .// -->
                        <button type="submit" class="btn btn-block btn-primary">Aplicar</button>
                    </form>
                </aside> <!-- col.// -->

                <main class="col-md-10">
                    <header class="mb-3">
                        <div class="form-inline">
                            <strong class="mr-md-auto">{{ $products->count() }} Productos encontrados </strong>
                            <select class="mr-2 form-control">
                                <option>Más recientes</option>
                                <option>Mejor Calificación</option>
                                <option>Más econónimos</option>
                            </select>
                        </div>
                    </header><!-- sect-heading -->

                    <div class="row">
                        @foreach ($products as $product)
                            <div class="col-md-3">
                                <figure class="card card-product-grid">
                                    <div class="img-wrap">
                                        <span class="badge badge-danger"> Nuevo </span>
                                        <a href="{{ route('shop.product', $product) }}"><img
                                                src="{{ Storage::url($product->image->url) }}"></a>
                                    </div> <!-- img-wrap.// -->
                                    <figcaption class="info-wrap">
                                        <a href="{{ route('shop.product', $product) }}"
                                            class="title mb-2">{{ $product->name }}</a>
                                        <div class="price-wrap">
                                            <span class="price">{{ $product->presentPrice() }}</span>
                                            <small class="text-muted">/ pza</small>
                                            <p class="mb-2"> <small>SKU:</small> {{ $product->SKU }} </p>
                                        </div> <!-- price-wrap.// -->
                                        <div class="rating-wrap my-3">
                                            <ul class="rating-stars">

                                                <li style="width:{{ ($product->rating * 100) / 5 }}%"
                                                    class="stars-active">
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
                                            <small class="label-rating text-muted">{{ $product->reviews_count }}
                                                Opiniones</small>
                                        </div> <!-- rating-wrap.// -->
                                        <hr>
                                        <p class="mb-3">
                                            <span class="tag"> <i class="fa fa-check"></i> Verificado</span>
                                            @if ($product->garantia_visible == 1)<span
                                                    class="tag"> {{ $product->garantia }} garantía </span> @endif
                                        </p>
                                        <form action="{{ route('cart.addItems', $product) }}" method="POST">
                                            @csrf
                                            <input type="hidden" readonly="true" class="form-control" name="qty" value="1">
                                            <button type="submit" class="btn btn-block btn-primary"><i
                                                    class="fas fa-cart-plus"></i> Añadir al carrito </button>
                                        </form>
                                    </figcaption>
                                </figure>
                            </div> <!-- col.// -->
                        @endforeach
                    </div>
                    {{ $products->links() }}
                </main> <!-- col.// -->
            </div>
        </div> <!-- container .//  -->
    </section>
    <!-- ========================= SECTION CONTENT END// ========================= -->

@endsection
