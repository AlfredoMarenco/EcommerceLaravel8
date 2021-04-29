@extends('layouts.bajce')

@section('content')
    

<section id="contenido-entrada">
	<div class="container">
		<div class="row">
			<div class="col-8">
				<h3>Más recientes</h3>
				<div class="imagen-destacada">
					<img src="/images/banners/Rectangle-154-1.png" class="img-fluid" alt="">
				</div>
				<p class="mt-3" style="color: gray;">Diciembre 29, 2020</p>
				<h3>Título de la entrada titulo de la entrada</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pulvinar vel augue fermentum mi fringilla. Donec nibh mauris diam amet nunc enim vitae id. Nisl proin ut sit scelerisque placerat urna et. Et est adipiscing consequat amet pellentesque ac.</p>
				<a href="/detalle-entrada.html"> Ver más <i class="far fa-arrow-alt-circle-right"></i></a>
				<div class="boton-cargar">
					<a href="" class="btn btn-success cargar">Cargar más</a>
				</div>
			</div>
			<div class="col-4">
				<h3>Lo más destacado</h3>
				<div class="row">
					<div class="col-5">
						<img src="/images/banners/Rectangle-155.png" class="img-fluid" alt="">
					</div>
					<div class="col-7">
						<p> 
							<b>Título de la entrada titulo
							de la entrada titulo de la entrada
							</b>
							<span>Diciembre 29, 2020
							</span>
							<span> <br>
								<a href="/detalle-entrada.html"> Ver más <i class="far fa-arrow-alt-circle-right"></i></a>
							</span>
						</p>
					</div>
					<!--Destacado 2-->
					<div class="col-5 mt-4"> 
						<img src="/images/banners/Rectangle-155.png" class="img-fluid" alt="">
					</div>
					<div class="col-7 mt-4">
						<p> 
							<b>Título de la entrada titulo
							de la entrada titulo de la entrada
							</b>
							<span>Diciembre 29, 2020
							</span>
							<span> <br>
								<a href=""> Ver más <i class="far fa-arrow-alt-circle-right"></i></a>
							</span>
						</p>
					</div>
					<!--Destacado 2-->
					<div class="col-5 mt-4"> 
						<img src="/images/banners/Rectangle-155.png" class="img-fluid" alt="">
					</div>
					<div class="col-7 mt-4">
						<p> 
							<b>Título de la entrada titulo
							de la entrada titulo de la entrada
							</b>
							<span>Diciembre 29, 2020
							</span>
							<span> <br>
								<a href="/detalle-entrada.html"> Ver más <i class="far fa-arrow-alt-circle-right"></i></a>
							</span>
						</p>
					</div>

					<!--Destacado 2-->
					<div class="col-5 mt-4"> 
						<img src="/images/banners/Rectangle-155.png" class="img-fluid" alt="">
					</div>
					<div class="col-7 mt-4">
						<p> 
							<b>Título de la entrada titulo
							de la entrada titulo de la entrada
							</b>
							<span>Diciembre 29, 2020
							</span>
							<span> <br>
								<a href=""> Ver más <i class="far fa-arrow-alt-circle-right"></i></a>
							</span>
						</p>
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