<?php
//Tiếp nhậtn biến id (mã sản phẩm) và what (để biết thêm/xóa sp)
// var_dump($_GET['what']);
session_start();
include("../../../connect.php");
include("../../../common.php");
// error_reporting(0);

$id = $_GET['id'];
settype($id, "int");
if (isset($_GET['what'])) $what = $_GET['what'];
if ($what == "add") {
    $inputsoluong = ($_POST['soluong']);
    settype($inputsoluong, "int");
    if (isset($_SESSION['giohang']) == false) $_SESSION['giohang'] = []; //tạo mảng rổng nếu chưa có
    // $spFromDB = $this->model->detail($id);  //if ($spFromDB==null) ...
    $spFromDB = ($mysqli->query("SELECT * FROM product WHERE IDProduct='$id'")->fetch_assoc());
    // var_dump($_SESSION['giohang']);
    // var_dump($spFromDB['nameProduct']);
    $index = getIndexProduct($id);
    if ($index != -1) {
        $key = array_search($id, array_column($_SESSION['giohang'], 'id'));
        $_SESSION['giohang'][$key]['soluong'] += $inputsoluong;
    } else {
        $soluong = 1;
        array_push($_SESSION['giohang'], [
            'id' => $id,
            'hinhAnh' => $spFromDB['img'],
            'nameProduct' => $spFromDB['nameProduct'],
            'gia' => $spFromDB['price'],
            'soluong' => 1,
        ]);
    }
    echo "<pre>";
    var_dump($_SESSION['giohang']);
} //if what=="add"
if ($what == "delete") {
    $index = 0;
    foreach ($_SESSION['giohang'] as $IDProduct => $sp) {
        if ($IDProduct == $id) {
            array_splice($_SESSION['giohang'], $index, 1);
        }
        $index++;
    }
    echo "<pre>";
    print_r($_SESSION['giohang']);
    // require('common.php');
}
if ($what == 'save') {
}

function getIndexProduct($id)
{
    $index = 0;
    foreach ($_SESSION['giohang'] as $IDProduct => $sp) {
        if ($sp['id'] == $id) return $index;
        $index++;
    }
    return -1;
}
