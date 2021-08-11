<?php
session_start();

if ($_SESSION) {
    header("Location: http://localhost/clases_PHP/login/inicio.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css">
    <title>Inicio de sesión</title>
</head>
<body>
    <form action="http://localhost/clases_PHP/login/sesion.php" method="POST">
        <div class="container">
            <div class="col-md-4">
                <label for="">Usuario</label>
                <input type="email" class="form-control" name="email">
                <label for="">Contraseña</label>
                <input type="password" class="form-control" name="password"><br>
                <button>Iniciar sesión</button><br>
                <?php
                echo $error;
                ?>
            </div>
            
        </div>
    </form>
</body>
</html>