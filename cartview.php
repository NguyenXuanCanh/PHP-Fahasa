<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<?php
session_start();
require('common.php');
// var_dump($_SESSION['giohang']);
// include('./assets/php/phpScript/productJS.php');
?>

<body>

    <div class="container">
        <div class="cart-header">
            <h3>SP đã chọn</h3>
        </div>
        <div class="cart-body">
            <?php
            $index = 0;
            foreach ($_SESSION['giohang'] as $IDProduct => $sp) {
            ?>
                <div class="d-flex">
                    <div class="p-2 border">STT</div>
                    <div class="p-2 border  col-4 "><?= $sp['nameProduct'] ?></div>
                    <div class="p-2 border col-3 border text-center">
                        <div class="input-group">
                            <span class="input-group-text btn btn-danger" onclick="tangGiamSoLuong(<?= $index ?>,-1)"> - </span>
                            <input type="number" name="soluong" value=<?= $sp['soluong'] ?> class="number__quantity form-control text-center" min="1" max="100">
                            <span class="input-group-text btn btn-success" onclick="tangGiamSoLuong(<?= $index ?>,+1)"> + </span>
                        </div>
                    </div>
                    <div class="p-2 border col-2 border text-end gia"><?= number_format($sp['gia'] * $sp['soluong'], 0, ',', '.') ?></div>
                    <div class="p-2 border flex-grow-1 text-end">
                        <a href="./assets/php/cart/cartAction.php?what=delete&id=<?= $IDProduct ?>" class="btn btn-default ">
                            Bỏ
                        </a>
                    </div>
                </div>
            <?php
                $index++;
            } ?>
        </div>
        <form action="./assets/php/cart/luuDonHang.php" method="POST">
            <div class=" cart-footer">
                <div class="p-2 flex-fill text-end">
                    <button class="submit" class="btn btn-primary">THANH TOÁN</button>
                </div>
            </div>
    </div>
    </form>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
        function tangGiamSoLuong(index, cong) {
            let arrSoLuong = (document.getElementsByClassName("number__quantity"));
            arrSoLuong[index].value = parseInt(arrSoLuong[index].value);
            let temp = cong;
            temp += parseInt(arrSoLuong[index].value);
            if (arrSoLuong[index].value == 0) return;
            document.getElementsByClassName("number__quantity")[index].value = temp;
            $.ajax({
                url: './assets/php/cart/plusOne.php',
                type: 'post',
                data: {
                    data: {
                        index,
                        cong,
                    }
                },
                success: function(result) {
                    document.getElementsByClassName("gia")[index].innerHTML = (result);
                }
            });
        }
    </script>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</html>