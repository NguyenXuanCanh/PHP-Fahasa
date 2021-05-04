<?php
/*
Minh họa PHP session:
+ login.php
+ session.php
+ common.php
+ logout.php
*/
session_start();
// log out ~ SESSION['username'] == NULL
$_SESSION['username'] = NULL;
// redirect
require('common.php');
echo "Logout thành công" . "<a href='javascript: history.go(-1)'>Trở lại</a>";
