
<html>

<head>
<meta charset="UTF-8">
<title> Registrarse </title>
</head>

<body style="background-color:pink">
<marquee><h1> Hack Me Sing-Up</h1></marquee>
<hr>

<center><form method="POST" action="register.php" name="<?php basename($_SERVER['PHP_SELF']); ?>">

Usuario:<input type="text" placeholder="Introduzca su usuario" maxlength="10" name="usuario" id="usuario"> //Limitacion de 10 caracteres en el usuario

&nbsp;

Contraseña:<input type="password" placeholder="Introduzca su contraseña" name="pw" id="pw">

<input type="Submit" value="Registrarse">

</form></center>

</body>
</html>
