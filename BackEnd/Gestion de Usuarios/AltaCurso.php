<?php
require_once 'Controlador.php';
$controla = new Controlador();

$documentoAlumno = $_POST['documentoAlumno'];
$documentoInstructor = $_POST['documentoInstructor'];
$matricula = $_POST['matricula'];
$precio = $_POST['precio'];
$hora = $_POST['hora'];
$fecha = $_POST['fecha'];
$tipoLibreta = $_POST['tipoLibreta'];
$resultado = $_POST['resultado'];
$tipo = $_POST['opcion'];

$controla->altaCurso($documentoAlumno, $documentoInstructor, $matricula, $precio, $hora, $fecha, $tipoLibreta, $resultado, $tipo);
