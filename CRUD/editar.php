<?php
//se guardan las variables que fueron llamadas por el metodo post
	$id = $_POST['id'];
	$idNuevo = $_POST['idNuevo'];
	$nombre = $_POST['nombre'];
	$precio = $_POST['precio'];
	$cantidad = $_POST['cantidad'];

	//se genera una query sql para actualizar datos y se guarda en una variable php
	$sql = "UPDATE productos SET id=$idNuevo, nombre='$nombre', precio=$precio, cantidad=$cantidad WHERE id=$id";

	//se realiza ve si se puede realizar la conexion y se aplica la query 
	if($conexion->query($sql)===true){
		echo "agregado correctamente";
	}
	else{
		echo "no se pudo agregar";
	}

?>