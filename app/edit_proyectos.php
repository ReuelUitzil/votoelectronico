<?php

include '../conexion/open_conex.php';


$nombre = $_POST['title'];
$descripcion = $_POST['descripcion'];



$sql_query = "UPDATE proyectos SET nombre='$nombre', descripcion='$descripcion' WHERE id=" .$_POST['proyecto_id'];

mysqli_query($conexion,$sql_query);

include '../conexion/close_conex.php';

header("location:../index.php?page=editar_proyectos&actualizado=1&id=".$_POST['proyecto_id']);

?>