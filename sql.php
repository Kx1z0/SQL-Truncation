<?php

$usuariobd="usuario";
$pwbd="password";
$servidor="server"; // Si estais en local es localhost
$bd="Base de Datos";


$conexion=mysqli_connect( $servidor, $usuariobd, $pwbd) or die ("Error en la conexion con MYSQL");
$db=mysqli_select_db($conexion, $bd) or die ("No se ha podido conectar a la base de datos");

?>
