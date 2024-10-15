@extends('layouts.materialapp')

@section('title', 'Edit Product')

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
                                <form action="{{ route('product.update', $product) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="header">
                                        <h2>Edit Product</h2>
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
                                                            name="name" placeholder="Product Name" value="{{ $product->name }}">
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
                                                            name="description" placeholder="Description" value="{{ $product->description }}">
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
                                                            name="price" placeholder="Price" value="{{ $product->price }}">
                                                        @error('price')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 ">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">dns</i>
                                                    </span>
                                                    <div class="form-line">
                                                        <input type="number"
                                                            class="form-control @error('stock')
                                                        is-invalid
                                                    @enderror"
                                                            name="stock" placeholder="Stock" value="{{ $product->stock }}">
                                                        @error('stock')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="input-group">
                                                    <label class="selectgroup-item">
                                                        <input id="radio1" type="radio" name="category" value="food"
                                                        @if ($product->category == 'food') checked @endif>
                                                        <label for="radio1">Food</label>
                                                    </label>
                                                    <label class="selectgroup-item">
                                                        <input id="radio2" type="radio" name="category" value="drink" @if ($product->category == 'drink') checked @endif>
                                                        <label for="radio2">Drink</label>
                                                    </label>
                                                    <label class="selectgroup-item">
                                                        <input id="radio3" type="radio" name="category" value="snack" @if ($product->category == 'snack') checked @endif>
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
