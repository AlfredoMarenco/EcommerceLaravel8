@extends('layouts.bajce')

@section('content')

<!-- ========================= SECTION PAGETOP ========================= -->
<section class="section-pagetop bg-gray">
    <div class="container">
        <h2 class="title-page">My account</h2>
    </div> <!-- container //  -->
    </section>
    <!-- ========================= SECTION PAGETOP END// ========================= -->
    
    
    <!-- ========================= SECTION CONTENT ========================= -->
    <section class="section-content padding-y">
        <div class="container">
        
        <div class="row">
            <aside class="col-md-3">
                <nav class="list-group">
                    <a class="list-group-item" href="perfil.html"> Mi cuenta  </a>
                    <a class="list-group-item" href="mi-direccion.html"> Mi dirección </a>
                    <a class="list-group-item active" href="mis-ordenes.html"> Mis Órdenes </a>
                    <a class="list-group-item" href="page-profile-setting.html"> Configurar cuenta </a>
                    <a class="list-group-item" href="page-profile-setting.html"> Ayuda </a>
                    <a class="list-group-item" href="page-index-1.html"> Salir </a>
                </nav>
            </aside> <!-- col.// -->
        <main class="col-md-9">
    
            <article class="card mb-4">
            <header class="card-header">
                <a href="#" class="float-right"> <i class="fa fa-print"></i> Print</a>
                <strong class="d-inline-block mr-3">Order ID: 6123456789</strong>
                <span>Order Date: 16 December 2018</span>
            </header>
            <div class="card-body">
                <div class="row"> 
                    <div class="col-md-8">
                        <h6 class="text-muted">Delivery to</h6>
                        <p>Michael Jackson <br>  
                        Phone +1234567890 Email: myname@gmail.com <br>
                        Location: Home number, Building name, Street 123, <br> 
                        P.O. Box: 100123
                         </p>
                    </div>
                    <div class="col-md-4">
                        <h6 class="text-muted">Payment</h6>
                        <span class="text-success">
                            <i class="fab fa-lg fa-cc-visa"></i>
                            Visa  **** 4216  
                        </span>
                        <p>Subtotal: $356 <br>
                         Shipping fee:  $56 <br> 
                         <span class="b">Total:  $456 </span>
                        </p>
                    </div>
                </div> <!-- row.// -->
            </div> <!-- card-body .// -->
            <div class="table-responsive">
            <table class="table table-hover">
                <tbody>
                    <tr>
                    <td width="65">
                        <img src="images/items/bridas.png" class="img-xs border">
                    </td>
                    <td> 
                        <p class="title mb-0">Bridas </p>
                        <var class="price text-muted">MXN 300</var>
                    </td>
                    <td> Vendedor <br> Grupo Bajce </td>
                    <td width="250"> 
                        <div>
                            <a href="#"  class=" btn btn-outline-primary">
                                Cancelar orden
                            </a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="images/items/bisagras.png" class="img-xs border">
                    </td>
                    <td> 
                        <p class="title mb-0">Bisagras </p>
                        <var class="price text-muted">USD 15</var>
                    </td>
                    <td> Vendedor <br> Grupo Bajce </td>
                    <td> 
                        <div>
                            <a href="#"  class=" btn btn-outline-primary">
                                Cancelar orden
                            </a>
                        </div>
                        
                    </td>
                </tr>
                
            </tbody></table>
            </div> <!-- table-responsive .end// -->
            </article> <!-- card order-item .// -->
    
    
    
            <article class="card mb-4">
                <header class="card-header">
                    <a href="#" class="float-right"> <i class="fa fa-print"></i> Print</a>
                    <strong class="d-inline-block mr-3">Order ID: 6123456789</strong>
                    <span>Order Date: 16 December 2018</span>
                </header>
                <div class="card-body">
                    <div class="row"> 
                        <div class="col-md-8">
                            <h6 class="text-muted">Delivery to</h6>
                            <p>Michael Jackson <br>  
                            Phone +1234567890 Email: myname@gmail.com <br>
                            Location: Home number, Building name, Street 123, <br> 
                            P.O. Box: 100123
                             </p>
                        </div>
                        <div class="col-md-4">
                            <h6 class="text-muted">Payment</h6>
                            <span class="text-success">
                                <i class="fab fa-lg fa-cc-visa"></i>
                                Visa  **** 4216  
                            </span>
                            <p>Subtotal: $356 <br>
                             Shipping fee:  $56 <br> 
                             <span class="b">Total:  $456 </span>
                            </p>
                        </div>
                    </div> <!-- row.// -->
                </div> <!-- card-body .// -->
                <div class="table-responsive">
                <table class="table table-hover">
                    <tbody>
                        <tr>
                        <td width="65">
                            <img src="images/items/bridas.png" class="img-xs border">
                        </td>
                        <td> 
                            <p class="title mb-0">Bridas </p>
                            <var class="price text-muted">MXN 300</var>
                        </td>
                        <td> Vendedor <br> Grupo Bajce </td>
                        <td width="250"> 
                            <div>
                                <a href="#"  class=" btn btn-outline-primary">
                                    Cancelar orden
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="images/items/bisagras.png" class="img-xs border">
                        </td>
                        <td> 
                            <p class="title mb-0">Bisagras </p>
                            <var class="price text-muted">USD 15</var>
                        </td>
                        <td> Vendedor <br> Grupo Bajce </td>
                        <td> 
                            <div>
                                <a href="#"  class=" btn btn-outline-primary">
                                    Cancelar orden
                                </a>
                            </div>
                            
                        </td>
                    </tr>
                    
                </tbody></table>
                </div> <!-- table-responsive .end// -->
                </article> <!-- card order-item .// -->
    
    
    
    
    
        </main> <!-- col.// -->
    </div>
    
    </div> <!-- container .//  -->
    </section>
    <!-- ========================= SECTION CONTENT END// ========================= -->
    
    
@endsection