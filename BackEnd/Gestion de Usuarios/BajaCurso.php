<?php
require_once 'Controlador.php';
require_once 'Clase.php';
require_once 'Prueba.php';
$controla = new Controlador();

$tipo = $_POST['txtOpcion'];

$codigoClase = $_POST['txtCodigo'];
$codigoPrueba = $_POST['txtCodigo'];

if ($tipo == "clase") {
    $controla->BajaClase($codigoClase);
} elseif ($tipo == "prueba") {
    $controla->BajaPrueba($codigoPrueba);
}

header('Location: vista.html.php');
