<header>
	<form>
		<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<img src="images/logoUTM1.png">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navegacion-fm">
						<span class="sr-only">Desplegar / Ocultar Menu</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>

				<div class="menu-block collapse navbar-collapse" id="navegacion-fm">

					  <?php if(isset($_SESSION["token"])):?>

					<ul class="nav navbar-nav navbar-right">
					<?php if (isset($_SESSION['profesor_id'])):?>
						<li><a href="index.php?page=menu_principal">Inicio</a></li>
						<?php endif;?>
						<li class="dropdown">
						<?php if (isset($_SESSION['profesor_id'])):?>


				          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Registrar<span class="caret"></span></a>
					          <ul class="dropdown-menu">
					            <li><a href="index.php?page=registrar_proyectos">Proyectos</a></li>
					            <li><a href="index.php?page=lista_criterios">Criterios de Evaluación</a></li>
					             <li><a href="index.php?page=registrar_equipos">Equipos</a></li>
					            <li role="separator" class="divider"></li>
					             <?php if($_SESSION['perfil_id'] == $USER_ADMIN && $_SESSION['profesor_id']):?>
                                    <li class="text-right"><a class="select" role="button" data-toggle="modal" data-target="#myModal" id="new_user">Nuevo usuario</a></li>
                                 <?php endif; ?>
					          </ul>
					        <?php endif;?>

	       				 </li>
	       				 <li class="dropdown">
						<?php if (isset($_SESSION['profesor_id'])):?>
				          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Ver<span class="caret"></span></a>
					          <ul class="dropdown-menu">
					            <li><a href="index.php?page=lista_proyec">Proyectos Registrados</a></li>
                                <li><a href="index.php?page=lista_criterios">Criterios de Evaluación</a></li>
					            <li><a href="index.php?page=lista_equipos">Equipos Registrados</a></li>
					          </ul>
					        <?php endif;?>
	       				 </li>
	       				 <li class="dropdown">
	       				  <?php if (isset($_SESSION['profesor_id'])):?>
				          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-user"></i><?php echo $_SESSION['nombre_profesor']; ?> <span class="caret"></span></a>
					          <ul class="dropdown-menu">
					            <li><a href="#">Editar</a></li>
					            <li><a href="logout.php" class="select">Cerrar Sesión</a></li>
					            <?php endif; ?>
					          </ul>
	       				 </li>
					</ul>

					  <?php endif; ?>	


				</div>
				
			</div>
		</nav>
	</form>
</header>

<!--FINALIZA HEADER-->

<!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content cuerpo">
                        <div class="modal-header">
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Agregar Nuevo Usuario</h4>
                        </div>
                            <div class="modal-header">
                                <div class="col-md-12">
                                    <h4>Registre los datos requeridos...</h4>
                                        <!--CAMPOS A LLENAR-->
                                        <form class="form-horizontal" role="form" method="post" action="app/create_newuser.php">
                                        <div class="col-md-1"></div>
                                            <div class="col-md-10">
                                                <div class="form-group">
                                                        <label class="col-sm-3 control-label">Usuario:</label>
                                                            <div class="col-sm-9">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                                                    <input name="user" placeholder="alguien01" id="txtUsua" class="form-control" type="text" REQUIRED>
                                                                </div>
                                                            </div>
                                                    </div>
                                                     <div class="form-group">
                                                        <label class="col-sm-3 control-label">Email:</label>
                                                            <div class="col-sm-9">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                                                    <input name="send_email" placeholder="alguien@ejemplo.com" id="txtEmail" class="form-control" type="email" REQUIRED>
                                                                </div>
                                                            </div>
                                                    </div>
                                                    <div class="form-group">

                                                        <label class="col-sm-3 control-label">Perfil:</label>
                                                            <div class="col-sm-9">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                                                    <select class="form-control input-md" name="perfil" id="txtPerfil" >
                                                                      <?php
                                                                      $perfiles = obtener_todos("perfiles");
                                                                      foreach ($perfiles as $perfil):
                                                                    ?>
                                                                    <option value="<?php echo $perfil['id'] ?>"><?php echo $perfil["nombre"] ?></option>
                                                                      <?php endforeach;  ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                    </div>
                                            </div>
                                        <div class="col-md-1"></div>
                            <!-- Button -->
                                    <p class="derecha">
                                        <div class="form-group">
                                            <div class="col-sm-10 col-sm-offset-1 derecha">
                                                    <a class="btn btn-default" data-dismiss="modal">Cerrar</a>
                                                    <a id="cancel_contact" onclick="clearForm()" class="btn btn-danger">Borrar</a>
                                                    <input type="submit" value="Crear" class="btn btn-primary">

                                            </div>
                                        </div>
                                    </p>
                            <!-- Button -->
                        </form>
                    <!--CAMPOS A LLENAR-->

                                </div>
                            </div>
                </div>
            </div>
        </div>
        <!--MODAL FINISH-->	