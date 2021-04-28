<?php
	//se guardan las variables que fueron llamadas por el metodo post
	$id = $_POST['id'];
	$tipo = $_POST['tipo'];
	$nombre = $_POST['nombre'];
	$descripcion = $_POST['descripcion'];
	$costo = $_POST['costo'];
	$imagen = $_POST['imagen'];

	//se genera una query sql para insertar y se guarda en una variable php
	$sql = "INSERT INTO inventario VALUES ('$id', '$tipo','$nombre', '$descripcion', '$costo', '$imagen')";

	//se realiza ve si se puede realizar la conexion y se aplica la query 
	if($conexion->query($sql)===true){
		//si es posible se genera
		echo "producto agregado";
	}else{
		//si no se manda un error 
		echo "error al agregar".$conexion ->error;
	}
?>