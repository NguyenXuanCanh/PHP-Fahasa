<!DOCTYPE html>
<html>

<head>
    <title>Fahasa</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <meta charset="utf-8">
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
    include('connect.php');
    session_start();
    require('common.php');
    ?>
    <?php
    if (isset($_GET['search'])) {
        $search = $_GET['search'];
        if (isset(($_GET['select']))) {
            $sql = "SELECT * from product where category LIKE '%$search%'";
        } elseif (isset($_GET['type'])) {
        } else {
            $sql = "SELECT * FROM product WHERE nameProduct LIKE '%$search%'";
        }
        // var_dump($sql);
        $KQ = $mysqli->query($sql);

        if ($KQ->num_rows > 0) {
            include("./assets/php/Index/IndexHeader.php");
            include('loginForm.php');
            include('overlay.php');
    ?>
            <div class="product__wrapper pt-3">
                <div class="product__content product__list container pt-2">
                    <div class="row ml-3 mt-2">
                        <div class="col-3 form-group border-right">
                            <?php
                            if (!isset(($_GET['select']))) {
                            ?>
                                <h3>Tìm kiếm theo "<?php echo $search ?>"</h3>
                            <?php
                            } else {
                                switch ($search) {
                                    case 'trongnuoc':
                                        $content = "trong nước";
                                    case 'nuocngoai':
                                        $content = "nước ngoài";
                                    case 'trinhtham':
                                        $content = "trinh thám";
                                    case 'ngontinh':
                                        $content = "ngôn tình";
                                    case 'tieuthuyet':
                                        $content = "tiểu thuyết";
                                    case 'khamkhao':
                                        $content = "kham khảo";
                                }
                            ?>
                                <h3>Sách <?php echo $content ?></h3>
                            <?php
                            }
                            ?>
                            <span>Sắp xếp theo</span>
                            <?php
                            $isSelect = isset($_GET['select']);
                            if ($isSelect) {
                                $selectLink = "select&";
                            } else {
                                $selectLink = "";
                            }
                            ?>
                            <form action="timkiem.php?<?= $selectLink ?>search=<?= $search ?>&filter" method="post">
                                <select class="form-control" name="sortBy" id="sortBy">
                                    <option value="priceHighToLow">Giá từ cao đến thấp</option>
                                    <option value="priceLowToHigh">Giá thừ thấp đến cao</option>
                                </select>
                                <select class="form-control mt-4" name="numberOfProductNeedRender" id="numberOfProductNeedRender">
                                    <option value="12">12 sản phẩm</option>
                                    <option value="20">20 sản phẩm</option>
                                </select>
                                <button type="submit">Filter</button>
                            </form>
                            <!-- <div class="form-group">
                                <input type="text" name="search_box" id="search_box" class="form-control" placeholder="Type your search query here" />
                            </div> -->
                            <?php //include("dynamic_content.php") 
                            ?>
                        </div>
                        <div class="col-9">
                            <div class="row" id="renderListProductHere">
                                <?php
                                // if (isset($_GET['filter'])) var_dump($_GET['filter']);
                                if (isset($_POST['numberOfProductNeedRender'])) {
                                    $_SESSION['ItemOnePage'] = $_POST['numberOfProductNeedRender'];
                                    // var_dump($_POST['numberOfProductNeedRender']);
                                }
                                if (isset($_POST['sortBy'])) {
                                    if ($_POST['sortBy'] == "priceHighToLow") $_SESSION['sortPrice'] = 1;
                                    else $_SESSION['sortPrice'] = -1;
                                }
                                $pageCurrent = !empty($_GET['page']) ? $_GET['page'] : 1;
                                $itemPerPage = !empty($_SESSION['ItemOnePage']) ? $_SESSION['ItemOnePage'] : 12;
                                $offset = ($pageCurrent - 1) * $itemPerPage;
                                $sortPrice = !empty($_SESSION['sortPrice']) ? $_SESSION['sortPrice'] : -1;
                                if (isset($_GET['select'])) {
                                    if ($sortPrice == -1) {
                                        $sql = "SELECT * from product where category LIKE '%$search%' order by price ASC limit " . $itemPerPage . " OFFSET " . $offset;
                                    } else {
                                        $sql = "SELECT * from product where category LIKE '%$search%' order by price DESC limit " . $itemPerPage . " OFFSET " . $offset;
                                    }
                                } else {
                                    if ($sortPrice == -1) {
                                        $sql = "SELECT * from product where nameProduct LIKE '%$search%' order by price ASC limit " . $itemPerPage . " OFFSET " . $offset;
                                    } else {
                                        $sql = "SELECT * from product where nameProduct LIKE '%$search%' order by price DESC limit " . $itemPerPage . " OFFSET " . $offset;
                                    }
                                }
                                $result = $mysqli->query($sql);
                                $totalProduct = $mysqli->query($sql);
                                $KQ = $KQ->num_rows;
                                $totalPage = ceil($KQ / $itemPerPage);
                                ?>
                                <?php if (mysqli_num_rows($result) > 0) { ?>
                                    <?php while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                        <?php
                                        if ($row['discount']) {
                                            $priceSale =  (1 - $row['discount']) * $row['price'];
                                        } else $priceSale = $row['price'];
                                        ?>
                                        <div class="col-3">
                                            <a href="./product.php?IDProduct=<?= $row['IDProduct'] ?>">
                                                <div class="item flash__sale__item">
                                                    <img src="<?= $row['img'] ?>" alt="" class="w-100">
                                                    <h6><?= $row['nameProduct'] ?></h6>
                                                    <div class="sale__price"><?= $priceSale ?></div>
                                                    <div class="default__price"><?= $row['price'] ?></div>
                                                </div>
                                            </a>
                                        </div>
                                    <?php } ?>
                                <?php } ?>
                            </div>
                            <div class="pageDivider text-center">
                                <?php if (!isset($_GET['select'])) { ?>
                                    <?php $prevPage = $pageCurrent - 1 ?>
                                    <?php if ($pageCurrent > 1) { ?>
                                        <span class="item" id="to-prev">
                                            <a href="timkiem.php?search=<?php echo $search ?>&page=<?= $prevPage ?>">
                                                < </a>
                                        </span>
                                    <?php } ?>
                                    <?php for ($i = 1; $i <= $totalPage; $i++) { ?>
                                        <?php if ($i != $pageCurrent) { ?>
                                            <?php if ($i > $pageCurrent - 3 && $i < $pageCurrent + 3) { ?>
                                                <span class="item active"><a href="timkiem.php?search=<?php echo $search ?>&page=<?= $i ?>"><?= $i ?></a></span>
                                            <?php } ?>
                                        <?php } else { ?>
                                            <span class="item active"><a href="timkiem.php?search=<?php echo $search ?>&page=<?= $i ?>"><strong><?= $i ?></strong></a></span>
                                        <?php } ?>
                                    <?php } ?>
                                    <?php if ($pageCurrent < $totalPage) {
                                        $nextPage = $pageCurrent + 1;
                                    ?>
                                        <span class="item" id="to-next"><a href="timkiem.php?search=<?php echo $search ?>&page=<?= $nextPage ?>">></a></span>
                                    <?php }
                                } else { ?>
                                    <?php $prevPage = $pageCurrent - 1 ?>
                                    <?php if ($pageCurrent > 1) { ?>
                                        <span class="item" id="to-prev">
                                            <a href="timkiem.php?select&search=<?php echo $search ?>&page=<?= $prevPage ?>">
                                                < </a>
                                        </span>
                                    <?php } ?>
                                    <?php for ($i = 1; $i <= $totalPage; $i++) { ?>
                                        <?php if ($i != $pageCurrent) { ?>
                                            <?php if ($i > $pageCurrent - 3 && $i < $pageCurrent + 3) { ?>
                                                <span class="item active"><a href="timkiem.php?select&search=<?php echo $search ?>&page=<?= $i ?>"><?= $i ?></a></span>
                                            <?php } ?>
                                        <?php } else { ?>
                                            <span class="item active"><a href="timkiem.php?select&search=<?php echo $search ?>&page=<?= $i ?>"><strong><?= $i ?></strong></a></span>
                                        <?php } ?>
                                    <?php } ?>
                                    <?php if ($pageCurrent < $totalPage) {
                                        $nextPage = $pageCurrent + 1;
                                    ?>
                                        <span class="item" id="to-next"><a href="timkiem.php?select&search=<?php echo $search ?>&page=<?= $nextPage ?>">></a></span>
                                <?php }
                                } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        } else {
            include("./assets/php/Index/IndexHeader.php");
            include('loginForm.php');
            include('overlay.php');
        ?>
            <h1 class="lg-title">Từ khóa: "<?php echo $search ?>"</h1>

            <p class="lg-title" style="font-size:2rem">Không tìm thấy sp</p>

    <?php
        }
        include("./assets/php/Index/IndexFooter.php");
        include('./assets/php/phpScript/indexJS.php');
    }
    ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script type="text/javascript">
        $('.carousel__banner').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            // arrows: false,
            infinite: true,
            speed: 500,
            autoplay: true,
            autoplaySpeed: 4000,
            fade: true,
        });
        $('.flash__sale__content').slick({
            slidesToShow: 5,
            slidesToScroll: 5,
            arrows: false,
        });
        $('.swiper').slick({
            slidesToShow: 9,
            slidesToScroll: 9,
            arrows: false,
            infinite: false,
        });
    </script>
    <script>
        // let filterData = [];

        // function refreshSearchResult() {
        //     let arrSoLuong = (document.getElementsByClassName("number__quantity"));
        //     arrSoLuong[index].value = parseInt(arrSoLuong[index].value);
        //     let temp = cong;
        //     temp += parseInt(arrSoLuong[index].value);
        //     if (arrSoLuong[index].value == 0) return;
        //     document.getElementsByClassName("number__quantity")[index].value = temp;
        //     $.ajax({
        //         url: './assets/php/cart/plusOne.php',
        //         type: 'post',
        //         data: {
        //             data: {
        //                 index,
        //                 cong,
        //             }
        //         },
        //         success: function(result) {
        //             document.getElementsByClassName("gia")[index].innerHTML = (result);
        //         }
        //     });
        // }
    </script>
</body>

</html>