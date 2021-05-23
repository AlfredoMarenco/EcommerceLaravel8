@extends('layouts.bajce')

@section('content')

    <section id="interior-entrada">
        <div class="container">
            <div class="imagen-interior">
                <img class="w-100 h-50" src="{{ Storage::url($post->image->url) }}" alt="">
            </div>

        </div>
    </section>

    <article id="info-entrada">
        <div class="container">
            <div class="contenido-interior">
                <h2>{{ $post->title }}</h2>
                <p class="my-4">{{ $post->created_at->toFormattedDateString() }}
                    <span>|</span>
                    <span>{{ $post->user->name }} {{ $post->user->last_name }}</span>
                </p>
            </div>
            {!! $post->body !!}
    </article>

    <div class="botones-redes">
        <div class="container">
            <div class="row">
                <div class="facebook mt-4">
                    <a href="" class="facebook-btn">Compartir en Facebook</a>
                </div>
                <div class="twitter mt-4">
                    <a href="" class="twitter-btn">Compartir en twitter</a>
                </div>
            </div>
        </div>
    </div>

    <section id="sugerencias">
        <div class="container">
            <h4>Tal vez te interese</h4>
            <div class="row">
                @foreach ($recents as $recent)
                    @if ($recent->status == 3)
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="row">
                                <!--Destacado 2-->
                                <div class="col-5 mt-4">
                                    <img src="{{ Storage::url($recent->image->url) }}" class="img-fluid" alt="">
                                </div>
                                <div class="col-7 mt-4">
                                    <p>
                                        <b>{{ $recent->title }}
                                        </b>
                                        <span>{{ $recent->created_at->toFormattedDateString() }}
                                        </span>
                                        <span> <br>
                                            <a href="{{ route('blog.show', $recent) }}"> Ver más <i
                                                    class="far fa-arrow-alt-circle-right"></i></a>
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        
                    @endif
                @endforeach
            </div>
        </div>
    </section>

    <section id="comentarios">
        <div class="container">
            <h4>Comentarios</h4>
            <div class="comentarios-escr mt-3">
                <h5>ARMANDO CARBALLO</h5>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla, reiciendis! Eius numquam officia
                    blanditiis dignissimos maiores, molestiae nisi praesentium rerum tenetur ex accusantium ea assumenda qui
                    similique quisquam dolore pariatur.</p>
            </div>
            <div class="comentarios-escr mt-3">
                <h5>ARMANDO CARBALLO</h5>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla, reiciendis! Eius numquam officia
                    blanditiis dignissimos maiores, molestiae nisi praesentium rerum tenetur ex accusantium ea assumenda qui
                    similique quisquam dolore pariatur.</p>
            </div>
            <div class="comentarios-escr mt-3">
                <h5>ARMANDO CARBALLO</h5>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla, reiciendis! Eius numquam officia
                    blanditiis dignissimos maiores, molestiae nisi praesentium rerum tenetur ex accusantium ea assumenda qui
                    similique quisquam dolore pariatur.</p>
            </div>

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
