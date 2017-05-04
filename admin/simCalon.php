<?php
ini_set('display_errors', 0);
include "../class/class_login.php";
$login = new Login();
if($login->getLoginSession()){
	if($login->getUserActive()){
		$aktif = $login->getUserActive();
		if($aktif==1){
			header("location: formAdmin.php");
		}
	}
}else{
	header("location: formAdmin.php");
}

include "../class/mysql_crud.php";
$db = new Database();
$db->connect();
if($_GET['aksi']=="hapus"){
	$id = $_GET['id'];
	$simpan = $db->delete('tbcalon', "noUrut=$id");
}else{
	$id = $_POST['urut'];
	$ketua = $_POST['cKetua'];
	$wakil = $_POST['cWakil'];
	$visi = $_POST['visi'];
	$misi = $_POST['misi'];
	$target = 'images/'.$_FILES['foto']['name'];
	if($_GET['aksi']=="input"){
		move_uploaded_file($_FILES['foto']['tmp_name'], $target);
		$simpan = $db->insert('tbCalon', array('noUrut'=>"$id", 'cKetua'=>"$ketua", 'cWakil'=>"$wakil", 'visi'=>"$visi", 'misi'=>"$misi", 'foto'=>"$target", 'suara'=>0));
	}else if($_GET['aksi']=="update"){
		if(empty($_FILES['foto']['name'])){
			$simpan = $db->update('tbcalon', array('cKetua'=>"$ketua", 'cWakil'=>"$wakil", 'visi'=>"$visi", 'misi'=>"$misi"), "noUrut=$id");
		}else{
			move_uploaded_file($_FILES['foto']['tmp_name'], $target);
			$simpan = $db->update('tbcalon', array('cKetua'=>"$ketua", 'cWakil'=>"$wakil", 'visi'=>"$visi", 'misi'=>"$misi", 'foto'=>"$target"), "noUrut=$id");
		}
	}	
}
if($simpan){
	header("location: daftarCalon.php");
}else{
	echo "input data gagal";
}
?>