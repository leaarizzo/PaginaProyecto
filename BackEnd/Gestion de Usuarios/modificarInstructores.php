<?php
require_once 'Controlador.php';
$controla = new Controlador();

$documento = $_POST['cedula'];

$dato = $_POST['dato'];

$claseA = $_POST['claseA'];
$claseB = $_POST['claseB'];
$claseC = $_POST['claseC'];

$lunes = $_POST['lunes'];
$martes = $_POST['martes'];
$miercoles = $_POST['miercoles'];
$jueves = $_POST['jueves'];
$viernes = $_POST['viernes'];
$sabado = $_POST['sabado'];

$horarios = array();
if ($lunes == "on") array_push($horarios, "Lunes");
if ($martes == "on") array_push($horarios, "Martes");
if ($miercoles == "on") array_push($horarios, "Miercoles");
if ($jueves == "on") array_push($horarios, "Jueves");
if ($viernes == "on") array_push($horarios, "Viernes");
if ($sabado == "on") array_push($horarios, "Sabado");

$categoriaClase = array();
if ($claseA == "on") array_push($categoriaClase, "Clase A");
if ($claseB == "on") array_push($categoriaClase, "Clase B");
if ($claseC == "on") array_push($categoriaClase, "Clase C");


if ($dato == "categoriaClase") {
    $nuevo = $categoriaClase;
} else if ($dato == "horarios") {
    $nuevo = $horarios;
} else {
    $nuevo = $_POST['nuevo'];
}

$controla->modificarInstructor($documento, $dato, $nuevo);

