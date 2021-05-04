<?php
$taikhoan = $_SESSION['username'];
$sqlmadh = "SELECT maDonHang FROM donhang WHERE taikhoan='$taikhoan'";
$resmadh = $mysqli->query($sqlmadh);
$arrMaDH = array();
$index = 0;
while ($row = $resmadh->fetch_assoc()) {
    // echo ($row['maDonHang']);
    // array_push($arrMaDH, $row['maDonHang']);
    $arrMaDH[$index] = (int)($row['maDonHang']);
    $index++;
}
// var_dump($index);
$arrCTDH = array();
$indexCTDH = 0;
for ($i = 0; $i < $index; $i++) {
    // echo $arrMaDH[$i];
    $maDH = $arrMaDH[$i];
    $sqlmactdh = "SELECT maCTDH,gia,img,nameProduct,soluong FROM chitietdonhang WHERE maDonHang='$maDH'";
    $resmactdh = $mysqli->query($sqlmactdh);
?>
    <div>don hang <?= $i ?></div>
    <?php
    while ($row = $resmactdh->fetch_assoc()) {
        // echo ($row['maDonHang']);
        // array_push($arrMaDH, $row['maDonHang']);
        // $arrCTDH[$index] = (int)($row['maDonHang']);
        // $index++;
        $arrCTDH[$indexCTDH] = $row['maCTDH'];
        $indexCTDH++;
    ?>
        <img src=<?= $row['img'] ?> style="max-width:100px" alt="">
<?php
    }
}

// var_dump($arrCTDH);


// $taikhoan = $_SESSION['username'];
// $sqlmadh = "SELECT nameProduct,maCTDH,img,gia,soluong FROM donhang,chitietdonhang WHERE taikhoan='$taikhoan' AND donhang.maDonHang=chitietdonhang.maDonHang";
// $resmadh = $mysqli->query($sqlmadh);
// $arrMaDH = array();
// while ($row = $resmadh->fetch_assoc()) {
//     //in 
//     var_dump($row['maCTDH']);
// }
// // var_dump($arrMaDH);
