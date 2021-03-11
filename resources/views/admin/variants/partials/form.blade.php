<div class="form-group">
    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Talla']) !!}
    @error('name')
    <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="form_group">
    {!! Form::label('slug', 'Identificador') !!}
    {!! Form::text('slug', null, ['class' => 'form-control mb-3', 'placeholder' => 'XS,S,M,L,XL']) !!}
</div>
