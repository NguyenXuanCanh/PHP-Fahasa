<?php include "./connect.php"; ?>

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
        </div>
    </div>
</div>
<div class="product__wrapper pt-3">
    <div class="product__content product__list container pt-2">
        <div class="row ml-3 mt-2">
            <div class="col-3 form-group border-right">
                <h3>Flash sale</h3>
                <span>Sắp xếp theo</span>
                <form action="./productList.php" method="GET">
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
            </div>
            <div class="col-9">
                <div class="row" id="renderListProductHere">
                    <?php
                    if (isset($_GET['numberOfProductNeedRender'])) {
                        $_SESSION['ItemOnePage'] = $_GET['numberOfProductNeedRender'];
                    }
                    if (isset($_GET['sortBy'])) {
                        if ($_GET['sortBy'] == "priceHighToLow") $_SESSION['sortPrice'] = 1;
                        else $_SESSION['sortPrice'] = -1;
                    }
                    $pageCurrent = !empty($_GET['page']) ? $_GET['page'] : 1;
                    $itemPerPage = !empty($_SESSION['ItemOnePage']) ? $_SESSION['ItemOnePage'] : 12;
                    $offset = ($pageCurrent - 1) * $itemPerPage;
                    // var_dump($offset);
                    $sortPrice = !empty($_SESSION['sortPrice']) ? $_SESSION['sortPrice'] : -1;
                    if ($sortPrice == -1) {
                        $sql = "SELECT * from product where discount>0.35 order by price ASC limit " . $itemPerPage . " OFFSET " . $offset;
                    } else {
                        $sql = "SELECT * from product where discount>0.35 order by price DESC limit " . $itemPerPage . " OFFSET " . $offset;
                    }
                    $result = mysqli_query($conn, $sql);
                    $totalProduct = mysqli_query($conn, "select * from product where old=1");
                    $totalProduct = $totalProduct->num_rows;
                    $totalPage = ceil($totalProduct / $itemPerPage);
                    // var_dump($totalPage);
                    ?>
                    <?php if (mysqli_num_rows($result) > 0) { ?>
                        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                            <?php
                            if ($row['discount'] > 0) {
                                $priceSale =  $row['discount'] * $row['price'];
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
                    <?php $prevPage = $pageCurrent - 1 ?>
                    <?php if ($pageCurrent > 1) { ?>
                        <span class="item" id="to-prev">
                            <a href="?type=flashsale&page=<?= $prevPage ?>">
                                < </a>
                        </span>
                    <?php } ?>
                    <?php for ($i = 1; $i <= $totalPage; $i++) { ?>
                        <?php if ($i != $pageCurrent) { ?>
                            <?php if ($i > $pageCurrent - 3 && $i < $pageCurrent + 3) { ?>
                                <span class="item active"><a href="?type=flashsale&page=<?= $i ?>"><?= $i ?></a></span>
                            <?php } ?>
                        <?php } else { ?>
                            <span class="item active"><a href="?type=flashsale&page=<?= $i ?>"><strong><?= $i ?></strong></a></span>
                        <?php } ?>
                    <?php } ?>
                    <?php if ($pageCurrent < $totalPage) {
                        $nextPage = $pageCurrent + 1;
                    ?>
                        <span class="item" id="to-next"><a href="?type=flashsale&page=<?= $nextPage ?>">></a></span>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>