<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="csrf-param" content="_token" />

    <title>@yield('title')</title>

    @yield('opengraph')
    @include('shared.favicon')

    <link href="{{ asset('dist/css/cssLibs8832.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/css/bundle8832.css') }}" rel="stylesheet">

    @include('shared.scripts')
</head>

<body>
    <header>
        <div class="container">
            @include('shared.header')
        </div>
    </header>

    <div class="wrapper">
        @yield('content')
    </div>

    <footer>
        <div class="container">
            @include('shared.footer')
        </div>
    </footer>

    <script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=7142b491-3aa2-4bee-9db3-82e546ab9241"></script>
    <script src="{{ asset('dist/js/libs8832.js') }}" defer></script>
    <script src="{{ asset('dist/js/script8832.js') }}" defer></script>
</body>

</html>
