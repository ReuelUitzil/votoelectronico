<?php

include '../conexion/open_conex.php';

$nombre = $_POST['name'];
$apellidoP = $_POST['apellidoP'];
$apellidoM = $_POST['apellidoM'];
$celular = $_POST['cel-phone'];
$correo = $_POST['email'];
$usuario_id = $_POST['usuario_id']; 
$materia_id = $_POST['materia_id']; 

$sql = "INSERT INTO profesores (nombre,apellidoP,apellidoM,celular,correo,usuario_id,materia_id) VALUES ('$nombre', '$apellidoP','$apellidoM','$celular','$correo','$usuario_id','$materia_id')";
$query_escapado = preg_replace('/"/', '\"', $sql);

$result = mysqli_query($conexion, $query_escapado);

if ( false === $result ) {
  printf("error: %s\n", mysqli_error($conexion));
}
else {
	session_start();
  $_SESSION['nombre_profesor'] = $nombre;
  $_SESSION['profesor_id'] = mysqli_insert_id($conexion);
  header( "location:../index.php?page=menu_principal" );
}

include '../conexion/close_conex.php';
?>













