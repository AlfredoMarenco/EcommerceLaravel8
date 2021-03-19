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
          <div>
            <h2>COMO CREAR TU ARMARIO MINIMALISTA</h2>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum molestias ipsam neque quis ab esse deserunt tenetur! Architecto magnam incidunt, dolores beatae quidem accusantium eos officia quod pariatur dolor harum provident magni in explicabo iste quisquam. Totam sequi saepe nesciunt. magni in explicabo iste quisquam. Totam sequi saepe nesciunt. 
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum molestias ipsam neque quis ab esse deserunt tenetur! Architecto magnam incidunt, dolores beatae quidem accusantium eos officia quod pariatur dolor harum provident magni in explicabo iste quisquam. Totam sequi saepe nesciunt. magni in explicabo iste quisquam. Totam sequi saepe nesciunt. <br> <br>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum molestias ipsam neque quis ab esse deserunt tenetur! Architecto magnam incidunt, dolores beatae quidem accusantium eos officia quod pariatur dolor harum provident magni in explicabo iste quisquam. Totam sequi saepe nesciunt. magni in explicabo iste quisquam. Totam sequi saepe nesciunt. <br>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum molestias ipsam neque quis ab esse deserunt tenetur! Architecto magnam incidunt, dolores beatae quidem accusantium eos officia quod pariatur dolor harum provident magni in explicabo iste quisquam. Totam sequi saepe nesciunt. magni in explicabo iste quisquam. Totam sequi saepe nesciunt.Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum molestias ipsam neque quis ab esse deserunt tenetur! Architecto magnam incidunt, dolores beatae quidem accusantium eos officia quod pariatur dolor harum provident magni in explicabo iste quisquam. Totam sequi saepe nesciunt. magni in explicabo iste quisquam. Totam sequi saepe nesciunt. <br>
            </p>
          </div>
          
          <div>
            <h3><i class="fas fa-share"></i> Comparte este post</h3>
            <div class="share-links"><a href="https://www.facebook.com/sharer.php?u=https://renealonso.com/significado-de-moda/" target="_blank" rel="nofollow" data-tooltip="" data-placement="bottom" title="" class="share-facebook" data-original-title="Facebook"><i class="fab fa-facebook-square"></i></a>
               <a href="https://twitter.com/intent/tweet?text=SIGNIFICADO+DE+MODA&amp;url=https://renealonso.com/significado-de-moda/" target="_blank" rel="nofollow" data-tooltip="" data-placement="bottom" title="" class="share-twitter" data-original-title="Twitter"> <i class="fab fa-twitter-square"></i></a>
               
           </div>
        </div>


         
        </div>  <!--no borres este-->
        
        
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