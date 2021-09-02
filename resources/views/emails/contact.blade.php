@component('mail::message')
# Nuevo mensaje de formulario de contacto.

Nombre: {{ $name }}<br>
Correo: {{ $email }}<br>
Telefono: {{ $phone }}<br>
Mensaje: {{ $message }}

{{ config('app.name') }}
@endcomponent
