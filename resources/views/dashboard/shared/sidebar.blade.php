{{-- sidebar --}}
<div class="d-flex w-100">
    {{-- partial:../../partials/_sidebar.html --}}
    <nav class="navbar-container flex-row" id="navbar">
        <div class="primary">
            <div class="text-center navbar-brand-container d-flex align-items-center justify-content-center">
                <a class="brand-logo" href="{{ route('dashboard.index') }}"><img
                        src="{{ asset('img/dash/logo-white-small.png') }}" alt="Scalar Dashboard"
                        title="Scalar Dashboard"/></a>
            </div>
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dashboard.index') }}" data-toggle="tooltip"
                       data-placement="right" data-original-title="Dashboard" data-skin-class="tooltip-base">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-home">
                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                        </svg>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0)"
                       onclick="return confirm('Are you sure?') ? document.getElementById('logout-form').submit() : false;"
                       data-toggle="tooltip" data-placement="right" data-original-title="Logout"
                       data-skin-class="tooltip-base">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-log-out">
                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                            <polyline points="16 17 21 12 16 7"></polyline>
                            <line x1="21" y1="12" x2="9" y2="12"></line>
                        </svg>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
        <div class="secondary">
            <div class="sub-header">
                <h4>All Elements</h4>
            </div>
            <div class="nav-wrapper">
                <ul class="nav">
                    <li class="nav-header">General</li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard.index') }}">
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-header">Content</li>
                    <li class="nav-item">
                        <a href="{{ route('pages.index') }}" class="nav-link">
                            <span class="menu-title">Pages</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- partial --}}
</div>
