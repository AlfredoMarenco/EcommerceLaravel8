@extends('layouts.bajce')
@section('title', 'Catalogo')
@section('content')


    <!-- ========================= SECTION CONTENT ========================= -->
    <section class="section-content padding-y">
        <div class="container">
            <!-- ============================  FILTER TOP  ================================= -->
            <div class="card mb-3">
                <div class="card-body">
                    <ol class="breadcrumb float-left">
                        <li class="breadcrumb-item"><a href="/">Inicio</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('catalogue.index') }}">Catálogos</a></li>
                        @if ($catalogue != null)
                            <li class="breadcrumb-item active">{{ $catalogue->name }}</li>
                        @endif
                    </ol>
                </div> <!-- card-body .// -->
            </div> <!-- card.// -->
            <!-- ============================ FILTER TOP END.// ================================= -->
            <div class="row">
                <aside class="col-md-2">
                    <form action="{{ route('catalogue.products.filter') }}" method="POST">
                        @csrf
                        <article class="filter-group">
                            <h6 class="title">
                                <a href="#" class="dropdown-toggle" data-toggle="collapse" data-target="#collapse_1">
                                    Categorias
                                </a>
                            </h6>
                            <div class="filter-content collapse" id="collapse_1">
                                <div class="inner">
                                    @foreach ($categories as $category)
                                        @if ($category->products->where('type', 1)->count() > 0)
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" name="categories[]" class="custom-control-input"
                                                    value="{{ $category->id }}">
                                                <div class="custom-control-label">{{ $category->name }}
                                                    <b
                                                        class="badge badge-pill badge-light float-right">{{ $category->products->where('type', 1)->count() }}</b>
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
                            <div class="filter-content collapse" id="collapse_2">
                                <div class="inner">
                                    @foreach ($brands as $brand)
                                        @if ($brand->products->where('type', 1)->count() > 0)
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" name="brands[]" class="custom-control-input"
                                                    value="{{ $brand->id }}">
                                                <div class="custom-control-label">{{ $brand->name }}
                                                    <b
                                                        class="badge badge-pill badge-light float-right">{{ $brand->products->where('type', 1)->count() }}</b>
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
                            <div class="filter-content collapse" id="collapse_3">
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
                <main class="col-md-10 mt-3">
                    @foreach ($products as $product)
                        @if ($catalogue != null)
                            <article class="card card-product-list">
                                <div class="row no-gutters">
                                    <aside class="col-md-3">
                                        <a href="{{ route('catalogue.product', [$product, $catalogue->id]) }}"
                                            class="img-wrap">
                                            <span class="badge badge-danger"> Consulta en sucursal </span>
                                            <img src="{{ Storage::url($product->image->url) }}">
                                        </a>
                                    </aside> <!-- col.// -->
                                    <div class="col-md-6">
                                        <div class="info-main">
                                            <a href="{{ route('catalogue.product', [$product, $catalogue->id]) }}"
                                                class="h5 title">
                                                {{ $product->name }}</a>
                                            <p class="mb-3">
                                                <span class="tag"> <i class="fa fa-check"></i> Verificado</span>
                                            </p>
                                            <p>{!! $product->extract !!} </p>
                                        </div> <!-- info-main.// -->
                                    </div> <!-- col.// -->
                                    <aside class="col-sm-3">
                                        <div class="info-aside">
                                            <p class="mt-5">
                                                <a href="http://wa.me/5219992211629" class="btn btn-block btn-success"> <i
                                                        class="fab fa-whatsapp"></i>
                                                    CONSULTAR EN TIENDA </a>
                                            <div class="boton-ver-producto mt-3">
                                                <a href="{{ route('catalogue.product', [$product, $catalogue->id]) }}"
                                                    class="btn btn-block btn-primary"></i> VER PRODUCTO
                                                </a>
                                            </div>
                                            </p>
                                        </div> <!-- info-aside.// -->
                                    </aside> <!-- col.// -->
                                </div> <!-- row.// -->
                            </article> <!-- card-product .// -->
                        @else
                            <article class="card card-product-list">
                                <div class="row no-gutters">
                                    <aside class="col-md-3">
                                        <a href="{{ route('catalogue.product', [$product, null]) }}" class="img-wrap">
                                            <span class="badge badge-danger"> Consulta en sucursal </span>
                                            <img src="{{ Storage::url($product->image->url) }}">
                                        </a>
                                    </aside> <!-- col.// -->
                                    <div class="col-md-6">
                                        <div class="info-main">
                                            <a href="{{ route('catalogue.product', [$product, null]) }}"
                                                class="h5 title">
                                                {{ $product->name }}</a>
                                            <p class="mb-3">
                                                <span class="tag"> <i class="fa fa-check"></i> Verificado</span>
                                            </p>
                                            <p>{!! $product->extract !!} </p>
                                        </div> <!-- info-main.// -->
                                    </div> <!-- col.// -->
                                    <aside class="col-sm-3">
                                        <div class="info-aside">
                                            <p class="mt-5">
                                                <a href="http://wa.me/5219992211629" class="btn btn-block btn-success"> <i
                                                        class="fab fa-whatsapp"></i>
                                                    CONSULTAR EN TIENDA </a>
                                            <div class="boton-ver-producto mt-3">
                                                <a href="{{ route('catalogue.product', [$product, $catalogue->id]) }}"
                                                    class="btn btn-block btn-primary"></i> VER PRODUCTO
                                                </a>
                                            </div>
                                            </p>
                                        </div> <!-- info-aside.// -->
                                    </aside> <!-- col.// -->
                                </div> <!-- row.// -->
                            </article> <!-- card-product .// -->
                        @endif
                    @endforeach
                    {{ $products->links() }}
                </main> <!-- col.// -->
            </div>
        </div> <!-- container .//  -->
    </section>
    <!-- ========================= SECTION CONTENT END// ========================= -->

@endsection
