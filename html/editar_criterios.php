<?php

$criterio_id = $_GET['id'];

$criterio= record_por_id('criterios',$criterio_id);

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
		<form class="form-horizontal" role="form" method="post" action="app/edit_criterios.php">

		

			<div class="container">
<h3>Registrar Criterios</h3>
	<br>
	<form class="form-horizontal" role="form" method="post" action="app/edit_criterios.php">

		<input type="hidden" value="<?php echo $criterio_id; ?>" name="criterio_id">

	<div class="col-md-10">
			<div class="form-group">
				<label for="name" class="col-sm-2 control-label">1.-</label>
					<div class="col-sm-10">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon glyphicon-check"></i></span>
							<input type="text" name="crit1" class="form-control" id="txtCrit1"  placeholder="Escribe el criterio" value="<?php echo $criterio["criterio1"]; ?>" autofocus>
						</div>
					</div>
			</div>
	</div>
	<div class="col-md-10">
			<div class="form-group">
				<label for="name" class="col-sm-2 control-label">2.-</label>
					<div class="col-sm-10">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon glyphicon-check"></i></span>
							<input type="text" name="crit2" class="form-control" id="txtcrit2"  placeholder="Escribe el criterio" value="<?php echo $criterio["criterio2"]; ?>"autofocus>
						</div>
					</div>
			</div>
	</div>

	<div class="col-md-10">
			<div class="form-group">
				<label for="name" class="col-sm-2 control-label">3.-</label>
					<div class="col-sm-10">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon glyphicon-check"></i></span>
							<input type="text" name="crit3" class="form-control" id="txtcrit3"  placeholder="Escribe el criterio" value="<?php echo $criterio["criterio3"]; ?>"autofocus>
						</div>
					</div>
			</div>
	</div>

	<div class="col-md-10">
			<div class="form-group">
				<label for="name" class="col-sm-2 control-label">4.-</label>
					<div class="col-sm-10">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon glyphicon-check"></i></span>
							<input type="text" name="crit4" class="form-control" id="txtcrit4"  placeholder="Escribe el criterio" value="<?php echo $criterio["criterio4"]; ?>"autofocus>
						</div>
					</div>
			</div>
	</div>

	<div class="col-md-10">
			<div class="form-group">
				<label for="name" class="col-sm-2 control-label">5.-</label>
					<div class="col-sm-10">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon glyphicon-check"></i></span>
							<input type="text" name="crit5" class="form-control" id="txtcrit5"  placeholder="Escribe el criterio" value="<?php echo $criterio["criterio5"]; ?>" autofocus>
						</div>
					</div>
			</div>
	</div>

	<div class="col-md-10">
			<div class="form-group">
				<label for="name" class="col-sm-2 control-label">6.-</label>
					<div class="col-sm-10">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon glyphicon-check"></i></span>
							<input type="text" name="crit6" class="form-control" id="txtcrit6"  placeholder="Escribe el criterio" value="<?php echo $criterio["criterio6"]; ?>"autofocus>
						</div>
					</div>
			</div>
	</div>

	<div class="col-md-10">
			<div class="form-group">
				<label for="name" class="col-sm-2 control-label">7.-</label>
					<div class="col-sm-10">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon glyphicon-check"></i></span>
							<input type="text" name="crit7" class="form-control" id="txtcrit7"  placeholder="Escribe el criterio" value="<?php echo $criterio["criterio7"]; ?>"autofocus>
						</div>
					</div>
			</div>
	</div>

	<div class="col-md-10">
			<div class="form-group">
				<label for="name" class="col-sm-2 control-label">8.-</label>
					<div class="col-sm-10">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon glyphicon-check"></i></span>
							<input type="text" name="crit8" class="form-control" id="txtcrit8"  placeholder="Escribe el criterio" value="<?php echo $criterio["criterio8"]; ?>" autofocus>
						</div>
					</div>
			</div>
	</div>

	<div class="col-md-10">
			<div class="form-group">
				<label for="name" class="col-sm-2 control-label">9.-</label>
					<div class="col-sm-10">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon glyphicon-check"></i></span>
							<input type="text" name="crit9" class="form-control" id="txtcrit9"  placeholder="Escribe el criterio" value="<?php echo $criterio["criterio9"]; ?>"autofocus>
						</div>
					</div>
			</div>
	</div>

	<div class="col-md-10">
			<div class="form-group">
				<label for="name" class="col-sm-2 control-label">10.-</label>
					<div class="col-sm-10">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon glyphicon-check"></i></span>
							<input type="text" name="crit10" class="form-control" id="txtcrit10"  placeholder="Escribe el criterio" value="<?php echo $criterio["criterio10"]; ?>"autofocus>
						</div>
					</div>
			</div>
	</div>
	
 </div>
		
		<p class="text-right"><br><br><br>
		<input class="btn btn-lg btn-primary" type="submit" id="save_criterios_btn" value="Guardar Criterios"></input>
		</p>
						
	</form>
                        
</div>

	</form>
		<hr>
	</div>
</div>