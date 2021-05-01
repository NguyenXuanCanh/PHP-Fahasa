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

        $query = $mysqli->query("SELECT `taikhoan`, `matkhau`,`active` FROM user WHERE taikhoan='$username'");
        if (mysqli_num_rows($query) == 0) {
            echo "Tên đăng nhập này khong tồn tại. Vui lòng kiểm tra lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
            exit;
        }

        $row = mysqli_fetch_array($query);

        if ($password != $row['matkhau']) {
            echo "Mật khẩu không đúng. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
            exit;
        }

        if (!$row['active']) {
            echo "Opps. Tài khoản này bị khóa mất rồi... <a href='javascript: history.go(-1)'>Trở lại</a>";
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
        $email = addslashes($_POST['txtEmail']);
        if (empty($username) || empty($password) || empty($email)) {
            die('Please fill all required fields!');
        }
        if (!preg_match('/^[A-Za-z][A-Za-z0-9]{5,31}$/', $username)) {
            die('Tài khoản chỉ được chứa ký tự từ a-z, 0-9 và ít nhất 6 ký tự! ' . "<a href='javascript: history.go(-1)'>Trở lại</a>");
        }

        $sQuery = "INSERT INTO user (`taikhoan`,`matkhau`) VALUE ('$username', '$password')";
        if ($result == $mysqli->query($sQuery)) {
            echo "dang ky thanh cong <a href='javascript: history.go(-1)'>Trở lại</a>";
        } else {
            echo "dang ky that bai";
        }
    }
}
$mysqli->close();
