<?php
function record_por_id($entity,$id){
	include 'conexion/open_conex.php';
	$sql="SELECT * from $entity WHERE id = ".$id;
	$result = $conexion->query($sql); //usamos la conexion para dar un resultado a la variable
 
	if ($result->num_rows > 0) //si la variable tiene al menos 1 fila entonces seguimos con el codigo
	{
	    $combobit="";
	    while ($row = $result->fetch_array(MYSQLI_ASSOC)) 
	    {
	    	return $row;
	    }
	}
	else
	{
	    
	}


	include 'conexion/close_conex.php';
	return null;
}


function obtener_todos($tabla){
	include 'conexion/open_conex.php';
	$resp = array();
	$sql="SELECT * from $tabla";
	$result = $conexion->query($sql); //usamos la conexion para dar un resultado a la variable
 
	if ($result->num_rows > 0) //si la variable tiene al menos 1 fila entonces seguimos con el codigo
	{
	    $combobit="";
	    while ($row = $result->fetch_array(MYSQLI_ASSOC)) 
	    {
	    	$resp[] = $row;
	    }
	}
	else
	{
	    
	}
	include 'conexion/close_conex.php';
	return $resp;
}


function filtrar_proyectos($filter = null){
	include 'conexion/open_conex.php';
	$resp = array();
	$sql="SELECT * from proyectos";

	if($filter != null){
		$sql .= " WHERE ";

		$where_str = "";

		if(isset($filter["profesor_id"])){
			$where_str .= "profesor_id = ".$filter["profesor_id"];
		}

		if(isset($filter["estado"]) && $filter["estado"] != ""){
			if($where_str != ""){
				$where_str .= " AND ";
			}
			$where_str .= " estado = ".$filter["estado"];
		}

		if(isset($filter["nombre"])){
			if($where_str != ""){
				$where_str .= " AND ";
			}
			$where_str .= " nombre like '%".$filter["nombre"]."%'";
		}

		if(isset($filter["str"])){
			if($where_str != ""){
				$where_str .= " AND ";
			}
			$where_str .= " ( nombre like '%".$filter["str"]."%' OR descripcion like '%".$filter["str"]."%' )";
		}

		$sql .= $where_str;
	}

	$result = $conexion->query($sql); //usamos la conexion para dar un resultado a la variable
 
	if ($result->num_rows > 0) //si la variable tiene al menos 1 fila entonces seguimos con el codigo
	{
	    $combobit="";
	    while ($row = $result->fetch_array(MYSQLI_ASSOC)) 
	    {
	    	$resp[] = $row;
	    }
	}
	else
	{
	    
	}
	include 'conexion/close_conex.php';
	return $resp;
}



function list_proy($estado, $num_rows){
	include 'conexion/open_conex.php';
	$resp = array();
	$sql="SELECT * from proyectos where estado= $estado order by fecha_registro DESC LIMIT $num_rows ";
	$result = $conexion->query($sql); //usamos la conexion para dar un resultado a la variable
	
	if ($result->num_rows > 0) //si la variable tiene al menos 1 fila entonces seguimos con el codigo
	{
	    while ($row = $result->fetch_array(MYSQLI_ASSOC)) 
	    {
	    	$resp[] = $row;
	    }
	}
	else
	{
	    
	}
	include 'conexion/close_conex.php';
	return $resp;
}


function filtrar_criterios($filter = null){
	include 'conexion/open_conex.php';
	$resp = array();
	$sql="SELECT * from criterios";


	$result = $conexion->query($sql); //usamos la conexion para dar un resultado a la variable
 
	if ($result->num_rows > 0) //si la variable tiene al menos 1 fila entonces seguimos con el codigo
	{
	    $combobit="";
	    while ($row = $result->fetch_array(MYSQLI_ASSOC)) 
	    {
	    	$resp[] = $row;
	    }
	}
	else
	{
	    
	}
	include 'conexion/close_conex.php';
	return $resp;
}


function filtrar_equipos($filter = null){
	include 'conexion/open_conex.php';
	$resp = array();
	//$sql="SELECT proyectos.nombre,equipos.integrantes FROM equipos, proyectos";
	//$sql="SELECT * FROM equipos";
	$sql="SELECT nombre, integrantes FROM equipos inner join proyectocalificacion 
			on proyectocalificacion.equipo_id=equipos.equipo_id INNER JOIN proyectos on 
			proyectos.id=proyectocalificacion.proyecto_id;";



	$result = $conexion->query($sql); //usamos la conexion para dar un resultado a la variable
 
	if ($result->num_rows > 0) //si la variable tiene al menos 1 fila entonces seguimos con el codigo
	{
	    $combobit="";
	    while ($row = $result->fetch_array(MYSQLI_ASSOC)) 
	    {
	    	$resp[] = $row;
	    }
	}
	else
	{
	    
	}
	include 'conexion/close_conex.php';
	return $resp;
}



?>	