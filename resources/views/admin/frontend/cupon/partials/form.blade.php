<div class="form-row">
    <div class="form-group col-md-12">
        {!! Form::label('text', 'Texto') !!}
        {!! Form::text('text', null, ['class' => 'form-control', 'placeholder' => 'Texto del slider']) !!}
        @error('text')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="form-group col-md-12">
        {!! Form::label('button', 'Texto Boton') !!}
        {!! Form::text('button', null, ['class' => 'form-control', 'placeholder' => 'Texto del slider']) !!}
        @error('button')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="form-group col-md-12">
        {!! Form::label('link', 'Link de redireccionamiento') !!}
        {!! Form::text('link', null, ['class' => 'form-control', 'placeholder' => 'Texto del slider']) !!}
        @error('text')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>
<div class="row mb-3">
    <div class="col">
        <div class="image-wrapper">
            @isset($cuponf->image)
                <img id="picture" class="img-fluid" src="{{ Storage::url($cuponf->image->url) }}">
            @else
                <img id="picture" class="img-fluid"
                    src="https://cdn.pixabay.com/photo/2014/05/02/21/47/laptop-336369_960_720.jpg">
                @endif
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                {!! Form::label('file', 'Imagen del slider') !!}
                {!! Form::file('file', ['class' => 'form-control-file', 'accept' => 'image/*']) !!}
            </div>
            <p>Esta imagen sera mostrada en el index del portal como una imagen del slider</p>
        </div>
    </div>
    @error('file')
        <small class="text-danger">{{ $message }}</small>
    @enderror
