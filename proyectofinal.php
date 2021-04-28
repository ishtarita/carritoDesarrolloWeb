<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"><!-- -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COMIDA GOURMET</title><!-- titulo de la pestaña -->
    <link rel="stylesheet" href="fonts2/style.css">
    <link rel="stylesheet" href="styles/index.css"><!-- conexion al css -->
    <script src="https://kit.fontawesome.com/f5e741ea9d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
  <?php
    include ('./cabecera.php');
  ?>
  <div class="header"> <!-- delimita el contenido de la pagina -->
    <h1><center>CORTES GOURMET</h1><br><!-- titulo de la pagina -->
    <font face="Brush Script MT" size="6"><!-- tipo de letra y tamaño -->
        <h2><center>Bienvenidos</h2><!-- subtittulo -->
    </font>
    <div class="usertie"><!--se agrega el icono -->
        <center><a href="login.php"class="usertie"><i class="fas fa-user-tie"></i>Administrador</a>
        </div>
    <div class="phone"><!-- se crea una clase y se agrega el icono -->
    <i class="fas fa-phone"> </i> 55-55-55-55-55
    </div>
    <div class="pushpin"><!-- se crea una clase y se agrega el icono -->
    <i class="fas fa-map-pin"> </i> Polanco #2445 CDMX&nbsp;
    </div>
    <div class="instagram"><!-- se crea una clase y se agrega el icono -->
      <i class="fab fa-instagram"> </i> cortesgourmet&nbsp
    </div>


    <p class="centrado"><center><img src="img/carne-argentina.jpg" width="1000px" height="600px"
    alt="Haz clic aquí para volver a la página de inicio"></p><br>
  </div>

    <script src="js/proyectofinal.js"></script>
</body>
</html>