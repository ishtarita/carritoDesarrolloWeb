<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="fonts2/style.css"><!--enlace con la carpeta de iconos -->
    <link rel="stylesheet" href="styles/administrador.css"><!--enlace con el css-->
    <title>ADMINISTRADOR</title>
</head>
    <body class="body" id="body">
    <?php
    include './cabecera.php';
  ?>
    <header class="head"> <!-- delimita el contenido de la pagina -->
            <h1><center><span class="icon-user-tie">BIENVENIDO ADMINISTRADOR</h1></span><!-- titulo de la pagina -->
    </header>


      <section><!--se crea una sección para ingresar contenido -->
        <font face="ARIAL">
              <p>En este apartado se hara la parte del administrador.</p> 
              <p>Es responsable del manejo, mantenimiento, desempeño y de la confiabilidad de bases de datos. Asimismo, están a cargo de la mejora y diseño de nuevos modelos de las mismas.
          Manejar una base de datos implica recolectar, clasificar y resguardar la información de manera organizada, por ello, estos profesionales velan por garantizar que la misma esté debidamente almacenada y segura, además de que sea de fácil acceso cuando sea necesario. </p>
          <p>FUNCIONES</p>
          <p>*Mantener la accesibilidad a la base de datos.</p>
          <p>*Garantizar que sea segura.</p>
          <P>*Garantizar que la información cumpla con los requerimientos de almacenamiento del sistema.</P>
        </font>
      </section>
      <div class="contenido" id="contenido">
          <form action="administrador.php"  method="POST">
           <section class="admi" id="admin">
                <span class="icon-user-tie">administrador</span><br>
                  <div class="form-group">
                    <label for="disabledTextInput">ID</label>
                    <input type="text" name="id" id="id" class="form-control" placeholder="Ingrese id">
                  </div>

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
			// se manda a llamar el archivo conexion
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
	
						if(isset($_POST['botonAgregar'])){
							include_once("CRUD/agregar.php");
						}
	
						if(isset($_POST['botonEliminar'])){
							include_once("CRUD/eliminar.php");
						}
	
						
						if(isset($_POST['botonEditar'])){
							include_once("CRUD/editar.php");
						}
		?>
     
    </body>
</html>