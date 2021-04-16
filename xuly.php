<?php
include('./connect.php');

// if (!isset($_POST['txtUsername'])) {
//     die('');
// }
session_start();

// var_dump($_REQUEST);
if (isset($_GET['do'])) {
    if (($_GET['do']) == 'dangnhap') {

        $username   = addslashes($_POST['txtUsername']);
        $password   = addslashes($_POST['txtPassword']);

        if (!$username || !$password) {
            echo "Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu. <a href='javascript: history.go(-1)'>Trở lại</a>";
            exit;
        }

        $query = $mysqli->query("SELECT `taikhoan`, `matkhau` FROM user WHERE taikhoan='$username'");
        if (mysqli_num_rows($query) == 0) {
            echo "Tên đăng nhập này khong tồn tại. Vui lòng kiểm tra lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
            exit;
        }

        $row = mysqli_fetch_array($query);

        if ($password != $row['matkhau']) {
            echo "Mật khẩu không đúng. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
            exit;
        }

        // $_SESSION['valid'] = true;
        // $_SESSION['timeout'] = time();


        $_SESSION['username'] = $username;
        // var_dump($_SESSION['username']);
        require('common.php');
        echo "Xin chào " . $username . ". Bạn đã đăng nhập thành công. <a href='javascript: history.go(-1)'>Về trang chủ</a>";
    }

    if (($_GET['do']) == 'dangky') {
        // var_dump($_POST);

        $username   = addslashes($_POST['txtUsername']);
        $password   = addslashes($_POST['txtPassword']);
        $sQuery = "INSERT INTO user (`taikhoan`,`matkhau`) VALUE ('$username', '$password')";
        // $mysqli->query($sQuery);
        // $result =  $mysqli->query($sQuery);
        // var_dump();
        if ($result == $mysqli->query($sQuery)) {
            echo "dang ky thanh cong";
        } else {
            echo "dang ky that bai";
        }
    }
}
$mysqli->close();
