<?php

require_once 'Controlador.php';

$controla = new Controlador();

$matricula = $_POST['dato'];

$controla->BajaVehiculo($matricula);

?>