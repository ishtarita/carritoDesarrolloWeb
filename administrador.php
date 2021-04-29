<?php
   session_start();
   if(isset($_POST['botonAgregar'])){
    include_once("CRUD/agregar.php");
  }

  if(isset($_POST['botonEliminar'])){
    include_once("CRUD/eliminar.php");
  }

  if(isset($_POST['botonEditar'])){
    include_once("CRUD/editar.php");
  }

  if(isset($_POST['logout'])){
    session_destroy();
    header("location:login.php");
    exit();
  }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/administrador.css"><!--enlace con el css-->
    <title>Administrador</title>
</head>
<!-- Se comprueba si se inicio sesion que esta almacenado en session-->
<?php if (isset($_SESSION['valid'])){ ?>  

  <!-- se incluye la cabecera para que el usuario pueda pasar hacia todas las paginas-->
    <body class="body" id="body">
    <?php
    include './cabecera.php';
  ?>
    <div class="head"> <!-- delimita el contenido de la pagina -->
            <h1><center><span class="icon-user-tie">Bienvenido administrador</h1></span><!-- titulo de la pagina -->
    </div>


      <section class="titulo"><!--se crea una sección para ingresar contenido -->
        <font face="ARIAL">
        <p class="lead">
           Ingrese los datos que desee agregar, cambiar, eliminar o editar.
        </p>
        </font>
      </section>
      <div class="contenido" id="contenido">
          <form action="administrador.php"  method="POST">
           <section class="admi" id="admin">

                  <button class="btn btn-outline-secondary" name="logout">Logout</button>

                  <div class="form-group">
                    <label for="disabledTextInput">ID</label>
                    <input type="text" name="id" id="id" class="form-control" placeholder="Ingrese id">
                  </div>
                  <!-- se generan los inputs y los botones dentro de un form para poder acceder al CRUD-->
                  <div class="form-group">
                    <label for="">ID nuevo</label>
                    <input type="text" name="idNuevo" id="idNuevo" class="form-control" placeholder="Ingrese nuevo id">
                  </div>

                  <div class="form-group">
                    <label for="disabledTextInput">Tipo</label>
                    <input type="text" name="tipo" id="tipo" class="form-control" placeholder="Ingrese tipo">
                  </div>

                  <div class="form-group">
                    <label for="disabledTextInput">Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ingrese nombre">
                  </div>

                  <div class="form-group">
                      <label for="disabledTextInput">costo</label>
                      <input type="text" name="costo" id="costo" class="form-control" placeholder="Ingrese precio">
                  </div>

                  <div class="form-group">
                    <label for="disabledTextInput">Descripcion</label>
                    <input type="text" name="descripcion" id="descripcion" class="form-control" placeholder="Ingrese descripcion">
                  </div>

                  <div class="form-group">
                    <label for="disabledTextInput">Imagen</label>
                    <input type="text"  name="imagen" class="form-control" placeholder="Ingrese nombre de imagen con extesion">
                  </div>
                    <button class="btn btn-outline-secondary" name="botonMostrar">Mostrar</button>
                    <button class="btn btn-outline-secondary" name="botonAgregar" >Agregar</button>
                    <button class="btn btn-outline-secondary" name="botonEditar" >Editar</button>
                    <button class="btn btn-outline-secondary" name="botonEliminar" >Eliminar</button>

                </section>
          </form>
      </div>
      <?php 
			// se incluye el archivo conexion
				include_once("conexion.php");

            if(isset($_POST['botonMostrar'])){
							?>
						<table border class="table">
              <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Costo</th>
                    <th scope="col">Imagen</th>
                </tr>
              </thead>

						    <?php
							    include_once("CRUD/mostrar.php");
						  	?>

						</table>
						<?php
						}
		?>
    <!-- Si no esta autorizado se manda un error-->
     <?php
     } else {
      header("location:login.php");
    }
      ?>
    </body>
</html>