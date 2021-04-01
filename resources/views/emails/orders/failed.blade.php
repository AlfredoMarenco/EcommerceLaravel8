@component('mail::message')
<h1 style="text-align: center">Estado - <span class="failed">Compra declinada</span></h1>
<div class="order">
<h1>Confirmacion de orden</h1>
<p>Orden:<strong> {{ $order->id }}</strong></p>
</div>
¡Hola {{ $order->user->name }}!
<br>
<br>
<p>Lamentablemente su orden no se ha podido realizar con exito por que se a <strong>declinado su tarjeta</strong>, si el problema continua le recomendamos comunicarse con su banco emisor.</p><br>
<br>

@endcomponent
