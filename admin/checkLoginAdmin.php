<?php
session_start();
include('../common.php');
include('../connect.php');
if ($_SESSION['username']) {
    $username = $_SESSION['username'];
    $sql = "SELECT * FROM user WHERE taikhoan='$username'";
    $result = $mysqli->query($sql);
    $row = $result->fetch_assoc();
    if ($row['permission'] == "Admin") {
        echo json_encode($row);
    } else {
        unset($_SESSION['username']);
    }
}

// echo "asd";
