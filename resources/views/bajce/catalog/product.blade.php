@extends('layouts.bajce')

@section('content')


<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content bg-white padding-y">
    <div class="container">
      <section class="py-3 bg-light">
        <div class="container">
          <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item"><a href="#">Catálogo</a></li>
              <li class="breadcrumb-item"><a href="#">Productos</a></li>

              <li class="breadcrumb-item active" aria-current="page">Tablones de madera</li>
          </ol>
        </div>
      </section>

    <!-- ============================ ITEM DETAIL ======================== -->
        <div class="row">
            <aside class="col-md-6">
    <div class="card">
    <article class="gallery-wrap">
        <div class="img-big-wrap">
          <div> <a href="#"><img src="{{ Storage::url($product->image->url) }}"></a></div>
        </div> <!-- slider-product.// -->
        <div class="thumbs-wrap">
            @foreach ($product->images as $image)
            <a href="#" class="item-thumb"> <img src="{{ Storage::url($image->url) }}"></a>
            @endforeach
        </div> <!-- slider-nav.// -->
    </article> <!-- gallery-wrap .end// -->
    </div> <!-- card.// -->
            </aside>
            <main class="col-md-6">
    <article class="product-info-aside">

    <h2 class="title mt-3">{{ $product->name }}</h2>

    <p>{{$product->description}}</p>


    <dl class="row">
      <dt class="col-1"><i class="fas fa-box" style="color: orange;"></i></dt>
      <dd class="col-11"><a href="#">Entrega en 3 días hábiles</a></dd>
      <dt class="col-1"><i class="fas fa-truck-loading" style="color: orange;"></i></dt>
      <dd class="col-11"><a href="#">Envío gratis dentro de Mérida</a></dd>


    </dl>

        <div class="form-row  mt-4">
            <div class="form-group col-md flex-grow-0">
                <div class="input-group mb-3 input-spinner">
                  <div class="input-group-prepend">
                    <button class="btn btn-light" type="button" id="button-minus"> &minus; </button>
                  </div>
                  <input type="text" class="form-control" value="1">
                  <div class="input-group-append">
                    <button class="btn btn-light" type="button" id="button-plus"> + </button>
                  </div>
                </div>
            </div> <!-- col.// -->
        </div> <!-- row.// -->

      <div class="form-group col-md">
        <a href="#"  class="btn btn-block  btn-success">
          <i class="fab fa-whatsapp"></i> <span class="text">CONSULTAR EN SUCURSAL</span>
        </a>
        <div class="agregar-a mt-4">
          <a href="#" class="btn btn-block btn-primary">
            <i class="fas fa-cart-plus"></i> <span class="text">AÑADIR A LA LISTA</span>
          </a>
        </div>
        <p class="mt-3">* Solicita cotizaciones en linea</p>
      </div> <!-- col.// -->

    </article> <!-- product-info-aside .// -->
            </main> <!-- col.// -->
        </div> <!-- row.// -->

    <!-- ================ ITEM DETAIL END .// ================= -->


    </div> <!-- container .//  -->
    </section>
    <!-- ========================= SECTION CONTENT END// ========================= -->

    <!-- ========================= SECTION  ========================= -->
    <section id="section-name-cat" class="section-name padding-y bg">
    <div class="container">

    <div class="row">
        <div class="col-md-12">
            <h5 class="title-description">Description</h5>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras mi in at arcu sed. Netus elementum, purus dui vitae curabitur nibh. Posuere ullamcorper quis libero nibh pellentesque in venenatis duis consectetur. Amet faucibus lectus tortor gravida. A est lacinia id non, pellentesque aliquam convallis. Risus, nisi euismod eu libero, vel dictum egestas ut pellentesque. Sagittis, tincidunt duis elit, nisi, sit habitasse in commodo. Enim, tellus et vulputate ut consectetur. <br><br>

    Mauris sapien, mi in dui eget fermentum parturient bibendum. Suspendisse vitae enim fermentum eget amet, arcu, non. Id nec nec porta vitae nec laoreet in tellus pharetra. Sodales lacinia dignissim a nibh. Consectetur libero arcu urna amet. Eget et odio urna, amet enim auctor tellus et. Ullamcorper risus dignissim phasellus rhoncus quis ut imperdiet diam adipiscing. Amet duis etiam sit eu ultrices tristique senectus. Facilisis nec duis augue diam mi. Felis pellentesque faucibus consequat nibh commodo amet, aliquet ipsum. Adipiscing sed sed arcu sed. Est vulputate faucibus nunc nunc dolor. Sem diam turpis nisl ac sit. Nulla in tellus est dictumst at dictumst.
            </p>
            <ul class="list-check">
            <li>Material: Stainless steel</li>
            <li>Weight: 82kg</li>
            <li>built-in drip tray</li>
            <li>Open base for pots and pans</li>
            <li>On request available in propane execution</li>
            </ul>

        </div> <!-- col.// -->


    </div> <!-- row.// -->

    </div> <!-- container .//  -->
    </section>
    <!-- ========================= SECTION CONTENT END// ========================= -->


    <section id="catalogo">
      <div class="cabecera">
        <h3 style="text-align: center; text-transform: uppercase;" class="mt-5">
          MÁS PRODUCTOS EN EL CATÁLOGO
        </h3>
        <p style="text-align: center;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae deserunt quos similique natus quaerat omnis!</p>
      </div>

      <div class="row mt-5">
        <div class="col-lg-4 col-md-4 col-sm-12">
          <div class="card">
            <div class="contenido-2">
              <div class="imagen-producto">
                <img src="/images/items/tablones-de-madera.png" class="img-fluid" alt="">
              </div>
            <div class="info-producto">
            <h5>Tablones de madera</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis recusandae ad suscipit nisi quis aperiam reiciendis voluptate repellat! Eum, quisquam.</p>
            <a href="/productos-catalogo" class="btn btn-primary btn-block">Ver catálogo</a>
            </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
          <div class="card">
            <div class="contenido-2">
              <div class="imagen-producto">
                <img src="/images/items/tablones-de-madera.png" class="img-fluid" alt="">
              </div>
            <div class="info-producto">
              <h5>Tablones de madera</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis recusandae ad suscipit nisi quis aperiam reiciendis voluptate repellat! Eum, quisquam.</p>
            <a href="/productos-catalogo" class="btn btn-primary btn-block">Ver catálogo</a>
            </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
          <div class="card">
            <div class="contenido-2">
              <div class="imagen-producto">
                <img src="/images/items/tablones-de-madera.png" class="img-fluid" alt="">
              </div>
            <div class="info-producto">
              <h5>Tablones de madera</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis recusandae ad suscipit nisi quis aperiam reiciendis voluptate repellat! Eum, quisquam.</p>
            <a href="/productos-catalogo" class="btn btn-primary btn-block">Ver catálogo</a>
            </div>
            </div>
          </div>
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
