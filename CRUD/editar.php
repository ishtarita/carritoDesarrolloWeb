<?php
//se guardan las variables que fueron llamadas por el metodo post
	$id = $_POST['id'];
	$idNuevo = $_POST['idNuevo'];
	$tipo = $_POST['tipo'];
	$nombre = $_POST['nombre'];
	$costo = $_POST['costo'];
	$descripcion = $_POST['descripcion'];
	$imagen = $_POST['imagen'];
	//se genera una query sql para actualizar datos y se guarda en una variable php
	$sql = "UPDATE inventario SET id=$idNuevo, nombre='$nombre', costo=$costo, descripcion='$descripcion', imagen='$imagen', tipo='$tipo' WHERE id=$id";

	//se realiza ve si se puede realizar la conexion y se aplica la query 
	if($conexion->query($sql)===true){
		echo "Actualizo correctamente";
	}
	else{
		echo "No se pudo actualizar";
	}

?>