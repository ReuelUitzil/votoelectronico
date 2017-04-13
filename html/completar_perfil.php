<?php

$usuario_id = $_GET["usuario_id"];

?>

<div class="container">
<h3>Completa tu perfil para empezar a usar la aplicación</h3>
	<br>
	<form class="form-horizontal" role="form" method="post" action="app/save_profesor.php">

<input type="hidden" value="<?php echo $usuario_id; ?>" name="usuario_id">

	<div class="col-md-6">
			<div class="form-group">
				<label for="name" class="col-sm-2 control-label">Nombre:</label>
					<div class="col-sm-10">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							<input type="text" name="name" class="form-control" id="txtNombre"  placeholder="Ingresa tu nombre" value="" autofocus>
						</div>
					</div>
			</div>
	</div>
	<div class="col-md-6">
		<div class="form-group">
				<label class="col-sm-2 control-label">Ape.Pater:</label>
					<div class="col-sm-10">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							<input type="text" name="apellidoP" class="form-control" id="txtApellidoP"  placeholder="Ingresa tu apellido paterno" value="">
						</div>
					</div>
			</div>
	</div>
	<div class="col-md-6">
		<div class="form-group">
				<label class="col-sm-2 control-label">Ape.Mater:</label>
					<div class="col-sm-10">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							<input type="text" name="apellidoM" class="form-control" id="txtApellidoM"  placeholder="Ingresa tu apellido materno" value="">
						</div>
					</div>
			</div>
	</div>

	<div class="col-md-6">
		<div class="form-group">
  				<label for="cellphone" class="col-sm-2 control-label">Celular:</label>  
    				<div class="col-sm-10">
    					<div class="input-group">
       						<span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  							<input name="cel-phone" placeholder="111-222-3344" id="txtCel" class="form-control" type="text">
						</div>
					</div>
			</div>
	</div>

	<div class="col-md-6">
		<div class="form-group">
  				<label for="email" class="col-sm-2 control-label">Correo:</label>  
    				<div class="col-sm-10">
    					<div class="input-group">
       						<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  							<input name="email" placeholder="alguien@ejemplo.com" id="txtEmail" class="form-control" type="text">
						</div>
					</div>
			</div>
	</div>

		
		<p class="text-right"><br><br><br><br><br><br>
		<input class="btn btn-lg btn-primary" type="submit" id="save_article_btn" value="Guardar Perfil"></input>
		</p>
						
	</form>
                        
</div>