<div class="container">
		<div class="row">
			<h2>Registrar Proyecto</h2>
			<div class="col-md-1"></div>
			<div class="col-md-10">
				<form class="form-horizontal" role="form" method="post" action="app/save_proyecto.php">
					<div class="col-md-6">
						<br>
						<div class="form-group">
							<label for="titulo"  class="control-label">Titulo:</label>
							<div class="">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-text-color"></i></span>
									<input type="text" name="title" class="form-control" id="txtTitulo"  placeholder="Ingrese el titulo de su proyecto..." value="" autofocus>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="descripcion"  class="control-label">Descripción:</label>
							<div class="">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
									<textarea class="form-control" name="descripcion" rows="6"  id="txtDescrip" placeholder="Escriba un resumen sobre su proyecto..."></textarea>
								</div>
							</div>
						</div>
					<br>
					</div>
					<div class="col-md-6">
					<br/>
					<br/>
					<br/>
					<br/>
					<br/>
					<br/>
						<p class="text-center">
						<input type="submit" type="button" value="Guardar" id="save_proyec_btn" class="btn-lg btn btn-primary">
						</p>
					</div>
					
				</div>
			</form>
			<hr>
		</div>
	</div>