<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>@yield('title') &mdash; Material Design</title>
    <!-- Favicon-->
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    <!-- General CSS Files -->

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet"
        type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet">

    @stack('style')

    <!-- Template CSS -->

    <!-- Animation Css -->
    <link href="{{ asset('plugins/animate-css/animate.css') }}" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="{{ asset('css/material/style.css') }}" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{ asset('css/material/themes/all-themes.css') }}" rel="stylesheet" />
</head>

<body class="theme-teal">
    <!-- Header -->
    @include('components.material.header')

    <section>
        <!-- Left Sidebar -->
        @include('components.material.left-sidebar-footer')
        <!-- Right Sidebar -->
        @include('components.material.right-sidebar')
    </section>


    <!-- Content -->
    @yield('main')

    <!-- General JS Scripts -->
    <!-- Jquery Core Js -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>

    <!-- Bootstrap Core Js -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="{{ asset('plugins/node-waves/waves.js') }}"></script>

    @stack('scripts')

    <!-- Template JS File -->
    <!-- Custom Js -->
    <script src="{{ asset('js/material/admin.js') }}"></script>

    <!-- Demo Js -->
    <script src="{{ asset('js/material/demo.js') }}"></script>
</body>

</html>
