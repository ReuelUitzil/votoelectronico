<?php

$filter = array();
      {
    $equipos = filtrar_equipos($filter);
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
    <h2>Equipos Registrados</h2>
  </div>
  
<div class="col-xs-12">

<br/>
<br/>
      <table class="table" id="list_criterios_table">
      <thead>
        <tr>
          
        <!--<th>Proyecto</th>-->
        <th>Proyecto</th>
          <th>Nombre de los integrantes</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($equipos as $equip):
          # code...
        ?>
        <tr>
          <td><?php echo $equip["nombre"]; ?></td>
          <td><?php echo $equip["integrantes"]; ?></td>
        </tr>
        

        <?php
        endforeach;
        ?>
      </tbody>
    </table>
          <br/>

  </div>


</div>