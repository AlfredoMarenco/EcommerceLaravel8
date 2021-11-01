<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Existencia</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->stock }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
