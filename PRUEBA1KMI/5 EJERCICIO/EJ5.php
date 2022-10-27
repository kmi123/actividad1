<?php
$valor1 = $_POST['valor1'];
$valor2 = $_POST['valor2'];

$diferencia_hermano1 = $valor1 - $valor2;
$diferencia_hermano2 = $valor2 - $valor1;

if ($valor1 > $valor2  ) {
    $valor1 - $valor2;
    
echo "La edad del hermano mayor es:           " .$valor1. " y tiene "  .$diferencia_hermano1."       años"." de diferencia";
} 


else if ($valor2 = $valor1  ) {
    $valor2 - $valor1;
    
echo "La edad del hermano menor es:            " .$valor1. "  años   y tiene "  .$diferencia_hermano2."       años"." de diferencia";
}
?>
