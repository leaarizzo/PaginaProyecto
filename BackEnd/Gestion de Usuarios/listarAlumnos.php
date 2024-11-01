<?php

require_once 'Controlador.php';
$controla = new Controlador();


$arreglo =  $controla->traerTablaAlumnos(); 
echo json_encode($arreglo);

?>