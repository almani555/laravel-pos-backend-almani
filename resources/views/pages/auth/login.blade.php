@extends('layouts.auth')

@section('title', 'Login')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/bootstrap-social/bootstrap-social.css') }}">
@endpush

@section('main')
    <div class="card">
        <div class="body">
            <form id="sign_in" method="POST" action="{{ route('login') }}" class="needs-validation" novalidate="">
                @csrf
                <div class="msg">Sign in to start your session</div>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="material-icons">email</i>
                    </span>
                    <div class="form-line">
                        <input id="email" type="email" class="form-control @error('email')
                        is-invalid
                    @enderror"
                        name="email" placeholder="Email" tabindex="1" autofocus>
                    </div>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="material-icons">lock</i>
                    </span>
                    <div class="form-line">
                        <input id="password" type="password" class="form-control @error('password') is-invalid

                        @enderror"
                            name="password" placeholder="Password" tabindex="2">
                    </div>
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <button class="btn btn-block bg-pink waves-effect" type="submit" tabindex="3">SIGN IN</button>
                    </div>
                </div>
                <div class="row m-t-15 m-b--20">
                    <div class="col-xs-12 text-muted mt-5 text-center">
                        Don't have an account? <a href="{{ route('register') }}">Register Now!</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->

    <!-- Page Specific JS File -->
@endpush
