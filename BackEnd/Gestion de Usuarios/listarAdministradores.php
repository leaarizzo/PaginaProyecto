<?php

require_once 'Controlador.php';
$controla = new Controlador();


$arreglo =  $controla->traerTablaAdministradores(); 
echo json_encode($arreglo);

?>