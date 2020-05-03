<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ env('APP_NAME') }}</title>
    <!-- Favicon -->
    <link href="{{ asset('admin-assets') }}/img/brand/favicon.png" rel="icon" type="image/png">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- Icons -->
    <link href="{{ asset('admin-assets/vendor/nucleo/css/nucleo.css') }}" rel="stylesheet">
    <link href="{{ asset('admin-assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <!-- Argon CSS -->
    <link type="text/css" href="{{ asset('admin-assets/css/argon.css?v=1.0.0') }}" rel="stylesheet">
</head>

<body>
    @auth
    @include('admin.layout.sidebar')
    @endauth


    <div class="main-content">
        @auth
        @include('admin.layout.topbar')
        @endauth
        @include('admin.layout.header-card')
        <div class="container-fluid" style="background: linear-gradient(87deg, #f8f9fe 0, #f8f9fe 100%) !important;margin-top: -14rem !important;">
            @include('admin.layout.alert')
                
            @yield('content')

            
        </div>
        {{-- @include('admin.layout.footer') --}}
    </div>

    <script src="{{ asset('admin-assets/vendor/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('admin-assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>

    
    @stack('js')
    <script src="{{ asset('admin-assets/js/argon.js?v=1.0.0') }}"></script>
    @stack('inline-js')
</body>

</html>