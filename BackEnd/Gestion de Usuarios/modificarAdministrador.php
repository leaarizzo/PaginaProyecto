<?php
require_once 'Controlador.php';
$controla = new Controlador();

$documento = $_POST['cedula'];
$dato = $_POST['dato'];
$nuevo = $_POST['nuevo'];

$controla->modificarAdministrador($documento, $dato, $nuevo);

