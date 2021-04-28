<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="fonts2/style.css"><!--enlace con la carpeta de iconos -->
    <link rel="stylesheet" href="administrador.css"><!--enlace con el css-->
    <title>ADMINISTRADOR</title>
</head>
    <body class="body" id="body">
    <header class="head"> <!-- delimita el contenido de la pagina -->
            <h1><center><span class="icon-user-tie">BIENVENIDO ADMINISTRADOR</h1></span><!-- titulo de la pagina -->
    </header>
    <?php 
			// se manda a llamar el archivo conexion
				include_once("conexion.php");

				/*	$comprobacion = $_POST["contenido"];
					
					if ($comprobacion === true){*/
						//se comprueba si se entro a esa opcion y despues entra a el archivo
            if(isset($_POST['botonMostrar'])){
							?>
						<table border class="mostrar">
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
						// mostrar $phpVar1 y $phpVar2
				/*	}else
						echo"no se pudo realizar".$comprobacion;
					}*/		

		?>
      <section><!--se crea una sección para ingresar cintenido -->
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
          <form action="TestCRUDSincrono.php"  method="POST">
           <section class="admi" id="admin">
                <span class="icon-user-tie">administrador</span><br>

                  <div class="form-group">
                    <label for="disabledTextInput">ID</label>
                    <input type="text" id="disabledTextInput" class="form-control" placeholder="Ingrese id">
                  </div>

                  <div class="form-group">
                    <label for="disabledTextInput">ID nuevo</label>
                    <input type="text" id="disabledTextInput" class="form-control" placeholder="Ingrese nuevo id">
                  </div>
                    
                  <div class="form-group">
                    <label for="disabledTextInput">Nombre</label>
                    <input type="text" id="disabledTextInput" class="form-control" placeholder="Ingrese nombre">
                  </div>

                  <div class="form-group">
                      <label for="disabledTextInput">precio</label>
                      <input type="text" id="disabledTextInput" class="form-control" placeholder="Ingrese precio">
                  </div>

                  <div class="form-group">
                    <label for="disabledTextInput">Descripcion</label>
                    <input type="text" id="disabledTextInput" class="form-control" placeholder="Ingrese descripcion">
                  </div>

                  <div class="form-group">
                    <label for="disabledTextInput">Imagen</label>
                    <input type="text" id="disabledTextInput" class="form-control" placeholder="Ingrese nombre de imagen con extesion">
                  </div>

                    <button type="button" class="align-self-end btn btn-outline-secondary" name="botonMostrar">Mostrar</button>
                    <button type="button" class="align-self-end btn btn-outline-secondary" name="botonAgregar" >Agregar</button>
                    <button type="button" class="align-self-end btn btn-outline-secondary" name="botonEditar" >Editar</button>
                    <button type="button" class="align-self-end btn btn-outline-secondary" name="botonEliminar" >Eliminar</button>

                    </table>

                </section>
          </form>
      </div>
     
    </body>
</html>