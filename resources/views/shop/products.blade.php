@extends('layouts.template')


@section('content')
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
                                <li class="list-inline-item mr-3"><a href="#">Color</a></li>
                                <li class="list-inline-item mr-3"><a href="#">Size</a></li>
                                <li class="list-inline-item mr-3">
                                    <div class="form-inline">
                                        <label class="mr-2">Price</label>
                                        <input class="form-control form-control-sm" placeholder="Min" type="number" />
                                        <span class="px-2"> - </span>
                                        <input class="form-control form-control-sm" placeholder="Max" type="number" />
                                        <button type="submit" class="btn btn-sm btn-light ml-2">
                                            Ok
                                        </button>
                                    </div>
                                </li>
                                <li class="list-inline-item mr-3">
                                    <label class="custom-control mt-1 custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" />
                                        <div class="custom-control-label">Ready to ship</div>
                                    </label>
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
                            <div class="img-wrap">
                                {{-- <span class="badge badge-danger"> DESCUENTO </span> --}}
                                <img src="{{ Storage::url($product->image->url) }}" />
                            </div>
                            <!-- img-wrap.// -->
                            <figcaption class="info-wrap">
                                <a href="{{ route('shop.product', $product) }}"
                                    class="title mb-2">{{ $product->name }}</a>
                                <div class="price-wrap">
                                    <strike><span class="price">Antes: {{ $product->presentPrice() }}</span></strike>
                                    <span class="price"> / </span>
                                    <span class="price" style="color: green;">Ahora: {{ $product->presentPrice() }}</span>
                                    {{-- <small class="text-muted">/Cada una</small> --}}
                                </div>
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
                                {!! Form::open(['route' => ['cart.addItem',$product]]) !!}
                                {!! Form::hidden('qty', 1) !!}
                                {!! Form::submit('Agregar al Carrito', ['class' => 'btn btn-dark']) !!}
                                {!! Form::close() !!}
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

@endsection
