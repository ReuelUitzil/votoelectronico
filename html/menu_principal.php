<div class="container">
<br>
  	<div class="jumbotron jumbo">
		  <h1>Bienvenido <?php echo $_SESSION['nombre_profesor']; ?></h1>
		  <p>Elige la tarea que requieres hacer...</p>
		  <br>
		  <br>
		  <br>
		  <?php if (isset($_SESSION['profesor_id'])):?>
		  	<div class="col-md-4"><p><a class="btn btn-info btn-md" href="index.php?page=registrar_proyectos" role="button">Registrar Nuevo Proyectos</a></p></div>
		  
		  	<div class="col-md-4"><p><a class="btn btn-primary btn-md" href="index.php?page=lista_criterios" role="button">Registrar Criterios</a></p></div>
		  	
		  	<div class="col-md-4"><p><a class="btn btn-primary btn-md" href="index.php?page=registrar_equipos" role="button">Registrar Nuevo Equipo</a></p></div>
		  
		  	<!--<div class="col-md-4"><p><a class="btn btn-success btn-md" href="index.php?page=registrar_profesores" role="button">Registrar Profesores</a></p></div>-->
		  
		<?php endif;?>
	</div>
</div>