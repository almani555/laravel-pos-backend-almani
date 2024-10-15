@extends('layouts.materialapp')

@section('title', 'Users')

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
                        <li><a href="javascript:void(0);"><i class="material-icons">person_add</i> Users</a></li>
                        <li class="active"> All Users</li>
                    </ol>
                </div>
                <div class="section-body">
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            @include('layouts.alert')
                        </div>
                    </div>
                    <h2 class="section-title">Users</h2>
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="card">
                                <div class="header">
                                    <h2>All Users <small>You can manage all Users, such as editing, deleting and
                                            more. Click + on top right corner to add.</small></h2>
                                    <div class="header-dropdown m-r--5">
                                        <a href="{{ route('user.create') }}"><i class="material-icons">add_box</i></a>
                                    </div>
                                    <form method="GET" action="{{ route('user.index') }}" style="margin-top: 10px">
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
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Roles</th>
                                                <th>Created At</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($users as $user)
                                                <tr>

                                                    <td>{{ $user->name }}
                                                    </td>
                                                    <td>
                                                        {{ $user->email }}
                                                    </td>
                                                    <td>
                                                        {{ $user->phone }}
                                                    </td>
                                                    <td>
                                                        {{ $user->roles }}
                                                    </td>

                                                    <td>{{ $user->created_at }}</td>
                                                    <td>
                                                        <div class="d-flex justify-content-center">
                                                            <a href='{{ route('user.edit', $user->id) }}'>
                                                                <i class="material-icons">edit</i>
                                                            </a>
                                                            <a href="#"
                                                                onclick="event.preventDefault(); document.getElementById('remove-{{ $user->id }}').submit()"><i
                                                                    class="material-icons">delete</i></a>
                                                            <form id="remove-{{ $user->id }}"
                                                                action="{{ route('user.destroy', $user->id) }}"
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
                                                <td>{{ $users->withQueryString()->links() }}</td>
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
