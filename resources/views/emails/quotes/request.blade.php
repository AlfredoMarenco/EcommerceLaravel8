@component('mail::message')
# Cotizacion de productos
Cliente: {{ $name }}<br>
Correo: {{ $email }}<br>
Telefono: {{ $phone }}<br>
Commentario: {{ $comment }}
@component('mail::table')
| Nombre | Cantidad | SKU |
| ------------- | --------:| ------------:|
@foreach (Cart::instance('wishlist')->content() as $product)
| {{ $product->model->name }} | {{ $product->qty }} | {{ $product->model->SKU }}  |
@endforeach
@endcomponent

@endcomponent