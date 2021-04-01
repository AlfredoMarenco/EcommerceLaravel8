@component('mail::message')
<h1 style="text-align: center">Estado - <span class="failed">Compra declinada</span></h1>
<div class="order">
<h1>Confirmacion de orden</h1>
<p>Orden:<strong> {{ $order->id }}</strong></p>
</div>
¡Hola {{ $order->user->name }}!
<br>
<br>
<p>Lamentablemente su orden no se ha podido realizar con exito por que se a <strong>declinado su tarjeta</strong>, si el problema persiste le recomendamos comunicarse con su banco emisor.</p><br>
<br>
<center>
    <small>Consulta los terminos y condiciones, asi como nuestras politicas de privacidad</small>
    <br>
    <br>
        <strong style="color:black;">Visita nuestras redes sociales</strong><br>
        <div class="social-icons">
            <a href="https://www.facebook.com/Rene-Alonsomx-103679577867663"> <img width="30px" src="{{ asset('template/images/icons/facebook-brands.svg') }}" alt=""></a>
            <a href="https://www.instagram.com/renealonso.mx/"> <img width="30px" src="{{ asset('template/images/icons/instagram-square-brands.svg') }}" alt=""></a>
            <a href="https://twitter.com/FashionAlonso"> <img width="30px" src="{{ asset('template/images/icons/twitter-square-brands.svg') }}" alt=""></a>
        </div>
</center>
@endcomponent
