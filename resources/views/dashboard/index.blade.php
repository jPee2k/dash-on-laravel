@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('content')
    {{-- notify --}}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- admin --}}
    <!-- partial:../../partials/_overlays.html -->
    <div class="profile-overlay">
        <div class="title-head">
            <h4>Profile</h4>
        </div>
        <div class="profile-header">
            <div class="d-flex justify-content-between">
                <i data-feather="arrow-left-circle" class="profile-close text-white"></i>
                <i data-feather="log-out" class="profile-close text-white"></i>
            </div>
            <div class="user-info">
                <div class="user-pic">
                    <img src="../../../../dist/images/avatars/profile-1.jpg" alt="Profile Picture" class="rounded-circle" />
                </div>
                <div class="primary-info text-center">
                    <h3><a class="name d-block" href="#">Johnson Smith</a></h3>
                    <p class="designation">CTO, Alt Universe LLC.</p>
                </div>
            </div>

        </div>
        <div class="profile-body">
            <div class="body-wrapper">
                <div class="project-stat">
                    <h5>Project Stats</h5>
                    <ul class="list-group list-group-small list-group-flush">
                        <li class="list-group-item d-flex row px-0 border-0">
                            <div class="col-lg-7 col-md-9 col-sm-9 col-7">
                                <span class="d-block">Jinx Desktop App</span>
                                <span class="badge badge-soft-primary">UI/UX</span>
                                <span class="badge badge-soft-primary">C++</span>
                                <span class="badge badge-soft-primary">Java</span>
                            </div>
                            <div class="col-lg-5 col-md-3 col-sm-3 col-5 d-flex">
                                <div class="text-right ml-auto my-auto">
                                    <h6 class="mb-1">70.5%</h6>
                                </div>
                                <div class="d-flex ml-auto">
                                    <canvas class="my-auto" id="analytics-overview-goal-completion-1" width="35" height="35"></canvas>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item d-flex row px-0 border-0">
                            <div class="col-lg-7 col-md-9 col-sm-9 col-7">
                                <span class="d-block">Social Shares</span>
                                <span class="badge badge-soft-success">C#</span>
                                <span class="badge badge-soft-success">Angular</span>
                                <span class="badge badge-soft-success">HTML5</span>
                            </div>
                            <div class="col-lg-5 col-md-3 col-sm-3 col-5 d-flex">
                                <div class="text-right ml-auto my-auto">
                                    <h6 class="mb-1">60.3%</h6>
                                </div>
                                <div class="d-flex ml-auto">
                                    <canvas class="my-auto" id="analytics-overview-goal-completion-2" width="35" height="35"></canvas>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item d-flex row px-0 border-0">
                            <div class="col-lg-7 col-md-9 col-sm-9 col-7">
                                <span class="d-block">eBook Downloads</span>
                                <span class="badge badge-soft-warning">Angular</span>
                                <span class="badge badge-soft-warning">HTML5</span>
                            </div>
                            <div class="col-lg-5 col-md-3 col-sm-3 col-5 d-flex">
                                <div class="text-right ml-auto my-auto">
                                    <h6 class="mb-1">40.8%</h6>
                                </div>
                                <div class="d-flex ml-auto">
                                    <canvas id="analytics-overview-goal-completion-3" width="35" height="35"></canvas>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item d-flex row px-0 border-0">
                            <div class="col-lg-7 col-md-9 col-sm-9 col-7">
                                <span class="d-block">Account Creations</span>
                                <span class="badge badge-soft-danger">PHP</span>
                                <span class="badge badge-soft-danger">Laravel</span>
                            </div>
                            <div class="col-lg-5 col-md-3 col-sm-3 col-5 d-flex">
                                <div class="text-right ml-auto my-auto">
                                    <h6 class="mb-1">30.7%</h6>
                                </div>
                                <div class="d-flex ml-auto">
                                    <canvas class="my-auto" id="analytics-overview-goal-completion-4" width="35" height="35"></canvas>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="account-stat">
                    <h5>Announcement</h5>
                    <ul class="highlight-list p-0 m-0">
                        <li class="highlight-item">
                            <div class="highlight-thumbnail">
                                <div class="highlight-icon bg-soft-success">
                                    <i data-feather="send" class="text-success"></i>
                                </div>
                            </div>
                            <div class="highlight-item-content">
                                <span class="highlight-subject">Jinx Desktop App</span>
                                <span class="highlight-detail">Wireframes are submitted</span>
                                <small>Just now</small>
                            </div>
                        </li>
                        <li class="highlight-item">
                            <div class="highlight-thumbnail">
                                <div class="highlight-icon bg-soft-primary">
                                    <i data-feather="upload-cloud" class="text-primary"></i>
                                </div>
                            </div>
                            <div class="highlight-item-content">
                                <span class="highlight-subject">Adios Fashion Store</span>
                                <span class="highlight-detail">Design Completed and uploaded</span>
                                <small>1 day ago</small>
                            </div>
                        </li>
                        <li class="highlight-item">
                            <div class="highlight-thumbnail">
                                <div class="highlight-icon bg-soft-warning">
                                    <i data-feather="list" class="text-warning"></i>
                                </div>
                            </div>
                            <div class="highlight-item-content">
                                <span class="highlight-subject">FitFix App Design</span>
                                <span class="highlight-detail">Bug and Task list are generated</span>
                                <small>2 days ago</small>
                            </div>
                        </li>
                        <li class="highlight-item">
                            <div class="highlight-thumbnail">
                                <div class="highlight-icon bg-soft-danger">
                                    <i data-feather="users" class="text-danger"></i>
                                </div>
                            </div>
                            <div class="highlight-item-content">
                                <span class="highlight-subject">FoodTruck Website</span>
                                <span class="highlight-detail">Allocate tester for UAT</span>
                                <small>3 days ago</small>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="settings-overlay">
        <div class="settings-header">
            <h4>Configurations</h4>
        </div>
        <i data-feather="arrow-left-circle" class="setting-close"></i>
        <div class="settings-body">
            <nav>
                <div class="nav nav-tabs nav-pills nav-fill border-0 p-3 pt-0" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-task-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Home</a>
                    <a class="nav-item nav-link" id="nav-config-tab" data-toggle="tab" href="#nav-config" role="tab" aria-controls="nav-config" aria-selected="false">Settings</a>
                </div>
            </nav>
            <div class="tab-content p-3 task-scroll-container" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-task-tab">
                    <div class="task-list-container">
                        <ul class="d-flex flex-column">
                            <li>
                                <div class="card card-rounded bg-primary">
                                    <div class="card-header">
                                        <div class="task-header-left bg-soft-primary-2">
                                            <i data-feather="users" class="task-icon"></i>
                                        </div>
                                        <div class="task-header-right">
                                            <span class="badge badge-pill badge-soft-primary-2">Aug 22</span>
                                            <span class="badge badge-pill badge-soft-primary-2">11:21 AM</span>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="title">Meeting Scheduled on Wednesday</p>
                                        <p class="content text-soft-primary">Meeting is at hotel plaza for two hours. Agenda
                                            is to get approval of project ASAP</p>
                                    </div>
                                    <div class="card-footer">
                                        <div class="actions">
                                            <a class="text-white" href="#"><i data-feather="trash-2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="card card-rounded bg-warning">
                                    <div class="card-header">
                                        <div class="task-header-left bg-soft-warning-2">
                                            <i data-feather="users" class="task-icon"></i>
                                        </div>
                                        <div class="task-header-right">
                                            <span class="badge badge-pill badge-soft-warning-2">Aug 22</span>
                                            <span class="badge badge-pill badge-soft-warning-2">11:21 AM</span>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="title">Meeting Scheduled on Wednesday</p>
                                        <p class="content text-soft-warning">Meeting is at hotel plaza for two hours. Agenda
                                            is to get approval of project ASAP</p>
                                        <div class="actions text-right">
                                            <a class="text-white" href="#"><i data-feather="trash-2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="card card-rounded bg-success">
                                    <div class="card-header">
                                        <div class="task-header-left bg-soft-success-2">
                                            <i data-feather="users" class="task-icon"></i>
                                        </div>
                                        <div class="task-header-right">
                                            <span class="badge badge-pill badge-soft-success-2">Aug 22</span>
                                            <span class="badge badge-pill badge-soft-success-2">11:21 AM</span>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="title">Meeting Scheduled on Wednesday</p>
                                        <p class="content text-soft-success">Meeting is at hotel plaza for two hours. Agenda
                                            is to get approval of project ASAP</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="card card-rounded bg-danger">
                                    <div class="card-header">
                                        <div class="task-header-left bg-soft-danger-2">
                                            <i data-feather="users" class="task-icon"></i>
                                        </div>
                                        <div class="task-header-right">
                                            <span class="badge badge-pill badge-soft-danger-2">Aug 22</span>
                                            <span class="badge badge-pill badge-soft-danger-2">11:21 AM</span>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="title">Meeting Scheduled on Wednesday</p>
                                        <p class="content text-soft-danger">Meeting is at hotel plaza for two hours. Agenda
                                            is to get approval of project ASAP</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-config" role="tabpanel" aria-labelledby="nav-config-tab">
                    <form class="config-container form">
                        <div class="config-file">
                            <h5>File Sharing</h5>
                            <ul class="config-list">
                                <li class="config-item form-group-xs row">
                                    <label class="col-8 col-form-label">Enable auto upload:</label>
                                    <div class="col-4 text-right">
                                        <a href="#" class="disable">
                                            <i class="config-icon" data-feather="upload-cloud"></i>
                                        </a>
                                    </div>
                                </li>
                                <li class="config-item form-group-xs row">
                                    <label class="col-8 col-form-label">Enable file sharing:</label>
                                    <div class="col-4 text-right">
                                        <a href="#" class="enable">
                                            <i class="config-icon" data-feather="share-2"></i>
                                        </a>
                                    </div>
                                </li>
                                <li class="config-item form-group-xs row">
                                    <label class="col-8 col-form-label">Enable auto download:</label>
                                    <div class="col-4 text-right">
                                        <a href="#" class="disable">
                                            <i class="config-icon" data-feather="download-cloud"></i>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="separator"></div>
                        <div class="config-notify">
                            <h5>Notification</h5>
                            <ul class="config-list">
                                <li class="config-item form-group-xs row">
                                    <label class="col-8 col-form-label">Notify when receive email:</label>
                                    <div class="col-4 text-right">
                                        <a href="#" class="disable">
                                            <i class="config-icon" data-feather="bell-off"></i>
                                        </a>
                                    </div>
                                </li>
                                <li class="config-item form-group-xs row">
                                    <label class="col-8 col-form-label">Receive calls in meeting:</label>
                                    <div class="col-4 text-right">
                                        <a href="#" class="disable">
                                            <i class="config-icon" data-feather="phone-off"></i>
                                        </a>
                                    </div>
                                </li>
                                <li class="config-item form-group-xs row">
                                    <label class="col-8 col-form-label">Update on task completion:</label>
                                    <div class="col-4 text-right">
                                        <a href="#" class="enable">
                                            <i class="config-icon" data-feather="thumbs-up"></i>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="separator"></div>
                        <div class="config-general">
                            <h5>Reporting</h5>
                            <ul class="config-list">
                                <li class="config-item form-group-xs row">
                                    <label class="col-8 col-form-label">Auto generate reports:</label>
                                    <div class="col-4 text-right">
                                        <a href="#" class="disable">
                                            <i class="config-icon" data-feather="file-minus"></i>
                                        </a>
                                    </div>
                                </li>
                                <li class="config-item form-group-xs row">
                                    <label class="col-8 col-form-label">Generate customer reports:</label>
                                    <div class="col-4 text-right">
                                        <a href="#" class="disable">
                                            <i class="config-icon" data-feather="user-check"></i>
                                        </a>
                                    </div>
                                </li>
                                <li class="config-item form-group-xs row">
                                    <label class="col-8 col-form-label">Generate order reports:</label>
                                    <div class="col-4 text-right">
                                        <a href="#" class="enable">
                                            <i class="config-icon" data-feather="shopping-cart"></i>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="sidebar-overlay"></div>
    <!-- partial -->

    {{-- right menu --}}
    <nav class="navbar fixed-top d-flex flex-row">
        <div class="navbar-menu-container d-flex align-items-center justify-content-center">
            <div class="text-center navbar-brand-container align-items-center justify-content-center">
                <a class="brand-logo" href="../dashboards/index.html"><img src="../../../../dist/images/logo-brand-small.png" alt="Scalar Dashboard" title="Scalar Dashboard" /></a>
            </div>
            <div class="sub-header">
                <h4 class="page-title text-center">Dashboard</h4>
            </div>
            <!-- partial:../../partials/_navbar.html -->
            <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item dropdown show">
                    <a class="nav-link count-highlighter dropdown-toggle" id="notificationAlert" href="#" data-toggle="dropdown" aria-expanded="true">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user mx-0">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                        {{-- <span class="count"></span> --}}
                    </a>
                    <div class="dropdown-menu nav-notify-container animated m-0 p-0 show" aria-labelledby="notificationAlert">
                        <div class="notify-header p-2 pb-0">
                            <span class="pl-1">Pending - <span class="badge badge-primary badge-pill">3</span></span>
                            <span class="pl-1">Viewed - <span class="badge badge-danger badge-pill">1</span></span>
                            <span class="pl-1">Total - <span class="badge badge-success badge-pill">4</span></span>
                        </div>
                        <div class="notify-body">
                            <ul class="highlight-list">
                                <li class="highlight-item ">
                                    <div class="highlight-thumbnail">
                                        <div class="highlight-icon bg-soft-success">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-send text-success">
                                                <line x1="22" y1="2" x2="11" y2="13"></line>
                                                <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="highlight-item-content">
                                        <span class="highlight-subject">Jinx Desktop App</span>
                                        <span class="highlight-detail">Wireframes are submitted</span>
                                        <small>Just now</small>
                                    </div>
                                </li>
                                <li class="highlight-item ">
                                    <div class="highlight-thumbnail">
                                        <div class="highlight-icon bg-soft-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-upload-cloud text-primary">
                                                <polyline points="16 16 12 12 8 16"></polyline>
                                                <line x1="12" y1="12" x2="12" y2="21"></line>
                                                <path d="M20.39 18.39A5 5 0 0 0 18 9h-1.26A8 8 0 1 0 3 16.3"></path>
                                                <polyline points="16 16 12 12 8 16"></polyline>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="highlight-item-content">
                                        <span class="highlight-subject">Adios Fashion Store</span>
                                        <span class="highlight-detail">Design Completed and uploaded</span>
                                        <small>1 day ago</small>
                                    </div>
                                </li>
                                <li class="highlight-item ">
                                    <div class="highlight-thumbnail">
                                        <div class="highlight-icon bg-soft-warning">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-triangle text-warning">
                                                <path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path>
                                                <line x1="12" y1="9" x2="12" y2="13"></line>
                                                <line x1="12" y1="17" x2="12" y2="17"></line>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="highlight-item-content">
                                        <span class="highlight-subject">FitFix App Design</span>
                                        <span class="highlight-detail">Bug and Task list are generated</span>
                                        <small>2 days ago</small>
                                    </div>
                                </li>
                                <li class="highlight-item">
                                    <div class="highlight-thumbnail">
                                        <div class="highlight-icon bg-soft-danger">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-octagon text-danger">
                                                <polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon>
                                                <line x1="15" y1="9" x2="9" y2="15"></line>
                                                <line x1="9" y1="9" x2="15" y2="15"></line>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="highlight-item-content">
                                        <span class="highlight-subject">FoodTruck Website</span>
                                        <span class="highlight-detail">Allocate tester for UAT</span>
                                        <small>3 days ago</small>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="notify-footer border-top p-2 text-center">
                            <a href="#">View All Notifications</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item mobile-sidebar">
                    <button class="nav-link navbar-toggler navbar-toggler-right align-self-center" type="button" data-toggle="msb-sidebar">
                        <i data-feather="align-right"></i>
                    </button>
                </li>
            </ul>
            <!-- partial -->
        </div>
    </nav>

    {{-- sidebar --}}
    <div class="d-flex w-100">
        <!-- partial:../../partials/_sidebar.html -->
        <nav class="navbar-container flex-row" id="navbar">
            <div class="primary">
                <div class="text-center navbar-brand-container d-flex align-items-center justify-content-center">
                    <a class="brand-logo" href="../dashboards/index.html"><img src="../../../../dist/images/logo-white-small.png" alt="Scalar Dashboard" title="Scalar Dashboard" /></a>
                </div>
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard.index') }}" data-toggle="tooltip" data-placement="right" data-original-title="Dashboard" data-skin-class="tooltip-base">
                            <i data-feather="home"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)" onclick="return confirm('Are you sure?') ? document.getElementById('logout-form').submit() : false;" data-toggle="tooltip" data-placement="right" data-original-title="Logout" data-skin-class="tooltip-base">
                            <i data-feather="shield"></i>
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
                            <a class="nav-link" href="">
                                <span class="menu-title">Icons & Logo</span>
                            </a>
                        </li>
                        <li class="nav-header">Pages</li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="true" aria-controls="general-pages">
                                <span class="menu-title">Home Page</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right menu-arrow">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </a>
                            <div class="collapse show" id="general-pages" style="">
                                <ul class="nav flex-column sub-menu">
                                    <li class="nav-item"><a class="nav-link" href=""> Open Graph </a></li>
                                    <li class="nav-item"><a class="nav-link" href=""> Social </a></li>
                                    <li class="nav-item"><a class="nav-link" href=""> Preview </a></li>
                                    <li class="nav-item"><a class="nav-link" href=""> Instruction </a></li>
                                    <li class="nav-item"><a class="nav-link" href=""> Advantages </a></li>
                                    <li class="nav-item"><a class="nav-link" href=""> Partners </a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- partial -->
    </div>

    <div class="main-panel">
        <div class="content-wrapper">
            <!--
                                        C
                                        o
                                        n
                                        t
                                        e
                                        n
                                        t 
                                        
                                        P
                                        l
                                        a
                                        c
                                        e
                                         
                                        H
                                        e
                                        r
                                        e
                                     -->
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->

        <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-center text-sm-left d-block d-sm-inline-block">Copyright © 2019
                    <a href="#" target="_blank">AxiomUi</a>. All rights reserved.
                </span>
                <div class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">
                    <a class="text-primary mr-2" href="#">Help</a>
                    <a class="text-primary mr-2" href="#">Support</a>
                    <a class="text-primary" href="#">Privacy Policy</a>
                </div>
            </div>
        </footer>

        <!-- partial -->
    </div>

@endsection
