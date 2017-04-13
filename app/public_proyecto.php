<?php

include '../conexion/open_conex.php';

$proyecto_id = $_GET['id'];
$estado = '1';

$sql_query = "UPDATE proyectos SET estado='$estado' where id=". $proyecto_id;
mysqli_query($conexion, $sql_query);

include '../conexion/close_conex.php';

header("location:../index.php?page=lista_proyec&publicado=1");
?>