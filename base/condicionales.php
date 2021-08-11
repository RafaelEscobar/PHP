<?php
$x = 10;
$y = '10';

if ($x == $y){
    echo 'son iguales';
}
echo '<br>';

if ($x === $y){
    echo 'Son identicos';
} else {
    echo 'No son identicos';
}

echo '<br>';
if ($x > $y){
    echo "$x es mayor que $y"; 
} else if ($x < $y){
    echo "$x es menor que $y";
} else if ($x == $y){
    echo "$x es igual que $y";
} else {
    echo "Ninguna de las anteriores";
}
echo '<br>';

if ($x == $y && $x > 0){
    echo "$x es igual a $y y $x es mayor que cero";
}
echo '<br>';
if ($x == $y or $x === $y){
    echo "$x es igual a $y ó $x es identico a $y";
}

echo '<br>';
