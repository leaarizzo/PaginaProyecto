<?php
require_once 'Controlador.php';
$controla = new Controlador();

$id = $_POST['id'];
$nuevo = $_POST['nuevo'];

$controla->modificarPregunta($id, $nuevo);

