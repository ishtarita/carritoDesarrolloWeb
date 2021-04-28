<?php
    $sql = "select * from productos";

    $resultado = $conexion->query($sql);

    //revisa si hay registros
    if($resultado->num_rows>0){
        //mientras haya registros los imprimira dentro de una tabla
        while($fila = $resultado->fetch_assoc()){
		?>
		    <tr>
            <td><?php echo $fila['id'];?></td>
			<td><?php echo $fila['nombre'];?></td>
			<td><?php echo $fila['precio'];?></td>
			<td><?php echo $fila['cantidad'];?></td>
			</tr>
			<?php
        }
    }
    else{
        echo "No se encontraron registros";
    }
?>
