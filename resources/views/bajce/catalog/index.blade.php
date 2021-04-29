@extends('layouts.bajce')

@section('content')



<section class="section-intro ">
	<div class="container-fluid p-0">
	<!-- ==============  COMPONENT SLIDER  BOOTSTRAP ============  -->
	
	<!---->
	<div id="carousel1_indicator" class="slider-home-banner carousel slide" data-ride="carousel">
	  <ol class="carousel-indicators">
		<li data-target="#carousel1_indicator" data-slide-to="0" class="active"></li>
		<li data-target="#carousel1_indicator" data-slide-to="1"></li>
	  </ol>
	  <div class="carousel-inner">
		<div class="carousel-item active">
		  <img src="images/banners/catalogo-2.png" alt="First slide">
		  <div class="carousel-caption carousel-caption-3 d-md-block">
			<h1 >Catálogo de <br>
				Madera</h1>
			<a href="/productos-catalogo" class="btn btn-primary">Ver catálogo</a>
		  </div>
		</div>
		
	  </div>
	  <a class="carousel-control-prev" href="#carousel1_indicator" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carousel1_indicator" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	  </a>
	</div> 
	<!-- ============ COMPONENT SLIDER BOOTSTRAP end.// ===========  .// -->	
	</div> <!-- container end.// -->
	</section>

    
@endsection