<div class="input-group mb-3 input-spinner">
    <div class="input-group-prepend">
        <button wire:click="increment" class="btn btn-light" type="button" id="button-plus"> + </button>
    </div>
    <input type="text" readonly="true" class="form-control" name="qty" value="{{ $count }}">
    <div class="input-group-append">
        <button wire:click="decrement" class="btn btn-light" type="button" id="button-minus"> &minus; </button>
    </div>
</div>
