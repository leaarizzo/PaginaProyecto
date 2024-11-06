<?php

require_once 'Controlador.php';
$controla = new Controlador();

$username = $_POST['txtUsername'];

$arreglo =  $controla->comprobarUsuario($username); 
echo json_encode($arreglo);

?>