<?php
require_once('Usuario.php');
class Validacion extends Usuario {

    function validacion($email, $password){
        var_dump($email);
        if ($email === $Usuario->email and $password === $Usuario->password){
            session_start();
            $_SESSION['email'] = $this->email;
            $_SESSION['id'] = random_int(1, 1000);
            header("Location: http://localhost/clases_PHP/login/POO%20login/Sesioniniciada.php");
        }else{
            echo 'Error';
            
        }
    } 
}
