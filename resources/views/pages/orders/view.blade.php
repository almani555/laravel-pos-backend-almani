@extends('layouts.materialapp')

@section('title', 'Order Detail')

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
                        <li><a href="javascript:void(0);"><i class="material-icons">receipt</i> Orders</a></li>
                        <li class="active">Order Detail</li>
                    </ol>
                </div>
                <div class="section-body">
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            @include('layouts.alert')
                        </div>
                    </div>
                    <h2 class="section-title">Orders</h2>
                    <p class="section-lead">
                    <div>Total Price {{ $order->total_price }}</div>
                    <div>Transaction Time {{ $order->transaction_time }}</div>
                    <div>Total Item {{ $order->total_item }}</div>
                    </p>
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="card">
                                <div class="header">
                                    <h2>All Items </h2>
                                </div>
                                <div class="body table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Product Name</th>
                                                <th>Price</th>
                                                <th>Quantity</th>
                                                <th>Total Price</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($orderItems as $item)
                                                <tr>

                                                    <td>{{ $item->product->name }}
                                                    </td>
                                                    <td>
                                                        {{ $item->product->price }}
                                                    </td>
                                                    <td>
                                                        {{ $item->quantity }}
                                                    </td>
                                                    <td>
                                                        {{ $item->total_price }}
                                                    </td>
                                                </tr>
                                            @endforeach

                                        </tbody>
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
