<?php
session_start();
require "sql.php";
?>
<?php
$usuario=mysqli_real_escape_string($conexion, $_POST['usuario']); 
$pw = mysqli_real_escape_string($conexion, $_POST['pw']);
$pw=md5($pw);

$query = mysqli_query($conexion, "SELECT *  FROM users WHERE username = '$usuario' AND password = '$pw'");  //Comprobamos si el usuario y la contraseña son correctos
if (mysqli_num_rows($query) == 1){
	$_SESSION['usuario'] = $usuario;				//Si lo es nos logueara
	$_SESSION['succes'] = "Se ha logueado con exito";
	header('location:home.php');
}
	else{
		print "Usuario o contraseña incorrectos";		//Si no lo son nos dira "Usuario o contraseña incorrectos" y nos redireccionara a index.php
		header("refresh:4;url=index.php");
}
?>

