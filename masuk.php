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
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript">
  $(document).ready(function(){
  	$("#username").keypress(function(data){
  		if(data.which!=8 && data.which!=0 && (data.which<48 || data.which>57)){
  			$("#pesan").html("Isikan NIM").show().fadeOut("slow");
  			return false;
  		}
  	});
  });
  </script>
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
			  <a class="navbar-brand" href="index.php">APLIKASI PEMILIHAN KETUA BEM FASTIKOM</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
			  <ul class="nav navbar-nav navbar-right">
			  	<li class="scrole"><a href="index.php">profil</a></li>
			    <li class="active"><a href="masuk.php">Masuk</a></li>
			    
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

	
	

	<!--hubungi kami START-->
	<div id="contact" class="section-padding">
		<div class="container">
			<div class="row">
				<div class="page-title text-center">
					<h1>Masuk</h1>
					<p>Silahkan Isi Dengan Nomer Induk Mahasiswa (NIM) Anda</p>
					<hr class="pg-titl-bdr-btm"></hr>
				</div>
                <div id="sendmessage">Berhasil Masuk. Terima kasih!</div>
                <div id="errormessage"></div>
                
				<div class="form-sec">
                	<form id="frm1" action="valLogin.php" method="post" role="form" class="contactForm">
                    	<div class="col-md-4 form-group">
                            <input type="text" class="form-control text-field-box" name="user_name" id="username" placeholder="Nomer Induk Mahasiswa" data-rule="text" data-msg="Please enter at least 8 chars of subject" required />
                            <div id="pesan"></div>
                            <div class="validation"></div>
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="password" class="form-control text-field-box" name="user_pass" id="password" placeholder="Password" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" required />
                            <div class="validation"></div>
                        </div>
                      
            
                            <button class="button-medium" id="contact-submit" type="submit" name="contact">Masuk</button>
                        <br></br>
                        <br></br>
                        <br></br>
                        <br></br>
                        <br></br>
                       
                        </div>
                    </form>
                </div>
			</div>
		</div>
	</div>
	<!--CONTACT END-->
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