<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.js">
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
$db =  new Database();
$db->connect();
if($_GET['aksi']=="hapus"){?>
	<div class="container">

	<?php
	if(isset($_GET['hapus']))
	{
		?>
        <div class="alert alert-success">
    	<strong>Success!</strong> record was deleted... 
		</div>
        <?php
	}
	else
	{
		?>
        <div class="alert alert-danger">
    	<strong>Sure !</strong> to remove the following record ? 
		</div>
        <?php
	}
	?>	
</div>
<?php
	$id = $_GET['id'];
	$simpan = $db->delete('users', "user_id=$id");
}else{
	$nim = $_POST['nim'];
	$email = $db->escapeString($_POST['email']);
	if($_GET['aksi']=="input"){
		$login->setCryptMethod('sha1');
		$pwd = $login->setCrypt($_POST['pwd']);
		$simpan = $db->insert('users', array('user_name'=>$nim, 'user_pass'=>$pwd, 'user_mail'=>$email, 'status'=>0, 'user_active'=>1));
	}else if($_GET['aksi']=="update"){
		$status = $_POST['status'];
		$id = $_POST['id'];
		if(empty($_POST['pwd'])){
			$simpan = $db->update('users', array('user_name'=>$nim, 'user_mail'=>$email, 'status'=>$status), "user_id=$id");
		}else{
			$login->setCryptMethod('sha1');
			$pwd = $login->setCrypt($_POST['pwd']);
			$simpan = $db->update('users', array('user_name'=>$nim, 'user_pass'=>$pwd, 'user_mail'=>$email, 'status'=>$status), "user_id=$id");
		}
	}
}
if($simpan){
	header("location: daftarPemilih.php");
}else{
	echo "Proses gagal...!!!";
	include "inPemilih.php";
}
?>