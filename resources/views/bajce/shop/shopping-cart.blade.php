@extends('layouts.bajce')

@section('content')
    
<!-- ========================= SECTION CONTENT ========================= -->
<section id="section-content-cart" class="section-content padding-y">
    <div class="container">
    
    <div class="row">
        <main class="col-md-9">
    <div class="card">
    
    <table class="table table-borderless table-shopping-cart">
    <thead class="text-muted">
    <tr class="small text-uppercase">
      <th scope="col">Producto</th>
      <th scope="col" width="120">Cantidad</th>
      <th scope="col" width="120">Precio</th>
      <th scope="col" class="text-right" width="200"> </th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>
            <figure class="itemside">
                <div class="aside"><img src="images/items/bridas.png" class="img-sm"></div>
                <figcaption class="info">
                    <a href="#" class="title text-dark">BRIDAS</a>
                    <p class="text-muted small">SKU: 455 379 <br> Garantía: 2 años</p>
                </figcaption>
            </figure>
        </td>
        <td> 
            <select class="form-control">
                <option>1</option>
                <option>2</option>	
                <option>3</option>	
                <option>4</option>	
            </select> 
        </td>
        <td> 
            <div class="price-wrap"> 
                <var class="price">$300.00</var> 
                <small class="text-muted">Eliminar </small> 
            </div> <!-- price-wrap .// -->
        </td>
        <td class="text-right">  
        <a href="/producto" class="btn btn-block btn-light">Detalles</a>
        </td>
    </tr>
    
    <tr>
        <td>
            <figure class="itemside">
                <div class="aside"><img src="images/items/bisagras.png" class="img-sm"></div>
                <figcaption class="info">
                    <a href="/producto" class="title text-dark">BISAGRAS NEGRAS</a>
                    <p class="text-muted small">SKU: 455 379 <br> Garantía: 2 años</p>
                </figcaption>
            </figure>
        </td>
        <td> 
            <select class="form-control">
                <option>1</option>
                <option>2</option>	
                <option>3</option>	
                <option>4</option>	
            </select> 
        </td>
        <td> 
            <div class="price-wrap"> 
                <var class="price">$300.00</var> 
                <small class="text-muted">Eliminar </small> 
            </div> <!-- price-wrap .// -->
        </td>
        <td class="text-right">  
        <a href="/producto" class="btn btn-block btn-light">Detalles</a>
        </td>
    </tr>
    
    
    </tbody>
    </table>
    
    <div class="card-body border-top">
        <a href="/pagar" class="btn btn-primary float-md-right"> Comprar ahora <i class="fa fa-chevron-right"></i> </a>
        <a href="/tienda" class="btn btn-light"> <i class="fa fa-chevron-left"></i> Seguir comprando </a>
    </div>	
    </div> <!-- card.// -->
    
        </main> <!-- col.// -->
        <aside class="col-md-3">
            <div class="card mb-3">
                <div class="card-body">
                <form>
                    <div class="form-group">
                        <label>¿Tienes un cupón?</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="" placeholder="Código de cupón">
                            <span class="input-group-append"> 
                                <button class="btn btn-primary">Aplicar</button>
                            </span>
                        </div>
                    </div>
                </form>
                </div> <!-- card-body.// -->
            </div>  <!-- card .// -->
            <div class="card">
                <div class="card-body">
                        <dl class="dlist-align">
                          <dt>Precio total:</dt>
                          <dd class="text-right">MXN 600</dd>
                        </dl>
                        <dl class="dlist-align">
                          <dt>Descuento:</dt>
                          <dd class="text-right">MXN 120</dd>
                        </dl>
                        <dl class="dlist-align">
                          <dt>Total:</dt>
                          <dd class="text-right  h5"><strong>$480</strong></dd>
                        </dl>
                        <hr>
                        <p class="text-center mb-3">
                            <img src="images/misc/payments.png" height="26">
                        </p>
                        
                </div> <!-- card-body.// -->
            </div>  <!-- card .// -->
        </aside> <!-- col.// -->
    </div>
    
    </div> <!-- container .//  -->
    </section>
    <!-- ========================= SECTION CONTENT END// ========================= -->
    
    <!-- ========================= SECTION  ========================= -->
    <section id="productos-sugeridos-2" class="section-name border-top padding-y">
    <div class="container">
    <h6>Política de privacidad</h6>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    
    </div><!-- container // -->
    </section>
    <!-- ========================= SECTION  END// ========================= -->
    
    
    <section id="productos-sugeridos-2">
        <div class="container">
          <h5 class="title-description mb-5" style="text-align: center;">Te podría interesar </h5>
          <div class="row">
      
            <div class="col-md-3">
              <figure class="card card-product-grid">
                <div class="img-wrap"> 
                  <a href="/producto">
                    <img src="images/items/bridas.png">
                  </a>
                </div> <!-- img-wrap.// -->
                <figcaption class="info-wrap">
                    <a href="/producto" class="title mb-2">BRIDAS PARA TUBO GRIS 7.5 X 2.3 CM</a>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum ipsum corporis recusandae odit ab.</p>
                    <div class="price-wrap">
                      <span class="price">$350.00</span> 
                      <small class="text-muted">/ pza</small>
          
                      <p class="mb-2"> <small >SKU:</small> 455379  </p>
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
                    
                    
                  
                    
          
                    <a href="/carrito" class="btn btn-primary"> <i class="fas fa-cart-plus"></i> Agregar al carrito </a>	
                    
                </figcaption>
              </figure>
            </div> <!-- col.// -->
      
            <div class="col-md-3">
              <figure class="card card-product-grid">
                <div class="img-wrap"> 
                  <a href="/producto">
                    <img src="images/items/bridas.png">
                  </a>
                </div> <!-- img-wrap.// -->
                <figcaption class="info-wrap">
                    <a href="/producto" class="title mb-2">BRIDAS PARA TUBO GRIS 7.5 X 2.3 CM</a>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum ipsum corporis recusandae odit ab.</p>
                    <div class="price-wrap">
                      <span class="price">$350.00</span> 
                      <small class="text-muted">/ pza</small>
          
                      <p class="mb-2"> <small >SKU:</small> 455379  </p>
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
                    
                    
                  
                    
          
                    <a href="/carrito" class="btn btn-primary"> <i class="fas fa-cart-plus"></i> Agregar al carrito </a>	
                    
                </figcaption>
              </figure>
            </div> <!-- col.// -->
      
            <div class="col-md-3">
              <figure class="card card-product-grid">
                <div class="img-wrap"> 
                  <a href="/producto">
                    <img src="images/items/bridas.png">
                  </a>
                </div> <!-- img-wrap.// -->
                <figcaption class="info-wrap">
                    <a href="/producto" class="title mb-2">BRIDAS PARA TUBO GRIS 7.5 X 2.3 CM</a>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum ipsum corporis recusandae odit ab.</p>
                    <div class="price-wrap">
                      <span class="price">$350.00</span> 
                      <small class="text-muted">/ pza</small>
          
                      <p class="mb-2"> <small >SKU:</small> 455379  </p>
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
                    
                    
                  
                    
          
                    <a href="/carrito" class="btn btn-primary"> <i class="fas fa-cart-plus"></i> Agregar al carrito </a>	
                    
                </figcaption>
              </figure>
            </div> <!-- col.// -->
      
            <div class="col-md-3">
              <figure class="card card-product-grid">
                <div class="img-wrap"> 
                  <a href="/producto">
                    <img src="images/items/bridas.png">
                  </a>
                </div> <!-- img-wrap.// -->
                <figcaption class="info-wrap">
                    <a href="/producto" class="title mb-2">BRIDAS PARA TUBO GRIS 7.5 X 2.3 CM</a>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum ipsum corporis recusandae odit ab.</p>
                    <div class="price-wrap">
                      <span class="price">$350.00</span> 
                      <small class="text-muted">/ pza</small>
          
                      <p class="mb-2"> <small >SKU:</small> 455379  </p>
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
                    
                    
                  
                    
          
                    <a href="/carrito" class="btn btn-primary"> <i class="fas fa-cart-plus"></i> Agregar al carrito </a>	
                    
                </figcaption>
              </figure>
            </div> <!-- col.// -->
          </div>
        </div>
      </section>
      
      
      
      
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