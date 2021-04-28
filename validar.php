<?php
	include_once("conexion.php");
	$usuario = $_POST['usuario'];
	$contrasena = $_POST['password'];

	echo 'usuario' . $usuario. $contrasena;



	$sql = "SELECT * from usuarios WHERE usuario='$usuario' and(contrasena = '$contrasena') ";
	//$sql = "SELECT * from usuarios WHERE usuario= '$usuario'";
	//$sql = "SELECT * from usuarios WHERE contrasena = '$contrasena'";

	$resultado= $conexion->query($sql);
	//$resultado=mysqli_query($conexion, $sql);

	//$fila = mysqli_num_rows($resultado);

	if($resultado ->num_rows > 0){
		echo "hay registros";
	}
	else{
		echo"sin registros";
	}
	$fila = $resultado->fetch_assoc();
	echo $fila['usuario'];


	if($fila > 0){
		header("location:administrador.php");
	}
	else{
		echo "error en la autentificación";
		//header("location:administrador.php");

		
	}

	mysqli_free_result($resultado);
	mysqli_close($conexion);
	




?>