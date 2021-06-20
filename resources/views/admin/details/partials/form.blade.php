<div class="form-group">
    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre del nuevo detalle']) !!}
    @error('name')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
