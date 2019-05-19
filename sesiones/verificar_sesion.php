<?php
//iniciamos la sesi�n 
session_name("loginUsuario"); 
session_start(); 

// $sMinSesion=$_SESSION["s_Sesion"];
$sMinSesion=5;
//**************************************************
//se manda llamar el archivo de configuracion*******
//include("../configuracion/configuracion.php");
//**************************************************

//convierto los minutos de la base de datos en segundos
$seg_sesion=$sMinSesion * 60 ;

//antes de hacer los c�lculos, compruebo que el usuario est� logueado 
//utilizamos el mismo script que antes 
if ($_SESSION["autentificado"] != "SI") 
{ 
    //si no est� logueado lo env�o a la p�gina de autentificaci�n 
    echo"<script language=\"javascript\">window.location=\"../login/index.php\"</script>";
} 
else 
{ 
    //sino, calculamos el tiempo transcurrido 
    $fechaGuardada = $_SESSION["ultimoAcceso"]; 
    $ahora = date("Y-n-j H:i:s"); 
    $tiempo_transcurrido = (strtotime($ahora)-strtotime($fechaGuardada)); 

    //comparamos el tiempo transcurrido 
    if($tiempo_transcurrido >= $seg_sesion)//30 segundos 
	{ 
		session_destroy(); // destruyo la sesi�n 
		echo"<script language=\"javascript\">window.location=\"../login/index.php\"</script>";
		
    }
	else //sino, actualizo la fecha y hora de la sesi�n 
	{ 
         $_SESSION["ultimoAcceso"] = $ahora; 
	} 
}
?>