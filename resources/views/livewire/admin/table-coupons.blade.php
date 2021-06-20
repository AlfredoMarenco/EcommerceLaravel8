<div>
    <div class="d-flex flex-row justify-content-between">
        <input class="form-control col-3" wire:model="search" type="text" placeholder="Busqueda de categorias">
        <a class="btn btn-info" href="{{ route('admin.coupons.create') }}"><i class="fas fa-fw fa-boxes"> </i>
            Agregar Cupon</a>
    </div>
    @if ($coupons->count())
        <div class="d-flex flex-row-reverse my-3">
            {{ $coupons->links() }}
        </div>
        <div class="table-responsive">
            <table class="table table-sm table-striped text-center">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Codigo</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Descuento</th>
                        <th scope="col">Valor minimo</th>
                        <th scope="col">Activo</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($coupons as $coupon)
                        <tr>
                            <th scope="row">{{ $coupon->id }}</th>
                            <td>{{ $coupon->code }}</td>
                            @if ($coupon->type == 'fixed')
                                <td>Cantidad</td>
                                <td>${{ number_format($coupon->value, 2) }}</td>
                            @else
                                <td>Porcentage</td>
                                <td>{{ $coupon->percent_off }}%</td>
                            @endif
                            <td>{{ number_format($coupon->min_amount, 2) }}</td>
                            @if ($coupon->status == 0)
                                <td>No</td>
                            @else
                                <td>Sí</td>
                            @endif
                            <td class="d-flex justify-content-center">
                                <a href="{{ route('admin.coupons.edit', $coupon) }}"
                                    class="btn btn-success btn-md mx-1">Editar</a>

                                <form action="{{ route('admin.coupons.destroy', $coupon) }}" method="POST">
                                    @csrf
                                    @method('Delete')
                                    <button class="btn btn-danger mx-1" type="submit">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="d-flex flex-row-reverse">
            {{ $coupons->links() }}
        </div>
    @else
        <div class="mt-5">
            <strong>No hay ningun registro con ese valor de busqueda</strong>
        </div>
    @endif
</div>
