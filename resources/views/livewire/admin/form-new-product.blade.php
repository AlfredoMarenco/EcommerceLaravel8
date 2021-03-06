<div>
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <form wire:submit.prevent="create" class="p-4">
        <div class="form-row">
            Photo Preview:
            <div wire:loading wire:target="photo">Uploading...</div>
            @if ($photo)
                <img width="150px" src="{{ $photo->temporaryUrl() }}">
            @endif
            <div class="col-md-12 mb-3">
                <label for="name">Foto</label>
                <input class="form-control" type="file" wire:model="photo">

                @error('photo') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label for="name">Nombre</label>
                <input wire:model="name" type="text" class="form-control" placeholder="Nombre del producto">
                @error('name') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label for="stock">Existencia</label>
                <input wire:model="stock" type="number" min="0" class="form-control"
                    placeholder="Existencia del producto">
                @error('stock') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label for="SKU">SKU</label>
                <input wire:model="SKU" type="text" class="form-control" placeholder="Identificador del producto">
                @error('SKU') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label for="price">Precio</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">$</span>
                    </div>
                    <input wire:model="price" type="number" min="0" class="form-control" placeholder="Precio"
                        aria-describedby="price">
                </div>
                @error('price') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label for="category">Categoria</label>
                <select wire:model="category" class="custom-select">
                    <option selected disabled>Selecciona una categoria</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-12 mb-3">
                <label for="description">Descripcion del producto</label>
                <textarea wire:model="description" class="form-control" rows="8"></textarea>
                @error('photo') <span class="error">{{ $message }}</span> @enderror
            </div>
        </div>
        <button class="btn btn-success btn-block">Crear nuevo producto</button>
    </form>
</div>
