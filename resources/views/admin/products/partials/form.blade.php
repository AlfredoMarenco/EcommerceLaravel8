<div class="form-row">
    <div class="form-group col-md-4">
        {!! Form::label('name', 'Nombre') !!}
        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre del producto']) !!}
        @error('name')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('stock', 'Existencia') !!}
        {!! Form::number('stock', null, ['class' => 'form-control', 'placeholder' => 'Existencia']) !!}
        @error('stock')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('SKU', 'SKU') !!}
        {!! Form::text('SKU', null, ['class' => 'form-control', 'placeholder' => 'SKU del producto']) !!}
        @error('SKU')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('price', 'Precio') !!}
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">$</span>
            </div>
            {!! Form::number('price', null, ['class' => 'form-control', 'placeholder' => 'Precio del producto', 'min' => '0', 'step' => '0.01']) !!}
        </div>
        @error('price')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('discount', 'Descuento') !!}
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">$</span>
            </div>
            {!! Form::number('discount', null, ['class' => 'form-control', 'placeholder' => 'Precio del producto con descuento', 'min' => '0', 'step' => '0.01']) !!}
        </div>
        @error('price')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('category_id', 'Categoria') !!}
        {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}
        @error('category_id')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('type', 'Tipo de producto') !!}
        {!! Form::select('type', [0 => 'Tienda', 1 => 'Catalogo'], null, ['class' => 'form-control']) !!}
        @error('type')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>
<div class="row mb-3">
    <div class="col">
        <div class="image-wrapper">
            @isset($product->image)
                <img id="picture" class="img-fluid" src="{{ Storage::url($product->image->url) }}">
            @else
                <img id="picture" class="img-fluid"
                    src="https://cdn.pixabay.com/photo/2014/05/02/21/47/laptop-336369_960_720.jpg">
                @endif
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                {!! Form::label('file', 'Imagen del producto') !!}
                {!! Form::file('file[]', ['class' => 'form-control-file', 'accept' => 'image/*', 'multiple' => true]) !!}
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita praesentium iusto quas ipsa
                repellat laboriosam veniam ullam sed repellendus eos.</p>
        </div>
    </div>
    @error('file')
        <small class="text-danger">{{ $message }}</small>
    @enderror

    @isset($product->images)
        <h4 class="mt-5">Imagenes del producto</h4>
        <div class="row mt-2">
            @foreach ($product->images as $image)
                <div class="col-md-3">
                    <img src="{{ Storage::url($image->url) }}" class="img-fluid w-100" alt="">
                    <a href="{{ route('admin.product.image.delete', $image->id) }}"
                        class="btn btn-sm btn-danger my-2 float-right">Eliminar</a>
                </div>
            @endforeach
        @endisset
    </div>
    <div class="form-row mb-3 mx-2">
        <div class="form group col-md-12">
            {!! Form::label('description', 'Descripcion') !!}
            {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
            @error('description')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>
    </div>
