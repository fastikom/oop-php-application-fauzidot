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
	<title>Daftar Pemilih</title>
</head>
<body>
	<table border="1">
		<tr>
			<td colspan="6"><a href="formTambah.php">Input Data Pemilih</a></td>
		</tr>
		<tr>
			<td>No</td>
			<td>Username</td>
			<td>User Mail</td>
			<td>Status</td>
			<td colspan="2">Aksi</td>
		</tr>
		<?php foreach($hasil as $key){ ?>
		<tr>
			<td><?php echo $no; $no++; ?></td>
			<td><?php echo $key['user_name']; ?></td>
			<td><?php echo $key['user_mail']; ?></td>
			<td><?php echo $key['status']; ?></td>
			<td><a href="upPemilih.php?id=<?php echo $key['user_id']; ?>">Edit</a></td>
			<td><a href="simPemilih.php?aksi=hapus&id=<?php echo $key['user_id']; ?>">Hapus</a></td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>