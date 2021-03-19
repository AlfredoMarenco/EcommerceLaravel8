@extends('layouts.template')


@section('content')
<div class="container">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Inicio</a></li>
        <li class="breadcrumb-item"><a href="#">Blog</a></li>

      </ol>
      <hr>
    </nav>

    <div class="row">
      <div class="col-9" style="OVERFLOW: auto;  HEIGHT: 600px;">
        <div class="row">
          <img src="{{asset('template/images/rene/08-blog-04-1140x445.jpg')}}" class="img-fluid" alt="">
          <div class="col-2 col-md-2 col-sm-12 c-entrada">
            <h2>12</h2>
            <p class="bg-dark ">Marzo</p>

          </div>
          <div class="col-10 col-md-10 col-sm-12 t-entrada">
            <a href="#">
              <h2>COMO CREAR TU ARMARIO MINIMALISTA</h2>
            </a>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Qui molestiae voluptatem distinctio,
              accusamus, sequi officiis quis laborum harum optio repellat velit, nam dolor! Accusantium magni deleniti
              accusamus. Veniam ipsa deleniti eos incidunt, sapiente iure odit id mollitia ullam obcaecati nam.</p>
            <a href="/post.html" class="btn btn-dark">Leer más</a>
            <hr>
          </div>
        </div>
        <div class="row">
          <img src="{{asset('template/images/rene/08-blog-04-1140x445.jpg')}}" class="img-fluid" alt="">
          <div class="col-2 col-md-2 col-sm-12 c-entrada">
            <h2>12</h2>
            <p class="bg-dark ">Marzo</p>

          </div>
          <div class="col-10 col-md-10 col-sm-12 t-entrada">
            <a href="{{asset('template/images/rene/08-blog-04-1140x445.jpg')}}">
              <h2>COMO CREAR TU ARMARIO MINIMALISTA</h2>
            </a>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Qui molestiae voluptatem distinctio,
              accusamus, sequi officiis quis laborum harum optio repellat velit, nam dolor! Accusantium magni deleniti
              accusamus. Veniam ipsa deleniti eos incidunt, sapiente iure odit id mollitia ullam obcaecati nam.</p>
            <a href="/post.html" class="btn btn-dark">Leer más</a>
            <hr>
          </div>
        </div>
        <div class="row">
          <img src="{{asset('template/images/rene/08-blog-04-1140x445.jpg')}}" class="img-fluid" alt="">
          <div class="col-2 col-md-2 col-sm-12 c-entrada">
            <h2>12</h2>
            <p class="bg-dark ">Marzo</p>

          </div>
          <div class="col-10 col-md-10 col-sm-12 t-entrada">
            <a href="#">
              <h2>COMO CREAR TU ARMARIO MINIMALISTA</h2>
            </a>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Qui molestiae voluptatem distinctio,
              accusamus, sequi officiis quis laborum harum optio repellat velit, nam dolor! Accusantium magni deleniti
              accusamus. Veniam ipsa deleniti eos incidunt, sapiente iure odit id mollitia ullam obcaecati nam.</p>
            <a href="/post.html" class="btn btn-dark">Leer más</a>
            <hr>
          </div>
        </div>
      </div>
      <div class="col-3 " id="catego">
        <h3>Categorías</h3>
        <a href="">
          <li>Moda</li>
        </a>
        <a href="">
          <li>Lifestyle</li>
        </a>
        <h3 style="padding-top: 10px;">MÁS RECIENTES</h3>
        <div class="row">
          <div class="col-4 col-md-4 col-sm-12">
            <div class="recientes-1">
              <img src="{{(asset('template/images/rene/02-imagencuadrada05.jpg'))}}" class="img-fluid" alt="">
            </div>
          </div>
          <div class="col-8 col-md-8 col-sm-12">
            <div class="recientes-1">
              <h5><a href="">COMO CREAR <br> TU ARMARIO <br> MINIMALISTA</a> </h5>
            </div>
          </div>
        </div>
        <br>
        <span style="font-size: 12px; margin-top: 20px; color: gray;">12 de marzo</span>
        <hr>
        <div class="row">
          <div class="col-4 col-md-4 col-sm-12">
            <div class="recientes-1">
              <img src="{{(asset('template/images/rene/02-imagencuadrada05.jpg'))}}" class="img-fluid" alt="">
            </div>
          </div>
          <div class="col-8 col-md-8 col-sm-12">
            <div class="recientes-1">
              <h5><a href="">COMO CREAR <br> TU ARMARIO <br> MINIMALISTA</a> </h5>
            </div>
          </div>
        </div>
        <br>
        <span style="font-size: 12px; margin-top: 20px; color: gray;">12 de marzo</span>
        <hr>
      </div>
    </div>
  </div>
@endsection
