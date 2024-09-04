<?php
require_once 'Controlador.php';
require_once 'Clase.php';
require_once 'Prueba.php';
$controla = new Controlador();

$tipo = $_POST['txtOpcion'];

$codigoClase = $_POST['txtCodigo'];
$codigoPrueba = $_POST['txtCodigo'];

$dato = $_POST['txtDato'];

$nuevo = $_POST['txtNuevo'];


if ($tipo == "clase") {
    $controla->modificarClase($codigoClase, $dato, $nuevo);
} else if ($tipo == "prueba") {
    $controla->modificarPrueba($codigoPrueba, $dato, $nuevo);
}


header('Location: vista.html.php');
