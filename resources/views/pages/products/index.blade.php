@extends('layouts.materialapp')

@section('title', 'Products')

@push('style')
    <!-- Waves Effect Css -->
    <link href="{{ asset('plugins/node-waves/waves.css') }}" rel="stylesheet" />
@endpush

@section('main')
    <section class="content">
        <div class="container-fluid">
            <section class="section">
                <div class="section-header">

                    <ol class="breadcrumb breadcrumb-bg-teal">
                        <li><a href="{{ route('home.index') }}"><i class="material-icons">dashboard</i> Dashboard</a></li>
                        <li><a href="javascript:void(0);"><i class="material-icons">local_mall</i> Products</a></li>
                        <li class="active">All Products</li>
                    </ol>
                </div>
                <div class="section-body">
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            @include('layouts.alert')
                        </div>
                    </div>
                    <h2 class="section-title">Products</h2>
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="card">
                                <div class="header">
                                    <h2>All Products <small>You can manage all Products, such as editing, deleting and
                                            more. Click + on top right corner to add.</small></h2>
                                    <div class="header-dropdown m-r--5">
                                        <a href="{{ route('product.create') }}"><i class="material-icons">add_box</i></a>
                                    </div>
                                    <form method="GET" action="{{ route('product.index') }}" style="margin-top: 10px">
                                        <div class="input-group input-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" placeholder="Search"
                                                    name="name">
                                            </div>
                                            <span class="input-group-addon">
                                                <button class="btn btn-sm btn-default"><i
                                                        class="material-icons">search</i></button>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                                <div class="body table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Category</th>
                                                <th>Price</th>
                                                <th>Photo</th>
                                                <th>Stock</th>
                                                <th>Created At</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($products as $product)
                                                <tr>

                                                    <td>{{ $product->name }}
                                                    </td>
                                                    <td>
                                                        {{ $product->category }}
                                                    </td>
                                                    <td>
                                                        {{ $product->price }}
                                                    </td>
                                                    <td>
                                                        @if ($product->image)
                                                            <img src="{{ asset('storage/products/' . $product->image) }}"
                                                                alt="" width="100px" class="img-thumbnail">
                                                        @else
                                                            <span class="badge badge-danger">No Image</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        {{ $product->stock }}
                                                    </td>

                                                    <td>{{ $product->created_at }}</td>
                                                    <td>
                                                        <div class="d-flex justify-content-center">
                                                            <a href='{{ route('product.edit', $product->id) }}'>
                                                                <i class="material-icons">edit</i>
                                                            </a>
                                                            <a href="#"
                                                                onclick="event.preventDefault(); document.getElementById('remove-{{ $product->id }}').submit()"><i
                                                                    class="material-icons">delete</i></a>
                                                            <form id="remove-{{ $product->id }}"
                                                                action="{{ route('product.destroy', $product->id) }}"
                                                                method="POST" class="ml-2">
                                                                <input type="hidden" name="_method" value="DELETE" />
                                                                <input type="hidden" name="_token"
                                                                    value="{{ csrf_token() }}" />
                                                            </form>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach

                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td>{{ $products->withQueryString()->links() }}</td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
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

    <!-- Autosize Plugin Js -->
    <script src="{{ asset('plugins/autosize/autosize.js') }}"></script>

    <!-- Moment Plugin Js -->
    <script src="{{ asset('plugins/momentjs/moment.js') }}"></script>

    <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src="{{ asset('plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js') }}">
    </script>

    <script src="{{ asset('js/material/pages/forms/basic-form-elements.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/features-posts.js') }}"></script>
@endpush
