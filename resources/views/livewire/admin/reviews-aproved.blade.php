<div>
    <div class="d-flex">
        @switch($status)
            @case(0)
                <a wire:click='mostrar({{ $review_id }})' class="btn btn-success btn-sm mx-1">Mostrar</a>
            @break
            @case(1)
                <a wire:click='ocultar({{ $review_id }})' class="btn btn-danger btn-sm mx-1">Ocultar</a>
            @break
        @endswitch
    </div>
</div>
