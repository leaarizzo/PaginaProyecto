<?php
require_once 'Controlador.php';
$controla = new Controlador();

$cantidad = $_POST['cantidad'];
$documentoAlumno = $_POST['documentoAlumno'];
$documentoInstructor = $_POST['documentoInstructor'];
$matricula = $_POST['matricula'];
$precioGrup = $_POST['precio'];
$hora = 0000;
$fecha = 0-0-0;
$tipoLibreta = $_POST['tipoLibreta'];
$resultado = "pendiente";
$tipo = $_POST['tipo'];

$precio = $precioGrup / $cantidad;

for ($i=0; $i < $cantidad ; $i++) { 
    $controla->altaCurso($documentoAlumno, $documentoInstructor, $matricula, $precio, $hora, $fecha, $tipoLibreta, $resultado, $tipo);
}