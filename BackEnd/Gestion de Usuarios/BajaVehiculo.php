<?php
require_once 'Controlador.php';
require_once 'Vehiculo.php';
$controla = new Controlador();


$matricula = $_POST['txtMatricula'];
$opcion = $_POST['txtOpcion'];

$controla->BajaVehiculo($matricula, $opcion);

header('Location: vista.html.php');
