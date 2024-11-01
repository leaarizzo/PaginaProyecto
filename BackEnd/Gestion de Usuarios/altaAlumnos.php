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
$estadoTeorico = "Sin Iniciar";
$permisos = "usuario";
$fechaIns = date("Y-m-d");
$catA = $_POST['catA'];
$catB = $_POST['catB'];
$catC = $_POST['catC'];



$categoriaLibreta = array();
if ($catA == "on") array_push($categoriaLibreta, "Libreta A");
if ($catB == "on") array_push($categoriaLibreta, "Libreta B");
if ($catC == "on") array_push($categoriaLibreta, "Libreta C");

$controla->altaAlumno($documento, $nombre, $apellido, $fecha_nac, $telefono, $correo, $username, $password, $categoriaLibreta, $estadoTeorico, $permisos, $fechaIns);

?>