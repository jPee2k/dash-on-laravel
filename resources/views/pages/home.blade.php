@extends('layouts.app')

@isset($meta)
    @section('title')
        {{ $meta->title }}
    @endsection
    @section('opengraph')
        <meta property="og:url" content="{{ $meta->url }}">
        <meta property="og:type" content="website">
        <meta property="og:title" content="{{ $meta->title }}">
        <meta property="og:description" content="{{ $meta->description }}">
        <meta property="og:image" content="{{ $url . $meta->getImage() }}">
        <meta name="keywords" content="{{ $meta->keywords }}">
    @endsection
@endisset
@section('content')
    <div class="b-main">
        <img src="img/main-bg-img.svg" alt="" class="main-bg-img">
        <div class="container">
            @include('pages.shared.home.main-top')
            @include('pages.shared.home.main-boost')
            @include('pages.shared.home.main-start')
        </div>
    </div>
    <div class="b-partners">
        <div class="container">
            @include('pages.shared.home.partners')
        </div>
    </div>
@endsection
