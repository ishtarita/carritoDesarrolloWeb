<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/f5e741ea9d.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="fonts2/style.css">
  <link rel="stylesheet" href="styles/estilos.css">
  <title>Tenedor de plata</title>
</head>

<body>
  <?php
    include './cabecera.php';
    $menu = $_GET['cat'];
  ?>
  <div class="container">

    <div>
      <font face="Times New Roman" size="6">
        <?php switch ($menu) {
          case 'entradas':
            echo "<h1><center>Entradas</h1>";
            $sql = "select * from inventario where tipo='entradas'";
            break;
          case 'cortes':
            echo "<h1><center>Los mejores cortes de carne</h1>";
            $sql = "select * from inventario where tipo='Cortes de carne'";
            break;
          case 'vinos':
            echo "<h1><center>Vinos y cócteles</h1>";
            $sql = "select * from inventario where tipo='vinos'";
            break;
          case 'postres':
            echo "<h1><center>Postres y bebidas</h1>";
            $sql =
              "select * from inventario where tipo='postres' or tipo='bebidaf' or tipo='bebidac'";
            break;
        } ?>
      </font>
      <div class="contenedor">
        <div>
          <?php
          include_once "conexion.php";

          $resultado = $conexion->query($sql);

          //revisa si hay registros
          if ($resultado->num_rows > 0) { ?>
          <div class="d-flex flex-row flex-wrap justify-content-between">
            <?php
            //mientras haya registros los imprimira dentro de una tabla
            while ($fila = $resultado->fetch_assoc()) { ?>
            <div class="card mb-3">
              <img class="card-img-top" src=<?php echo $fila[
                'imagen'
              ]; ?> alt="no se encontro la imagen" />
              <div class="d-flex flex-column justify-content-between card-body">
                <?php echo "<h5 class='card-title'>" .
                  $fila['nombre'] .
                  "</h5>" .
                  "<br>"; ?>
                <?php echo "<p class='card-text'>" .
                  $fila['descripcion'] .
                  "</p>" .
                  "<br>"; ?>
                <?php echo "<p class='card-text'>" .
                  "<small class='text-muted'>" .
                  "$" .
                  $fila['costo'] .
                  "</small>" .
                  "</p>" .
                  "<br>"; ?>
                <button type="button" class="align-self-end btn btn-outline-secondary " id="<?php echo $fila[
                  'id'
                ]; ?>"
                  onclick="agregarCarrito(<?php echo $fila[
                    'id'
                  ]; ?>)">Comprar</button>
              </div>
            </div>
            <?php } ?>
          </div>
          <?php }
          ?>
        </div>
      </div>
      <script src="js/proyectofinal.js"></script>
      <script src="js/carrito.js"></script>
    </div>
  </div>
</body>

</html>