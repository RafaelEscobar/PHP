<?php
require_once('funciones.php');
$n1 = $_GET["num1"] ?? 0;
$n2 = $_GET["num2"] ?? 0;
$opc = $_GET["opc"] ?? 0;

function calculadora (int $num1, int $num2, String $opc) {
    $res = "";
    switch ($opc) {
        case "+":
            $res = suma($num1, $num2);
            break;
        case "-":
            $res = resta($num1, $num2);
            break;
        case "*":
            $res = multi($num1, $num2);
            break;
        case "/":
            $res = div($num1, $num2);
            break;
        default:
            $res = "No elegió una operación.";
            break;
    }
    return "$num1 $opc $num2 = $res";
}
echo calculadora($n1, $n2, $opc);