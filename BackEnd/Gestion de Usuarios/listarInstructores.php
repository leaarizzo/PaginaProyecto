<?php

require_once 'Controlador.php';
$controla = new Controlador();


$arreglo =  $controla->traerTablaInstructores(); 
echo json_encode($arreglo);

?>