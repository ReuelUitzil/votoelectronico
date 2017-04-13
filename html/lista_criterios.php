<?php

$filter = array();
      {
    $criterios = filtrar_criterios($filter);
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
		<h2>Criterios de Evaluación</h2>
	</div>
	
<div class="col-xs-12">

<br/>
<br/>
      <table class="table" id="list_criterios_table">
      <thead>
        <tr>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($criterios as $crit):
          # code...
        ?>
        <tr>
          <td><?php echo $crit["criterio1"]; ?></td>
        </tr>
        <tr>
          <td><?php echo $crit["criterio2"]; ?></td>
        </tr>
        <tr>
          <td><?php echo $crit["criterio3"]; ?></td>
        </tr>
        <tr>
          <td><?php echo $crit["criterio4"]; ?></td>
        </tr>
        <tr>
          <td><?php echo $crit["criterio5"]; ?></td>
        </tr>
        <tr>
          <td><?php echo $crit["criterio6"]; ?></td>
        </tr>
        <tr>
          <td><?php echo $crit["criterio7"]; ?></td>
        </tr>
        <tr>
          <td><?php echo $crit["criterio8"]; ?></td>
        </tr>
        <tr>
          <td><?php echo $crit["criterio9"]; ?></td>
        </tr>
        <tr>
          <td><?php echo $crit["criterio10"]; ?></td>
        </tr>

        <?php
        endforeach;
        ?>
      </tbody>
    </table>

          <div class="text-right">
          <?php if($crit['id'] == $ESTADO_ACTIVADO && $_SESSION['perfil_id'] == $USER_ADMIN && $_SESSION['profesor_id']):?>
            <div>
              <a href="index.php?page=editar_criterios&id=<?php echo $crit['id'] ?>" data-toggle="tooltip" data-placement="top" title="Editar" ><span class="glyphicon glyphicon-pencil iconoart btn btn-primary btn-lg" aria-hidden="true"> Editar Criterios</span></a><br>
            </div>
           <?php endif; ?>
          </div>
          <br/>

  </div>


</div>