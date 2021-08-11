<?php
$salud=$_GET["salud"] ?? '';
$cedula=$_GET["cedula"] ?? '';
$pension=$_GET["pension"] ?? '';
$salario1=$_GET["salario"] ?? '';
$arl=$_GET["arl"] ?? '';
$fsp=$_GET["fsp"] ?? '';
$salario=intval($salario1);
var_dump($salario);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liquidación</title>
</head>
<body>
    <form action="parte2.php" method="post"> 
        <label>Salario</label>
        <input type="number" name="salario"><?php if ($salario == null){
            echo '<span style="color:red">'."El campo está vacío".'</span>';
        } if (!is_int($salario) and $salario){
            echo '<span style="color:red">'."Debe ingresar un número mayor a cero".'</span>';
        }?>
        <br>
        <label>Cédula</label>
        <input type="number" name="cedula"><?php if ($cedula == null){
            echo '<span style="color:red">'."El campo está vacío".'</span>';
        } ?>
        <br>
        <input type="submit" value="Enviar">
    </form>
    <?php
    if ($salario and $cedula and is_int($salario)) {
    echo '<table border="1">
    <tr>
        <th>Cédula</th>
        <th>Salario</th>
        <th>Salud (4%)</th>
        <th>Pensión (4%)</th>
        <th>ARL (0.5%)</th>
        <th>FSP</th>
    <tr>
    <tr>
        <td>'.$cedula.'</td>
        <td>'.$salario.'</td>
        <td>'.$salud.'</td>
        <td>'.$pension.'</td>
        <td>'.$arl.'</td>
        <td>'.$fsp.'</td>
    </table>'; 
}?>
</body>
</html>

