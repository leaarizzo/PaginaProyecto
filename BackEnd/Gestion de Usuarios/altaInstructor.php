<?php
include_once 'Controlador.php';
$controla = new Controlador();

$documento = $_POST['documento'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$fecha_nac = $_POST['fechaNacimiento'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$username = $_POST['username'];
$password = $_POST['password'];
$permisos = "instructor";

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

$controla->altaInstructor($horarios, $categoriaClase, $documento, $nombre, $apellido, $fecha_nac, $telefono, $correo, $username, $password, $permisos);
?>