<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>@yield('title')</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16"
        href="{{ asset('admin-asset/assets') }}./images/favicon.png">
    <link rel="stylesheet"
        href="{{ asset('admin-asset/assets/vendor/owl-carousel/css/owl.carousel.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('admin-asset/assets/vendor/owl-carousel/css/owl.theme.default.min.css') }}">
    <link href="{{ asset('admin-asset/assets/vendor/jqvmap/css/jqvmap.min.css') }}"
        rel="stylesheet">
    <link href="{{ asset('admin-asset/assets/css/style.css') }}" rel="stylesheet">
 



</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header" >
            <a href="index.html" class="brand-logo">
               Admin Space Art
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            
                        </div>

                        <ul class="navbar-nav header-right">
                           
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <i class="mdi mdi-account"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="/admin-logout" class="dropdown-item">
                                        <i class="icon-key"></i>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
            <div class="quixnav" style="background-color: #222627;">
                <div class="quixnav-scroll">
                    <ul class="metismenu" id="menu">
                        <li class="nav-label first">Main Menu</li>
                        <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                    class="icon icon-single-04"></i><span class="nav-text">Dashboard</span></a>
                            <ul aria-expanded="false">
                                <li><a href="/admin">Dashboard Postingan</a></li>
                                <li><a href="/admin-dashboard-komentar">Dashboard Komentar</a></li>
                                <li><a href="/admin-dashboard-kategori">Dashboard Kategori</a></li>
                            </ul>
                        </li>
                        
                    </ul>
                </div>


            </div>
        @yield('contents')


        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="#" target="_blank">SPACE ART || Muhammad Nabil Pasha Radhitya</a> 2023</p>
                <p>Distributed by <a href="https://themewagon.com/" target="_blank">Space Art</a></p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{ asset('admin-asset/assets/vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('admin-asset/assets/js/quixnav-init.js') }}"></script>
    <script src="{{ asset('admin-asset/assets/js/custom.min.js') }}"></script>


    <!-- Vectormap -->
    <script src="{{ asset('admin-asset/assets/vendor/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('admin-asset/assets/vendor/morris/morris.min.js') }}"></script>


    <script
        src="{{ asset('admin-asset/assets/vendor/circle-progress/circle-progress.min.js') }}">
    </script>
    <script src="{{ asset('admin-asset/assets/vendor/chart.js/Chart.bundle.min.js') }}">
    </script>

    <script src="{{ asset('admin-asset/assets/vendor/gaugeJS/dist/gauge.min.js') }}">
    </script>

    <!--  flot-chart js -->
    <script src="{{ asset('admin-asset/assets/vendor/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('admin-asset/assets/vendor/flot/jquery.flot.resize.js') }}">
    </script>

    <!-- Owl Carousel -->
    <script
        src="{{ asset('admin-asset/assets/vendor/owl-carousel/js/owl.carousel.min.js') }}">
    </script>

    <!-- Counter Up -->
    <script src="{{ asset('admin-asset/assets/vendor/jqvmap/js/jquery.vmap.min.js') }}">
    </script>
    <script src="{{ asset('admin-asset/assets/vendor/jqvmap/js/jquery.vmap.usa.js') }}">
    </script>
    <script
        src="{{ asset('admin-asset/assets/vendor/jquery.counterup/jquery.counterup.min.js') }}">
    </script>


    <script src="{{ asset('admin-asset/assets/js/dashboard/dashboard-1.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
    @if(session()->has('error'))
    Swal.fire({
        icon: "error",
        title: "{{session('error')}}",
        });
    @endif
    </script>

@include('sweetalert::alert')

</body>

</html>
