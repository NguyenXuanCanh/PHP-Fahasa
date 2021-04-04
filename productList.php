<!doctype html>
<html lang="en">

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
</head>

<body>
    <?php
    include("./assets/php/Index/IndexHeader.php");
    ?>
    <div class="container">
        <div class="row pb-2">
            <div class="col-3 text-center productCategory text-white">
                Danh mục sản phẩm
            </div>
            <div class="col-9 text-center header__menu">
                <a href="#">
                    <img src="./assets/img/ico_flashsale.png" alt="">
                    Flash sale
                </a>
                <a href="#">
                    <img src="./assets/img/ico_dealhot.png" alt="">
                    Hot deal
                </a>
                <a href="#">
                    <img src="./assets/img/ico_goiy.png" alt="">
                    Gợi ý cho bạn
                </a>
                <a href="#">
                    <img src="./assets/img/ico_mgg.png" alt="">
                    Mã giảm giá
                </a>
                <a href="#">
                    <img src="./assets/img/ico_bookaward.png" alt="">
                    Bảng xếp hạng
                </a>
                <a href="#">
                    <img src="./assets/img/ico_dacquyen.png" alt="">
                    Thành viên
                </a>
            </div>
        </div>
    </div>
    <div class="product__wrapper pt-3">
        <div class="product__content product__list container pt-2">
            <div class="row ml-3 mt-2">
                <div class="col-3 form-group border-right">
                    <h3>Phiên chợ đồ cũ</h3>
                    <span>Sắp xếp theo</span>
                    <select class="form-control" name="sortBy" id="sortBy">
                        <option value="priceHighToLow">Giá từ cao đến thấp</option>
                        <option value="priceLowToHigh">Giá thừ thấp đến cao</option>
                        <option value="bestSelling">Mua nhiều nhất</option>
                        <option value="bestRating">Được đánh giá tốt nhất</option>
                    </select>
                    <select class="form-control mt-4" name="numberOfProductNeedRender" id="numberOfProductNeedRender">
                        <option value="12">12 sản phẩm</option>
                        <option value="24">24 sản phẩm</option>
                        <option value="48">48 sản phẩm</option>
                    </select>
                </div>
                <div class="col-9">
                    <div class="row" id="renderListProductHere">
                        <div class="col-3">
                            <a href="#">
                                <div class="item flash__sale__item">
                                    <img src="./assets/img/hnplus_1.png" alt="" class="w-100">
                                    <h6>Hack Não Plus - Nạp Siêu Tốc 1550 Từ Vựng Và Collocations Trong 50 Ngày Với Âm Thanh
                                        Tương Tự Và Truyện Chêm (Tái Bản 2021)</h6>
                                    <div class="sale__price">1.000.000đ</div>
                                    <div class="default__price">2.000.000đ</div>

                                </div>
                            </a>
                        </div>
                        <div class="col-3">
                            <a href="#">
                                <div class="item flash__sale__item">
                                    <img src="./assets/img/hnplus_1.png" alt="" class="w-100">
                                    <h6>Hack Não Plus - Nạp Siêu Tốc 1550 Từ Vựng Và Collocations Trong 50 Ngày Với Âm Thanh
                                        Tương Tự Và Truyện Chêm (Tái Bản 2021)</h6>
                                    <div class="sale__price">1.000.000đ</div>
                                    <div class="default__price">2.000.000đ</div>

                                </div>
                            </a>
                        </div>
                        <div class="col-3">
                            <a href="#">
                                <div class="item flash__sale__item">
                                    <img src="./assets/img/hnplus_1.png" alt="" class="w-100">
                                    <h6>Hack Não Plus - Nạp Siêu Tốc 1550 Từ Vựng Và Collocations Trong 50 Ngày Với Âm Thanh
                                        Tương Tự Và Truyện Chêm (Tái Bản 2021)</h6>
                                    <div class="sale__price">1.000.000đ</div>
                                    <div class="default__price">2.000.000đ</div>

                                </div>
                            </a>
                        </div>
                        <div class="col-3">
                            <a href="#">
                                <div class="item flash__sale__item">
                                    <img src="./assets/img/hnplus_1.png" alt="" class="w-100">
                                    <h6>Hack Não Plus - Nạp Siêu Tốc 1550 Từ Vựng Và Collocations Trong 50 Ngày Với Âm Thanh
                                        Tương Tự Và Truyện Chêm (Tái Bản 2021)</h6>
                                    <div class="sale__price">1.000.000đ</div>
                                    <div class="default__price">2.000.000đ</div>

                                </div>
                            </a>
                        </div>
                        <div class="col-3">
                            <a href="#">
                                <div class="item flash__sale__item">
                                    <img src="./assets/img/hnplus_1.png" alt="" class="w-100">
                                    <h6>Hack Não Plus - Nạp Siêu Tốc 1550 Từ Vựng Và Collocations Trong 50 Ngày Với Âm Thanh
                                        Tương Tự Và Truyện Chêm (Tái Bản 2021)</h6>
                                    <div class="sale__price">1.000.000đ</div>
                                    <div class="default__price">2.000.000đ</div>

                                </div>
                            </a>
                        </div>
                        <div class="col-3">
                            <a href="#">
                                <div class="item flash__sale__item">
                                    <img src="./assets/img/hnplus_1.png" alt="" class="w-100">
                                    <h6>Hack Não Plus - Nạp Siêu Tốc 1550 Từ Vựng Và Collocations Trong 50 Ngày Với Âm Thanh
                                        Tương Tự Và Truyện Chêm (Tái Bản 2021)</h6>
                                    <div class="sale__price">1.000.000đ</div>
                                    <div class="default__price">2.000.000đ</div>

                                </div>
                            </a>
                        </div>
                        <div class="col-3">
                            <a href="#">
                                <div class="item flash__sale__item">
                                    <img src="./assets/img/hnplus_1.png" alt="" class="w-100">
                                    <h6>Hack Não Plus - Nạp Siêu Tốc 1550 Từ Vựng Và Collocations Trong 50 Ngày Với Âm Thanh
                                        Tương Tự Và Truyện Chêm (Tái Bản 2021)</h6>
                                    <div class="sale__price">1.000.000đ</div>
                                    <div class="default__price">2.000.000đ</div>

                                </div>
                            </a>
                        </div>
                        <div class="col-3">
                            <a href="#">
                                <div class="item flash__sale__item">
                                    <img src="./assets/img/hnplus_1.png" alt="" class="w-100">
                                    <h6>Hack Não Plus - Nạp Siêu Tốc 1550 Từ Vựng Và Collocations Trong 50 Ngày Với Âm Thanh
                                        Tương Tự Và Truyện Chêm (Tái Bản 2021)</h6>
                                    <div class="sale__price">1.000.000đ</div>
                                    <div class="default__price">2.000.000đ</div>

                                </div>
                            </a>
                        </div>
                        <div class="col-3">
                            <a href="#">
                                <div class="item flash__sale__item">
                                    <img src="./assets/img/hnplus_1.png" alt="" class="w-100">
                                    <h6>Hack Não Plus - Nạp Siêu Tốc 1550 Từ Vựng Và Collocations Trong 50 Ngày Với Âm Thanh
                                        Tương Tự Và Truyện Chêm (Tái Bản 2021)</h6>
                                    <div class="sale__price">1.000.000đ</div>
                                    <div class="default__price">2.000.000đ</div>

                                </div>
                            </a>
                        </div>
                        <div class="col-3">
                            <a href="#">
                                <div class="item flash__sale__item">
                                    <img src="./assets/img/hnplus_1.png" alt="" class="w-100">
                                    <h6>Hack Não Plus - Nạp Siêu Tốc 1550 Từ Vựng Và Collocations Trong 50 Ngày Với Âm Thanh
                                        Tương Tự Và Truyện Chêm (Tái Bản 2021)</h6>
                                    <div class="sale__price">1.000.000đ</div>
                                    <div class="default__price">2.000.000đ</div>

                                </div>
                            </a>
                        </div>
                        <div class="col-3">
                            <a href="#">
                                <div class="item flash__sale__item">
                                    <img src="./assets/img/hnplus_1.png" alt="" class="w-100">
                                    <h6>Hack Não Plus - Nạp Siêu Tốc 1550 Từ Vựng Và Collocations Trong 50 Ngày Với Âm Thanh
                                        Tương Tự Và Truyện Chêm (Tái Bản 2021)</h6>
                                    <div class="sale__price">1.000.000đ</div>
                                    <div class="default__price">2.000.000đ</div>

                                </div>
                            </a>
                        </div>
                        <div class="col-3">
                            <a href="#">
                                <div class="item flash__sale__item">
                                    <img src="./assets/img/hnplus_1.png" alt="" class="w-100">
                                    <h6>Hack Não Plus - Nạp Siêu Tốc 1550 Từ Vựng Và Collocations Trong 50 Ngày Với Âm Thanh
                                        Tương Tự Và Truyện Chêm (Tái Bản 2021)</h6>
                                    <div class="sale__price">1.000.000đ</div>
                                    <div class="default__price">2.000.000đ</div>

                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="pageDivider">
                        <span class="item pageDivider" id="to-prev">
                            <a href="#">
                                < </a>
                        </span>
                        <span class="item pageDivider active"><a href="#">1</a></span>
                        <span class="item pageDivider active"><a href="#">2</a></span>
                        <span class="item pageDivider" id="to-next"><a href="#">></a></span>
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
    <script src="./assets/js/index.js"></script>
</body>

</html>