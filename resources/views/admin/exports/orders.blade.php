<table>
    <thead>
        <tr>
            <th>#Orden</th>
            <th>Productos</th>
            <th>Total</th>
            <th>Cliente</th>
            <th>Telefono</th>
            <th>Email</th>
            <th>Calle</th>
            <th>Numero</th>
            <th>Cruzamientos</th>
            <th>Colonia</th>
            <th>Estado</th>
            <th>Ciudad</th>
            <th>Codigo Postal</th>
            <th>Referencia</th>
            <th>Forma de pago</th>
            <th>Fecha de la orden</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($orders as $order)
            <tr>
                <td>{{ $order->id }}</td>
                <td>
                    <ul>
                        @foreach ($order->products as $product)
                            <li>{{ $product->name }} (${{ number_format($product->pivot->price) }})
                                ({{ $product->pivot->quanty }}) </li>
                        @endforeach
                    </ul>
                </td>
                <td>${{ number_format($order->amount, 2) }}</td>
                <td>{{ $order->user_id }}:{{ $order->user->name }} {{ $order->user->last_name }}</td>
                <td>{{ $order->user->phone }}</td>
                <td>{{ $order->user->email }}</td>
                <td> Calle {{ $order->shipping_address->street }}</td>
                <td>{{ $order->shipping_address->number }}</td>
                <td>{{ $order->shipping_address->crosses }}</td>
                <td>{{ $order->shipping_address->suburb }}</td>
                <td>{{ $order->shipping_address->state }}</td>
                <td>{{ $order->shipping_address->city }}</td>
                <td>{{ $order->shipping_address->postal_code }}</td>
                <td>{{ $order->shipping_address->reference }}</td>
                <td>{{ $order->type }}</td>
                <td>{{ $order->created_at->toDateTimeString() }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
