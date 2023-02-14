<?php
//<?php levanta el interprete de php
$servidor="SERVER_PORT";
$usuario="USER";
$password="PASSWORD";
$bbdd="BBDD_NAME";

$conexion=mysqli_connect($servidor, $usuario, $password, $bbdd);

if ($conexion) {
 	echo "conectado";
}else{
	echo "no conectado";
}

?>