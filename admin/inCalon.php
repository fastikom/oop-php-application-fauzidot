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
	<title>Input Data Calon Ketua dan Wakil Ketua</title>
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.js">
</head>
<div class="clearfix"></div><br/><br/>
<div class="container"> 
	<form method='post' action="simPemilih.php?aksi=input" enctype="multipart/form-data">
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
	            <th>No Urut</th>
	            <td><input type="text" name='urut' class="form-control" required></td>
	        </tr>
 
	        <tr>
	            <th>Nama Calon Ketua</th>
	            <td><input type="text" name='cKetua' class='form-control' required></td>
	        </tr>
 
	        <tr>
	            <th>Nama Calon Wakil Ketua</th>
	            <td><input type="text" name="cWakil" class="form-control" required></td>
	        </tr>

	         <tr>
	            
	            <th>Visi</th>
	            <td>
	             <div class="form-group">
	            	<label for="visi"></label>
	            	<textarea class="form-control" name="visi" rows="5" id="comment" required>	
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
	            </textarea>
	            </div>
	            </td>
	        </tr>

	         <tr>
	            <th>Foto</th>
	            <td align="right">
		            <label class="btn btn-info">
		            	<input type="file" name="foto" required>
		            </label>
	            </td>
	        </tr>

	        <tr>
	            <td colspan="2">
	    		<button type="submit" class="btn btn-primary" value="Simpan">
    				<span class="glyphicon glyphicon-floppy-save"></span>  Save
				</button>

				<button type="reset" class="btn btn-success" value="Batal">
    				<span class="glyphicon glyphicon-repeat"></span>  Batal
				</button>
	        </tr>
 
    	</table>
	</form>  
</div>