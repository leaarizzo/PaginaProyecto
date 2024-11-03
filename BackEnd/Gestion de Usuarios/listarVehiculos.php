<?php

require_once 'Controlador.php';
$controla = new Controlador();


$arreglo =  $controla->traerTablaVehiculos(); 
echo json_encode($arreglo);

?>