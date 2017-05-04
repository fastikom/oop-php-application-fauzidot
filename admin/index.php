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
?>
<html>
<head>
	<title>Selamat Datang Dihalaman Admin</title>
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.js">
</head>
<body>
<div class="clearfix"><br/></div><br/><br/>

<div class="container">
	<div class="page-title text-right">
		<a href="logout.php" class="btn btn-large btn-info"><i class="glyphicon glyphicon-off"></i> &nbsp; Logout</a>
	</div>
	<div class="page-title text-center">
		<h1>Dashboard</h1>
		<p><span class="label label-success">Daftar calon</span> | <span class="label label-success">Daftar Pemilih</span></p>
		<hr>
	</div>	
</div>

<div class="container">
	<div class="btn-group btn-group-justified" role="group">
	  <div class="btn-group" role="group">
	  	<a href="daftarCalon.php"><button type="button" class="btn btn-default">Daftar Calon</button></a>
	  </div>

	  <div class="btn-group" role="group">
	  	<a href="daftarPemilih.php"><button type="button" class="btn btn-default">Daftar Pemilih</button></a>
	  </div>

	  <div class="btn-group" role="group">
	  	<a href="statistik.php"><button type="button" class="btn btn-default">Statistik</button></a>
	  </div>
	</div>	
</div>
