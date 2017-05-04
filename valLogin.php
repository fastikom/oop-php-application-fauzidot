<?php
include "class/mysql_crud.php";
include "class/class_login.php";
ini_set('display_errors', 0);
$db = new Database();
$login = new Login();
$db->connect();
$login->setDatabaseUsersTable('users');
$login->setCryptMethod('sha1');
$login->setShowMessage(true);
$login->setLoginSession();
if($login->getLoginSession()){
	$aktif = $login->getUserActive();
	$status = $login->getUserStatus();
	echo $aktif;
	echo $status;
	if($aktif==1){
		if($status==0){
			header("location: memilih.php");
		}else{
			header("location: sudah.php");
		}
	}else{
		header("location: admin/index.php");
	}
}else{
	echo "Login Gagal...!!!";
	header("location: masuk.php");
}
?>