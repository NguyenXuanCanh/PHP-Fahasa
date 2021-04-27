<header>
    <div class="discountBar">
        <div class="container">
            <img class="w-100" src="./assets/img/brd-1263x60.jpg" alt="discountImg">
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="./index.php">
                <img class="fhs__logo" src="./assets/img/fahasa-logo.png" alt="">
            </a>
            <form class="form-inline my-2 my-lg-0" action="timkiem.php" method="get">
                <input class="form-control mr-sm-2 input__zone no-outline" type="search" name="search" placeholder="Tìm kiếm..." aria-label="Search">
                <button class="search__btn btn" style="top: 5%;
      right: 0%;">
                    <i class="fas fa-search"></i>
                </button>
                <!-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> -->
            </form>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <div class="nav__button pl-4" id="navNoti">
                            <i class="fas fa-bell"></i>
                            <span class="nav-link" style="padding:0; padding-left:15px" href="#">Thông báo</span>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="nav__button pl-3" id="navCart">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fas fa-shopping-cart"></i>
                                <span class="nav-link" style="padding:0; padding-left:15px" href="#">Giỏ hàng</span>
                                <!-- <b class="caret"></b> -->
                                <style>
                                    a.dropdown-toggle::after {
                                        display: none;
                                    }

                                    .dropdown-menu {
                                        text-transform: none;
                                        font-size: 0.8rem;

                                    }

                                    .dropdown-menu li {
                                        padding: 10px;
                                        /* text-align: right; */
                                    }
                                </style>
                            </a>
                            <ul class="dropdown-menu" style="left:65%">
                                <!-- gio hang -->
                                <li class="row">
                                    <span class="col-4">
                                        <img src="https://picsum.photos/100/100" alt="hinhAnhSP" class="w-100">

                                    </span>
                                    <span class="col-8">
                                        <span class="textProductName">
                                            tên sp
                                        </span>
                                    </span>
                                </li>

                                <li class="row">
                                    <span class="thanh__tien">
                                        Tổng tiền: <?php echo "tổng tiền" ?>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <?php
                        // var_dump(isLogined());
                        if (isLogined()) {
                        ?>
                            <div class=" nav__button dropdown pl-3" id="navUser">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fas fa-user"></i>
                                    <span class="nav-link" style="padding:0; padding-left:15px" href="#"><?php echo ($_SESSION['username']) ?></span>
                                    <!-- <b class="caret"></b> -->
                                    <style>
                                        a.dropdown-toggle::after {
                                            display: none;
                                        }

                                        .dropdown-menu {
                                            text-transform: none;
                                            font-size: 0.8rem;

                                        }

                                        .dropdown-menu li {
                                            padding: 10px;
                                            /* text-align: right; */
                                        }
                                    </style>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="thongtinuser.php">Thông tin tài khoản</a></li>
                                    <li><a href="logout.php">Đăng xuất</a></li>
                                </ul>
                            </div>
                        <?php
                        } else {
                        ?>
                            <div class="nav__button pl-3" id="navLogin">
                                <i class="fas fa-sign-in-alt"></i>
                                <span class="nav-link" style="padding:0; padding-left:15px" href="#">Đăng nhập</span>
                            </div>
                        <?php
                        }
                        ?>

                    </li>
                    <!-- <li class="nav-item">
                        <div class="nav__button pl-3" id="navCart">
                            <i class="fas fa-shopping-cart"></i>
                            <span class="nav-link" style="padding:0; padding-left:15px" href="#">Giỏ hàng</span>
                        </div>

                    </li> -->
                </ul>
            </div>
        </div>
    </nav>
</header>