<?php
session_start();
var_dump($_SESSION);
if(!$_SESSION){
    header("Location: http://localhost/clases_PHP/login/login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Sesión iniciada</h1>

    <button><a href="cerrarsesion.php">Cerrar sesión</a></button>
</body>
</html>