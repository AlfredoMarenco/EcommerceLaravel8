@extends('layouts.bajce')

@section('content')


    <section id="contenido-entrada">
        <div class="container">
            <h3>Más recientes</h3>
            <div class="row">
                @foreach ($posts as $post)
                @if ($post->status = 3)
                    <div class="col-lg-8 col-md-8 col-sm-12 mb-5">
                        <div class="imagen-destacada">
                            <img src="{{ Storage::url($post->image->url) }}" class="img-fluid" alt="">
                        </div>
                        <p class="mt-3" style="color: gray;">{{ $carbon->diffForHumans($post->created_at) }}</p>
                        <h3>{{ $post->title }}</h3>
                        <p>{!! $post->extract !!}</p>
                        <a href="{{ route('blog.show',$post) }}"> Ver más <i class="far fa-arrow-alt-circle-right"></i></a>
                        {{-- <div class="boton-cargar">
					<a href="" class="btn btn-success cargar">Cargar más</a>
				</div> --}}
                    </div>
                    @endif
                @endforeach
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <h3>Lo más destacado</h3>
                    <div class="row">
                        @foreach ($recents as $recent)
                            <div class="col-5 my-3">
                                <img src="{{ Storage::url($recent->image->url) }}" class="img-fluid" alt="">
                            </div>
                            <div class="col-7 my-3">
                                <p>
                                    <b>{{ $recent->title }}
                                    </b>
                                    <span>{{ $carbon->diffForHumans($recent->created_at) }} </span>
                                    <span> <br>
                                        <a href="{{ route('blog.show',$recent) }}"> Ver más <i
                                                class="far fa-arrow-alt-circle-right"></i></a>
                                    </span>
                                </p>
                            </div>
                            <!--Destacado 2-->
                        @endforeach
                    </div>
                </div>
            </div>
            {{ $posts->links() }}
        </div>

    </section>

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
