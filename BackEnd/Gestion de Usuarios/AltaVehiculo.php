<?php
require_once 'Controlador.php';
require_once 'Vehiculo.php';
$controla = new Controlador();

$matricula = $_POST['txtMatricula'];
$modelo = $_POST['txtModelo'];
$motor = $_POST['txtMotor'];
$combustible = $_POST['txtCombustible'];
$medida = $_POST['txtMedida'];
$situacionActual = $_POST['txtSituacionActual'];
$kilometraje = $_POST['txtKilometraje'];
$categoria = $_POST['txtCategoria'];

$controla->altaVehiculo($matricula, $modelo, $motor, $combustible, $medida, $situacionActual, $kilometraje, $categoria);


header('Location: vista.html.php');
