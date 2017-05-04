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
$id = $_GET['id'];
$db->select('users', '*', NULL, "user_id=$id");
$hasil = $db->getResult();
?>
<html>
<head>
  <title>Tambah Data Pemilih</title>
  <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.js">
</head>
<body>
<div class="clearfix"></div><br/>
<div class="container">
  <form method='post' action="simPemilih.php?aksi=update">
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
              <td>Nim</td>
              <td><input type='text' name='nim' class='form-control' value="<?php echo $key['user_name']; ?>" required></td>
          </tr>
 
          <tr>
              <td>Email</td>
              <td><input type='text' name='email' class='form-control' value="<?php echo $key['user_mail']; ?>" required></td>
          </tr>
 
          <tr>
              <td>Password</td>
              <td><input type='text' name='pwd' class='form-control' value="" required></td>
          </tr>

           <tr>
              <td>Status</td>
              <td><input type='text' name='status' class='form-control' value="<?php echo $key['status']; ?>" required></td>
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
