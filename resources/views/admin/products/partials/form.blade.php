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
        {!! Form::label('brand_id', 'Marca') !!}
        {!! Form::select('brand_id', $brands, null, ['class' => 'form-control']) !!}
        @error('brand_id')
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
            <p>Selecciona una imagen</p>
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
            {!! Form::label('extract', 'Extracto') !!}
            {!! Form::textarea('extract', null, ['class' => 'form-control']) !!}
            @error('extract')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
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
    <div class="form-row p-3">
        <div class="form-group col-md-8">
            {!! Form::label('folio', 'Folio') !!}
            {!! Form::text('folio', null, ['class' => 'form-control', 'placeholder' => 'Folio']) !!}
            @error('folio')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group col-md-4">
            {!! Form::label('folio_visible', 'Visible') !!}
            {!! Form::select('folio_visible', [1 => 'Si', 0 => 'No'], null, ['class' => 'form-control']) !!}
            @error('folio_visible')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group col-md-8">
            {!! Form::label('categoria', 'Categoria') !!}
            {!! Form::text('categoria', null, ['class' => 'form-control', 'placeholder' => 'categoria']) !!}
            @error('categoria')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group col-md-4">
            {!! Form::label('categoria_visible', 'Visible') !!}
            {!! Form::select('categoria_visible', [1 => 'Si', 0 => 'No'], null, ['class' => 'form-control']) !!}
            @error('categoria_visible')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group col-md-8">
            {!! Form::label('ficha', 'Ficha') !!}
            {!! Form::text('ficha', null, ['class' => 'form-control', 'placeholder' => 'ficha']) !!}
            @error('ficha')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group col-md-4">
            {!! Form::label('ficha_visible', 'Visible') !!}
            {!! Form::select('ficha_visible', [1 => 'Si', 0 => 'No'], null, ['class' => 'form-control']) !!}
            @error('ficha')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group col-md-8">
            {!! Form::label('garantia', 'Garantia') !!}
            {!! Form::text('garantia', null, ['class' => 'form-control', 'placeholder' => 'Garantia']) !!}
            @error('garantia')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group col-md-4">
            {!! Form::label('garantia_visible', 'Visible') !!}
            {!! Form::select('garantia_visible', [1 => 'Si', 0 => 'No'], null, ['class' => 'form-control']) !!}
            @error('garantia_visible')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group col-md-8">
            {!! Form::label('usos', 'Usos') !!}
            {!! Form::text('usos', null, ['class' => 'form-control', 'placeholder' => 'Usos']) !!}
            @error('usos')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group col-md-4">
            {!! Form::label('usos_visible', 'Visible') !!}
            {!! Form::select('usos_visible', [1 => 'Si', 0 => 'No'], null, ['class' => 'form-control']) !!}
            @error('usos_visible')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group col-md-8">
            {!! Form::label('contenido', 'Contenido') !!}
            {!! Form::text('contenido', null, ['class' => 'form-control', 'placeholder' => 'Contenido']) !!}
            @error('contenido')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group col-md-4">
            {!! Form::label('contenido_visible', 'Visible') !!}
            {!! Form::select('contenido_visible', [1 => 'Si', 0 => 'No'], null, ['class' => 'form-control']) !!}
            @error('contenido_visible')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group col-md-8">
            {!! Form::label('montaje', 'Montaje o Instalacion') !!}
            {!! Form::text('montaje', null, ['class' => 'form-control', 'placeholder' => 'Montaje']) !!}
            @error('montaje')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group col-md-4">
            {!! Form::label('montaje_visible', 'Visible') !!}
            {!! Form::select('montaje_visible', [1 => 'Si', 0 => 'No'], null, ['class' => 'form-control']) !!}
            @error('montaje_visible')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group col-md-8">
            {!! Form::label('capacidad', 'Capacidad') !!}
            {!! Form::text('capacidad', null, ['class' => 'form-control', 'placeholder' => 'Capacidad']) !!}
            @error('capacidad')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group col-md-4">
            {!! Form::label('capacidad_visible', 'Visible') !!}
            {!! Form::select('capacidad_visible', [1 => 'Si', 0 => 'No'], null, ['class' => 'form-control']) !!}
            @error('capacidad_visible')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group col-md-8">
            {!! Form::label('marca', 'Marca') !!}
            {!! Form::text('marca', null, ['class' => 'form-control', 'placeholder' => 'Marca']) !!}
            @error('marca')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group col-md-4">
            {!! Form::label('marca_visible', 'Visible') !!}
            {!! Form::select('marca_visible', [1 => 'Si', 0 => 'No'], null, ['class' => 'form-control']) !!}
            @error('marca_visible')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group col-md-8">
            {!! Form::label('material', 'Material') !!}
            {!! Form::text('material', null, ['class' => 'form-control', 'placeholder' => 'Material']) !!}
            @error('material')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group col-md-4">
            {!! Form::label('material_visible', 'Visible') !!}
            {!! Form::select('material_visible', [1 => 'Si', 0 => 'No'], null, ['class' => 'form-control']) !!}
            @error('material_visible')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group col-md-8">
            {!! Form::label('medidas', 'Medidas Herraje') !!}
            {!! Form::text('medidas', null, ['class' => 'form-control', 'placeholder' => 'Medidas Herraje']) !!}
            @error('medidas')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group col-md-4">
            {!! Form::label('medidas_visible', 'Visible') !!}
            {!! Form::select('medidas_visible', [1 => 'Si', 0 => 'No'], null, ['class' => 'form-control']) !!}
            @error('medidas_visible')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group col-md-8">
            {!! Form::label('medidasmodulo', 'Medidas Modulo') !!}
            {!! Form::text('medidasmodulo', null, ['class' => 'form-control', 'placeholder' => 'Medidas Modulo']) !!}
            @error('medidasmodulo')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group col-md-4">
            {!! Form::label('medidasmodulo_visible', 'Visible') !!}
            {!! Form::select('medidasmodulo_visible', [1 => 'Si', 0 => 'No'], null, ['class' => 'form-control']) !!}
            @error('medidasmodulo_visible')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group col-md-8">
            {!! Form::label('acabado', 'Acabado') !!}
            {!! Form::text('acabado', null, ['class' => 'form-control', 'placeholder' => 'Acabado']) !!}
            @error('acabado')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group col-md-4">
            {!! Form::label('acabado_visible', 'Visible') !!}
            {!! Form::select('acabado_visible', [1 => 'Si', 0 => 'No'], null, ['class' => 'form-control']) !!}
            @error('acabado_visible')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>
    </div>
