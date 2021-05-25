<div class="form-row">
    <div class="form-group col-md-12">
        {!! Form::label('text', 'Texto del boton') !!}
        {!! Form::text('text', null, ['class' => 'form-control', 'placeholder' => 'Nombre del catalogo']) !!}
        @error('text')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="form-group col-md-12">
        {!! Form::label('category_id', 'Categoria') !!}
        {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}
        @error('category_id')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>
{{-- <div class="row mb-3">
    <div class="col">
        <div class="image-wrapper">
            @isset($catalogue->image)
                <img id="picture" class="img-fluid" src="{{ Storage::url($catalogue->image->url) }}">
            @else
                <img id="picture" class="img-fluid"
                    src="https://cdn.pixabay.com/photo/2014/05/02/21/47/laptop-336369_960_720.jpg">
                @endif
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                {!! Form::label('file', 'Imagen del producto') !!}
                {!! Form::file('file', ['class' => 'form-control-file', 'accept' => 'image/*']) !!}
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita praesentium iusto quas ipsa
                repellat laboriosam veniam ullam sed repellendus eos.</p>
        </div>
    </div>
    @error('file')
        <small class="text-danger">{{ $message }}</small>
    @enderror --}}
