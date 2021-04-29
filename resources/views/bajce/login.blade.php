@extends('layouts.bajce')

@section('content')
    
<!-- ========================= SECTION CONTENT ========================= -->
<section  class="section-conten padding-y mt-5" style="min-height:84vh">

    <!-- ============================ COMPONENT LOGIN   ================================= -->
        <div class="card mx-auto" style="max-width: 380px; margin-top:100px;">
          <div class="card-body">
          <h4 class="card-title mb-4">Iniciar sesión</h4>
          <form>
                <a href="#" class="btn btn-facebook btn-block mb-2"> <i class="fab fa-facebook-f"></i> &nbsp  Iniciar sesión con Facebook</a>
                <a href="#" class="btn btn-google btn-block mb-4"> <i class="fab fa-google"></i> &nbsp  Iniciar sesión con Google</a>
              <div class="form-group">
                 <input name="" class="form-control" placeholder="Username" type="text">
              </div> <!-- form-group// -->
              <div class="form-group">
                <input name="" class="form-control" placeholder="Password" type="password">
              </div> <!-- form-group// -->
              
              <div class="form-group">
                  <a href="#" class="float-right">¿Olvidaste tu contraseña?</a> 
                <label class="float-left custom-control custom-checkbox"> <input type="checkbox" class="custom-control-input" checked=""> <div class="custom-control-label"> Recordar </div> </label>
              </div> <!-- form-group form-check .// -->
              <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-block"> Iniciar sesión  </button>
              </div> <!-- form-group// -->    
          </form>
          </div> <!-- card-body.// -->
        </div> <!-- card .// -->
    
         <p class="text-center mt-4">¿No tienes una cuenta? <a href="#">Regístrate</a></p>
         <br><br>
    <!-- ============================ COMPONENT LOGIN  END.// ================================= -->
    
    
    </section>
    <!-- ========================= SECTION CONTENT END// ========================= -->
    
    
    
    
@endsection