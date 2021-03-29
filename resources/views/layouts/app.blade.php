<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="csrf-param" content="_token">

    <title>@yield('title')</title>

    @yield('opengraph')
    @include('pages.shared.favicon')

    <link href="{{ asset('dist/css/site.css') }}" rel="stylesheet">

    @include('pages.shared.scripts')
</head>

<body>
    <header>
        <div class="container">
            @include('pages.shared.header')
        </div>
    </header>

    <div class="wrapper">
        @yield('content')
    </div>

    <footer>
        <div class="container">
            @include('pages.shared.footer')
        </div>
    </footer>

    <script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=7142b491-3aa2-4bee-9db3-82e546ab9241"></script>
    <script src="{{ asset('dist/js/site.js') }}" defer></script>
</body>

</html>
