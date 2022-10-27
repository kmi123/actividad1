<?php
$num1 = $_POST['PARTIDOS_GANADOS'];
$num2 = $_POST['PARTIDOS_PERDIDOS'];
$num3 = $_POST['PARTIDOS_EMPATADOS'];

$num4 = 3;
$num5 = 0;
$num6 = 1;

$ganados = $num1 * $num4;
$perdidos = $num2 * $num5;
$empatados = $num3 * $num6;

echo "total de puntos =". ($ganados + $perdidos + $empatados);
?>