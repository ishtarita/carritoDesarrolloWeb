<?php
	//se guardan las variables que fueron llamadas por el metodo post
	$id = $_POST['id'];
	$nombre = $_POST['nombre'];
	$precio = $_POST['precio'];
	$cantidad = $_POST['cantidad'];

	//se genera una query sql para insertar y se guarda en una variable php
	$sql = "INSERT INTO productos VALUES ('$id', '$nombre', '$precio', '$cantidad')";

	//se realiza ve si se puede realizar la conexion y se aplica la query 
	if($conexion->query($sql)===true){
		//si es posible se genera
		echo "producto agregado";
	}else{
		//si no se manda un error 
		echo "error al agregar".$conexion ->error;
	}
?>