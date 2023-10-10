<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> @yield('title') </title>
    <link rel="stylesheet" href="../dashboard/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../dashboard/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="../dashboard/css/style.css">
    <link rel="shortcut icon" href="../dashboard/images/favicon.ico" />
</head>

<body>
    <div class="container-scroller">
        <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                {{-- <a class="navbar-brand brand-logo" href="index.html"><img src="../dashboard/images/logo.svg"
                        alt="logo" /></a>
                <a class="navbar-brand brand-logo-mini" href="index.html"><img src="../dashboard/images/logo-mini.svg"
                        alt="logo" /></a> --}}
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-stretch">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="mdi mdi-menu"></span>
                </button>
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" id="profileDropdown" href="#"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="nav-profile-img">
                                <img src="../dashboard/images/faces/face1.jpg" alt="image">
                                <span class="availability-status online"></span>
                            </div>
                            <div class="nav-profile-text">
                                <p class="mb-1 text-black">{{ auth()->user()->name }} {{ auth()->user()->surname }}</p>
                            </div>
                        </a>
                        <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="/logout">
                                <i class="mdi mdi-logout me-2 text-primary"></i>
                                Signout
                            </a>
                        </div>
                    </li>
                    <li class="nav-item d-none d-lg-block full-screen-link">
                        <a class="nav-link">
                            <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
                        </a>
                    </li>
                    
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-toggle="offcanvas">
                    <span class="mdi mdi-menu"></span>
                </button>
            </div>
        </nav>
        <div class="container-fluid page-body-wrapper">
            @include('shared.sidebar')
            <div class="main-panel">
                @yield('header')
                <footer class="footer">
                    <div class="container-fluid d-flex justify-content-between">
                        <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright ©
                            Mila University 2023</span>
                       
                    </div>
                </footer>
            </div>
        </div>
    </div>
    <script src="../dashboard/vendors/js/vendor.bundle.base.js"></script>
    <script src="../dashboard/vendors/chart.js/Chart.min.js"></script>
    <script src="../dashboard/js/jquery.cookie.js" type="text/javascript"></script>
    <script src="../dashboard/js/off-canvas.js"></script>
    <script src="../dashboard/js/hoverable-collapse.js"></script>
    <script src="../dashboard/js/misc.js"></script>
    <script src="../dashboard/js/dashboard.js"></script>
    <script src="../dashboard/js/todolist.js"></script>
</body>

</html>
