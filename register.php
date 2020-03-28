<?php

session_start();
require "sql.php"
?>
<?php
$pw=mysqli_real_escape_string($conexion, $_POST['pw']);  //Para escapar los caracteres especiales de la contraseña
if(isset($_POST['usuario'])){

$usuario=mysqli_real_escape_string($conexion, $_POST['usuario']) or die ("Error en recibir el usuario"); // Si el usuario esta vacio devolvera "Error al recibir el usuario"
$query=mysqli_query($conexion , "SELECT * FROM users WHERE username='$usuario'") or die ("Error en la comparacion de usuarios"); // Compara en la base de datos si existe ese usuario

        if (mysqli_num_rows($query)){

                 print "Ese usuario ya existe. Pruebe con otro";   //Si el usuario ya existe, te devuelve que el usuario ya cogido, y te redirecciona a sing-up.php
		 header("refresh:3;url=sing-up.php");
}

else{
$pw=md5($pw);  //Si el usuario no existe, hashea con md5 (inseguro) la contraseña

mysqli_query($conexion, "INSERT INTO users (username, password) VALUES ('$usuario', '$pw')");  //E inserta el usuario y la contraseña a nuestra tabla "users"
header("refresh:4;url=index.php");
$user=($_POST['usuario']);
print "Se ha logueado con exito. Bienvenido $user, a continuacion sera redirigido al panel de Log-In";

}
}
?>
