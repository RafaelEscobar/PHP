<?php
$limit = 20;

for ($i = 0; $i <= $limit; $i++){
    echo "Este es el ciclo ".$i;
    echo '<br>';
}

$a = 5;
while ($a <= $limit) {
    $a = $a * 2;
    echo "$a <br>";
}

for ($i = 1; $i <= 100; $i +=1){
    if ($i % 2 == 0){
        echo ("Este número es par: ".$i."<br>");
    }else{
        echo ("Este número es impar: ".$i."<br>");
    }
    
}

$autos = [
    'Mazda' => [
        'CX5',
        '323',
        'CX7',
        '2',
    ],
    'BMW' => [
        'Serie 2',
        'Z4',
        'M1',
    ]
    ];

foreach ($autos as $marca => $modelos) {
    echo ("En la marca $marca tenemos los modelos: ");

    foreach ($modelos as $key => $modelo) {
        echo ("$modelo, ");
    }
    echo '<br>';
}