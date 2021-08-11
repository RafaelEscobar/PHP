<?php

function suma ($num1, $num2) {
    return $num1 + $num2;
}

function resta ($num1, $num2) {
    return "El resultado de la resta es: " . $num1 - $num2;
}

function multi ($num1, $num2) {
    return  $num1 * $num2;
}

function deducible (int $salario, $tipo) {
    $porcentaje = 0;
    $smmlv = 1014980;
    switch ($tipo) {
        case 'salud':
            $porcentaje = 0.04;
            break;
        case 'pension':
            $porcentaje = 0.04;
            break;
        case 'arl':
            $porcentaje = 0.005;
            break;
        case 'fps':
            $porcentaje = 0;
            if ($salario >= $smmlv * 4){
                $porcentaje = 0.01;
            }
            break;
    }
    return $salario * $porcentaje;
}