<div class="form-group">
    {!! Form::label('code', 'Codigo') !!}
    {!! Form::text('code', null, ['class' => 'form-control', 'placeholder' => 'Codigo de descuento']) !!}
    @error('code')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('type', 'Tipo') !!}
    {!! Form::select('type', ['fixed' => 'Cantidad', 'percent' => 'Porcentaje'] ,null, ['class' => 'form-control']) !!}
    @error('type')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('discount', 'Descuento') !!}
    {!! Form::number('discount', null, ['class' => 'form-control', 'placeholder' => 'Descuento']) !!}
    @error('discount')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('status', '¿Activo?') !!}
    {!! Form::select('status', [ 0 => 'No', 1 => 'Sí'] ,null, ['class' => 'form-control']) !!}
    @error('status')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
