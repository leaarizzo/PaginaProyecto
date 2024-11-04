<?php
require_once 'Controlador.php';
require_once 'Vehiculo.php';
$controla = new Controlador();

$matricula = $_POST['matricula'];
$modelo = $_POST['modelo'];
$motor = $_POST['motor'];
$combustible = $_POST['combustible'];
$medida = $_POST['medida'];
$situacionActual = $_POST['situacion'];
$kilometraje = $_POST['kilometraje'];
$categoria = $_POST['categoria'];

$controla->altaVehiculo($matricula, $modelo, $motor, $combustible, $medida, $situacionActual, $kilometraje, $categoria);
