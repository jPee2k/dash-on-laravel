@extends('layouts.app')

@section('title', '404')
@section('content')
    <div class="main-container">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="errors error-v1">
                <div class="row no-gutters">
                    <div class="col-10 col-sm-10 col-lg-8 mx-auto">
                        <div class="card">
                            <div class="card-body">
                                <img class="error-image" src="{{ asset('img/site/404/error-bg-1.png') }}"
                                     title="Error Occurred"/>
                                <div class="row mt-5">
                                    <div class="col-12 text-center mt-xl-2">
                                        @if ($exception && Auth::check() && Auth::user()->is_admin())
                                            <h1 class="error-title">{{ $exception->getMessage() }}</h1>
                                            <a class="btn btn-sm btn-primary mt-3" href="{{ route('pages.index') }}">Go
                                                to dashboard</a>
                                        @else
                                            <h1 class="error-title">404 Error...</h1>
                                            {{--<h1 class="error-title">{{ $exception->getMessage() }}</h1>--}}
                                            <p class="error-description">Looks like the page you are trying to access
                                                doesn't
                                                exist or moved.<br> Please check URL and try again.</p>
                                            <a class="btn btn-sm btn-primary" href="/">Back to home</a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

