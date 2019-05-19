<?php
//iniciamos la sesi�n 
session_name("loginUsuario"); 
session_start(); 

session_unset();
		session_destroy(); // destruyo la sesi�n 
		echo "<script language=\"javascript\">window.location=\"../login/index.php\"</script>";
		//echo "<script language=\"javascript\">window.location=\"../../site/login.php\"</script>";
?>