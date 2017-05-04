<?php
ini_set('display_errors', 0);
include "../class/class_login.php";
$login = new Login();
$login->unsetLoginSession();
?>
<html>
<head>
	<title>Login admin</title>
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/frm_login.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
</head>



<div class="container">
        <div class="card card-container">
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
            <img id="profile-img" class="profile-img-card" src="../images/agen.png" />
            <p id="profile-name" class="profile-name-card"></p>
            
            <form class="form-signin" method="post" action="valAdmin.php">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="text" id="inputEmail" class="form-control" name="user_name" placeholder="Username" required autofocus>
                <input type="password" id="inputPassword" class="form-control" name="user_pass" placeholder="Password" required>
                <input type="hidden" name="tipe" value="admin">
               <!--  <div id="remember" class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div> -->
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit" value="Kirim">Sign in</button>
            </form><!-- /form -->
            <a href="#" class="forgot-password">
                Forgot the password?
            </a>
        </div><!-- /card-container -->
    </div><!-- /container -->





<!-- <body>
	<form method="post" action="valAdmin.php">
		<table>
			<tr>
				<td>Username</td><td>:</td>
				<td><input type="text" name="user_name"></td>
			</tr>
			<tr>
				<td>Password</td><td>:</td>
				<td><input type="password" name="user_pass"></td>
			</tr>
			<tr>
				<td colspan="2"></td>
				<td><input type="submit" value="Kirim"> <input type="reset" value="Batal"></td>
			</tr>
		</table>
	</form>
</body>
</html> -->