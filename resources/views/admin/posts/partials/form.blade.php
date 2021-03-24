<div class="form-row">
    {!! Form::hidden('user_id', auth()->user()->id) !!}
    <div class="row mb-3">
        <div class="col-6">
            <div class="image-wrapper">
                @isset($post->image)
                    <img id="picture" class="img-fluid" src="{{ Storage::url($post->image->url) }}">
                @else
                    <img id="picture" class="img-fluid" src="http://ximg.es/1140x445/000/fff">
                    @endif
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    {!! Form::label('file', 'Imagen del Post') !!}
                    {!! Form::file('file', ['class' => 'form-control-file', 'accept' => 'image/*']) !!}
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita praesentium iusto quas ipsa
                    repellat laboriosam veniam ullam sed repellendus eos.</p>
            </div>

        </div>
        <div class="col-md-12 form-group">
            {!! Form::label('title', 'Titulo') !!}
            {!! Form::text('title', null, ['class' => 'form-control']) !!}
        </div>
        <div class="col-md-12 form-group">
            {!! Form::label('slug', 'Slug') !!}
            {!! Form::text('slug', null, ['class' => 'form-control', 'readonly']) !!}
        </div>
        <div class="col-md-12 form-group">
            <p class="font-weight-bold">
                @foreach ($tags as $tag)
                    <label>
                        {!! Form::checkbox('tags[]', $tag->id, null) !!}
                        {{ $tag->name }}
                    </label>
                @endforeach
            </p>
        </div>

        <div class="col-md-12 form-group">
            <p class="font-weight-bold">
                <label>
                    {!! Form::radio('status', 1, true) !!}
                    Borrador
                </label>
                <label>
                    {!! Form::radio('status', 2) !!}
                    Revision
                </label>
                <label>
                    {!! Form::radio('status', 3) !!}
                    Publicado
                </label>
            </p>
        </div>

        <div class="form-group">

        </div>

        <div class="col-md-12 form-group">
            {!! Form::label('extract', 'Extracto') !!}
            {!! Form::textarea('extract', null, ['class' => 'form-control']) !!}
        </div>

        <div class="col-md-12 form-group">
            {!! Form::label('body', 'Cuerpo del Post') !!}
            {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
        </div>
    </div>
