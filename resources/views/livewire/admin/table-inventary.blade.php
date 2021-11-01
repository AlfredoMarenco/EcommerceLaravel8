<div>
    <div class="d-flex flex-row justify-content-between">
        <input class="form-control col-3" wire:model="search" type="text" placeholder="Busqueda de productos">
        <a href="{{ route('admin.reports.inventary.export') }}" class="btn btn-success">Exportar en Excel</a>
    </div>
    @if ($products->count())

        <div class="d-flex flex-row-reverse justify-content-between my-3">
            <div>
                {{ $products->links() }}
            </div>
            <div>
                <label for="paginate">Articulos a mostrar</label>
                <select wire:model="paginate" name="paginate" class="border">
                    <option value="5">5</option>
                    <option value="10">10</option>
                    <option value="15">15</option>
                    <option value="20">20</option>
                </select>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-sm table-striped text-center">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Preview</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Existencia</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <th scope="row">{{ $product->id }}</th>
                            <td><img width="80px" @if ($product->image) src="{{ Storage::url($product->image->url) }}" @else src="{{ asset('images/banners/bajce-enviar.jpg') }}" @endif>
                            </td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->type = ($product->type = 1) ? 'Tienda' : 'Catalogo' }}</td>
                            <td>{{ number_format($product->stock) }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="d-flex flex-row-reverse">
            {{ $products->links() }}
        </div>
    @else
        <div class="mt-5">
            <strong>No hay ningun registro con ese valor de busqueda</strong>
        </div>
    @endif
</div>
