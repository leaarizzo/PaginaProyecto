<?php
require_once 'Controlador.php';
require_once 'Curso.php';
$controla = new Controlador();

$documentoAlumno = $_POST['txtDocumentoAlumno'];
$documentoInstructor = $_POST['txtDocumentoInstructor'];
$matricula = $_POST['txtMatricula'];
$precio = $_POST['txtPrecio'];
$hora = $_POST['txtHora'];
$fecha = $_POST['txtFecha'];
$tipoLibreta = $_POST['txtTipoLibreta'];
$resultado = $_POST['txtResultado'];
$tipo = $_POST['txtOpcion'];

$controla->altaCurso($documentoAlumno, $documentoInstructor, $matricula, $precio, $hora, $fecha, $tipoLibreta, $resultado, $tipo);

header('Location: vista.html.php');
