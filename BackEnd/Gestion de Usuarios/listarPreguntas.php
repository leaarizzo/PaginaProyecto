<?php

require_once 'Controlador.php';
$controla = new Controlador();


$arreglo =  $controla->traerTablaPreguntas(); 
echo json_encode($arreglo);

?>