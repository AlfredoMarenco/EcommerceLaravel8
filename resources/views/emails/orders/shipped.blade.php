@component('mail::message')
# Tu numero de orden es: {{ $order->id }}

Tu orden ha sido creada

@component('mail::button', ['url' => {{ route('user.orders') }},'color' => 'success'])
Ver orden
@endcomponent

Hemos recibido tu orden de manera éxitosa.<br>
{{ config('app.name') }}
@endcomponent
