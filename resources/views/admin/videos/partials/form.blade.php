<div class="form-group">
    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre del video']) !!}
    @error('name')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('url', 'Codigo de incrustacion') !!}
    {!! Form::textarea('url', null, ['class' => 'form-control', 'placeholder' => 'Inserta aqui el codigo de incrustación']) !!}
    @error('url')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
