<?php
	//se guardan la variable que fue llamada por el metodo post
	$id = $_POST['id'];

	//se genera una query sql para eliminar y se guarda en una variable php
	$sql = "DELETE FROM inventario WHERE id=$id";

	//se realiza ve si se puede realizar la conexion y se aplica la query 
	if($conexion->query($sql)===true){
		echo "producto eliminado";
	}
	else{
		echo "error al eliminar producto";
	}
	
?>