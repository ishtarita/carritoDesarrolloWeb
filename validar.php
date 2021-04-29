<?php
	session_start();
	include_once("conexion.php");
	$usuario = $_POST['usuario'];
	$contrasena = $_POST['password'];

	echo 'usuario' . $usuario. $contrasena;

	$sql = "SELECT * from usuarios WHERE usuario='$usuario' AND (contrasena='$contrasena') ";

	$resultado= $conexion->query($sql);

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
		$_SESSION['valid'] = true;
		$_SESSION['timeout'] = time();
		$_SESSION['username'] = $fila['nombre'];
	}
	else{
		echo "error en la autentificación";

		header("location:login.php");
	}
	mysqli_free_result($resultado);
	mysqli_close($conexion);
?>