<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="csrf-param" content="_token">

    <title>@yield('title')</title>

    @yield('opengraph')

    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicons/favicon-32x32.png') }}">
    <link rel="stylesheet" href="{{ asset('css/dash.css') }}">
</head>

<body>

@yield('content')

<script src="{{ asset('js/site.js') }}"></script>
</body>

</html>
