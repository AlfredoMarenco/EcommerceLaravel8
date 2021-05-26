<div class="form-row">
    <div class="form-group col-md-12">
        {!! Form::label('name', 'Nombre') !!}
        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre de la marca']) !!}
        @error('name')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>
<div class="row mb-3">
    <div class="col">
        <div class="image-wrapper">
            @isset($brand->image)
                <img id="picture" class="img-fluid" src="{{ Storage::url($brand->image->url) }}">
            @else
                <img id="picture" class="img-fluid"
                    src="https://cdn.pixabay.com/photo/2014/05/02/21/47/laptop-336369_960_720.jpg">
                @endif
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                {!! Form::label('file', 'Logo de la marca') !!}
                {!! Form::file('file', ['class' => 'form-control-file', 'accept' => 'image/*']) !!}
            </div>
            <p>Esta imagen sera mostrada en el index del portal como una imagen del slider</p>
        </div>
    </div>
    @error('file')
        <small class="text-danger">{{ $message }}</small>
    @enderror
