<?php

$proyecto_id = $_GET['id'];

$proyectos= record_por_id('proyectos',$proyecto_id);

?>

<div class="container">
	<div class="row">

	<?php if(isset($_GET["actualizado"])){ ?>
                <div class="alert alert-success alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <strong>COMPLETADO: </strong> Sus datos han sido actualizados correctamente.
                </div>
                <?php } ?>
		<div class="col-md-10">
		<form class="form-horizontal" role="form" method="post" action="app/edit_proyectos.php">

		<input type="hidden" value="<?php echo $proyecto_id; ?>" name="proyecto_id">

		
			<h2>Registrar Proyecto</h2>
			<div class="col-md-1"></div>
			<div class="col-md-10">
					<div class="col-md-7">
						<br>
						<div class="form-group">
							<label for="titulo"  class="control-label">Titulo:</label>
							<div class="">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-text-color"></i></span>
									<input type="text" name="title" class="form-control" id="txtTitulo"  placeholder="Ingrese el titulo de su proyecto..." value="<?php echo $proyectos["nombre"]; ?>" autofocus>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="descripcion"  class="control-label">Descripción:</label>
							<div class="">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
									<textarea class="form-control" name="descripcion" rows="6"  id="txtDescrip" placeholder="Escriba un resumen sobre su proyecto..."><?php echo $proyectos["descripcion"]; ?></textarea>
								</div>
							</div>
						</div>
					<br>
					</div>
					<div class="col-md-5">
					<br/>
					<br/>
					<br/>
					<br/>
					<br/>
					<br/>
		
		<p class="text-right"><br><br><br>
		<input class="btn btn-lg btn-primary" type="submit" id="save_proyecto_btn" value="Guardar Edición"></input>
		</p>
						
	</form>
                        
</div>

	</form>
		<hr>
	</div>
</div>
</form>
</div>
</div>
</div>