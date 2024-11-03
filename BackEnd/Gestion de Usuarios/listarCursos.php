<?php

require_once 'Controlador.php';
$controla = new Controlador();


$arreglo =  $controla->traerTablaClases(); 
echo json_encode($arreglo);

?>