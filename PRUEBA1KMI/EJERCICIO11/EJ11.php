<?php

$producto = $_POST['valor1'];
$costo_del_producto = $_POST['valor2'];

$valor = $costo_del_producto * 0.15;
$valor1 = $valor + $costo_del_producto;
if ($valor) {
echo "si deseas ganar el 15% lo debes de vender en: ".$valor1;
}

?>