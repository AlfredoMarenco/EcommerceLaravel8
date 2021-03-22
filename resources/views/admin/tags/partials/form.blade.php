<div class="form-group">
    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre de la nueva etiqueta']) !!}
    @error('name')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
