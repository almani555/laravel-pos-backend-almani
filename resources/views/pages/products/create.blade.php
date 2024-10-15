@extends('layouts.materialapp')

@section('title', 'Create Product')

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
                        <li class="active"><a href="{{ route('home.index') }}"><i class="material-icons">dashboard</i>
                                Dashboard</a></li>
                        <li><a href="javascript:void(0);"><i class="material-icons">subtitles</i> Forms</a></li>
                        <li>Products</li>
                    </ol>
                </div>
                <div class="section-body">
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="card">
                                <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="header">
                                        <h2>Create Product</h2>
                                    </div>
                                    <div class="card">
                                        <div class="body row">
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">local_mall</i>
                                                    </span>
                                                    <div class="form-line">
                                                        <input type="text"
                                                            class="form-control @error('name') is-invalid @enderror"
                                                            name="name" placeholder="Product Name">
                                                        @error('name')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">description</i>
                                                    </span>
                                                    <div class="form-line">
                                                        <input type="text"
                                                            class="form-control @error('description') is-invalid @enderror"
                                                            name="description" placeholder="Description">
                                                        @error('description')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">monetization_on</i>
                                                    </span>
                                                    <div class="form-line">
                                                        <input type="number"
                                                            class="form-control @error('price')
                                                        is-invalid
                                                    @enderror"
                                                            name="price" placeholder="Price">
                                                        @error('price')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">dns</i>
                                                    </span>
                                                    <div class="form-line">
                                                        <input type="number"
                                                            class="form-control @error('stock')
                                                        is-invalid
                                                    @enderror"
                                                            name="stock" placeholder="Stock">
                                                        @error('stock')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 ">
                                                <div class="card" style="padding: 10px;">
                                                    <div class="body">
                                                        <input onchange="showImage(this)" type="file"
                                                            class="form-control @error('image') is-invalid @enderror"
                                                            name="image">
                                                    </div>
                                                </div>
                                                <div class="input-group">
                                                    <label class="selectgroup-item">
                                                        <input id="radio1" type="radio" name="category" value="food"
                                                            checked="">
                                                        <label for="radio1">Food</label>
                                                    </label>
                                                    <label class="selectgroup-item">
                                                        <input id="radio2" type="radio" name="category" value="drink">
                                                        <label for="radio2">Drink</label>
                                                    </label>
                                                    <label class="selectgroup-item">
                                                        <input id="radio3" type="radio" name="category" value="snack">
                                                        <label for="radio3">Snack</label>
                                                    </label>
                                                </div>
                                            </div>
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


    <!-- Input Mask Plugin Js -->
    <script src="{{ asset('plugins/jquery-inputmask/jquery.inputmask.bundle.js') }}"></script>
@endpush
