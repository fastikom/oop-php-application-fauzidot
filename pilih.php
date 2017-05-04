<?php
include "class/mysql_crud.php";
include "class/class_login.php";
$db = new Database();
$login = new Login();
$db->connect();
$id = $_POST['suara'];
$user = $login->getUserId();
$db->select('tbcalon', 'suara', NULL, "noUrut = $id");
$hasil = $db->getResult();
foreach($hasil as $key){
	$suara = $key['suara'];
}
$suara = $suara+1;
$pilih = $db->update('tbcalon', array('suara'=>$suara), "noUrut=$id");
if($pilih){
	$uUser = $db->update('users', array('status'=>1), "user_id=$user");
	if($uUser){
		header("location: selamat.php");
	}else{
		echo "Update status User gagal";
	}
}else{
	echo "Penambahan suara gagal";
}
?>