 <!-- ========================= SECTION CONTENT ========================= -->
 <section class="section-content padding-y">
     <div class="container">
         <!-- ============================  FILTER TOP  ================================= -->
         <div class="card mb-3">
             <div class="card-body">
                 <ol class="breadcrumb float-left">
                     <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                     <li class="breadcrumb-item"><a href="#">Catálogo</a></li>
                     <li class="breadcrumb-item active">Productos</li>
                 </ol>
             </div> <!-- card-body .// -->
         </div> <!-- card.// -->
         <!-- ============================ FILTER TOP END.// ================================= -->
         <div class="row">
             <aside class="col-md-2">
                 <article class="filter-group">
                     <h6 class="title">
                         <a href="#" class="dropdown-toggle" data-toggle="collapse" data-target="#collapse_1"> Tipo de
                             producto </a>
                     </h6>
                     <div class="filter-content collapse show" id="collapse_1">
                         <div class="inner">
                             <ul class="list-menu">
                                 <li><a href="#">Accesorios hogar </a></li>
                                 <li><a href="#">Aislantes </a></li>
                                 <li><a href="#">Bisagras, broches y pasadores </a></li>
                                 <li><a href="#">Guardapolvos </a></li>
                                 <li><a href="#">Jaladeras </a></li>
                                 <li><a href="#">Ménsulas</a></li>
                                 <li><a href="#">Soportes metálicos </a></li>
                             </ul>
                         </div> <!-- inner.// -->
                     </div>
                 </article> <!-- filter-group  .// -->
                 <article class="filter-group">
                     <h6 class="title">
                         <a href="#" class="dropdown-toggle" data-toggle="collapse" data-target="#collapse_2"> Marcas
                         </a>
                     </h6>
                     <div class="filter-content collapse show" id="collapse_2">
                         <div class="inner">
                             <label class="custom-control custom-checkbox">
                                 <input type="checkbox" checked="" class="custom-control-input">
                                 <div class="custom-control-label">Anchor
                                     <b class="badge badge-pill badge-light float-right">12</b>
                                 </div>
                             </label>
                             <label class="custom-control custom-checkbox">
                                 <input type="checkbox" checked="" class="custom-control-input">
                                 <div class="custom-control-label">Anchor wire
                                     <b class="badge badge-pill badge-light float-right">15</b>
                                 </div>
                             </label>
                             <label class="custom-control custom-checkbox">
                                 <input type="checkbox" checked="" class="custom-control-input">
                                 <div class="custom-control-label">Ducasse
                                     <b class="badge badge-pill badge-light float-right">35</b>
                                 </div>
                             </label>
                             <label class="custom-control custom-checkbox">
                                 <input type="checkbox" checked="" class="custom-control-input">
                                 <div class="custom-control-label">Playcon
                                     <b class="badge badge-pill badge-light float-right">89</b>
                                 </div>
                             </label>
                             <label class="custom-control custom-checkbox">
                                 <input type="checkbox" class="custom-control-input">
                                 <div class="custom-control-label">Frost king
                                     <b class="badge badge-pill badge-light float-right">30</b>
                                 </div>
                             </label>
                         </div> <!-- inner.// -->
                     </div>
                 </article> <!-- filter-group .// -->
                 <article class="filter-group">
                     <h6 class="title">
                         <a href="#" class="dropdown-toggle" data-toggle="collapse" data-target="#collapse_3"> Rango de
                             precio </a>
                     </h6>
                     <div class="filter-content collapse show" id="collapse_3">
                         <div class="inner">
                             <input type="range" class="custom-range" min="0" max="100" name="">
                             <div class="form-row">
                                 <div class="form-group col-md-6">
                                     <label>Min</label>
                                     <input class="form-control" placeholder="$0" type="number">
                                 </div>
                                 <div class="form-group text-right col-md-6">
                                     <label>Max</label>
                                     <input class="form-control" placeholder="$1,000" type="number">
                                 </div>
                             </div> <!-- form-row.// -->
                             <button class="btn btn-block btn-primary">Aplicar</button>
                         </div> <!-- inner.// -->
                     </div>
                 </article> <!-- filter-group .// -->

                 <article class="filter-group">
                     <h6 class="title">
                         <a href="#" class="dropdown-toggle" data-toggle="collapse" data-target="#collapse_5"> Condition
                         </a>
                     </h6>
                     <div class="filter-content collapse show" id="collapse_5">
                         <div class="inner">
                             <label class="custom-control custom-radio">
                                 <input type="radio" name="myfilter_radio" checked="" class="custom-control-input">
                                 <div class="custom-control-label">Todo</div>
                             </label>

                             <label class="custom-control custom-radio">
                                 <input type="radio" name="myfilter_radio" class="custom-control-input">
                                 <div class="custom-control-label">Precio especial</div>
                             </label>
                         </div> <!-- inner.// -->
                     </div>
                 </article> <!-- filter-group .// -->

             </aside> <!-- col.// -->
             <main class="col-md-10">
                 <header class="mb-3">
                     <div class="form-inline">
                         <strong class="mr-md-auto">32 Productos encontrados </strong>
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
                                             <li style="width:80%" class="stars-active">
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
                                         <small class="label-rating text-muted">132 Opiniones</small>
                                     </div> <!-- rating-wrap.// -->
                                     <hr>
                                     <p class="mb-3">
                                         <span class="tag"> <i class="fa fa-check"></i> Verificado</span>
                                         <span class="tag"> 2 años de garantía </span>
                                         <span class="tag"> PLAYCON </span>
                                     </p>
                                     <form action="{{ route('cart.addItem', $product) }}" method="POST">
                                        @csrf
                                         <button type="submit" class="btn btn-block btn-primary"><i class="fas fa-cart-plus"></i> Añadir al carrito </button>
                                     </form>
                                     {{-- <a href="{{ route('cart.addItem', $product) }}" class="btn btn-block btn-primary">
                                         <i class="fas fa-cart-plus"></i> Añadir al carrito </a> --}}
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
