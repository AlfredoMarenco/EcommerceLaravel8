<div class="form-group">
    {!! Form::label('code', 'Codigo') !!}
    {!! Form::text('code', null, ['class' => 'form-control', 'placeholder' => 'Codigo de descuento']) !!}
    @error('code')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('type', 'Tipo') !!}
    {!! Form::select('type', ['fixed' => 'Cantidad', 'percent' => 'Porcentaje'], null, ['class' => 'form-control']) !!}
    @error('type')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
@switch($coupon->type)
    @case('fixed')
        <div class="form-group">
            {!! Form::label('value', 'Descuento') !!}
            {!! Form::number('value', null, ['class' => 'form-control', 'placeholder' => 'Descuento']) !!}
            @error('discount')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    @break
    @case('percent')
        <div class="form-group">
            {!! Form::label('percent_off', 'Descuento') !!}
            {!! Form::number('percent_off', null, ['class' => 'form-control', 'placeholder' => 'Descuento']) !!}
            @error('discount')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    @break
    @default
@endswitch
<div class="form-group">
    {!! Form::label('min_amount', 'Minimo de compra') !!}
    {!! Form::number('min_amount', null, ['class' => 'form-control', 'placeholder' => 'Minimo para aplicar descuento']) !!}
    <small class="ml-2">El carrito del cliente debe ser mayor o igual a este valor.</small>
    @error('min_amount')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('status', '¿Activo?') !!}
    {!! Form::select('status', [0 => 'No', 1 => 'Sí'], null, ['class' => 'form-control']) !!}
    @error('status')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
