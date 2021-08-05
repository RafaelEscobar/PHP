<?php
// de esta forma se cierra sesion
require_once('Usuario.php');
$usuario = new Usuario();
$usuario->cerrarsesion();
?>