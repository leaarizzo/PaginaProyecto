<?php
require_once 'Controlador.php';
$controla = new Controlador();

$matricula = $_POST['matricula'];
$dato = $_POST['dato'];
$nuevo = $_POST['nuevo'];

$controla->modificarVehiculo($matricula, $dato, $nuevo);

