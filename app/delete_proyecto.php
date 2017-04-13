<?php

include '../conexion/open_conex.php';

$proyecto_id = $_GET['id'];

$sql_query = "DELETE FROM proyectos WHERE id=" .$proyecto_id;

mysqli_query($conexion,$sql_query);

include '../conexion/close_conex.php';

header("location:../index.php?page=lista_proyec&actualizado=1");
?>