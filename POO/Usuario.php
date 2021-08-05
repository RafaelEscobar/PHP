<?php
require_once('Connect.php');
//var_dump($password);
session_start();
class Usuario{
    protected $connect;
    private $id;
    public $email;
    public $password;

    public function validar($email, $password){
        $conx = new Connect();
        $connect = $conx->init();
        $query = $connect->prepare("SELECT * FROM usuario
        WHERE email = :email AND password = :password");
        $query->bindParam(":email",$email);
        $query->bindParam(":password",$password);
        $query->execute();
        $usuario = $query->fetch(PDO::FETCH_ASSOC);
        print_r($usuario);
        if ($usuario) {
            $_SESSION['id'] = $usuario['ID'];
            $_SESSION['email'] = $usuario['EMAIL'];
            $_SESSION['name'] = $usuario['NAME'];
            header("location:http://localhost\clases_PHP\POO\sesionIniciada.php");
        } else {
            $error = "Los credenciales son incorrectos";
            
            header("Location: http://localhost/clases_PHP/POO/Login.php?error=$error");
        }
        
    }

    function cerrarsesion(){
        session_unset ();
        session_destroy ();
        header("location:http://localhost\clases_PHP\POO\Login.php");
    }

}