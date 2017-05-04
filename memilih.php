 <!DOCTYPE html>
<html lang="en" class=" js no-touch">
<head>
  <title>Aplikasi Pemilu BEM Fastikom UNSIQ</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,600|Raleway:600,300|Josefin+Slab:400,700,600italic,600,400italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="css/slick-team-slider.css"/>
  <link rel="stylesheet" type="text/css" href="css/style.css">

  <!-- =======================================================
        Theme Name: Tempo
        Theme URL: https://bootstrapmade.com/tempo-free-onepage-bootstrap-theme/
        Author: BootstrapMade.com
        Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>
<body>
	<!--HEADER START-->
	<div class="main-navigation navbar-fixed-top">
		<nav class="navbar navbar-default">
			<div class="container">
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
			  </button>
			  <a class="navbar-brand" href="memilih.php">APLIKASI PEMILIHAN KETUA BEM FASTIKOM</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
			  <ul class="nav navbar-nav navbar-right">
			  	<li class="scrole"><a href="logout.php">Keluar</a></li>
			    
			  </ul>
			</div>
		  </div>
		</nav>
	</div>
	<!--HEADER END-->
	<!--CTA1 START-->
	<div class="cta-1">
		<div class="container">
			
		</div>
	</div>
	<!--CTA1 END-->

	
	

	<!--TEAM START-->
	<div id="about" class="section-padding">
		<div class="container">
			<div class="row">
				
				<?php
include "class/mysql_crud.php";
include "class/class_login.php";
$db = new Database();
$login = new Login();
$db->connect();
$status = $login->getLoginSession();
if($status){
	$db->select('tbcalon');
	$hasil = $db->getResult();
}else{
	header("location: masuk.php");
}
$i=0;
?>
	<form method="post" action="pilih.php">
		<table width="50%" align="center">
		<tr>
			<?php foreach ($hasil as $key) { $i++;?>
			<td><img src="<?php echo $key['foto']; ?>" width="100px" class="img-responsive"></td>
			<?php } ?>
		</tr>
		<tr>
			<?php foreach ($hasil as $key) { ?>
			<td><?php echo $key['cKetua']." & ".$key['cWakil']; ?></td>
			<?php } ?>
		</tr>
		<!--<tr>
			<?php foreach ($hasil as $key) { ?>
			<td><strong>Visi</strong> : <?php echo $key['visi']; ?></td>
			<?php } ?>
		</tr>
		<tr>
			<?php foreach ($hasil as $key) { ?>
			<td><strong>Misi</strong> : <?php echo $key['misi']; ?></td>
			<?php } ?>
		</tr>-->
		<tr>
			<?php foreach ($hasil as $key) { ?>
			<td><input type="radio" name="suara" value="<?php echo $key['noUrut']; ?>"></td>
			<?php } ?>
		</tr>
	<tr>
		<td colspan="<?php echo $i; ?>">&nbsp;</td>
	</tr>
	<tr>
		<td colspan="<?php echo $i; ?>"><button class="button-medium" id="contact-submit" type="submit" name="contact">Pilih</button></td>
	</tr>
	</table>
	</form>
	<br/><br/><br/><br/><br/><br/><br/>
			</div>
		</div>
	</div>
	<!--TEAM END-->




	<!--CTA2 START-->
	<div class="cta2">
		<div class="container">
			
		</div>
	</div>
	<!--CTA2 END-->



	<div class="footer-bottom">
		<div class="container">
			<div style="visibility: visible; animation-name: zoomIn;" class="col-md-12 text-center wow zoomIn">
				<div class="footer_copyright">
					<p> © Copyright 2017 APLIKASI PEMILIHAN KETUA BEM FASTIKOM</p>					
					<div class="credits">
                        <!-- 
                            All the links in the footer should remain intact. 
                            You can delete the links only if you purchased the pro version.
                            Licensing information: https://bootstrapmade.com/license/
                            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Tempo
                        -->
                   
                    </div>
				</div>
			</div>
		</div>
	</div>
  	<script src="js/jquery.min.js"></script>
  	<script src="js/jquery.easing.min.js"></script>
  	<script src="js/bootstrap.min.js"></script>
  	<script src="js/jquery.mixitup.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/slick.min.js"></script>
	<script type="text/javascript" src="js/custom.js"></script>
    <script src="contactform/contactform.js"></script>
    
</body>
</html>