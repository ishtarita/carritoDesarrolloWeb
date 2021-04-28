<?php
    $sql = "SELECT * FROM inventario";

    $resultado = $conexion->query($sql);

    //revisa si hay registros
    if($resultado->num_rows>0){
        //mientras haya registros los imprimira dentro de una tabla
        while($fila = $resultado->fetch_assoc()){
		?>
        <tbody>

		    <tr>
            <td scope="row"><?php echo $fila['id'];?></td>
            <td scope="row"><?php echo $fila['tipo'];?> </td>
            <td scope="row"><?php echo $fila['nombre'];?> </td>
            <td scope="row"><?php echo $fila['descripcion'];?> </td>
            <td scope="row"><?php echo $fila['costo'];?> </td>
            <td scope="row"><?php echo $fila['imagen'];?> </td>

        </tbody>
			<?php
        }
    }
    else{
        echo "No se encontraron registros";
    }
?>
