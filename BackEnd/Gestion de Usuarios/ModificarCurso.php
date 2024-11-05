<?php
require_once 'Controlador.php';
$controla = new Controlador();


var_dump($_POST);

$id = $_POST['codigo'];
$dato = $_POST['dato'];
$nuevo = $_POST['nuevo'];

$controla->modificarClase($id, $dato, $nuevo);

