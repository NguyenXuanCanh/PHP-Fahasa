<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/x-icon" href="https://cdn0.fahasa.com/media/favicon/default/favicon4.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <style>
        .user__left a.active {
            color: #f7941e;
            font-weight: bold;
        }
    </style>
</head>
<?php
session_start();
require('common.php');
?>

<body>
    <!-- <script>
        let clickSubmit = () => {
            console.log("asd");
        }
    </script> -->
    <?php
    include('loginForm.php');
    include('overlay.php');
    include('./assets/php/Index/IndexHeader.php');
    include('connect.php');
    // echo ($_SESSION['username']);
    $username = ($_SESSION['username']);
    $query = $mysqli->query("SELECT * FROM user WHERE taikhoan='$username'");
    $row = mysqli_fetch_array($query);
    // var_dump($row)
    if (isset($_POST['submit'])) {
        $phone = $_POST['phone'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $sql = "UPDATE user SET soDienThoai='$phone',ten='$name',diaChi='$address',email='$email' where taikhoan='$username'";
        $result = $mysqli->query($sql);
    ?>
        <script>
            window.onload = function() {
                if (!window.location.hash) {
                    window.location = window.location + '#updated';
                    window.location.reload();
                }
            }
        </script>
    <?php
    }
    ?>

    <div class="web__content pb-4">
        <div id="flashSale" class="flash__sale container mt-4">
            <div class="flash__sale__head">
                <span class="black__title">Thông tin tài khoản</span>
                <span id="countDownSale"></span>
            </div>
            <div class="flash__sale__content user__left">
                <div class="row">
                    <div class="col-2 pt-3">
                        <ul class="pl-0">
                            <li>
                                <a href="?page=info" class=<?php if (!isset(($_GET["page"])) || ($_GET["page"]) == "info") echo "active" ?>>Thông tin tài khoản</a>
                            </li>
                            <li class="mt-2">
                                <a href="?page=donHangUser" class=<?php if (isset(($_GET["page"])) && ($_GET["page"]) == "donHangUser") echo "active" ?>>Đơn hàng của tôi</a>
                            </li>
                        </ul>
                    </div>
                    <?php
                    if (!isset(($_GET["page"])) || ($_GET["page"]) == "info") {
                        include("./assets/php/userInfo/ThongTinUser.php");
                    } else {
                        include("./assets/php/userInfo/DonHangUser.php");
                    }
                    ?>
                    <div class="col-2"></div>
                </div>
            </div>
        </div>
    </div>

    <?php
    include("./assets/php/Index/IndexFooter.php");
    include('./assets/php/phpScript/indexJS.php');
    ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>