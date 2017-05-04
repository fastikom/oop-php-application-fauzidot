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
$db->select('users', '*');
$hasil = $db->getResult();
$no = 1;
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.js">
	<title>Daftar Pemilih</title>
</head>
<body>

<div class="clearfix"></div><br/>
	<div class="container">
		<a href="index.php" class="btn btn-large btn-info"><i class="glyphicon glyphicon-home"></i> &nbsp; Home</a>
		<a href="inPemilih.php" class="btn btn-large btn-info"><i class="glyphicon glyphicon-plus"></i> &nbsp; Add Records</a>
	</div>
<div class="clearfix"></div><br/>
<div class="container">
	<table class="table table-bordered table-responsive">
	    <tr>
			<th>No</th>
			<th>Username</th>
			<th>User Mail</th>
			<th>Status</th>
			<th colspan="2" align="center">Aksi</th>
		</tr>
			<?php foreach($hasil as $key){ ?>
		<tr>
			<td><?php echo $no; $no++; ?></td>
			<td><?php echo $key['user_name']; ?></td>
			<td><?php echo $key['user_mail']; ?></td>
			<td><?php echo $key['status']; ?></td>
			<td align="center">
				<a href="upPemilih.php?id=<?php echo $key['user_id']; ?>"><i class="glyphicon glyphicon-edit"></i></a>
			</td>
			<td align="center">
				<a href="simPemilih.php?aksi=hapus&id=<?php echo $key['user_id']; ?>"> <i class="glyphicon glyphicon-remove-circle"></i></a>
			</td>
		</tr>
		<?php } ?>
  </table>
</div>