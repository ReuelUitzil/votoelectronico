<?php

$ESTADO_ARCHIVADO = '0';
$ESTADO_ACTIVADO = '1';


      $filter = array();
      
      $estado_filter = $ESTADO_ACTIVADO;
      $titulo_filter = "";
      $super_search_filter = "";

      if(isset($_GET["estado"])){
        $filter["estado"] = $_GET["estado"];
        $estado_filter = $_GET["estado"];
      }else{
        //$filter["estado"] = $ESTADO_ACTIVADO;
        
      }

      if(isset($_GET["titulo"])){
        $filter["titulo"] = $_GET["titulo"];
        $titulo_filter = $_GET["titulo"];
      }

      if(isset($_GET["str"])){
        $filter["str"] = $_GET["str"];
        $super_search_filter = $_GET["str"];
        $filter["estado"] = "";
        $estado_filter = "";
      }

    if($_SESSION["perfil_id"] == $USER_ADMIN){
      $proyectos = filtrar_proyectos($filter);

    }else if($_SESSION["perfil_id"] == $USER_PROFESOR){
      $filter["profesor_id"] = 0;
      if(isset($_SESSION["profesor_id"])){
      $filter["profesor_id"] = $_SESSION["profesor_id"];
    }
    $proyectos = filtrar_proyectos($filter);
  }

    ?>
    



<div class="container">


	<br> 
    <?php if(isset($_GET["actualizado"])){ ?>
    <div class="alert alert-danger alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <strong>COMPLETADO: </strong> Has borrado un artículo.
    </div>
    <?php } ?>

    <?php if(isset($_GET["archivado"])){ ?>
    <div class="alert alert-info alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <strong>COMPLETADO: </strong> Has archivado un artículo.
    </div>
    <?php } ?>

    <?php if(isset($_GET["activado"])){ ?>
    <div class="alert alert-success alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <strong>COMPLETADO: </strong> Has publicado un artículo.
    </div>
    <?php } ?>


	<div class="col-md-6">
		<h2>Proyectos Registrados</h2>
	</div>
	 <div class="col-md-6">
      <p class="text-right"><a class="btn btn-primary btn-md" href="index.php?page=registrar_proyectos" role="button">Registrar Nuevo</a></p>
    </div>



<div class="col-xs-12">

<br/>
<br/>
      <table class="table" id="list_proyectos_table">
      <thead>
        <tr>
          <th>Titulo</th>
          <th class="r_hide">Fecha Registro</th>
          <th class="r_hide">Descripción</th>
          <th>Estado</th>
          <th>Operaciones</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($proyectos as $proy):
          # code...
        ?>
        <tr>
          <td><?php echo $proy["nombre"]; ?></td>
          <td class="r_hide"><?php echo $proy["fecha_registro"]; ?></td>
          <td class="r_hide"><?php echo $proy["descripcion"]; ?></td>
          <td>

          <?php
          $label_estado = "";
          $label_class = "";

          switch ($proy["estado"]) {
            case $ESTADO_ACTIVADO:
              $label_estado = "Activo";
              $label_class = "label-success";
              break;
            case $ESTADO_ARCHIVADO:
              $label_estado = "Archivado";
              $label_class = "label-danger";
              break;
            
            default:
              # code...
              break;
          }

          ?>
            
            <label class="label <?php echo $label_class; ?>"><?php echo $label_estado ?></label>
          </td>
          <td>
          <div>
          <?php if ($proy['estado'] == $ESTADO_ARCHIVADO || $proy['estado'] == $ESTADO_ACTIVADO):?>
            <div class="col-md-2 col-xs-2">
              <a href="index.php?page=editar_proyectos&id=<?php echo $proy['id'] ?>" data-toggle="tooltip" data-placement="top" title="Editar" ><span class="glyphicon glyphicon-pencil iconoart" aria-hidden="true"></span></a><br>
            </div>
           <?php endif; ?>
          <?php if ($proy['estado'] == $ESTADO_ARCHIVADO):?>
            <div class="col-md-2 col-xs-2">
              <a style="cursor:pointer;" onclick="confirmPublic(<?php echo $proy['id'] ?>);" data-toggle="tooltip" data-placement="top" title="Publicar"><span class="glyphicon glyphicon-open-file iconoart" aria-hidden="true"></span></a><br>
            </div>
          <?php endif; ?>
          <?php if ($proy['estado'] == $ESTADO_ACTIVADO):?>
            <div class="col-md-2 col-xs-2">
               <a style="cursor:pointer;" onclick="confirmArchived(<?php echo $proy['id'] ?>);" data-toggle="tooltip" data-placement="top" title="Archivar"><span class="glyphicon glyphicon-folder-open iconoart" aria-hidden="true"></span></a><br>
            </div>
          <?php endif; ?>
          <?php if ($proy['estado'] == $ESTADO_ARCHIVADO):?>
              <div class="col-md-2 col-xs-2">
                  <a style="cursor:pointer;" onclick="confirmDelete(<?php echo $proy['id'] ?>);" data-toggle="tooltip" data-placement="top" title="Eliminar"><span class="glyphicon glyphicon-trash iconoart" aria-hidden="true"></span></a>
              </div>
          <?php endif; ?>

          <?php if($proy['estado'] == $ESTADO_ACTIVADO && $_SESSION['perfil_id'] == $USER_PROFESOR && $_SESSION['profesor_id']):?>
            <div class="col-md-2 col-xs-2">
              <a href="index.php?page=editar_proyecto&id=<?php echo $proy['id'] ?>" data-toggle="tooltip" data-placement="top" title="Calificar" ><span class="glyphicon glyphicon-pencil iconoart" aria-hidden="true"></span></a><br>
            </div>
           <?php endif; ?>

          </div>
          </td>
          <td>

          </td>
        </tr>
        <?php
        endforeach;
        ?>
      </tbody>
    </table>
  </div>


</div>