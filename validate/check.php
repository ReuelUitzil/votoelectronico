<?php

$SESSION_DURATION = 60;

include '../conexion/open_conex.php';
/*include '../util.php';

/*las letras marillas es como se pone en el name y las blancas es como llmas a tus variables*/
$user = $_POST['user'] ;
$password = $_POST['password'];
$sql = "SELECT * FROM usuarios WHERE usuario = '$user' and contrasena = '$password'";

$result = mysqli_query($conexion, $sql);

 
if (mysqli_num_rows($result) > 0) {
    $row_user = mysqli_fetch_assoc($result);

    session_start(); 
    $_SESSION['token']= "1234";
    $_SESSION['nombre_profesor'] = '';
    $_SESSION['usuario_id'] = $row_user['id'];
    $_SESSION['perfil_id'] = $row_user['perfil_id'];
    $_SESSION['profesor_id'] = $row_profesor['id'];


    

    $query_profesores = "SELECT * FROM profesores WHERE usuario_id = ".$row_user['id'];
	$result_profesores = mysqli_query($conexion, $query_profesores);
	$row_profesor = mysqli_fetch_assoc($result_profesores);

    if($row_profesor == null){
        header( "location:../index.php?page=completar_perfil&usuario_id=".$row_user['id'] );
        exit;
    }

	$_SESSION['profesor_id'] = $row_profesor['id'];
    $_SESSION['nombre_profesor'] = $row_profesor['nombre'];

    $last_activity_date = date("Y-m-d H:i:s");
    $_SESSION["session_duration"] = $SESSION_DURATION;
    $_SESSION["last_activity"] = $last_activity_date;

    header( "location:../index.php?page=menu_principal" );

} else {
	header( "location:../index.php?bad_password=true" );
    /*echo "0 results";*/
}

 include '../conexion/close_conex.php';
?>