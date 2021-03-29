<div>
    <div class="card">
        <div class="card-body">
            <div class="d-flex flex-row justify-content-start">
                <input class="form-control col-5" wire:model="search" type="text" placeholder="Busquedar por cliente o numero de orden">
            </div>
            <div class="d-flex flex-row-reverse justify-content-between my-3">
                <div>
                    {{ $orders->links() }}
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
            <table class="table table-striped text-center">
                <thead class="thead-dark">
                    <tr>
                        <th>Id</th>
                        <th>Client</th>
                        <th>Amount</th>
                        <th>Status</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                        <tr>
                            <td>{{ $order->id }}</td>
                            <td>{{ $order->user->name }} {{ $order->user->last_name }}</td>
                            <td>$ {{ number_format($order->amount,2) }} MXN</td>
                            <td>
                                @switch($order->status)
                                    @case('charge_pending')
                                    <strong class="text-dark">
                                        Pendiente/Tarjeta
                                    </strong>
                                    @break
                                    @case('charge.created')
                                    <strong class="text-dark">
                                        Pendiente/Efectivo
                                    </strong>
                                    @break
                                    @case('charge.succeeded')
                                    <strong class="text-success">
                                        Completada
                                    </strong>
                                    @break
                                    @case('charge.refunded')
                                    <strong class="text-danger">
                                        Cancelada/Reembolsada
                                    </strong>
                                    @break
                                    @case('charge.failed')
                                    <strong class="text-danger">
                                        Cancelada/Rechazada
                                    </strong>
                                    @break
                                    @case('charge.cancelled')
                                    <strong class="text-danger">
                                        Referencia Expirada
                                    </strong>
                                    @break
                                    @case('charge.expired')
                                    <strong class="text-danger">
                                        No autenticado
                                    </strong>
                                    @break

                                    @default
                                @endswitch
                            </td>
                            <td>
                                <a href="{{ route('admin.orders.show', $order) }}" class="btn btn-dark btn-sm">Ver
                                    detalles</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="d-flex flex-row-reverse">
            {{ $orders->links() }}
        </div>
    </div>
</div>
