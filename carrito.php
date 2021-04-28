<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="fonts2/style.css"><!--enlace con la carpeta de iconos -->
    <link rel="stylesheet" href="carrito.css"><!--enlace con el css-->
    <title>CARRITO</title>
</head>
<body class="body" id="body">
<header class="head"> <!-- delimita el contenido de la pagina -->
        <h1><center><span class="icon-cart"> BIENVENIDO A SU CARRITO</h1></span><!-- titulo de la pagina -->
</header>
<section><!--se crea una sección para ingresar cintenido -->
<font face="ARIAL">
    <p>Un carrito de comprasfacilita a los consumidores la compra de algún producto o servicio al aceptar el pedido y el pago correspondiente en pocos pasos, con diferentes formas de cobro y reserva del producto.</p>
    <p>VENTAJAS DEL CARRITO</p>
    <p>*Ventaja en ahorrar costos de envío y tiempos.</p>
    <p>*Posibilidad de enviar en un mismo paquete múltiples productos y reducir costos de envío.</p>
    <p>*Aumento de ventas al ofrecer envíos gratis sin tener que pagar extra.</p>
</font>
</section>
<section class="carrito" id="carrito">
<span class="icon-cart"> Carrito</span><br>
    <?php include_once("conexion.php");
    
    ?>

    

    <button>comprar</button>

</section>
    
</body>
</html>