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
$db->select('users', 'status', NULL, 'status=1');
$jmlPemilih = $db->numRows();
$db->hapusArray();
$db->select('tbCalon', '*');
$calon = $db->getResult();
?>
<head>
	<title>Statistik Pemilihan</title>
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.js">
</head>
<body>
<div class="clearfix"></div><br/>

<div class="clearfix"></div><br/>
<div class="container">
	<table class="table table-bordered table-responsive">
		<tr>
            <td colspan="2">
              <a href="index.php" class="btn btn-large btn-info"><i class="glyphicon glyphicon-home"></i> &nbsp; Home</a>
            </td>
            <td align="right" colspan="3">
              <a href="logout.php" class="btn btn-large btn-info"><i class="glyphicon glyphicon-off"></i> &nbsp; Logout</a>
            </td>
          </tr>
		<?php foreach($calon as $nilai){ $presentasi = ($nilai['suara']/$jmlPemilih)*100; ?>
		  <tr>
			<td><?php echo $nilai['noUrut']; ?></td>
			<td><img src="../<?php echo $nilai['foto']; ?>" width="128px"></td>
			<td><?php echo $nilai['cKetua']." dan ".$nilai['cWakil']; ?></td>
			<td><?php echo $nilai['suara']; ?> suara</td>
			<td><?php echo $presentasi."%"; ?></td>
		  </tr>
		<?php } ?>
  </table>
</div>