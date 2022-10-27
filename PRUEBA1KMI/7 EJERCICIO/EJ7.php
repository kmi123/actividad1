<?php
$nombre = $_POST['nombre'];
$materia = $_POST['asignatura'];
$nota = $_POST['nota'];



if ($nota <7) {
    echo "Reprobaste la asignatura: " .$materia;   
}else{
     echo "Aprobaste la asignatura:  " .$materia;
    }
?>