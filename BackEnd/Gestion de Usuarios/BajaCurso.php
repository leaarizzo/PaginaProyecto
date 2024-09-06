<?php
require_once 'Controlador.php';
require_once 'Curso.php';
$controla = new Controlador();

$opcion = $_POST['txtOpcion'];
$codigoClase = $_POST['txtCodigo'];

$controla->bajaCurso($codigoClase, $opcion);


header('Location: vista.html.php');
