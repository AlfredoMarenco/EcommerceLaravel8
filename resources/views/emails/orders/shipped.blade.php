@component('mail::message')

# Tu numero de orden es: {{ $order->id }}

Total: <h3>${{ number_format($order->amount,2) }}</h3>

@component('mail::table')
| Quanty       | Product         | Price  |
| ------------- |:-------------:| --------:|
@foreach ($order->products as $product)
| {{ $product->pivot->quanty  }}      | {{ $product->name }}      | ${{ number_format($product->pivot->price, 2) }}      |
@endforeach

@endcomponent

@component('mail::button', ['url' => 'https://renealonso.com/user/orders','color' => 'success'])
Ver orden
@endcomponent

Hemos recibido tu orden de manera éxitosa.<br>
{{ config('app.name') }}
@endcomponent