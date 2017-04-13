<?php 
$servidor ="localhost"; //"mysql.hostinger.mx"; //el servidor que utilizaremos, en este caso será el localhost
$usuario = "root"; //"u347199001_root"; //El usuario que acabamos de crear en la base de datos 
$contraseña =""; //"admin1"; //La contraseña del usuario que utilizaremos 
$BD = "votoelectronico"; //"u347199001_gp"; //El nombre de la base de datos 
  
/*Aquí abrimos la conexión en el servidor. 
Normalmente se envian 3 parametros (los datos del servidor, usuario y contraseña) a la función mysql_connect,
si no hay ningún error la conexión será un éxito 
El @ que se ponde delante de la funcion, es para que no muestre el error al momento de ejecutarse, ya crearemos un código para eso*/
$conexion = mysqli_connect($servidor, $usuario, $contraseña, $BD);

/* Aquí preguntamos si la conexión no pudo realizarse, de ser así lanza un mensaje en la pantalla con el siguiente texto "No pudo conectarse:"
y le agrega el error ocurrido con "mysql_error()" 
*/ 
if (!$conexion) { 
    die("No se pudo conectar: " . mysqli_connect_error());
}else{ 
//La siguiente linea no es necesaria al momento de programar, simplemente la pondremos ahora para poder observar que la conexión ha sido realizada
} 
/*En la siguiente linea seleccionaremos la BD con la que trabajaremos y le pasaremos como referencia la conexión al servidor
Para saber si se conecto o no a la BD podríamos utilizar el IF de la misma forma que la utilizamos al momento de conectar al servidor,
pero les muestro otra forma de comprobar eso, es un poco mas corto el código. 
*/ 
?>