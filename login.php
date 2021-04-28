<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="fonts2/style.css">
    <link rel="stylesheet" href="styles/login.css"><!-- conexion al css -->
    <title>LOGIN</title>
</head>
<body>
    <h1><center><span class="icon-user-tie"> LOGIN ADMINISTRADOR</span></h1><br><!-- titulo de la pagina -->
        <font face="Brush Script MT" size="6"><!-- tipo de letra y tamaño -->
        </font>
        <div class="container">
        <div class="row text-center login-page">
	   <div class="col-md-12 login-form">
	      <form action="validar.php" method="post"> 			
	         <div class="row">
		    <div class="col-md-12 login-form-header">
            <center><p class="login-form-font-header"><span class="icon-user-tie"> ADMINISTRADOR</span><p>
		    </div>
		</div>
		<div class="row">
		   <div class="col-md-12 login-from-row">
           <center><span class="icon-user"><input name="usuario" type="text" placeholder="Usuario" required/></span>
		   </div>
		</div>
		<div class="row">
		   <div class="col-md-12 login-from-row">
           <center><span class="icon-lock"><input name="password" type="password" placeholder="Contraseña" required/></span>
		   </div>
		</div>
		<div class="row">
		   <div class="col-md-12 login-from-row">
           <center><button class="usertie"><!--se agrega el icono -->
            <form action="administrador.php" method="post"><span>ingresar</span>
			</button>
		   </div>
		</div>
	    </form>
	</div>
     </div>
  </div>

</body>
</html>