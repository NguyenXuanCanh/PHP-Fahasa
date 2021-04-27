<!DOCTYPE html>
<html lang="en">

<head>
    <title>Nura Admin - Blog</title>
    <meta name="description" content="Blog posts | Nura Admin">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Your website">

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <!-- Font Awesome CSS -->
    <link href="assets/font-awesome/css/all.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
</head>
<?php
session_start();
require('../common.php');
include("../connect.php");
$cateSql = "SELECT nameCategory FROM category";
$cateResult = $mysqli->query($cateSql);

if (isset($_GET["updateBook"])) {
    // $name = ($_POST["updateName"]);
    // $isContained = $mysqli->query("SELECT * FROM user WHERE taikhoan='$name'");
    // if (!($isContained->num_rows)) {
    //     $resultUpdate = false;
    // } else {
    //     if (($_POST["password"])) {
    //         $email = ($_POST["email"]);
    //         $password = ($_POST["password"]);
    //         $permission = ($_POST["permission"]);
    //         $active = ($_POST["active"]);
    //         $updateSql = "UPDATE user SET email='$email',matkhau='$password', permission='$permission', active='$active' WHERE taikhoan='$name'";
    //         $resultUpdate = $mysqli->query($updateSql);
    //     } else {
    //         $email = ($_POST["email"]);
    //         $permission = ($_POST["permission"]);
    //         $active = ($_POST["active"]);
    //         $updateSql = "UPDATE user SET email='$email', permission='$permission', active='$active' WHERE taikhoan='$name'";
    //         $resultUpdate = $mysqli->query($updateSql);
    //     }
    // }
    $bookName = ($_POST['bookName']);
    $isContained = $mysqli->query("SELECT * FROM product WHERE nameProduct='$bookName'");
    if (!($isContained->num_rows)) {
        $resultUpdate = false;
    } else {
        $bookPrice = $_POST['bookPrice'];
        $bookDiscount = $_POST['bookDiscount'];
        $bookStatus = $_POST['bookStatus'];
        $bookCate = $_POST['bookCate'];
        $updateSql = "UPDATE product SET price='$bookPrice',discount='$bookDiscount', old='$bookStatus', category='$bookCate' WHERE nameProduct='$bookName'";
        $resultUpdate = $mysqli->query($updateSql);
    }
}
if (isset($_GET["deleteBook"])) {
    $bookName = ($_POST["deleteName"]);
    $isContained = $mysqli->query("SELECT * FROM product WHERE nameProduct='$bookName'");
    if (!($isContained->num_rows)) {
        $resultDelete = false;
    } else {
        $deleteSql = "DELETE FROM product WHERE nameProduct='$bookName'";
        $resultDelete = $mysqli->query($deleteSql);
    }
}
?>


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

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form action="blog.php?updateBook" method="post" class="form-group">
                        <div class="modal-header ">
                            <h5 class="modal-title" id="exampleModalLabel">Chỉnh sửa</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div>
                                <label>Tên sách</label>
                                <input class="form-control" name="bookName" id="bookName" type="text" value="" readonly="readonly" style="color: #787878;">
                            </div>
                            <div>
                                <label>Giá sách</label>
                                <input class="form-control" name="bookPrice" id="bookPrice" type="text" value="">
                            </div>
                            <div>
                                <label>Giảm giá</label>
                                <input class="form-control" name="bookDiscount" id="bookDiscount" type="text" value="">
                            </div>
                            <div>
                                <label>Tình trạng sách</label>
                                <input class="form-control" name="bookStatus" id="bookStatus" type="text" value="">
                            </div>
                            <div>
                                <style>
                                    .select2-search--dropdown {
                                        display: none;
                                    }
                                </style>
                                <label>Thể loại</label>
                                <select class="form-control" name="bookCate" id="bookCate" class="form-control">
                                    <option value="" selected disabled hidden> --</option>
                                    <?php while ($row = mysqli_fetch_assoc($cateResult)) { ?>
                                        <option value=<?= $row['nameCategory'] ?>><?= $row["nameCategory"] ?></option>
                                    <?php } ?>
                                </select>
                                <!-- <input name="bookCate" id="bookCate" type="text" value=""> -->
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                            <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal fade custom-modal" tabindex="-1" role="dialog" aria-labelledby="modal_delete_book" aria-hidden="true" id="modal_delete_book">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="blog.php?deleteBook" method="post" enctype="multipart/form-data">

                        <div class="modal-header">
                            <h5 class="modal-title">Xóa sách</h5>
                            <button type="button" class="close" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span>
                                <span class="sr-only">Close</span>
                            </button>
                        </div>

                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Tên sách</label>
                                        <input class="form-control modalInput" name="deleteName" type="text" required readonly="readonly" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Bạn có chắc muốn xóa sách này</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-danger">Xóa</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="content-page">

            <!-- Start content -->
            <div class="content">

                <div class="container-fluid">

                    <div class="row">
                        <div class="col-xl-12">
                            <div class="breadcrumb-holder">
                                <h1 class="main-title float-left">Danh sách sách</h1>
                                <ol class="breadcrumb float-right">
                                    <li class="breadcrumb-item">Home</li>
                                    <li class="breadcrumb-item active">Danh sách sách</li>
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
                                    <span class="pull-right"><a href="blog-add.php" class="btn btn-primary btn-sm"><i class="fas fa-plus" aria-hidden="true"></i> Add new post</a></span>
                                    <h3><i class="far fa-file-alt"></i> Danh sách sách</h3>
                                </div>
                                <!-- end card-header -->
                                <?php
                                if (isset($_GET['updateBook'])) {
                                    if ($resultUpdate) {
                                        echo "<h1 class='mt-4 text-center'>Cập nhật thành công <a href='blog.php'>Tải lại trang</a></h1>";
                                    } else {
                                        echo "<h1 class='mt-4 text-center text-danger'>Cập nhật thất bại <a href='blog.php'>Tải lại trang</a></h1>";
                                    }
                                }
                                ?>
                                <?php
                                if (isset($_GET["deleteBook"])) {
                                    if ($resultDelete) {
                                        echo "<h1 class='mt-4 text-center'>Xóa thành công <a href='blog.php'>Tải lại trang</a></h1>  ";
                                        // var_dump($isContained);
                                    } else {
                                        echo "<h1 class='mt-4 text-center text-danger'>Xóa thất bại <a href='blog.php'>Tải lại trang</a></h1> ";
                                        // var_dump($isContained);
                                    }
                                }
                                ?>
                                <div class="card-body">

                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th style="min-width: 300px">Thông tin cơ bản</th>
                                                    <th style="width:110px">Số lượng</th>
                                                    <th style="min-width:110px">Thao tác</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $sql = "SELECT * FROM product";
                                                $result = $mysqli->query($sql);
                                                ?>
                                                <?php
                                                $count = 0;
                                                while ($row = mysqli_fetch_assoc($result)) { ?>
                                                    <tr>
                                                        <form action="blog.php" action="post">
                                                            <td>
                                                                <div class="blog_list"><img class="img-fluid d-none d-lg-block" alt="image" src="<?= $row['img'] ?>" /></div>
                                                                <h4 class="bookName"><?= $row['nameProduct'] ?></h4>
                                                                <p>Được thêm bởi <b><?php echo ($_SESSION['username']) ?></b> <?php echo date("i:h:sa") . " " . date("Y/m/d") ?></p>
                                                                <div class="mt-1">
                                                                    Giá gốc: <span class="bookPrice"><?= $row['price'] ?></span>
                                                                </div>
                                                                <div class="mt-1">
                                                                    Giảm giá: <span class="bookDiscount"><?= $row['discount'] ?></span>
                                                                </div>
                                                                <div class="mt-1">
                                                                    Thể loại: <span class="bookCate"><?= $row['category'] ?></span>
                                                                </div>
                                                                <div class="mt-1">
                                                                    Tình trạng: <span class="bookStatus"><?= $row['old'] ?></div>
                                                            </td>
                                                            <td>
                                                                <div>Tổng số: <?= $row['amount'] ?></div>
                                                                <div>Đã bán: <?= $row['amountSell'] ?></div>
                                                                <div class="border-top mt-5 pt-1">Còn lại: <?= $row['amount'] - $row['amountSell'] ?></div>
                                                            </td>

                                                            <td>
                                                                <button type="button" class="btn btn-primary btn-sm btn-block" data-toggle="modal" data-target="#exampleModal" onclick="editBook(<?= $count ?>)"><i class="far fa-edit"></i> Edit</button>
                                                                <button type="button" class="btn btn-danger btn-sm  btn-block" data-toggle="modal" data-target="#modal_delete_book" onclick="deleteBook(<?= $count ?>)">
                                                                    <i class="fas fa-trash"></i> Delete</button>
                                                            </td>
                                                        </form>
                                                    </tr>
                                                <?php
                                                    $count++;
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <script>
            $('select').select2({
                createTag: function(params) {
                    // Don't offset to create a tag if there is no @ symbol
                    if (params.term.indexOf('@') === -1) {
                        // Return null to disable tag creation
                        return null;
                    }

                    return {
                        id: params.term,
                        text: params.term
                    }
                }
            });
        </script>
        <script>
            function editBook(index) {
                // event.target.classList.add("d-none");
                let bookName = document.getElementsByClassName("bookName");
                let bookPrice = document.getElementsByClassName("bookPrice");
                let bookDiscount = document.getElementsByClassName("bookDiscount");
                let bookStatus = document.getElementsByClassName("bookStatus");
                let bookCate = document.getElementsByClassName("bookCate");
                let submitBtn = document.getElementsByClassName("submitBtn");
                let modal = document.getElementById("exampleModal");

                document.getElementById("bookName").value = bookName[index].innerText;
                document.getElementById("bookPrice").value = bookPrice[index].innerText;
                document.getElementById("bookDiscount").value = bookDiscount[index].innerText;
                document.getElementById("bookStatus").value = bookStatus[index].innerText;
                document.getElementById("bookCate").value = bookCate[index].innerText;

                submitBtn[index].classList.remove("d-none");
                submitBtn[index].classList.add("d-block");

            }

            function deleteBook(index) {
                let modalInput = document.getElementsByClassName("modalInput");
                let arrBookName = document.getElementsByClassName("bookName");
                // console.log(arrTaiKhoan);
                modalInput[0].value = arrBookName[index].innerText;
            }
        </script>

    </div>
    <!-- END main -->

</body>

</html>