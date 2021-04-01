@component('mail::message')
<div class="order">
<h1>Confirmacion de orden</h1>
<p>Orden:<strong> {{ $order->id }}</strong></p>
</div>
¡Hola {{ $order->user->name }}!
<br>
<br>
<small>Gracias por tu pedido. Tu solicitud será revisada contra disponibilidad de inventario, de ser confirmada recibirás un correo electrónico con más detalles.</small><br>

@component('mail::table')
| Quanty       | Product         | Price  |
| ------------- |:-------------:| --------:|
@foreach ($order->products as $product)
| {{ $product->pivot->quanty  }}      | {{ $product->name }}      | ${{ number_format($product->pivot->price, 2) }}      |
@endforeach
|                                     |                           |                                            |
|                                     |<strong>TOTAL:</strong>     | <strong>${{ number_format($order->amount,2) }}<strong>|
@endcomponent
@component('mail::button', ['url' => 'https://renealonso.com/user/orders','color' => 'success'])
Ver orden
@endcomponent
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
