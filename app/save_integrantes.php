<?php
include '../conexion/open_conex.php';

$Integrantes = $_POST['lista'];

$sql = "INSERT INTO equipos (integrantes) VALUES ('$Integrantes')";
$query_escapado = preg_replace('/"/', '\"', $sql);

$result = mysqli_query($conexion, $query_escapado);

if ( false === $result ) {
  printf("error: %s\n", mysqli_error($conexion));
}
else {
  header( "location:../index.php?page=registrar_equipos" );
}


include '../conexion/close_conex.php';

?>