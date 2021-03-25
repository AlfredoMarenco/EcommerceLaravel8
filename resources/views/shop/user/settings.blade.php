@extends('layouts.template')

@section('content')
    <!-- ========================= SECTION CONTENT ========================= -->
    <section class="section-content padding-y pt-5">
        <div class="container">
            <div class="row mt-5">
                @include('shop.user.nav-profile')
                <main class="col-md-9">

                    <div class="card">
                        <div class="card-body">
                            <form class="row">
                                <div class="col-md-9">
                                    <div class="form-row">
                                        <div class="col form-group">
                                            <label>Name</label>
                                            <input type="text" class="form-control" value="{{ $user->name }}">
                                        </div> <!-- form-group end.// -->
                                        <div class="form-group col-md-6">
                                            <label>Last name</label>
                                            <input type="text" class="form-control" value="{{ $user->last_name }}">
                                        </div> <!-- form-group end.// -->
                                    </div> <!-- form-row.// -->
                                    <div class="form-row">
                                        <div class="col form-group">
                                            <label>Email</label>
                                            <input type="email" class="form-control" value="{{ $user->email }}">
                                        </div> <!-- form-group end.// -->
                                        <div class="form-group col-md-6">
                                            <label>Phone</label>
                                            <input type="text" class="form-control" value="{{ $user->phone }}">
                                        </div> <!-- form-group end.// -->
                                    </div> <!-- form-row.// -->
                                    <button class="btn btn-light btn-block">Actualizar datos</button>
                                </div> <!-- col.// -->
                            </form>

                            <form method="POST" action="{{ route('user.update.password') }}">
                                @csrf
                                <div class="col-md-9 mt-5">
                                    <div class="form-row">
                                        <div class="col form-group col-12">
                                            <label>Current Password</label>
                                            <input type="password" name="current_password" class="form-control">
                                        </div> <!-- form-group end.// -->
                                        <div class="form-group col-md-6">
                                            <label>New Password</label>
                                            <input type="password" name="password" class="form-control">
                                        </div> <!-- form-group end.// -->
                                        <div class="form-group col-md-6">
                                            <label>Confirm Password</label>
                                            <input type="password" name="password_confirmation" class="form-control">
                                        </div> <!-- form-group end.// -->
                                    </div> <!-- form-row.// -->
                                    <button class="btn btn-dark btn-block">Change password</button>
                                </div>
                            </form>
                        </div> <!-- card-body.// -->
                    </div> <!-- card .// -->
                </main> <!-- col.// -->
            </div>
            <br>
            <br>
            <br>
            <br>
        </div> <!-- container .//  -->
    </section>
    <!-- ========================= SECTION CONTENT END// ========================= -->

@endsection
