<?php
session_start();
$data = $_POST['data'];
settype($data['index'], "int");
settype($data['cong'], "int");

$_SESSION['giohang'][$data['index']]['soluong'] += $data['cong'];
echo $_SESSION['giohang'][$data['index']]['gia'] * $_SESSION['giohang'][$data['index']]['soluong'];
