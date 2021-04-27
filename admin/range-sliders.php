<!DOCTYPE html>
<html lang="en">

<head>
    <title>Nura Admin - Range sliders</title>
    <meta name="description" content="Range sliders | Nura Admin">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Your website">

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <!-- Font Awesome CSS -->
    <link href="assets/font-awesome/css/all.css" rel="stylesheet" type="text/css" />

    <!-- Custom CSS -->
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

    <!-- BEGIN CSS for this page -->
    <link href="assets/plugins/ion-rangeslider/ion.rangeSlider.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/ion-rangeslider/ion.rangeSlider.skinFlat.css" rel="stylesheet" type="text/css" />
    <!-- END CSS for this page -->

</head>

<body class="adminbody">

    <div id="main">

        <!-- top bar navigation -->
        <div class="headerbar">

            <!-- LOGO -->
            <div class="headerbar-left">
                <a href="index.php" class="logo">
                    <img alt="Logo" src="assets/images/logo.png" />
                    <span>NURA ADMIN</span>
                </a>
            </div>

            <nav class="navbar-custom">

                <ul class="list-inline float-right mb-0">

                    <li class="list-inline-item dropdown notif">
                        <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" aria-haspopup="false" aria-expanded="false">
                            <i class="far fa-envelope"></i>
                            <span class="notif-bullet"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-arrow-success dropdown-lg">
                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5>
                                    <small>
                                        <span class="label label-danger pull-xs-right">12</span>Mailbox</small>
                                </h5>
                            </div>

                            <!-- item-->
                            <a href="mail-all.php" class="dropdown-item notify-item">
                                <p class="notify-details ml-0">
                                    <b>John Doe</b>
                                    <span>New message received</span>
                                    <small class="text-muted">3 minutes ago</small>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="mail-all.php" class="dropdown-item notify-item">
                                <p class="notify-details ml-0">
                                    <b>Michael Smith</b>
                                    <span>New message received</span>
                                    <small class="text-muted">18 minutes ago</small>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="mail-all.php" class="dropdown-item notify-item">
                                <p class="notify-details ml-0">
                                    <b>John Lenons</b>
                                    <span>New message received</span>
                                    <small class="text-muted">Yesterday, 18:27</small>
                                </p>
                            </a>

                            <!-- All-->
                            <a href="mail-all.php" class="dropdown-item notify-item notify-all">
                                View All Messages
                            </a>

                        </div>

                    </li>

                    <li class="list-inline-item dropdown notif">
                        <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" aria-haspopup="false" aria-expanded="false">
                            <i class="far fa-bell"></i>
                            <span class="notif-bullet"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-arrow-success dropdown-lg">
                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5>
                                    <small>
                                        <span class="label label-danger pull-xs-right">5</span>Allerts</small>
                                </h5>
                            </div>

                            <!-- item-->
                            <a href="#" class="dropdown-item notify-item">
                                <div class="notify-icon bg-faded">
                                    <img src="assets/images/avatars/avatar2.png" alt="img" class="rounded-circle img-fluid">
                                </div>
                                <p class="notify-details">
                                    <b>John Doe</b>
                                    <span>User registration</span>
                                    <small class="text-muted">3 minutes ago</small>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="#" class="dropdown-item notify-item">
                                <div class="notify-icon bg-faded">
                                    <img src="assets/images/avatars/avatar3.png" alt="img" class="rounded-circle img-fluid">
                                </div>
                                <p class="notify-details">
                                    <b>Michael Cox</b>
                                    <span>Task 2 completed</span>
                                    <small class="text-muted">12 minutes ago</small>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="#" class="dropdown-item notify-item">
                                <div class="notify-icon bg-faded">
                                    <img src="assets/images/avatars/avatar4.png" alt="img" class="rounded-circle img-fluid">
                                </div>
                                <p class="notify-details">
                                    <b>Michelle Dolores</b>
                                    <span>New job completed</span>
                                    <small class="text-muted">35 minutes ago</small>
                                </p>
                            </a>

                            <!-- All-->
                            <a href="#" class="dropdown-item notify-item notify-all">
                                View All Allerts
                            </a>

                        </div>
                    </li>


                    <li class="list-inline-item dropdown notif">
                        <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" aria-haspopup="false" aria-expanded="false">
                            <i class="fas fa-cog"></i>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-arrow-success dropdown-sm">
                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5>
                                    <small>Settings</small>
                                </h5>
                            </div>

                            <!-- item-->
                            <a href="#" class="dropdown-item notify-item">
                                <p class="notify-details ml-0">
                                    <i class="fas fa-cog"></i>
                                    <b>Settings 1</b>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="#" class="dropdown-item notify-item">
                                <p class="notify-details ml-0">
                                    <i class="fas fa-cog"></i>
                                    <b>Settings 2</b>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="#" class="dropdown-item notify-item">
                                <p class="notify-details ml-0">
                                    <i class="fas fa-cog"></i>
                                    <b>Settings 3</b>
                                </p>
                            </a>

                        </div>

                    </li>


                    <li class="list-inline-item dropdown notif">
                        <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" aria-haspopup="false" aria-expanded="false">
                            <img src="assets/images/avatars/admin.png" alt="Profile image" class="avatar-rounded">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5 class="text-overflow">
                                    <small>Hello, admin</small>
                                </h5>
                            </div>

                            <!-- item-->
                            <a href="profile.php" class="dropdown-item notify-item">
                                <i class="fas fa-user"></i>
                                <span>Profile</span>
                            </a>

                            <!-- item-->
                            <a href="#" class="dropdown-item notify-item">
                                <i class="fas fa-power-off"></i>
                                <span>Logout</span>
                            </a>
                        </div>
                    </li>

                </ul>

                <ul class="list-inline menu-left mb-0">
                    <li class="float-left">
                        <button class="button-menu-mobile open-left">
                            <i class="fas fa-bars"></i>
                        </button>
                    </li>
                </ul>

            </nav>

        </div>
        <!-- End Navigation -->

        <!-- Left Sidebar -->
        <div class="left main-sidebar">

            <div class="sidebar-inner leftscroll">

                <div id="sidebar-menu">

                    <ul>
                        <li class="submenu">
                            <a class="active" href="index.php">
                                <i class="fas fa-bars"></i>
                                <span> Tình hình chung </span>
                            </a>
                        </li>

                        <li class="submenu">
                            <a href="users.php">
                                <i class="fas fa-user"></i>
                                <span> Tài khoản </span>
                            </a>
                        </li>

                        <li class="submenu">
                            <a href="blog.php">
                                <i class="fas fa-file-alt"></i>
                                <span> Sách </span>
                            </a>
                        </li>

                        <li class="submenu">
                            <a href="slider.php">
                                <i class="fas fa-photo-video"></i>
                                <span> Trình chiếu </span>
                            </a>
                        </li>

                        <li class="submenu">
                            <a href="charts.php">
                                <i class="fas fa-chart-line"></i>
                                <span> Thống kê </span>
                            </a>
                        </li>

                        <li class="submenu">
                            <a id="tables" href="#">
                                <i class="fas fa-table"></i>
                                <span> Tables </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="tables-basic.php">Basic Tables</a>
                                </li>
                                <li>
                                    <a href="tables-datatable.php">Data Tables</a>
                                </li>
                            </ul>
                        </li>


                        <li class="submenu">
                            <a href="#">
                                <i class="fas fa-star"></i>
                                <span> Plugins </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="star-rating.php">Star Rating</a>
                                </li>
                                <li>
                                    <a href="range-sliders.php">Range Sliders</a>
                                </li>
                                <li>
                                    <a href="tree-view.php">Tree View</a>
                                </li>
                                <li>
                                    <a href="sweetalert.php">SweetAlert</a>
                                </li>
                                <li>
                                    <a href="calendar.php">Calendar</a>
                                </li>
                                <li>
                                    <a href="counter-up.php">Counter-Up</a>
                                </li>
                            </ul>
                        </li>

                        <li class="submenu">
                            <a href="#">
                                <i class="far fa-copy"></i>
                                <span> Example Pages </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="page-pricing-tables.php">Pricing Tables</a>
                                </li>
                                <li>
                                    <a href="page-timeline.php">Timeline</a>
                                </li>
                                <li>
                                    <a href="page-invoice.php">Invoice</a>
                                </li>
                                <li>
                                    <a href="page-blank.php">Blank Page</a>
                                </li>
                            </ul>
                        </li>

                    </ul>

                    <div class="clearfix"></div>

                </div>

                <div class="clearfix"></div>

            </div>

        </div>
        <!-- End Sidebar -->

        <div class="content-page">

            <!-- Start content -->
            <div class="content">

                <div class="container-fluid">

                    <div class="row">
                        <div class="col-xl-12">
                            <div class="breadcrumb-holder">
                                <h1 class="main-title float-left">Range Sliders</h1>
                                <ol class="breadcrumb float-right">
                                    <li class="breadcrumb-item">Home</li>
                                    <li class="breadcrumb-item active">Range Sliders</li>
                                </ol>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->


                    <div class="row">

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <div class="card mb-3">
                                <div class="card-header">
                                    <h3>
                                        <i class="far fa-hand-pointer"></i> Ion RangeSlider examples
                                    </h3>
                                    You can find examples and documentation about Ion RangeSlider:
                                    <a target="_blank" href="https://github.com/IonDen/ion.rangeSlider">Ion
                                        RangeSlider</a>
                                </div>

                                <div class="card-body">



                                    <form class="form-horizontal">
                                        <div class="form-group row">
                                            <label for="range_slider_1" class="col-sm-2 col-xs-12 control-label">
                                                <b>Slider without paramenets</b>
                                            </label>
                                            <div class="col-sm-10 col-xs-12">
                                                <input type="text" id="range_slider_1">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="range_slider_2" class="col-sm-2 col-xs-12 control-label">
                                                <b>Min, Max and Start value</b>
                                            </label>
                                            <div class="col-sm-10 col-xs-12">
                                                <input type="text" id="range_slider_2">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="range_slider_3" class="col-sm-2 col-xs-12 control-label">
                                                <b>Prefix</b>
                                            </label>
                                            <div class="col-sm-10 col-xs-12">
                                                <input type="text" id="range_slider_3">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="range_slider_4" class="col-sm-2 col-xs-12 control-label">
                                                <b>Range with negative values</b>
                                            </label>
                                            <div class="col-sm-10 col-xs-12">
                                                <input type="text" id="range_slider_4">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="range_slider_5" class="col-sm-2 col-xs-12 control-label">
                                                <b>Steps</b>
                                            </label>
                                            <div class="col-sm-10 col-xs-12">
                                                <input type="text" id="range_slider_5">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="range_slider_6" class="col-sm-2 col-xs-12 control-label">
                                                <b>Custom Values</b>
                                            </label>
                                            <div class="col-sm-10 col-xs-12">
                                                <input type="text" id="range_slider_6">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="range_slider_7" class="col-sm-2 col-xs-12 control-label">
                                                <b>Prettify enabled</b>
                                            </label>
                                            <div class="col-sm-10 col-xs-12">
                                                <input type="text" id="range_slider_7">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="range_slider_8" class="col-sm-2 col-xs-12 control-label">
                                                <b>Disabled (lock slider)</b>
                                            </label>
                                            <div class="col-sm-10 col-xs-12">
                                                <input type="text" id="range_slider_8">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="range_slider_9" class="col-sm-2 col-xs-12 control-label">
                                                <b>Age Example</b>
                                            </label>
                                            <div class="col-sm-10 col-xs-12">
                                                <input type="text" id="range_slider_9">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="range_slider_10" class="col-sm-2 col-xs-12 control-label">
                                                <b>Use decorate_both option</b>
                                            </label>
                                            <div class="col-sm-10 col-xs-12">
                                                <input type="text" id="range_slider_10">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="range_slider_11" class="col-sm-2 col-xs-12 control-label">
                                                <b>Postfixes</b>
                                            </label>
                                            <div class="col-sm-10 col-xs-12">
                                                <input type="text" id="range_slider_11">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="range_slider_12" class="col-sm-2 col-xs-12 control-label">
                                                <b>Hide labels</b>
                                            </label>
                                            <div class="col-sm-10 col-xs-12">
                                                <input type="text" id="range_slider_12">
                                            </div>
                                        </div>
                                    </form>


                                </div>
                            </div>
                            <!-- end card-->
                        </div>

                    </div>

                </div>
                <!-- END container-fluid -->

            </div>
            <!-- END content -->

        </div>
        <!-- END content-page -->

        <footer class="footer">
            <span class="text-right">
                Copyright <a target="_blank" href="#">Your Company</a>
            </span>
            <span class="float-right">
                <!-- Copyright footer link MUST remain intact if you download free version. -->
                <!-- You can delete the links only if you purchased the pro or extended version. -->
                <!-- Purchase the pro or extended version with PHP version of this template: https://bootstrap24.com/template/nura-admin-4-free-bootstrap-admin-template -->
                Powered by <a target="_blank" href="https://bootstrap24.com" title="Download free Bootstrap templates"><b>Bootstrap24.com</b></a>
            </span>
        </footer>

        <script src="assets/js/modernizr.min.js"></script>
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/moment.min.js"></script>

        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>

        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>

        <!-- App js -->
        <script src="assets/js/admin.js"></script>

    </div>
    <!-- END main -->

    <!-- BEGIN Java Script for this page -->
    <script src="assets/plugins/ion-rangeslider/ion.rangeSlider.min.js"></script>
    <script>
        $(function() {
            $("#range_slider_1").ionRangeSlider();

            $("#range_slider_2").ionRangeSlider({
                min: 10,
                max: 100,
                from: 45
            });

            $("#range_slider_3").ionRangeSlider({
                type: "double",
                grid: true,
                min: 0,
                max: 100,
                from: 25,
                to: 70,
                prefix: "USD "
            });

            $("#range_slider_4").ionRangeSlider({
                type: "double",
                grid: true,
                min: -1000,
                max: 1000,
                from: -500,
                to: 500
            });

            $("#range_slider_5").ionRangeSlider({
                type: "double",
                grid: true,
                min: -1000,
                max: 1000,
                from: -500,
                to: 500,
                step: 250
            });

            $("#range_slider_6").ionRangeSlider({
                grid: true,
                from: 3,
                values: ["January", "February", "March", "April", "May", "June", "July", "August",
                    "September", "October", "November", "December"
                ]
            });

            $("#range_slider_7").ionRangeSlider({
                grid: true,
                min: 1000,
                max: 1000000,
                from: 200000,
                step: 1000,
                prettify_enabled: true
            });

            $("#range_slider_8").ionRangeSlider({
                min: 100,
                max: 1000,
                from: 550,
                disable: true
            });
            $("#range_slider_9").ionRangeSlider({
                grid: true,
                min: 16,
                max: 60,
                from: 25,
                prefix: "Age ",
                max_postfix: "+"
            });
            $("#range_slider_10").ionRangeSlider({
                type: "double",
                min: 10,
                max: 250,
                from: 100,
                to: 175,
                prefix: "Population: ",
                postfix: " million",
                decorate_both: true
            });
            $("#range_slider_11").ionRangeSlider({
                type: "single",
                grid: true,
                min: -90,
                max: 90,
                from: 0,
                postfix: "�"
            });
            $("#range_slider_12").ionRangeSlider({
                type: "double",
                min: 100,
                max: 200,
                from: 140,
                to: 175,
                hide_min_max: true,
                hide_from_to: true,
                grid: true
            });
        });
    </script>
    <!-- END Java Script for this page -->

</body>

</html>