<?php
include_once 'Controlador.php';
$controla = new Controlador();

$pregunta = $_POST['pregunta'];
$respuesta = $_POST['respuesta'];
$opcion1 = $_POST['opcion1'];
$opcion2 = $_POST['opcion2'];
$opcion3 = $_POST['opcion3'];

$opciones = array($opcion1, $opcion2, $opcion3, $respuesta);

$controla->altaPregunta($pregunta, $respuesta, $opciones);
?>