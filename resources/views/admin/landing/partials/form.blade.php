<div class="row mb-3">
    <div class="col-6">
        <div class="image-wrapper">
            @isset($configuration->image)
                <img id="picture3" class="img-fluid" src="{{ Storage::url($configuration->image->url) }}">
            @else
                <img id="picture3" class="img-fluid" src="http://ximg.es/430x330/000/fff">
            @endif
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                {!! Form::label('file', 'Multimedia') !!}
                {!! Form::file('file[]', ['class' => 'form-control-file', 'accept' => 'image/*,video/*', 'multiple' => true]) !!}
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita praesentium iusto quas ipsa
                repellat laboriosam veniam ullam sed repellendus eos.</p>
        </div>
    </div>
</div>
