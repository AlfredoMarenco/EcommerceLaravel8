<div>
    @if ($visible)
        <div class="rating-wrap my-3">
            <ul class="rating-stars">
                <li style="width:{{ $rating }}%" class="stars-active">
                    <i wire:click="getPercent(1)" class="fa fa-star"></i>
                    <i wire:click="getPercent(2)" class="fa fa-star"></i>
                    <i wire:click="getPercent(3)" class="fa fa-star"></i>
                    <i wire:click="getPercent(4)" class="fa fa-star"></i>
                    <i wire:click="getPercent(5)" class="fa fa-star"></i>
                </li>
                <li>
                    <i wire:click="getPercent(1)" class="fa fa-star"></i>
                    <i wire:click="getPercent(2)" class="fa fa-star"></i>
                    <i wire:click="getPercent(3)" class="fa fa-star"></i>
                    <i wire:click="getPercent(4)" class="fa fa-star"></i>
                    <i wire:click="getPercent(5)" class="fa fa-star"></i>
                </li>
            </ul>
        </div>
        <textarea wire:model="comment" cols="30" rows="5" class="form-control"></textarea>
        <div class="float-right">
            <button wire:click="setReview({{ $product->id }},{{ $order_id }})"
                class="btn btn-primary mt-2">Enviar</button>
        </div>
    @else
        <div class="text-center">
            <h6>Tu valoracion a sido enviada</h6>
        </div>
    @endif
</div>
