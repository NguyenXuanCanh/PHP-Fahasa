<!doctype html>
<html lang="en">
<?php
session_start();
require('common.php');

?>

<head>
    <title>Fahasa</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css">
    <link rel="shortcut icon" type="image/x-icon" href="https://cdn0.fahasa.com/media/favicon/default/favicon4.ico" />
    <link rel="stylesheet" href="./assets/css/style.css">
    <style>
        @media (min-width: 1200px) {
            .container {
                max-width: 1300px;
            }
        }
    </style>
</head>

<body>
    <?php
    include('loginForm.php');
    include('overlay.php');
    include('./assets/php/phpScript/productJS.php');
    include("./assets/php/Index/IndexHeader.php");
    include "connect.php";
    ?>
    <div class="container">
        <div class="row pb-2">
            <div class="col-3 text-center productCategory text-white">
                Danh mục sản phẩm
            </div>
            <!-- <div class="col-9 text-center header__menu">
                <a href="#">
                    <img src="./assets/img/ico_flashsale.png" alt="">
                    Flash sale
                </a>
                <a href="#">
                    <img src="./assets/img/ico_dealhot.png" alt="">
                    Hot deal
                </a>
                
            </div> -->
        </div>
    </div>
    <?php
    $IDProduct = $_GET['IDProduct'];
    $result = mysqli_query($conn, "select * from product where IDProduct=" . $IDProduct);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    }
    if ($row['discount'] > 0) {
        $priceSale = ($row['discount'] * $row['price']);
    } else $priceSale = $row['price'];
    $precentSale = $row['discount'] * 100;
    ?>
    <div class="product__wrapper pt-3">
        <div class="product__content container pt-2">
            <div class="row">
                <div class="col-5">
                    <div class="row">
                        <div class="col-2 img__left pr-0">

                        </div>
                        <div class="col-9 img__right pl-0">
                            <img src="<?= $row['img'] ?>" alt="" class="w-100">
                        </div>
                    </div>
                </div>

                <div class="col-7">
                    <div class="row">
                        <div class="book__title display-4">
                            <?= $row['nameProduct'] ?>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-6">
                            <!-- <div class="book__provider">
                                <span>Nhà cung cấp: </span>
                                <span id="bookProvider"></span>
                            </div> -->
                            <div class="book__publishing__company">
                                <span>Nhà xuất bản: </span>
                                <span id="bookPublisingCompany"><?= $row['publisher'] ?></span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="book__author">
                                <span>Tác giả: </span>
                                <span id="bookAuthor"><?= $row['author'] ?></span>
                            </div>
                            <!-- <div class="book__cover">
                                <span>Hình thức bìa: </span>
                                <span id="bookCover"></span>
                            </div> -->
                        </div>
                    </div>
                    <div class="book__rate">
                        <ul class="pl-0  d-inline mr-2">
                            <li class="d-inline">
                                <img src="./assets/img/ico_star_yellow.svg" alt="">
                            </li>
                            <li class="d-inline">
                                <img src="./assets/img/ico_star_yellow.svg" alt="">
                            </li>
                            <li class="d-inline">
                                <img src="./assets/img/ico_star_yellow.svg" alt="">
                            </li>
                            <li class="d-inline">
                                <img src="./assets/img/ico_star_yellow.svg" alt="">
                            </li>
                            <li class="d-inline">
                                <img src="./assets/img/ico_star_yellow.svg" alt="">
                            </li>
                        </ul>
                        <span class="number__of__rate">(7 đánh giá)</span>
                    </div>
                    <div class="row product__price mt-2">
                        <div class="col-6">
                            <span class="sale__price">
                                <?= $priceSale ?>
                            </span>
                            <span class="default__price">
                                <?= $row['price'] ?>
                            </span>
                            <span class="discount__percent">
                                <?= $precentSale ?>%
                            </span>
                        </div>
                        <div class="col-6 text-right pr-5">
                            <img src="./assets/img/ico_heart_empty.png" alt="">
                        </div>
                        <div class="quantity mt-5">
                            <span style="font-size:1.5rem">Số lượng: </span>
                            <div class="d-inline box__quantity">
                                <button onclick="tangGiamSoLuong(-1)" class="btn">-</button>
                                <span id="number__quantity">1</span>
                                <button onclick="tangGiamSoLuong(1)" class="btn">+</button>
                            </div>
                        </div>

                        <div class="row">
                            <div class="add__to__cart" style="position: absolute;
  left: 0;
  top: 70%;">
                                <a href="#">
                                    <i class="fas fa-truck"></i>
                                    Thêm vào giỏ hàng
                                </a>
                            </div>
                            <!-- <div class="view__more">
                            <a href="#">Mua ngay</a>
                        </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <?php
            include("./assets/php/Index/IndexFooter.php");
            ?>
        </div>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <!-- <script src="./assets/js/index.js"></script> -->
</body>

</html>