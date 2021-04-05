<div class="form-row">
    {!! Form::hidden('user_id', auth()->user()->id) !!}
    <div class="row mb-3">
        <div class="form-group col-12 mb-5">
            {!! Form::label('name', 'Nombre') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>

        <div class="col-6">
            <div class="image-wrapper">
                @isset($collection->image1)
                    <img id="picture1" class="img-fluid" src="{{ Storage::url($collection->image1) }}">
                @else
                    <img id="picture1" class="img-fluid" src="http://ximg.es/315x430/000/fff">
                    @endif
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    {!! Form::label('image1', 'Imagen vertical') !!}
                    {!! Form::file('image1', ['class' => 'form-control-file', 'accept' => 'image/*']) !!}
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita praesentium iusto quas ipsa
                    repellat laboriosam veniam ullam sed repellendus eos.</p>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-6">
                <div class="image-wrapper">
                    @isset($collection->image2)
                        <img id="picture2" class="img-fluid" src="{{ Storage::url($collection->image2) }}">
                    @else
                        <img id="picture2" class="img-fluid" src="http://ximg.es/430x330/000/fff">
                        @endif
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        {!! Form::label('image2', 'Imagen 1 derecha') !!}
                        {!! Form::file('image2', ['class' => 'form-control-file', 'accept' => 'image/*']) !!}
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita praesentium iusto quas ipsa
                        repellat laboriosam veniam ullam sed repellendus eos.</p>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-6">
                    <div class="image-wrapper">
                        @isset($collection->image3)
                            <img id="picture3" class="img-fluid" src="{{ Storage::url($collection->image3) }}">
                        @else
                            <img id="picture3" class="img-fluid" src="http://ximg.es/430x330/000/fff">
                            @endif
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            {!! Form::label('image3', 'Imagen 2 derecha') !!}
                            {!! Form::file('image3', ['class' => 'form-control-file', 'accept' => 'image/*']) !!}
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita praesentium iusto quas ipsa
                            repellat laboriosam veniam ullam sed repellendus eos.</p>
                    </div>
                </div>
            </div>
