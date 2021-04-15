<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="csrf-param" content="_token">

    <title>@yield('title')</title>

    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicons/favicon-32x32.png') }}">
    <link rel="stylesheet" href="{{ asset('css/dash.css') }}">
</head>

<body>
    <div class="main-container">
        <div class="container-fluid page-body-wrapper">

            @include('dashboard.shared.menu')
            @include('dashboard.shared.sidebar')

            <div class="main-panel">
                @include('dashboard.shared.flash')
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-lg-12 card-margin">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/dash.js') }}"></script>
</body>

</html>
