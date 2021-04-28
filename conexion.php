<?php
	/* variables que guarden datos del servidor*/ 
	$servidor = "localhost";
	$usuario = "root";
	$password = "";
	$db = "programacionweb";

	/*se hace la conexion*/
	$conexion = new mysqli($servidor, $usuario, $password, $db);
	/* se comprueba si al conexion fue exitosa*/
	if($conexion->connect_error){
		die("conexion fallida");
	}
?>