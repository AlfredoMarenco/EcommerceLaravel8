<div class="form-group">
    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre del color']) !!}
    @error('name')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="form_group">
    {!! Form::label('code', 'Codigo') !!}
    {!! Form::input('color', 'code', null, ['class' => 'form-control mb-3']) !!}
</div>
