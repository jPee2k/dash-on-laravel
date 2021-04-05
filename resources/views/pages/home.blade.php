{{--@extends('layouts.app')--}}

{{--@isset($page)--}}
{{--    @section('title')--}}
{{--        {{ $page->title }}--}}
{{--    @endsection--}}
{{--    @section('opengraph')--}}
{{--        <meta property="og:url" content="{{ "{$url}/" . $page->url }}">--}}
{{--        <meta property="og:type" content="website">--}}
{{--        <meta property="og:title" content="{{ $page->title }}">--}}
{{--        <meta property="og:description" content="{{ $page->description }}">--}}
{{--        <meta property="og:image" content="{{ $url . $page->getImage() }}">--}}
{{--        <meta name="keywords" content="{{ $page->keywords }}">--}}
{{--    @endsection--}}
{{--@endisset--}}
{{--@section('content')--}}
{{--    <h1>Homepage</h1>--}}
{{--@endsection--}}

<h1><a href="{{ route('dashboard.index') }}">Dashboard</a></h1>
