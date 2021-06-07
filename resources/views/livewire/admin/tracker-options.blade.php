<div>
    @if ($formVisible == 'visible')
        @switch($order->tracker_status)
            @case('standby')
                <div class="form-group">
                    <label for="tracker_guide">Guia de rastreo</label>
                    <input type="text" wire:model="tracker_guide" class="form-control">

                    <label for="tracker_guide">Compañia</label>
                    <select wire:model="tracker_company" class="form-control">
                        <option value="NA">-Selecciona un opcion-</option>
                        <option value="bajce">Bajce</option>
                        <option value="dhl">DHL</option>
                        <option value="estafeta">Estafeta</option>
                        <option value="up">UP</option>
                    </select>
                    <div class="mx-2 float-right mt-3">
                        <a class="btn btn-danger btn-sm mx-1 " wire:click="cancel">Cancelar</a>
                        <a class="btn btn-success btn-sm mx-1" wire:click="capture({{ $order->id }})">Capturar</a>
                    </div>
                </div>
            @break
            @case('sending')
                <div class="form-group">
                    <label for="tracker_guide">Guia de rastreo</label>
                    <input type="text" wire:model="tracker_guide" class="form-control">

                    <label for="tracker_guide">Compañia</label>
                    <select wire:model="tracker_company" class="form-control">
                        <option value="NA">-Selecciona un opcion-</option>
                        <option value="bajce">Bajce</option>
                        <option value="dhl">DHL</option>
                        <option value="estafeta">Estafeta</option>
                        <option value="up">UP</option>
                    </select>
                    <div class="mx-2 float-right mt-3">
                        <a class="btn btn-danger btn-sm mx-1 " wire:click="cancel">Cancelar</a>
                        <a class="btn btn-success btn-sm mx-1" wire:click="update({{ $order->id }})">Actualizar</a>
                    </div>
                </div>
            @break
        @endswitch
    @else
        @switch($order->tracker_status)
            @case('standby')
                <h4 class="float-center text-danger">
                    <i class="fas fa-truck-moving"></i>
                    No enviada
                </h4>
                <a href="#" class="btn btn-info btn-sm" wire:click="formCapture">Agregar informacion de envio</a>
            @break
            @case('sending')
                <h4 class="float-center text-warning">
                    <i class="fas fa-truck-moving"></i>
                    Enviada
                </h4>
                <a href="#" class="btn btn-info btn-sm" wire:click="formUpdate({{ $order->id }})">Actualizar informacion
                    de
                    envio</a>
                <br>
                <a href="#" class="btn btn-success btn-sm mt-2" wire:click="send({{ $order->id }})">Marcar como
                    entregada</a>
            @break
            @case('complete')
                <h4 class="float-center text-success">
                    <i class="fas fa-truck-moving"></i>
                    Entragada
                </h4>
            @break
        @endswitch

    @endif

</div>
