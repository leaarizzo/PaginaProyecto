<?php

require_once 'Controlador.php';
$controla = new Controlador();

$username = $_SESSION['username'];
$permiso = $_SESSION['permisos'];

if ($permiso > 3) {
    $arreglo = $controla->seleccionarAdministrador($username);
} else if ($permiso = 2) {
    $arreglo = $controla->seleccionarInstructor(username: $username);
} else if ($permiso = 1) {
    $arreglo = $controla->seleccionarAlumo($username);
}

echo json_encode($arreglo);
