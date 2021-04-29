@extends('layouts.bajce')

@section('content')
    


<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content padding-y">

    <!-- ============================ COMPONENT REGISTER   ================================= -->
        <div class="card mx-auto" style="max-width:520px; margin-top:40px;">
          <article class="card-body">
            <header class="mb-4"><h4 class="card-title">Regístrarme</h4></header>
            <form>
                    <div class="form-row">
                        <div class="col form-group">
                            <label>Nombre</label>
                              <input type="text" class="form-control" placeholder="">
                        </div> <!-- form-group end.// -->
                        <div class="col form-group">
                            <label>Apellido</label>
                              <input type="text" class="form-control" placeholder="">
                        </div> <!-- form-group end.// -->
                    </div> <!-- form-row end.// -->
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" placeholder="">
                        <small class="form-text text-muted">No compartiremos tu información con nadie más.</small>
                    </div> <!-- form-group end.// -->
                    <div class="form-group">
                        <label class="custom-control custom-radio custom-control-inline">
                          <input class="custom-control-input" checked="" type="radio" name="gender" value="option1">
                          <span class="custom-control-label"> Másculino </span>
                        </label>
                        <label class="custom-control custom-radio custom-control-inline">
                          <input class="custom-control-input" type="radio" name="gender" value="option2">
                          <span class="custom-control-label"> Femenino </span>
                        </label>
                    </div> <!-- form-group end.// -->
                    <div class="form-row">
                        <div class="form-group col-md-6">
                          <label>City</label>
                          <input type="text" class="form-control">
                        </div> <!-- form-group end.// -->
                        <div class="form-group col-md-6">
                          <label>Estado</label>
                          <select id="inputState" class="form-control">
                            <option> Choose...</option>
                              <option>Nuevo León</option>
                              <option>Quintana Roo</option>
                              <option selected="">Yucatán</option>
                              <option>Tabasco</option>
                              <option>Ciudad de México</option>
                          </select>
                        </div> <!-- form-group end.// -->
                    </div> <!-- form-row.// -->
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Crear contraseña</label>
                            <input class="form-control" type="password">
                        </div> <!-- form-group end.// --> 
                        <div class="form-group col-md-6">
                            <label>Repetir contraseña</label>
                            <input class="form-control" type="password">
                        </div> <!-- form-group end.// -->  
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block"> Registrarme  </button>
                    </div> <!-- form-group// -->      
                    <div class="form-group"> 
                        <label class="custom-control custom-checkbox"> <input type="checkbox" class="custom-control-input" checked=""> <div class="custom-control-label"> Acepto los <a href="#">términos y condiciones</a>  </div> </label>
                    </div> <!-- form-group end.// -->           
                </form>
            </article><!-- card-body.// -->
        </div> <!-- card .// -->
        <p class="text-center mt-4">¿Ya tienes una cuenta? <a href="">Iniciar sesión</a></p>
        <br><br>
    <!-- ============================ COMPONENT REGISTER  END.// ================================= -->
    
    
    </section>
    <!-- ========================= SECTION CONTENT END// ========================= -->
    
    
@endsection