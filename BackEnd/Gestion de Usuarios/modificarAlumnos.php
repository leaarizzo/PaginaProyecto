<?php
require_once 'Controlador.php';
$controla = new Controlador();

var_dump($_POST);

$documento = $_POST['cedula'];

$dato = $_POST['dato'];

$catA = $_POST['catA'];
$catB = $_POST['catB'];
$catC = $_POST['catC'];

$categoriaLibreta = array();
if ($catA == "on") array_push($categoriaLibreta, "Libreta A");
if ($catB == "on") array_push($categoriaLibreta, "Libreta B");
if ($catC == "on") array_push($categoriaLibreta, "Libreta C");


if ($dato == "categoriaLibreta") {
    $nuevo = $categoriaLibreta;
} else {
    $nuevo = $_POST['nuevo'];
}


$controla->modificarAlumno($documento, $dato, $nuevo);

