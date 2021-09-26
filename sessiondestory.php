<?php
session_start();
unset($_SESSION['emailid']);
header("location:login.php");
//session_unset();
session_destroy();
	 

?>