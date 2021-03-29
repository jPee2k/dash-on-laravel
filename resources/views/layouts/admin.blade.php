<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="csrf-param" content="_token">

    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ asset('dist/css/dashboard/vendor.styles.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/dashboard/light-template.css') }}">
</head>

<body>
    <div class="main-container">
        <div class="container-fluid page-body-wrapper">
            
            @yield('content')

        </div>
    </div>

    @include('dashboard.shared.scripts')
</body>

</html>
