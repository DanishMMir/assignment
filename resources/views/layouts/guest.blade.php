<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        {{-- Page title --}}
        <title>{{config('app.name')}} - @yield('title')</title>

        {{-- Place favicon.ico and apple-touch-icon.png in the root directory --}}
        {{--<link rel="shortcut icon" type="image/ico" href="favicon.ico" />--}}

        {{-- Vendor styles --}}
        <link rel="stylesheet" href="{{ asset('assets/vendor/fontawesome/css/font-awesome.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendor/metisMenu/dist/metisMenu.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendor/animate.css/animate.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/dist/css/bootstrap.css') }}" />

        {{-- App styles --}}
        <link rel="stylesheet" href="{{ asset('assets/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/fonts/pe-icon-7-stroke/css/helper.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/styles/style.css') }}">
        @stack('styles')
    </head>
    <body class="blank">
        {{-- Simple splash screen--}}
        <div class="splash"> <div class="color-line"></div><div class="splash-title"><h1>{{ config('app.name') }} - {{ config('app.tagline') }}</h1><p>{{ config('app.description') }}</p><div class="spinner"> <div class="rect1"></div> <div class="rect2"></div> <div class="rect3"></div> <div class="rect4"></div> <div class="rect5"></div> </div> </div> </div>
        <!--[if lt IE 7]>
        <p class="alert alert-danger">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="color-line"></div>

        @yield('content')

        {{-- Vendor scripts --}}
        <script src="{{ asset('assets/vendor/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/jquery-ui/jquery-ui.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/slimScroll/jquery.slimscroll.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/metisMenu/dist/metisMenu.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/iCheck/icheck.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/sparkline/index.js') }}"></script>
        {{-- App scripts --}}
        <script src="{{ asset('assets/scripts/homer.js') }}"></script>

        @stack('scripts')

    </body>
</html>
