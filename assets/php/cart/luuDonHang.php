<?php
session_start();
include("../../../common.php");
include('../../../connect.php');
// $hoten = trim(strip_tags($_POST['HoTen']));
// $email = trim(strip_tags($_POST['email']));

//get user info
if (isLogined()) {
    // var_dump($_SESSION['username']);
    $idDH = createIdDH();
    // var_dump($idDH);
    $taikhoan = $_SESSION['username'];
    $sqlUserInfo = "SELECT * FROM user where taikhoan='$taikhoan'";
    $result = $mysqli->query($sqlUserInfo);
    $hoten = '';
    $email = '';
    $diaChi = '';
    $soDienThoai = '';
    while ($row = $result->fetch_assoc()) {
        $hoten = $row['ten'];
        $email = $row['email'];
        $diaChi = $row['diaChi'];
        $soDienThoai = $row['soDienThoai'];
    }
    // var_dump($hoten . $email . $diaChi . $soDienThoai);
    $date = date("Y/m/d") . " " . date("i:h:sa");
    $sqlLuuDH = "INSERT INTO donhang (`maDonHang`,`taikhoan`,`ten`,`email`,`sodienthoai`,`thoidiemdathang`,`trangthai`) VALUES ('$idDH','$taikhoan','$hoten','$email','$soDienThoai','$date','1')";
    var_dump($sqlLuuDH);
    $kqLDH = $mysqli->query($sqlLuuDH);
    var_dump($kqLDH);
    $giohang = $_SESSION['giohang'];
    // luugiohangnhe($idDH, $giohang);
    // $sql = "DELETE FROM chitietdonhang WHERE idDH='$idDH'";
    //     $this->query($sql);

    //kiem tra hop le khi mua hang
    foreach ($giohang as $idDT => $dt) {
    }

    //day la luu gio hang
    foreach ($giohang as $idDT => $dt) {
        // echo "</br>";
        // echo "</br>";
        // var_dump($dt);
        // echo "</br>";

        // ["id"]=> int(5) ["hinhAnh"]=> string(42) "./assets/img/bookImgs/image_218832_big.jpg"
        //  ["nameProduct"]=> string(22) "Spy X Family - Tập 1" ["gia"]=> string(6) "350000" ["soluong"]=> int(3) 

        $idProduct = $dt['id'];
        $tenDT = $dt['nameProduct'];
        $gia = $dt['gia'];
        $soluong = $dt['soluong'];
        $maCTDH = createIdCTDH();
        $img = $dt['hinhAnh'];

        $sqlLuuCTDH = "INSERT INTO chitietdonhang (`maCTDH`,`maDonHang`,`IDProduct`, `nameProduct`,`gia`,`soluong`,`img`) VALUES ('$maCTDH','$idDH','$idProduct','{$tenDT}','{$gia}','$soluong','$img')";
        $kqLuuCTDH = $mysqli->query($sqlLuuCTDH);

        if ($kqLuuCTDH) {
            $sqlProduct = "SELECT * FROM product where IDProduct=$idProduct";
            $resProduct = $mysqli->query($sqlProduct);
            while ($row = $resProduct->fetch_assoc()) {
                $row['amountSell'] += $soluong;
                $amountSell = $row['amountSell'];
                $sqlSell = "UPDATE product set amountSell='$amountSell' where IDProduct=$idProduct";
                $resSellProduct = $mysqli->query($sqlSell);
            }
        }

        // var_dump($sqlLuuCTDH);
    }
} else echo "chua dang nhap";

function createIdDH()
{
    // include("../connect.php");
    include('../../../connect.php');
    // include("../../../common.php");

    $sql = "SELECT maDonHang FROM donhang";
    $result = $mysqli->query($sql);
    // $index = 0;
    $preIndex = 0;
    $index = 1;
    $isInside = 0;
    while ($row = mysqli_fetch_assoc($result)) {
        $index = $row['maDonHang'];
        if ($index - $preIndex > 1) {
            $isInside = 1;
            return $index - 1;
        } else {
            $preIndex++;
        }
    }
    if (!$isInside) {
        return ++$preIndex;
    }
}

function createIdCTDH()
{
    // include("../connect.php");
    include('../../../connect.php');
    // include("../../../common.php");

    $sql = "SELECT maCTDH FROM chitietdonhang";
    $result = $mysqli->query($sql);
    // $index = 0;
    $preIndex = 0;
    $index = 1;
    $isInside = 0;
    while ($row = mysqli_fetch_assoc($result)) {
        $index = $row['maCTDH'];
        if ($index - $preIndex > 1) {
            $isInside = 1;
            return $index - 1;
        } else {
            $preIndex++;
        }
    }
    if (!$isInside) {
        return ++$preIndex;
    }
}
