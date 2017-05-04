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
	<title>Tambah Data Pemilih</title>
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.js">
	<script type="text/javascript" src="../js/jquery.js"></script>
  <script type="text/javascript">
  $(document).ready(function(){
  	$("#nim").keypress(function(data){
  		if(data.which!=8 && data.which!=0 && (data.which<48 || data.which>57)){
  			$("#pesan").html("Isikan NIM").show().fadeOut("slow");
  			return false;
  		}
  	});
  });
  </script>
</head>
<body>
<div class="clearfix"></div><br/>
<div class="container"> 
	<form method='post' action="simPemilih.php?aksi=input">
		<table class='table table-bordered'>
			<tr>
				<td>
					<a href="index.php" class="btn btn-large btn-info"><i class="glyphicon glyphicon-home"></i> &nbsp; Home</a>
				</td>
				<td align="right">
					<a href="logout.php" class="btn btn-large btn-info"><i class="glyphicon glyphicon-off"></i> &nbsp; Logout</a>
				</td>
			</tr>
	        <tr>
	            <td>Nim</td>
	            <td><input type='text' name='nim' class='form-control' id="nim" required><div id="pesan"></div></td>
	        </tr>
 
	        <tr>
	            <td>Email</td>
	            <td><input type='email' name='email' class='form-control' required></td>
	        </tr>
 
	        <tr>
	            <td>Password</td>
	            <td><input type='text' name='pwd' class='form-control' required></td>
	        </tr>

	        <tr>
	            <td colspan="2">
	            <button type="submit" class="btn btn-primary" name="Kirim">
	    		<span class="glyphicon glyphicon-plus"></span> Create New Record
				</button>  
	            <a href="daftarPemilih.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; Kembali</a>
	            </td>
	        </tr>
 
    	</table>
	</form>  
</div>
</body>
</html>
<?php include_once '../footer.php'; ?>
