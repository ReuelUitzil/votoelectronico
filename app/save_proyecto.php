<?php
include '../conexion/open_conex.php';

$titulo = $_POST['title'];
$estado = '1';
$descripcion = $_POST['descripcion'];

$sql = "INSERT INTO proyectos (nombre,fecha_registro,estado,descripcion) VALUES ('$titulo',NOW(),'$estado','$descripcion')";
$query_escapado = preg_replace('/"/', '\"', $sql);

$result = mysqli_query($conexion, $query_escapado);

if ( false === $result ) {
  printf("error: %s\n", mysqli_error($conexion));
}
else {
  header( "location:../index.php?page=registrar_proyectos" );
}


include '../conexion/close_conex.php';

?>