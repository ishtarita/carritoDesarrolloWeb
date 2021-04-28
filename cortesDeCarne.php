<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="fonts2/style.css">
    <link rel="stylesheet" href="styles/estilos.css">
    <title>Tenedor de plata</title>
</head>
<body>
    <div class="container">
        <div>
            <div class="contendormenu"><!-- se crea una clase y se agrega el icono -->
                <a href="#" class="btnmenu" id="btnmenu" onclick="mostrar()">
                    <span class="icon-menu" id="icon-menu"></span>
                </a>
                <br>
                <div class="menu" id="menu">
                    <nav><!-- se pone el menu -->
                        <ul class="menu1" id="contenedormenu">
                            <font face="Arial" size="4">
                                <li><a href="proyectofinal.php">Inicio</a></li>
                                <li><a href="entradas.php">Entradas</a></li>
                                <li><a href="#">Cortes de carne</a></li>
                                <li><a href="vinosYcocteles.php">Vinos y Cocteles</a></li>
                                <li><a href="postresYbebidas.php">Postres y Bebidas</a></li>
                            </font>
                        </ul>
                    </nav>
                </div>
                <div><!--se agrega el icono -->
                    <a href="carrito.php"class="cart">
                        <span class="icon-cart">carrito</span>
                    </a>
                </div>
            </div>
        </div>

        <div>
            <font face="Times New Roman" size="6">
                <h1><center>Los mejores cortes de carne</h1>
            </font>
            <div class="contenedor">
                <div>
                <?php
                    include_once("conexion.php");

                    $sql = "select * from inventario where tipo='Cortes de carne'";
                    $resultado = $conexion->query($sql);

                    //revisa si hay registros
                    if($resultado->num_rows>0){
                            ?>
                            <div class="d-flex flex-row flex-wrap justify-content-between   ">
                        <?php
                        //mientras haya registros los imprimira dentro de una tabla
                        while($fila = $resultado->fetch_assoc()){

                        ?>
                            <div class="card mb-3">
                                <img class="card-img-top" src=<?php echo $fila['imagen']?> alt="no se encontro la imagen"/>
                                <div class="d-flex flex-column justify-content-between card-body">
                                    <?php
                                        echo "<h5 class='card-title'>".$fila['nombre']."</h5>"."<br>";
                                    ?>
                                    <?php
                                        echo "<p class='card-text'>".$fila['descripcion']."</p>"."<br>";
                                    ?>
                                    <?php
                                        echo "<p class='card-text'>"."<small class='text-muted'>"."$".$fila['costo']."</small>"."</p>"."<br>";
                                    ?>
                                    <button type="button" class="align-self-end btn btn-outline-secondary " id="<?php echo $fila['id']?>" onclick="agregarCarrito(<?php echo $fila['id']?>)">Comprar</button>
                                </div>
                            </div>
                <?php
                        }
                        ?>
                        </div>
                        <?php
                    }
                ?>
                </div>
            </div>
            <script src="js/proyectofinal1.js"></script>
            <script src="js/carrito.js"></script>
        </div>
    </div>
</body>
</html>