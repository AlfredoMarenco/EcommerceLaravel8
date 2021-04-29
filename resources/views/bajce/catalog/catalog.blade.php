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
    
        <article class="filter-group">
            <h6 class="title">
                <a href="#" class="dropdown-toggle" data-toggle="collapse" data-target="#collapse_1">	 Tipo de producto </a>
            </h6>
            <div class="filter-content collapse show" id="collapse_1">
                <div class="inner">
                    <ul class="list-menu">
                        <li><a href="#">Categoría 1  </a></li>
                        <li><a href="#">Categoría 2 </a></li>
                        <li><a href="#">Categoría 3 </a></li>
                        <li><a href="#">Categoría 4 </a></li>
                    </ul>
                </div> <!-- inner.// -->
            </div>
        </article> <!-- filter-group  .// -->
        
        <article class="filter-group">
            <h6 class="title">
                <a href="#" class="dropdown-toggle" data-toggle="collapse" data-target="#collapse_5"> Tipo de madera </a>
            </h6>
            <div class="filter-content collapse show" id="collapse_5">
                <div class="inner">
                    <label class="custom-control custom-radio">
                      <input type="radio" name="myfilter_radio" checked="" class="custom-control-input">
                      <div class="custom-control-label">Pino</div>
                    </label>
    
                    <label class="custom-control custom-radio">
                      <input type="radio" name="myfilter_radio" class="custom-control-input">
                      <div class="custom-control-label">Arce </div>
                    </label>
    
                    <label class="custom-control custom-radio">
                      <input type="radio" name="myfilter_radio" class="custom-control-input">
                      <div class="custom-control-label">Cedro</div>
                    </label>
    
                    <label class="custom-control custom-radio">
                      <input type="radio" name="myfilter_radio" class="custom-control-input">
                      <div class="custom-control-label">Nogal</div>
                    </label>
                </div> <!-- inner.// -->
            </div>
        </article> <!-- filter-group .// -->
    
        </aside> <!-- col.// -->
        <main class="col-md-10">
    
    
    <header class="mb-3">
            <div class="form-inline">
                <strong class="mr-md-auto">32 Items found </strong>
                <select class="mr-2 form-control">
                    <option>Más Recientes</option>
                    <option>Menos recientes</option>
                    
                </select>
                
            </div>
    </header><!-- sect-heading -->
    
    
    <article class="card card-product-list">
        <div class="row no-gutters">
            <aside class="col-md-3">
                <a href="#" class="img-wrap">
                    <span class="badge badge-danger"> Consulta en sucursal </span>
                    <img src="images/items/1.jpg">
                </a>
            </aside> <!-- col.// -->
            <div class="col-md-6">
                <div class="info-main">
                    <a href="#" class="h5 title"> Placa de madera Pino</a>
                    
                
                    <p class="mb-3">
                        <span class="tag"> <i class="fa fa-check"></i> Verificado</span> 
                        <span class="tag"> Barniz </span> 
                        <span class="tag"> Entrega a domicilio </span>
                    </p>
    
                    <p> Take it as demo specs, ipsum dolor sit amet, consectetuer adipiscing elit, Lorem ipsum dolor sit amet, consectetuer adipiscing elit, Ut wisi enim ad minim  sint occaecat cupidatat non
                    proident, sunt in culpa qui laborum.... </p>
    
                </div> <!-- info-main.// -->
            </div> <!-- col.// -->
            <aside class="col-sm-3">
                <div class="info-aside">
                    <p class="mt-5">
                        <a href="#" class="btn btn-block btn-success"> <i class="fab fa-whatsapp"></i> CONSULTAR EN TIENDA </a>
                        <div class="boton-ver-producto mt-3">
                            <a href="/detalle-producto" class="btn btn-block btn-primary"></i> VER PRODUCTO </a>
                        </div>
                    </p>
    
    
                </div> <!-- info-aside.// -->
            </aside> <!-- col.// -->
        </div> <!-- row.// -->
    </article> <!-- card-product .// -->
    
    
    
    <article class="card card-product-list">
        <div class="row no-gutters">
            <aside class="col-md-3">
                <a href="#" class="img-wrap">
                    <span class="badge badge-danger"> Consulta en sucursal </span>
                    <img src="images/items/1.jpg">
                </a>
            </aside> <!-- col.// -->
            <div class="col-md-6">
                <div class="info-main">
                    <a href="#" class="h5 title"> Placa de madera Pino</a>
                    
                
                    <p class="mb-3">
                        <span class="tag"> <i class="fa fa-check"></i> Verificado</span> 
                        <span class="tag"> Barniz </span> 
                        <span class="tag"> Entrega a domicilio </span>
                    </p>
    
                    <p> Take it as demo specs, ipsum dolor sit amet, consectetuer adipiscing elit, Lorem ipsum dolor sit amet, consectetuer adipiscing elit, Ut wisi enim ad minim  sint occaecat cupidatat non
                    proident, sunt in culpa qui laborum.... </p>
    
                </div> <!-- info-main.// -->
            </div> <!-- col.// -->
            <aside class="col-sm-3">
                <div class="info-aside">
                    <p class="mt-5">
                        <a href="#" class="btn btn-block btn-success"> <i class="fab fa-whatsapp"></i> CONSULTAR EN TIENDA </a>
                        <div class="boton-ver-producto mt-3">
                            <a href="/detalle-producto" class="btn btn-block btn-primary"></i> VER PRODUCTO </a>
                        </div>
                    </p>
    
    
                </div> <!-- info-aside.// -->
            </aside> <!-- col.// -->
        </div> <!-- row.// -->
    </article> <!-- card-product .// -->
    
    
    <article class="card card-product-list">
        <div class="row no-gutters">
            <aside class="col-md-3">
                <a href="#" class="img-wrap">
                    <span class="badge badge-danger"> Consulta en sucursal </span>
                    <img src="images/items/1.jpg">
                </a>
            </aside> <!-- col.// -->
            <div class="col-md-6">
                <div class="info-main">
                    <a href="#" class="h5 title"> Placa de madera Pino</a>
                    
                
                    <p class="mb-3">
                        <span class="tag"> <i class="fa fa-check"></i> Verificado</span> 
                        <span class="tag"> Barniz </span> 
                        <span class="tag"> Entrega a domicilio </span>
                    </p>
    
                    <p> Take it as demo specs, ipsum dolor sit amet, consectetuer adipiscing elit, Lorem ipsum dolor sit amet, consectetuer adipiscing elit, Ut wisi enim ad minim  sint occaecat cupidatat non
                    proident, sunt in culpa qui laborum.... </p>
    
                </div> <!-- info-main.// -->
            </div> <!-- col.// -->
            <aside class="col-sm-3">
                <div class="info-aside">
                    <p class="mt-5">
                        <a href="#" class="btn btn-block btn-success"> <i class="fab fa-whatsapp"></i> CONSULTAR EN TIENDA </a>
                        <div class="boton-ver-producto mt-3">
                            <a href="/detalle-producto" class="btn btn-block btn-primary"></i> VER PRODUCTO </a>
                        </div>
                    </p>
    
    
                </div> <!-- info-aside.// -->
            </aside> <!-- col.// -->
        </div> <!-- row.// -->
    </article> <!-- card-product .// -->
    
    
    
    <article class="card card-product-list">
        <div class="row no-gutters">
            <aside class="col-md-3">
                <a href="#" class="img-wrap">
                    <span class="badge badge-danger"> Consulta en sucursal </span>
                    <img src="images/items/1.jpg">
                </a>
            </aside> <!-- col.// -->
            <div class="col-md-6">
                <div class="info-main">
                    <a href="#" class="h5 title"> Placa de madera Pino</a>
                    
                
                    <p class="mb-3">
                        <span class="tag"> <i class="fa fa-check"></i> Verificado</span> 
                        <span class="tag"> Barniz </span> 
                        <span class="tag"> Entrega a domicilio </span>
                    </p>
    
                    <p> Take it as demo specs, ipsum dolor sit amet, consectetuer adipiscing elit, Lorem ipsum dolor sit amet, consectetuer adipiscing elit, Ut wisi enim ad minim  sint occaecat cupidatat non
                    proident, sunt in culpa qui laborum.... </p>
    
                </div> <!-- info-main.// -->
            </div> <!-- col.// -->
            <aside class="col-sm-3">
                <div class="info-aside">
                    <p class="mt-5">
                        <a href="#" class="btn btn-block btn-success"> <i class="fab fa-whatsapp"></i> CONSULTAR EN TIENDA </a>
                        <div class="boton-ver-producto mt-3">
                            <a href="/detalle-producto" class="btn btn-block btn-primary"></i> VER PRODUCTO </a>
                        </div>
                    </p>
    
    
                </div> <!-- info-aside.// -->
            </aside> <!-- col.// -->
        </div> <!-- row.// -->
    </article> <!-- card-product .// -->
    
    
    <article class="card card-product-list">
        <div class="row no-gutters">
            <aside class="col-md-3">
                <a href="#" class="img-wrap">
                    <span class="badge badge-danger"> Consulta en sucursal </span>
                    <img src="images/items/1.jpg">
                </a>
            </aside> <!-- col.// -->
            <div class="col-md-6">
                <div class="info-main">
                    <a href="#" class="h5 title"> Placa de madera Pino</a>
                    
                
                    <p class="mb-3">
                        <span class="tag"> <i class="fa fa-check"></i> Verificado</span> 
                        <span class="tag"> Barniz </span> 
                        <span class="tag"> Entrega a domicilio </span>
                    </p>
    
                    <p> Take it as demo specs, ipsum dolor sit amet, consectetuer adipiscing elit, Lorem ipsum dolor sit amet, consectetuer adipiscing elit, Ut wisi enim ad minim  sint occaecat cupidatat non
                    proident, sunt in culpa qui laborum.... </p>
    
                </div> <!-- info-main.// -->
            </div> <!-- col.// -->
            <aside class="col-sm-3">
                <div class="info-aside">
                    <p class="mt-5">
                        <a href="#" class="btn btn-block btn-success"> <i class="fab fa-whatsapp"></i> CONSULTAR EN TIENDA </a>
                        <div class="boton-ver-producto mt-3">
                            <a href="/detalle-producto" class="btn btn-block btn-primary"></i> VER PRODUCTO </a>
                        </div>
                    </p>
    
    
                </div> <!-- info-aside.// -->
            </aside> <!-- col.// -->
        </div> <!-- row.// -->
    </article> <!-- card-product .// -->
    
    
    <nav class="mb-4" aria-label="Page navigation sample">
      <ul class="pagination">
        <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
        <li class="page-item active"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">4</a></li>
        <li class="page-item"><a class="page-link" href="#">5</a></li>
        <li class="page-item"><a class="page-link" href="#">Next</a></li>
      </ul>
    </nav>
    
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
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem perspiciatis laborum suscipit quae sequi at nihil vel, iusto molestias in!</p>
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