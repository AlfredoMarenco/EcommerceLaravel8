<div class="row mb-3">
    <div class="col-6">
        <div class="image-wrapper">
            @switch($configuration->resources)
                @case('images')
                @isset($configuration->images)
                    @foreach ($configuration->images as $images)
                        <img id="picture3" class="img-fluid" src="{{ Storage::url($images->url) }}">
                        <a href="{{ route('admin.configurations.delete', $images->id) }}"
                            class="btn btn-danger my-2 float-right">Eliminar</a>
                    @endforeach
                @else
                    <img id="picture3" class="img-fluid" src="http://ximg.es/430x330/000/fff">
                @endisset
                @break
                @case('image')
                @isset($configuration->image)
                    <img id="picture3" class="img-fluid" src="{{ Storage::url($configuration->image->url) }}">
                @else
                    <img id="picture3" class="img-fluid" src="http://ximg.es/430x330/000/fff">
                @endisset

                @break
                @case('video')
                @isset($configuration->image)
                    <video autoplay="autoplay" loop="loop" id="vidio_background" preload="auto" muted width="450px">
                        <source src="{{ Storage::url($configuration->image->url) }}" type="video/mp4" />
                    </video>
                @else
                    <video autoplay="autoplay" loop="loop" id="vidio_background" preload="auto" muted width="450px">
                        <source src="{{ asset('template/images/rene/01videobase-06.mp4') }}" type="video/mp4" />
                    </video>
                @endisset
                @break
            @endswitch
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
