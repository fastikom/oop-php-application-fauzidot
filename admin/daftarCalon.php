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
$db->select('tbcalon', '*');
$hasil = $db->getResult();
?>
<html>
<head>
	<title>Daftar Calon Ketua dan Wakil Ketua</title>
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.js">
</head>
<body>
<div class="clearfix"></div><br/>
<div class="container">
		<a href="index.php" class="btn btn-large btn-info"><i class="glyphicon glyphicon-home"></i> &nbsp; Home</a>
		<a href="inCalon.php" class="btn btn-large btn-info"><i class="glyphicon glyphicon-plus"></i> &nbsp; Add Records</a>
</div>

<div class="clearfix"></div><br/>
<div class="container">
	<table class="table table-bordered table-responsive">
	    <tr>
			<th>No Urut</th>
			<th>Calon Ketua</th>
			<th>Calon Wakil</th>
			<th>Visi</th>
			<th>Misi</th>
			<th>Foto</th>
			<th>Suara</th>
			<th colspan="2" align="center">Aksi</th>
		</tr>
			<?php foreach($hasil as $key){ ?>
		<tr>
			<td><?php echo $key['noUrut']; ?></td>
			<td><?php echo $key['cKetua']; ?></td>
			<td><?php echo $key['cWakil']; ?></td>
			<td><?php echo $key['visi']; ?></td>
			<td><?php echo $key['misi']; ?></td>
			<td><?php echo $key['foto']; ?></td>
			<td><?php echo $key['suara']; ?></td>
			<td align="center">
				<a href="upCalon.php?id=<?php echo $key['noUrut']; ?>"><i class="glyphicon glyphicon-edit"></i></a>
			</td>
			<td align="center">
				<a href="simCalon.php?aksi=hapus&id=<?php echo $key['noUrut']; ?>"> <i class="glyphicon glyphicon-remove-circle"></i></a>
			</td>
		</tr>
		<?php } ?>
  </table>
</div>