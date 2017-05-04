<?php
include "../class/class_login.php";
$login = new Login();
$login->unsetLoginSession();
header("location: ../index.php")
?>