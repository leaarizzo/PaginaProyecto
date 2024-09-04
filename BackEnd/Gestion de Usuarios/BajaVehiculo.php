<?php
require_once 'Controlador.php';
require_once 'Vehiculo.php';
$controla = new Controlador();


$matricula = $_POST['txtMatricula'];

$controla->BajaVehiculo($matricula);

header('Location: vista.html.php');
