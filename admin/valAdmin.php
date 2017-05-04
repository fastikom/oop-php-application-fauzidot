<?php
error_reporting(0);
include "../class/mysql_crud.php";
include "../class/class_login.php";
$db = new Database();
$login = new Login();
$db->connect();
$login->setDatabaseUsersTable('users');
$login->setCryptMethod('sha1');
$login->setShowMessage(true);
$login->setLoginSession();
$stat = $login->getLoginSession();
if($stat){
	$aktif = $login->getUserActive();
	if($aktif==2){
		header("location:index.php");
	}else{
		header("location: formAdmin.php");
	}
}else{
	echo "Login Gagal...!!!";
	include "formAdmin.php";
}
?>