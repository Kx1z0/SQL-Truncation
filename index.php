<html>
<head>

<title>Hack me</title></head>
<body style="background-color:powderblue">
<meta charset="UTF-8">
<marquee><center><h1> Secure Login Panel</h1></center></marquee>
<hr>

<center><form method="POST" action="validate.php" name="<?php basename($_SERVER['PHP_SELF']); ?>">  <!--Manda los datos del formulario a la pagina validate.php, donde seran procesados-->
Usuario:<input type="text" placeholder="Introduzca su usuario" name="usuario">
&nbsp;
Contraseña:<input type="password" placeholder="Introduzca su contraseña" name="pw">
<input type="Submit" value="Iniciar sesion">
</form></center>

<center><a href="sing-up.php"> ¿No estas aun registrado? </a></center>     


</body>
</html>
