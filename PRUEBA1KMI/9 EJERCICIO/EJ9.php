
$nota1 =$_POST['nota1'];
$nota2 =$_POST['nota2'];
$nota3 =$_POST['nota3'];

$examen1= 0.3 ;
$examen2= 0.3 ;
$examen3= 0.4;

$prom1 = $nota1 * $examen1;
$prom2 = $nota2 * $examen2;
$prom3 = $nota3 * $examen3;
$nota_fin = $prom1  +$prom2  + $prom3  ;

if ($nota_fin >= 4.0 ) {
    echo "Aprobaste con una nota de:  ".$nota_fin;
}else{
    echo "Reprobastecon una nota de:  ".$nota_fin;    
}
?>

