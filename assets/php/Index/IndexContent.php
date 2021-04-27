<div class="web__content pb-4">
    <div class="container head__content" style="padding:20px 0px">
        <div class="row">
            <div class="col-4">
                <ul class="list-group">
                    <li class="list-group-item active text-center">
                        Danh mục sản phẩm
                    </li>
                    <a href="timkiem.php?select=trongnuoc">
                        <li class="list-group-item" style="position: relative;">
                            Sách trong nước
                            <span>
                                <img src="./assets/img/right_menu.png" alt="right arrow" style="position: absolute;">
                            </span>
                        </li>
                    </a>
                    <a href="timkiem.php?select=nuocngoai">
                        <li class="list-group-item" style="position: relative;">Foreign book
                            <span>
                                <img src="./assets/img/right_menu.png" alt="right arrow" style="position: absolute;">
                            </span>
                        </li>
                    </a>
                    <a href="timkiem.php?select=ngontinh">
                        <li class="list-group-item" style="position: relative;">Sách ngôn tình - lãng mạn
                            <span>
                                <img src="./assets/img/right_menu.png" alt="right arrow" style="position: absolute;">
                            </span>
                        </li>
                    </a>
                    <a href="timkiem.php?select=giatgan">
                        <li class="list-group-item" style="position: relative;">Sách giật gân - trinh thám
                            <span>
                                <img src="./assets/img/right_menu.png" alt="right arrow" style="position: absolute;">
                            </span>
                        </li>
                    </a>
                    <a href="timkiem.php?select=tieuthuyet">
                        <li class="list-group-item" style="position: relative;">Tiểu thuyết
                            <span>
                                <img src="./assets/img/right_menu.png" alt="right arrow" style="position: absolute;">
                            </span>
                        </li>
                    </a>
                    <a href="timkiem.php?select=khamkhao">
                        <li class="list-group-item" style="position: relative;">Sách kham khảo
                            <span>
                                <img src="./assets/img/right_menu.png" alt="right arrow" style="position: absolute;">
                            </span>
                        </li>
                    </a>
                </ul>
            </div>
            <div class="col-8">
                <div class="carousel__banner">
                    <div class="banner firstBanner">
                        <img src="./assets/img/Banner_920x420_02.jpg" alt="fbanner" class="w-100">
                    </div>
                    <div class="banner secondBanner">
                        <img src="./assets/img/moca-920x420.jpg" alt="sbanner" class="w-100">
                    </div>
                    <div class="banner thirdBanner">
                        <img src="./assets/img/Zenbook-920x420.png" alt="tbanner" class="w-100">
                    </div>
                    <div class="banner thirdBanner">
                        <img src="./assets/img/TrangComicManga_main_920x420.jpg" alt="fobanner" class="w-100">
                    </div>
                    <div class="banner thirdBanner">
                        <img src="./assets/img/210318-brd-920x420.jpg" alt="fibanner" class="w-100">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container discount__banner" style="padding:20px 0px">
        <div class="row">
            <div class="col-3">
                <a href="#">
                    <img src="./assets/img/DongA-310x210.png" alt="" class="w-100">
                </a>
            </div>
            <div class="col-3">
                <a href="#">
                    <img src="./assets/img/Zenbook-310x210.png" alt="" class="w-100">
                </a>
            </div>
            <div class="col-3">
                <a href="#">
                    <img src="./assets/img/TrangVPP-DCHS.310x210.png" alt="" class="w-100">

                </a>
            </div>
            <div class="col-3">
                <a href="#">
                    <img src="./assets/img/vnpay_qrfhs2_310x210.jpg" alt="" class="w-100">

                </a>
            </div>
        </div>
    </div>
    <div class="icon__menu container">
        <ul class="row" style="padding-left:0">
            <li class="col-6 border-right">
                <a href="#flashSale">
                    <img src="./assets/img/ico_flashsale.png" alt="" style="height:100px">
                    <p>Flash sale</p>
                </a>
            </li>
            <li class="col-6">
                <a href="#fahasaDeal">
                    <img src="./assets/img/ico_PCSC_hot.png" alt="" style="height:100px">
                    <p>Phiên Chợ
                        Sách Cũ</p>
                </a>
            </li>
            <!-- <li class="col-2">
                <a href="#">
                    <img src="./assets/img/ico_dealhot.png" alt="" class="w-50">
                    <p>Deal hot</p>
                </a>
            </li>
            <li class="col-2">
                <a href="#">
                    <img src="./assets/img/ico_goiy.png" alt="" class="w-50">
                    <p>Gợi ý cho bạn</p>
                </a>
            </li>
            <li class="col-2">
                <a href="#">
                    <img src="./assets/img/ico_mgg.png" alt="" class="w-50">
                    <p>Mã giảm giá</p>
                </a>
            </li>
            <li class="col-2">
                <a href="#">
                    <img src="./assets/img/ico_manga.png" alt="" class="w-50">
                    <p>Manga - Comic</p>
                </a>
            </li> -->
        </ul>
    </div>
    <?php include "./connect.php"; ?>
    <div id="flashSale" class="flash__sale container mt-4">
        <div class="flash__sale__head">
            <img src="./assets/img/ico_flashsale.png" alt="">
            <span class="black__title">Flash Sale |</span>
            <span>Kết thúc trong </span>
            <span id="countDownSale"></span>
        </div>

        <div class="flash__sale__content">
            <?php
            $sql = "select * from product where old = 0";
            $result = mysqli_query($conn, $sql);
            $count = 0;
            ?>
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                if ($row['discount'] > 0) {
                    $priceSale = $row['discount'] * $row['price'];
                } else $priceSale = $row['price'];
                $percentSell = ($row['amountSell'] / $row['amount']) * 100;
            ?>
                <a href="product.php?IDProduct=<?= $row['IDProduct'] ?>">
                    <div class="item flash__sale__item">
                        <img src="<?= $row['img'] ?>" alt="" class="w-100">
                        <h6><?= $row['nameProduct'] ?></h6>
                        <div class="sale__price"><?= $priceSale ?></div>
                        <div class="default__price"><?= $row['price'] ?></div>
                        <div class="progress"><span class="progress-value"><?= $row['amountSell'] ?></span>
                            <div class="progress-bar" role="progressbar" style="width: <?= $percentSell ?>%;" aria-valuenow="<?= $percentSell ?>" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </a>

            <?php } ?>
        </div>
        <div class="view__more ">
            <a href="productList.php?type=flashsale">Xem thêm</a>
        </div>
    </div>
    <div id="fahasaDeal" class="flash__sale container mt-4">
        <div class="flash__sale__head">
            <img src="./assets/img/ico_PCSC_hot.png" alt="">
            <span class="black__title">Phiên chợ sách cũ</span>
        </div>
        <div class="flash__sale__content">
            <?php
            $sql = "select * from product where old = 1";
            $result = mysqli_query($conn, $sql);
            $count = 0;
            ?>
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                if ($row['discount'] > 0) {
                    $priceSale = $row['discount'] * $row['price'];
                } else $priceSale = $row['price'];
                $percentSell = ($row['amountSell'] / $row['amount']) * 100;
            ?>
                <a href="product.php?IDProduct=<?= $row['IDProduct'] ?>">
                    <div class="item flash__sale__item">
                        <img src="<?= $row['img'] ?>" alt="" class="w-100">
                        <h6><?= $row['nameProduct'] ?></h6>
                        <div class="sale__price"><?= $priceSale ?></div>
                        <div class="default__price"><?= $row['price'] ?></div>
                        <div class="progress"><span class="progress-value"><?= $row['amountSell'] ?></span>
                            <div class="progress-bar" role="progressbar" style="width: <?= $percentSell ?>%;" aria-valuenow="<?= $percentSell ?>" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </a>

            <?php } ?>
        </div>
        <div class="view__more ">
            <a href="productList.php?type=pcsc">Xem thêm</a>
        </div>
    </div>
    <!-- <div id="rating" class="rating flash__sale container mt-4">
        <div class="flash__sale__head">
            <span class="black__title">Bảng xếp hạng Fahasa</span>
        </div>
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="pills-profile1-tab" data-toggle="pill" href="#pills-profile1" role="tab" aria-controls="pills-profile1" aria-selected="false">Manga - Comic</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-profile2-tab" data-toggle="pill" href="#pills-profile2" role="tab" aria-controls="pills-profile2" aria-selected="false">Tâm lý - Kỹ năng sống</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-profile1-tab" data-toggle="pill" href="#pills-profile3" role="tab" aria-controls="pills-profile1" aria-selected="false">Manga - Comic</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-profile2-tab" data-toggle="pill" href="#pills-profile4" role="tab" aria-controls="pills-profile2" aria-selected="false">Tâm lý - Kỹ năng sống</a>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade active show" id="pills-profile1" role="tabpanel" aria-labelledby="pills-profile1-tab">
                <div class="row">
                    <div class="col-5">
                        <div class="row rating__item pb-3 border-right" onclick="renderContentItem('ahjgsdjhasdgh')">
                            <div class="col-2 rank">
                                1
                            </div>
                            <div class="col-10 title">
                                <div class="row">
                                    <div class="col-3">
                                        <img src="./assets/img/image_198719.jpg" alt="">
                                    </div>
                                    <div class="col-8">
                                        <h6>Từ điển tiếng "asdyasdyjt"</h6>
                                        <p class="author">khotudien</p>
                                        <div id="vote" class="vote">6969 điểm</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row rating__item pb-3 border-right" onclick="renderContentItem('asdhajstdg')">
                            <div class="col-2 rank">
                                1
                            </div>
                            <div class="col-10 title">
                                <div class="row">
                                    <div class="col-3">
                                        <img src="./assets/img/image_198719.jpg" alt="">
                                    </div>
                                    <div class="col-8 ">
                                        <h6>Từ điển tiếng "anh"</h6>
                                        <p class="author">khotudien</p>
                                        <div id="vote" class="vote">6969 điểm</div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row rating__item pb-3 border-right" onclick="renderContentItem('chos')">
                            <div class="col-2 rank">
                                1
                            </div>
                            <div class="col-10 title">
                                <div class="row">
                                    <div class="col-3">
                                        <img src="./assets/img/image_198719.jpg" alt="">
                                    </div>
                                    <div class="col-8 ">
                                        <h6>Từ điển tiếng "chos"</h6>
                                        <p class="author">khotudien</p>
                                        <div id="vote" class="vote">6969 điểm</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row rating__item pb-3 border-right" onclick="renderContentItem('máng')">
                            <div class="col-2 rank">
                                1
                            </div>
                            <div class="col-10 title">
                                <div class="row">
                                    <div class="col-3">
                                        <img src="./assets/img/image_198719.jpg" alt="">
                                    </div>
                                    <div class="col-8 ">
                                        <h6>Từ điển tiếng "em"</h6>
                                        <p class="author">khotudien</p>
                                        <div id="vote" class="vote">6969 điểm</div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row rating__item pb-3 border-right" onclick="renderContentItem('tăm')">
                            <div class="col-2 rank">
                                1
                            </div>
                            <div class="col-10 title">
                                <div class="row">
                                    <div class="col-3">
                                        <img src="./assets/img/image_198719.jpg" alt="">
                                    </div>
                                    <div class="col-8">
                                        <h6>Từ điển tiếng "em"</h6>
                                        <p class="author">khotudien</p>
                                        <div id="vote" class="vote">6969 điểm</div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-7 more__info" id="ratingItemInfo">

                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-profile2" role="tabpanel" aria-labelledby="pills-profile2-tab">
                <div class="flash__sale__content">
                    2
                </div>
            </div>
            <div class="tab-pane fade" id="pills-profile3" role="tabpanel" aria-labelledby="pills-profile3-tab">
                <div class="flash__sale__content">
                    3
                </div>
            </div>
            <div class="tab-pane fade" id="pills-profile4" role="tabpanel" aria-labelledby="pills-profile4-tab">
                <div class="flash__sale__content">
                    4
                </div>
            </div>
        </div>
        <div class="view__more ">
            <a href="#">Xem thêm</a>
        </div>
    </div> -->
</div>