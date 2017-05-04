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
$id = $_GET['id'];
$db = new Database();
$db->connect();
$db->select('tbcalon', '*', NULL, "noUrut=$id");
$hasil = $db->getResult();
?>
<html>
<head>
	<title>Input Data Calon Ketua dan Wakil Ketua</title>
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.js">
</head>
<body>
<div class="clearfix"></div><br/><br/>
<div class="container"> 
	<form method='post' action="simCalon.php?aksi=update" enctype="multipart/form-data">
		<table class='table table-bordered'>
			<tr>
				<td>
					<a href="index.php" class="btn btn-large btn-info"><i class="glyphicon glyphicon-home"></i> &nbsp; Home</a>
				</td>
				<td align="right">
					<a href="logout.php" class="btn btn-large btn-info"><i class="glyphicon glyphicon-off"></i> &nbsp; Logout</a>
				</td>
			</tr>
		<?php foreach($hasil as $key){ ?>
	        <tr>
	            <th>No Urut</th>
	            <td><input type="text" name='urut' class="form-control" value="<?php echo $key['noUrut']; ?>" required></td>
	        </tr>
 
	        <tr>
	            <th>Nama Calon Ketua</th>
	            <td><input type="text" name='cKetua' class='form-control' value="<?php echo $key['cKetua']; ?>" required></td>
	        </tr>
 
	        <tr>
	            <th>Nama Calon Wakil Ketua</th>
	            <td><input type="text" name="cWakil" class="form-control" value="<?php echo $key['cWakil']; ?>" required></td>
	        </tr>

	         <tr>
	            
	            <th>Visi</th>
	            <td>
	             <div class="form-group">
	            	<label for="visi"></label>
	            	<textarea class="form-control" name="visi" rows="5" id="comment" required>	
	            		<?php echo $key['visi']; ?>
	            	</textarea>
	            </div>
	            </td>
	        </tr>

	         <tr>
	            <th>Misi</th>
	            <td>
	            <div class="form-group">
	            	<label for="visi"></label>
	            	<textarea class="form-control" name="misi" rows="5" id="comment" required>	
	            		<?php echo $key['misi']; ?>
	  		        </textarea>
	            </div>
	            </td>
	        </tr>

	         <tr>
	            <th>Foto</th>
	            <td align="right">
		            <label class="btn btn-info">
		            	<input type="file" name="foto">
		            </label>
	            </td>
	        </tr>

	        <tr>
	            <td colspan="2">
	    		<button type="submit" class="btn btn-primary" name="Kirim">
          <span class="glyphicon glyphicon-edit"></span> Simpan
        </button>  
              <a href="daftarPemilih.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; Kembali</a>
				</td>
	        </tr>
    	<?php } ?>
    	</table>
	</form>  
</div>
</body>
</html>