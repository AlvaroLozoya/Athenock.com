<?php
	
	session_start();

	if(!isset($_SESSION['nombre'])){
		echo '
		<script>
			window.location = "./PHP/login.php";
		</script>
		';
		die();
		session_destroy();
	} 
	
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="./visual/CSS/style.css">
	<link rel="stylesheet" href="./visual/CSS/styleabandonos.css">
    <link rel="shorcut icon" href="./visual/media/logos/logopage.ico">
	<title>Athenock - SPOTS</title>
</head>
<body>
	<section class="bg-custom">
		<?php
            include './PHP/navbarlogin.php'

            
        ?>
        <section class="bg-custom">
        	<div class="bg-custom">
        		<section>
        			<a href="#info" data-bs-target="#info" data-bs-toggle="modal"><h1 class="text-light text-center mt-3">SPOTS</h1></a>        			
					<div class="modal fade bg-dark" id="info" tabindex="-1" aria-labelledby="exampleModalLabel" >
  					<div class="modal-dialog bg-dark">
    					<div class="modal-content">
      					<div class="modal-header">
        					<h5 class="modal-title clear-link" id="exampleModalLabel">SPOTS</h5>
        					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      					</div>
      					<div class="modal-body">
        					<div class="row m-0 mt-4">
                            	<div class="col"></div>
                            	<div class="col-9">
                                	<p class="fs-3 mt-2">Un "SPOT" es un sitio para patinar tranquilamente solo o con amigos, simplemente patinar en cualquier modalidad y en cualquier sitio</p>
                                	<p class="fs-3">- Respeta siempre los spots si se rompen o se causan problemas al final en ese spot no se podrá patinar nunca más.</p>
                            	</div>
                            	<div class="col"></div>
                			</div>
        				</div>
      					<div class="modal-footer">
        					<button type="button" class="btn btn-cus text-light" data-bs-dismiss="modal">Cerrar</button>
      					</div>
    					</div>
  					</div>
					</div>
        		</section>
        		<div class="backpage rounded">
        			<?php
        				require('./PHP/conexion_athenock.php');

        				if(mysqli_select_db($conexion, $bbdd)){
							//3.- Definimos la query
							$consulta="SELECT cod_lugar, nombre, dificultad, foto_portada, localizacion, estado, descripcion FROM spots ORDER BY cod_lugar;";
							//4.- EJECUTAR LA QUERY
							$resultado=mysqli_query($conexion, $consulta);
							//5.- Comprobación de posibles errores
								if(mysqli_errno($conexion)!=0){

									//quiere decir que hay algún error
									echo "<p>Nº Error".mysqli_errno($conexion)."</p>";
									echo "<p>Mensaje: ".mysqli_error($conexion)."</p>";
								}else{
										//no hay error
										//6.- Sacar los datos por pantalla(si es una query SELECT)
										while($dato=mysqli_fetch_array($resultado)){
        									echo "<a href='./ficha_abandonos.php?cod_lugar=$dato[cod_spot]' title='ver la info de: $dato[nombre]' class='clear-link'>";
        										echo "<div class='card mt-3 bg-custom1 text-light'>";
  													echo "<div class='row'>";
  														echo "<div class='col-3'><img src='./visual/media/images/$dato[foto_portada]' class='img-card' alt='Foto abandono'></div>";
  														echo "<div class='col-7'>";
    														echo "<h5 class='card-title mt-4'>$dato[nombre]</h5>";
    														echo "<p class='card-text'>dificultad: $dato[dificultad] Localizacion: $dato[localizacion] Estado: $dato[estado]</p>";
  														echo "</div>";
  													echo "</div>";
												echo "</div>";
        									echo "</a>";

        								}
        							}
        				}
        			?>
        			
        		</div>
        		<div class="mt-5">
        			<div class="row m-0">
        				<div class="col"></div>
        				<div class="col">
        					<a href="./PHP/subir_lugar.php">
        						<button class="btn btn-success color-custom alt wid">Subir mi spot</button>
        					</a>
        				</div>
        				<div class="col"></div>
        			</div>
        			
        		</div>
        	</div>
        	
        </section>
	</section>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>

