<html>
<head>
<title>Home</title>
</head>
<body>

<?php 
session_start();                    //Para comprobar que solo los usuarios registrados puedan entrar a home.php
$usuario = $_SESSION['usuario'];
if (!$usuario) {
    header("Location: index.php");
        exit;
}

if ($usuario == "admin"){         // Devuelve el string admin si el usuario logueado es admin

print "ADMIN";

}
else{
print "No admin";                //Devuelve el string "No admin" si el usuario logueado no lo es
}

?>
</body>
</html>
