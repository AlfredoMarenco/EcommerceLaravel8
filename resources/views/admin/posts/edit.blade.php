@extends('adminlte::page')

@section('title', 'posts')

@section('content_header')
    <h1>Editar post</h1>
@stop

@section('content')
    <div class="card">
        <div class="car-body p-3">
            {!! Form::model($post, ['route' => ['admin.posts.update', $post], 'files' => true, 'method' => 'PUT']) !!}
            @include('admin.posts.partials.form')
            {!! Form::submit('Actualizar post', ['class' => 'btn btn-success btn-block mt-4']) !!}
            {!! Form::close() !!}
        </div>
    </div>
    @if ($comments)
        <h1 class="ml-2">Comentarios del Post</h1>
        @foreach ($comments as $comment)
            <div class="card py-2">
                <div class="card-title px-3">
                    <h4>{{ $comment->user->name }}</h4>
                </div>
                <div class="car-body px-3">
                    {{ $comment->body }}
                </div>
            </div>
        @endforeach
        <div class="float-right">
            {{ $comments->links() }}
        </div>
    @endif
@stop

@section('css')
    @livewireStyles
    <style>
        .image-wrapper {
            position: relative;
            padding-bottom: 56.25%;
        }

        .image-wrapper img {
            position: absolute;
            object-fit: contain;
            width: 100%;
            height: 100%;
        }

    </style>
@stop

@section('js')
    @include('sweetalert::alert')
    @livewireScripts
    <script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js') }}"></script>

    <script>
        CKEDITOR.replace('extract', {
            filebrowserUploadUrl: "{{ route('ckeditor.upload', ['_token' => csrf_token()]) }}",
            filebrowserUploadMethod: 'form',
        });
        CKEDITOR.replace('body', {
            filebrowserUploadUrl: "{{ route('ckeditor.upload', ['_token' => csrf_token()]) }}",
            filebrowserUploadMethod: 'form',
        });

    </script>
    <script>
        $(document).ready(function() {
            $("#title").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });

    </script>
@stop
