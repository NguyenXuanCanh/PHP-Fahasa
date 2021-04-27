<?php
/*
Minh họa PHP session:
+ login.php
+ session.php
+ common.php
+ logout.php
*/

// session_start();

function isLogined()
{
	//echo('@:' . $_SESSION['username']);	
	if (empty($_SESSION['username']))
		return false;
	return true;
}
