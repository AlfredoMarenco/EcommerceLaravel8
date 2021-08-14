<div class="form-row">
    <div class="form-group col-md-12">
        {!! Form::label('text', 'Texto') !!}
        {!! Form::text('text', null, ['class' => 'form-control', 'placeholder' => 'Texto del slider']) !!}
        @error('name')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="form-group col-md-12">
        {!! Form::label('button', 'Texto del boton') !!}
        {!! Form::text('button', null, ['class' => 'form-control', 'placeholder' => 'Texto del boton']) !!}
        @error('name')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="form-group col-md-12">
        {!! Form::label('link', 'Link') !!}
        {!! Form::text('link', null, ['class' => 'form-control', 'placeholder' => 'Link del boton']) !!}
        @error('name')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>
<div class="row mb-3">
    <div class="col">
        <div class="image-wrapper">
            @isset($slider->image)
                <img id="picture" class="img-fluid" src="{{ Storage::url($slider->image->url) }}">
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