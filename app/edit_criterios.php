<?php

include '../conexion/open_conex.php';


$criterio1 = $_POST['crit1'];
$criterio2 = $_POST['crit2'];
$criterio3 = $_POST['crit3'];
$criterio4 = $_POST['crit4'];
$criterio5 = $_POST['crit5'];
$criterio6 = $_POST['crit6'];
$criterio7 = $_POST['crit7'];
$criterio8 = $_POST['crit8'];
$criterio9 = $_POST['crit9'];
$criterio10 = $_POST['crit10'];


$sql_query = "UPDATE criterios SET criterio1='$criterio1', criterio2='$criterio2', criterio3='$criterio3', criterio4='$criterio4', criterio5='$criterio5', criterio6='$criterio6', criterio7='$criterio7', criterio8='$criterio8', criterio9='$criterio9', criterio10='$criterio10' WHERE id=" .$_POST['criterio_id'];

mysqli_query($conexion,$sql_query);

include '../conexion/close_conex.php';

header("location:../index.php?page=editar_criterios&actualizado=1&id=".$_POST['criterio_id']);

?>