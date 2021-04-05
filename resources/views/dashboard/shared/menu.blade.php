{{-- right/top menu --}}
<nav class="navbar fixed-top d-flex flex-row">
    <div class="navbar-menu-container d-flex align-items-center justify-content-center">
        <div class="text-center navbar-brand-container align-items-center justify-content-center">
            <a class="brand-logo" href="{{ route('dashboard.index') }}"><img
                    src="{{ asset('img/dash/logo-brand-small.png') }}" alt="Scalar Dashboard" title="Scalar Dashboard"/></a>
        </div>
        <div class="sub-header">
            <h4 class="page-title text-center"><a
                    href="{{ route('home.index') }}">{{ config('app.name', 'Laravel') }}</a></h4>
        </div>
        {{-- partial:../../partials/_navbar.html --}}
        <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item mobile-sidebar">
                <button class="nav-link navbar-toggler navbar-toggler-right align-self-center" type="button"
                        data-toggle="msb-sidebar">
                    <i data-feather="align-right"></i>
                </button>
            </li>
        </ul>
        {{-- partial --}}
    </div>
</nav>
