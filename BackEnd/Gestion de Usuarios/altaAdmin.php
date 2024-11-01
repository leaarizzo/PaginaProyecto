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
$permisos = "admin";

$controla->altaAdministrador($documento, $nombre, $apellido, $fecha_nac, $telefono, $correo, $username, $password, $permisos);
?>