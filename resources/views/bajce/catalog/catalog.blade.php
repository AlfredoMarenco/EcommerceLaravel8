@extends('layouts.bajce')

@section('content')


    <!-- ========================= SECTION CONTENT ========================= -->
    <section class="section-content padding-y">
        <div class="container">


            <!-- ============================  FILTER TOP  ================================= -->
            <div class="card mb-3">
                <div class="card-body">
                    <ol class="breadcrumb float-left">
                        <li class="breadcrumb-item"><a href="/">Inicio</a></li>
                        <li class="breadcrumb-item"><a href="/catalogo">Catálogo</a></li>
                        <li class="breadcrumb-item active">Productos</li>
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
                            <strong class="mr-md-auto">{{ $products->total() }} productos encontrados</strong>
                            <select class="mr-2 form-control">
                                <option>Más Recientes</option>
                                <option>Menos recientes</option>
                            </select>
                        </div>
                    </header><!-- sect-heading -->
                    @foreach ($products as $product)
                        <article class="card card-product-list">
                            <div class="row no-gutters">
                                <aside class="col-md-3">
                                    <a href="{{ route('catalogue.product', $product) }}" class="img-wrap">
                                        <span class="badge badge-danger"> Consulta en sucursal </span>
                                        <img src="{{ Storage::url($product->image->url) }}">
                                    </a>
                                </aside> <!-- col.// -->
                                <div class="col-md-6">
                                    <div class="info-main">
                                        <a href="{{ route('catalogue.product', $product) }}" class="h5 title">
                                            {{ $product->name }}</a>


                                        <p class="mb-3">
                                            <span class="tag"> <i class="fa fa-check"></i> Verificado</span>
                                            <span class="tag"> Barniz </span>
                                            <span class="tag"> Entrega a domicilio </span>
                                        </p>

                                        <p> Take it as demo specs, ipsum dolor sit amet, consectetuer adipiscing elit, Lorem
                                            ipsum dolor sit amet, consectetuer adipiscing elit, Ut wisi enim ad minim sint
                                            occaecat cupidatat non
                                            proident, sunt in culpa qui laborum.... </p>

                                    </div> <!-- info-main.// -->
                                </div> <!-- col.// -->
                                <aside class="col-sm-3">
                                    <div class="info-aside">
                                        <p class="mt-5">
                                            <a href="#" class="btn btn-block btn-success"> <i class="fab fa-whatsapp"></i>
                                                CONSULTAR EN TIENDA </a>
                                        <div class="boton-ver-producto mt-3">
                                            <a href="{{ route('catalogue.product', $product) }}"
                                                class="btn btn-block btn-primary"></i> VER PRODUCTO
                                            </a>
                                        </div>
                                        </p>


                                    </div> <!-- info-aside.// -->
                                </aside> <!-- col.// -->
                            </div> <!-- row.// -->
                        </article> <!-- card-product .// -->
                    @endforeach

                    {{ $products->links() }}
                </main> <!-- col.// -->

            </div>

        </div> <!-- container .//  -->
    </section>
    <!-- ========================= SECTION CONTENT END// ========================= -->


    <!--========== NEWSLETTER =============-->
    <section id="newsletter">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <h2>Recibe ofertas especialedades</h2>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem perspiciatis laborum suscipit
                        quae sequi at nihil vel, iusto molestias in!</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="formulario-newsletter">
                        <input type="email" class="form-control" placeholder="Correo electrónico">
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-12">
                    <div class="boton-newsletter">
                        <button class="btn btn-success btn-md btn-block">Enviar</button>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
