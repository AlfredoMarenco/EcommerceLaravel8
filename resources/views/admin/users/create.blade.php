@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content_header')
    <h1>Crear usuario</h1>
@stop

@section('content')
    <div class="card mx-auto">
        <article class="card-body">
            <form method="POST" action="{{ route('admin.users.store') }}">
                @csrf
                <div class="form-row">
                    <div class="col form-group">
                        <label>Nombre</label>
                        <input name="name" type="text" class="form-control" placeholder="" value="{{ old('name') }}">
                    </div>
                    <div class="col form-group">
                        <label>Apellido</label>
                        <input name="last_name" type="text" class="form-control" placeholder=""
                            value="{{ old('last_name') }}">
                    </div>
                    <!-- form-group end.// -->
                </div>
                <div class="form-group">
                    <label>Telefono</label>
                    <input name="phone" type="phone" class="form-control" placeholder="" value="{{ old('phone') }}">
                </div>
                <!-- form-row end.// -->
                <div class="form-group">
                    <label>Email</label>
                    <input name="email" type="email" class="form-control" placeholder="" value="{{ old('email') }}">
                    <small class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <!-- form-group end.// -->

                <!-- form-row.// -->
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Contraseña</label>
                        <input name="password" class="form-control" type="password">
                    </div> <!-- form-group end.// -->
                    <div class="form-group col-md-6">
                        <label>Repetir contraseña</label>
                        <input name="password_confirmation" class="form-control" type="password">
                    </div>
                    <!-- form-group end.// -->
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block"> Registrar </button>
                </div>
            </form>
        </article>
        <!-- card-body.// -->
    </div>
@stop

@section('css')
    @livewireStyles
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@stop

@section('js')
    @livewireScripts
    @include('sweetalert::alert')
@stop
