<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"><!-- -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COMIDA GOURMET</title><!-- titulo de la pestaña -->
    <link rel="stylesheet" href="fonts2/style.css">
    <link rel="stylesheet" href="styles/index.css"><!-- conexion al css -->
</head>
<body class="body">
<header class="header"> <!-- delimita el contenido de la pagina -->
        <h1><center>CORTES GOURMET</h1><br><!-- titulo de la pagina -->
        <font face="Brush Script MT" size="6"><!-- tipo de letra y tamaño -->
            <h2><center>Bienvenidos</h2><!-- subtittulo -->
        </font>
        <div class="usertie"><!--se agrega el icono -->
            <center><a href="login.php"class="usertie"><span class="icon-user-tie">Administrador</a></span>
            </div>
        <div class="phone"><!-- se crea una clase y se agrega el icono -->
            <span class="icon-phone">55-55-55-55-55</span>
        </div>
        <div class="pushpin"><!-- se crea una clase y se agrega el icono -->
            <span class="icon-pushpin">Polanco #2445 CDMX&nbsp;</span>
        </div>
        <div class="instagram"><!-- se crea una clase y se agrega el icono -->
            <span class="icon-instagram">cortesgourmet&nbsp;</span>
        </div>

        <div class="contendormenu"><!-- se crea una clase y se agrega el icono -->
            <a href="#" class="btnmenu" id="btnmenu" onclick="mostrar()"><span class="icon-menu" id="icon-menu"></a></span><br>
            <div class="menu" id="menu">
                <nav><!-- se pone el menu -->
                    <ul class="menu1" id="contenedormenu">
                        <font face="Arial" size="4"><li><a href="#">Inicio</a></li>
                        <li><a href="entradas.php">Entradas</a></li>
                        <li><a href="cortesDeCarne.php">Cortes de carne</a></li>
                        <li><a href="vinosYcocteles.php">Vinos y Cocteles</a></li>
                        <li><a href="postresYbebidas.php">Postres y Bebidas</a></li></font>
                    </ul>
                </nav>
            </div>
            <div><!--se agrega el icono -->
                <a href="carrito.php"class="cart"><span class="icon-cart">carrito</a></span>
            </div>

        <p class="centrado"><center><img src="img/carne-argentina.jpg" width="1000px" height="600px"
        alt="Haz clic aquí para volver a la página de inicio"></p><br>
</header>

    <script src="js/proyectofinal.js"></script>
</body>
</html>