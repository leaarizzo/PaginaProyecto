<?php
require_once 'Controlador.php';
require_once 'Curso.php';
$controla = new Controlador();

$tipo = $_POST['txtTipo'];

$codigoClase = $_POST['txtCodigo'];

$dato = $_POST['txtDato'];


if ($dato == "tipo"){
    $nuevo = $tipo;
} else {
    $nuevo = $_POST['txtNuevo'];
}

$controla->modificarClase($codigoClase, $dato, $nuevo);

header('Location: vista.html.php');
