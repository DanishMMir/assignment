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
        <link rel="stylesheet" href="{{ asset('assets/vendor/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" />

        {{-- App styles --}}
        <link rel="stylesheet" href="{{ asset('assets/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/fonts/pe-icon-7-stroke/css/helper.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/styles/style.css') }}">
        @stack('styles')
    </head>
    <body class="fixed-navbar fixed-sidebar">

        <!-- Simple splash screen-->
        <div class="splash"> <div class="color-line"></div><div class="splash-title"><h1>{{ config('app.name') }} - {{ config('app.tagline') }}</h1><p>{{ config('app.description') }}</p><div class="spinner"> <div class="rect1"></div> <div class="rect2"></div> <div class="rect3"></div> <div class="rect4"></div> <div class="rect5"></div> </div> </div> </div>
        <!--[if lt IE 7]>
        <p class="alert alert-danger">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        @include('layouts.partials.header')

        @include('layouts.partials.navigation')

        <!-- Main Wrapper -->
        <div id="wrapper">
            @yield('breadcrumb')
            @yield('content')

{{--            @include('layouts.partials.sidebar')--}}
            <!-- Footer-->
            <footer class="footer">
                Powered by <a href="https://algoclogic.com">AlgocLogic Softwares</a>
            </footer>

        </div>

        <!-- Vendor scripts -->
        <script src="{{ asset('assets/vendor/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/jquery-ui/jquery-ui.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/slimScroll/jquery.slimscroll.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/jquery-flot/jquery.flot.js') }}"></script>
        <script src="{{ asset('assets/vendor/jquery-flot/jquery.flot.resize.js') }}"></script>
        <script src="{{ asset('assets/vendor/jquery-flot/jquery.flot.pie.js') }}"></script>
        <script src="{{ asset('assets/vendor/flot.curvedlines/curvedLines.js') }}"></script>
        <script src="{{ asset('assets/vendor/jquery.flot.spline/index.js') }}"></script>
        <script src="{{ asset('assets/vendor/metisMenu/dist/metisMenu.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/iCheck/icheck.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/peity/jquery.peity.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/sparkline/index.js') }}"></script>
        {{-- DataTables --}}
        <script src="{{ asset('assets/vendor/datatables/media/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
        <!-- DataTables buttons scripts -->
        <script src="{{ asset('assets/vendor/pdfmake/build/pdfmake.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/pdfmake/build/vfs_fonts.js') }}"></script>
        <script src="{{ asset('assets/vendor/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/datatables.net-buttons-bs/js/buttons.bootstrap.min.js') }}"></script>

        <!-- App scripts -->
        <script src="{{ asset('assets/scripts/homer.js') }}"></script>
        <script src="{{ asset('assets/scripts/charts.js') }}"></script>
        @stack('scripts')
    </body>
</html>
{{--<!DOCTYPE html>--}}
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
{{--    <head>--}}
{{--        <meta charset="utf-8">--}}
{{--        <meta name="viewport" content="width=device-width, initial-scale=1">--}}
{{--        <meta name="csrf-token" content="{{ csrf_token() }}">--}}

{{--        <title>{{ config('app.name', 'Laravel') }}</title>--}}

{{--        <!-- Fonts -->--}}
{{--        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">--}}

{{--        <!-- Styles -->--}}
{{--        <link rel="stylesheet" href="{{ asset('css/app.css') }}">--}}

{{--        @livewireStyles--}}

{{--        <!-- Scripts -->--}}
{{--        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.0/dist/alpine.js" defer></script>--}}
{{--    </head>--}}
{{--    <body class="font-sans antialiased">--}}
{{--        <div class="min-h-screen bg-gray-100">--}}
{{--            @livewire('navigation-dropdown')--}}

{{--            <!-- Page Heading -->--}}
{{--            <header class="bg-white shadow">--}}
{{--                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">--}}
{{--                    {{ $header }}--}}
{{--                </div>--}}
{{--            </header>--}}

{{--            <!-- Page Content -->--}}
{{--            <main>--}}
{{--                {{ $slot }}--}}
{{--            </main>--}}
{{--        </div>--}}

{{--        @stack('modals')--}}

{{--        @livewireScripts--}}
{{--    </body>--}}
{{--</html>--}}
