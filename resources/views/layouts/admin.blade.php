<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="csrf-param" content="_token" />

    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ asset('dist/css/dash.css') }}">
</head>

<body>
    <div id="app" class="main-container">
        <div class="container-fluid page-body-wrapper">

            @include('dashboard.shared.menu')
            @include('dashboard.shared.sidebar')

            <div class="main-panel">
                @include('dashboard.shared.flash')
                @yield('content')
            </div>

        </div>
    </div>

    <script src="{{ asset('dist/js/app.js') }}"></script>
    <script src="{{ asset('dist/js/dash.js') }}"></script>
</body>

</html>
