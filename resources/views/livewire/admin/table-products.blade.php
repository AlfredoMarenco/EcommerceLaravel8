<div>
    <div class="d-flex flex-row justify-content-between">
        <input class="form-control col-3" wire:model="search" type="text" placeholder="Busqueda de productos">
        <a class="btn btn-info" href="{{ route('admin.products.create') }}"><i class="fas fa-fw fa-boxes"> </i>
            Agregar Producto</a>
    </div>
    <div class="d-flex flex-row-reverse my-3">
        {{ $products->links() }}
    </div>
    <div class="table-responsive">
        <table class="table table-sm table-striped text-center">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Existencia</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <th scope="row">{{ $product->id }}</th>
                        <td>{{ $product->name }}</td>
                        <td>${{ number_format($product->price, 2) }} </td>
                        <td>{{ number_format($product->stock) }}</td>
                        <td><a href="#" class="btn btn-success btn-md">Editar</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="d-flex flex-row-reverse">
        {{ $products->links() }}
    </div>
</div>
