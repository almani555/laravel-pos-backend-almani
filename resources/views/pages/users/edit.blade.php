@extends('layouts.materialapp')

@section('title', 'Edit User')

@push('style')
    <!-- CSS Libraries -->

    <link rel="stylesheet" href="{{ asset('plugins/node-waves/waves.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/dropzone/dropzone.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap-select/css/bootstrap-select.css') }}">
@endpush

@section('main')
    <section class="content">
        <div class="container-fluid">
            <section class="section">
                <div class="section-header">
                    <ol class="breadcrumb breadcrumb-bg-teal">
                        <li><a href="{{ route('home.index') }}"><i class="material-icons">dashboard</i> Dashboard</a></li>
                        <li><a href="javascript:void(0);"><i class="material-icons">subtitles</i> Forms</a></li>
                        <li class="active"> Users</li>
                    </ol>
                </div>
                <div class="section-body">
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="card">

                                <form action="{{ route('user.update', $user) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="header">
                                        <h2>Edit Users</h2>
                                    </div>
                                    <div class="card">
                                        <div class="body row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">account_circle</i>
                                                    </span>
                                                    <div class="form-line">
                                                        <input type="text"
                                                            class="form-control @error('name') is-invalid @enderror"
                                                            name="name" placeholder="Name" value="{{ $user->name }}">
                                                        @error('name')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">email</i>
                                                    </span>
                                                    <div class="form-line">
                                                        <input type="email"
                                                            class="form-control @error('email') is-invalid @enderror"
                                                            name="email" placeholder="Email" value="{{ $user->email }}">
                                                        @error('email')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">lock</i>
                                                    </span>
                                                    <div class="form-line">
                                                        <input type="password"
                                                            class="form-control @error('password') is-invalid @enderror"
                                                            name="password" placeholder="Password">
                                                        @error('password')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">phone</i>
                                                    </span>
                                                    <div class="form-line">
                                                        <input type="number"
                                                            class="form-control @error('phone')
                                                        is-invalid
                                                    @enderror"
                                                            name="phone" placeholder="Phone" value="{{ $user->phone }}">
                                                        @error('phone')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="input-group">
                                                    <label class="selectgroup-item">
                                                        <input id="radio1" type="radio" name="roles" value="admin"
                                                        @if ($user->roles == 'admin') checked @endif>
                                                        <label for="radio1">Admin</label>
                                                    </label>
                                                    <label class="selectgroup-item">
                                                        <input id="radio2" type="radio" name="roles" value="staf" @if ($user->roles == 'staf') checked @endif>>
                                                        <label for="radio2">Staf</label>
                                                    </label>
                                                    <label class="selectgroup-item">
                                                        <input id="radio3" type="radio" name="roles" value="user" @if ($user->roles == 'user') checked @endif>>
                                                        <label for="radio3">User</label>
                                                    </label>
                                                </div>
                                            </div>
                                            {{-- <div class="col-md-6"></div> --}}
                                            <div class="col-md-12"><button class="btn btn-primary">Submit</button></div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
@endsection

@push('scripts')
    <!-- Select Plugin Js -->
    <script src="{{ asset('plugins/bootstrap-select/js/bootstrap-select.js') }}"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="{{ asset('plugins/jquery-slimscroll/jquery.slimscroll.js') }}"></script>
    <!-- Dropzone Plugin Js -->
    <script src="{{ asset('plugins/dropzone/dropzone.js') }}"></script>

    <!-- Input Mask Plugin Js -->
    <script src="{{ asset('plugins/jquery-inputmask/jquery.inputmask.bundle.js') }}"></script>
@endpush
