<?php
require_once('funliquidacion.php');
$salario1 = $_POST['salario'];
$cedula = $_POST['cedula'];
$salud = 0;
$pension = 0;
$arl = 0;
$fsp = 0;
$errorSalario = "";
$salario = intval($salario1);
var_dump($salario);

if ($salario and $cedula and is_int($salario)){
    $salud = deducible ($salario, 'salud');
    $pension = deducible ($salario, 'pension');
    $arl = deducible ($salario, 'arl');
    $fsp = deducible ($salario, 'fps');
    var_dump($salario);

} else {
    echo "El campo salario o cédula está vacío";
}
header("location: http://localhost/clases_PHP/base/liquidacion.php?salud=$salud&cedula=$cedula&salario=$salario&pension=$pension&arl=$arl&fsp=$fsp");
