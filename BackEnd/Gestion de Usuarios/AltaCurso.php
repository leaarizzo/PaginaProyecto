<?php
require_once 'Controlador.php';
require_once 'Clase.php';
require_once 'Prueba.php';
$controla = new Controlador();
$tipo = $_POST['txtOpcion'];

$codigoClase = $_POST['txtCodigo'];
$codigoPrueba = $_POST['txtCodigo'];
$documentoInstructor = $_POST['txtDocumentoInstructor'];
$documentoAlumno = $_POST['txtDocumentoAlumno'];
$matricula = $_POST['txtMatricula'];
$hora = $_POST['txtHora'];
$fecha = $_POST['txtFecha'];
$tipoLibreta = $_POST['txtTipoLibreta'];
$estado = $_POST['txtEstado'];
$precio = $_POST['txtPrecio'];

if ($tipo == "clase") {
    $controla->altaClase($codigoClase, $documentoInstructor, $documentoAlumno, $matricula, $hora, $fecha, $tipoLibreta, $estado, $precio);
} else if ($tipo == "prueba") {
    $controla->altaPrueba($codigoPrueba, $documentoInstructor, $documentoAlumno, $matricula, $hora, $fecha, $tipoLibreta, $estado, $precio);
}


header('Location: vista.html.php');
