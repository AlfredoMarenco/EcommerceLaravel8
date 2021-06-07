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
@component('mail::button', ['url' => 'https://bajce.testvandu.com/user/orders','color' => 'success'])
Ver orden
@endcomponent

@endcomponent
