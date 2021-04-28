<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="fonts2/style.css"><!--enlace con la carpeta de iconos -->
    <link rel="stylesheet" href="styles/estilos.css"><!--enlace con el css-->
    <title>CARRITO</title>
</head>
<body>
  <?php
    include './cabecera.php';
  ?>
  <div class="container">

      <h1>
        <center><span class="icon-cart"> BIENVENIDO A SU CARRITO</span>
      </h1>
  </div>
  <section class="carrito" id="carrito">
    <?php
    include_once "conexion.php";

    $data = json_decode($_COOKIE["productos"]);
    $products = array();
    $cantidad =array();
    foreach($data as $item){
      array_push($products, $item->id);
      array_push($cantidad, $item->cantidad);
    }

    $products = implode(',', $products);

    $sql = "SELECT * FROM inventario WHERE id IN ($products)";

    $resultado = $conexion->query($sql);

    //revisa si hay registros
    if ($resultado->num_rows > 0) { ?>
    <div class="d-flex flex-row flex-wrap justify-content-between">
      <?php
      //mientras haya registros los imprimira dentro de una tabla
      $i = 0;
      $total = 0;
      while ($fila = $resultado->fetch_assoc()) { 
        $total_unidad = (int)$cantidad[$i]*(int)$fila['costo'];
        $total += $total_unidad;
      ?>
      <div class="card mb-3 ">
        <img class="card-img-top" src=<?php echo $fila['imagen']; ?> alt="no se encontro la imagen"/>
        <div class="d-flex flex-column justify-content-around card-body">
          <?php
          echo "<h5 class='card-title'>".
            $fila['nombre'].
          "</h5>"."<br>";
          ?>
          <?php
          echo "<p class='card-text'>".
            "<small class='text-muted'>".
              "$".$fila['costo'].
            "</small>" .
          "</p>" .
          "<p class='card-text'>".
            'Cantidad: '.$cantidad[$i].
          "</p>".
          "<p class='card-text'>".
            'Total del producto: $'.$total_unidad.
          "</p>";
          ?>
        </div>
      </div>
      <?php
        $i =+ 1;
      }
    ?>
    </div>
    <?php
    echo $total;
  } ?>
    <button onclick="comprar()">Comprar</button>
  </section>
</body>
</html>