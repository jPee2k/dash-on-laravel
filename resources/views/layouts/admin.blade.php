<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="csrf-param" content="_token">

    <title>Admin Dashboard</title>

    <link rel="stylesheet" href="{{ asset('dist/css/dashboard/vendor.styles.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/dashboard/light-template.css') }}">
</head>

<body>
    <div class="main-container">
        <div class="container-fluid page-body-wrapper">
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
            <div class="sidebar-overlay"></div>
            <!-- partial -->

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
                        <li class="nav-item nav-profile">
                            <a class="nav-link" href="#" id="profileToolbar">
                                <i data-feather="user" class="mx-0"></i>
                            </a>
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
            <div class="d-flex w-100">
                <!-- partial:../../partials/_sidebar.html -->
                <nav class="navbar-container flex-row" id="navbar">
                    <div class="primary">
                        <div class="text-center navbar-brand-container d-flex align-items-center justify-content-center">
                            <a class="brand-logo" href="../dashboards/index.html"><img src="../../../../dist/images/logo-white-small.png" alt="Scalar Dashboard" title="Scalar Dashboard" /></a>
                        </div>
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link" href="../dashboards/index.html" data-toggle="tooltip" data-placement="right" data-original-title="Quick Link - Dashboard" data-skin-class="tooltip-base">
                                    <i data-feather="home"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../users/login-v1.html" data-toggle="tooltip" data-placement="right" data-original-title="Quick Link - Login page" data-skin-class="tooltip-base">
                                    <i data-feather="shield"></i>
                                </a>
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

        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- inject:js -->
    <script src="{{ asset('dist/js/dashboard/vendor.base.js') }}"></script>
    <script src="{{ asset('dist/js/dashboard/vendor.bundle.js') }}"></script>
    <!-- endinject -->
    <!-- ChartJS - Text inside Circle -->
    <script src="{{ asset('dist/js/dashboard/vendor-override/chartjs-doughnut.js') }}"></script>
    <!-- ChartJS End -->
    <!-- Custom js for this page-->
    <script src="{{ asset('dist/js/dashboard/dashboard-msb.js') }}"></script>
    <script src="{{ asset('dist/js/dashboard/common-msb.js') }}"></script>
    <script src="{{ asset('dist/js/dashboard/vendor-override/tooltip.js') }}"></script>
    <!-- End custom js for this page-->
</body>

</html>
