<?php
require_once 'Usuario.php';
require_once 'Administrador.php';
require_once 'Alumno.php';
require_once 'Instructor.php';
require_once 'Controlador.php';
session_start();
$controla = new Controlador();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['txtUsername'];
    $password = $_POST['txtPassword'];
    $recordar = isset($_POST['remember']);
}

$usuario = $controla->comprobarPermiso($username);
$permiso = $usuario[0]['permisos'];

if ($controla->logIn($username, $password) == 1) {
    // Autenticación exitosa
    if ($permiso == "owner") {
        $_SESSION['usuario'] = $username;
        $_SESSION['permisos'] = 4;
        if ($recordar) {
            setcookie('username', $username, time() + (86400 * 30), "/"); // 30 días
            setcookie('password', $contrasena, time() + (86400 * 30), "/"); // 30 días
        } else {
            setcookie('username', '', time() - 3600, "/"); // Eliminar cookie
            setcookie('password', '', time() - 3600, "/"); // Eliminar cookie
        }
        header('Location: ../../Frontend/html/ownerView/ownerLandingSpanish.html.php');
    } elseif ($permiso == "user") {
        $_SESSION['usuario'] = $username;
        $_SESSION['permisos'] = 1;
        if ($recordar) {
            setcookie('username', $username, time() + (86400 * 30), "/"); // 30 días
            setcookie('password', $contrasena, time() + (86400 * 30), "/"); // 30 días
        } else {
            setcookie('username', '', time() - 3600, "/"); // Eliminar cookie
            setcookie('password', '', time() - 3600, "/"); // Eliminar cookie
        }
        header('Location: ../../Frontend/html/guestView/spanish/guestLandingSpanish.html.php');
    } elseif ($permiso == "instructor") {
        $_SESSION['usuario'] = $username;
        $_SESSION['permisos'] = 2;
        if ($recordar) {
            setcookie('username', $username, time() + (86400 * 30), "/"); // 30 días
            setcookie('password', $contrasena, time() + (86400 * 30), "/"); // 30 días
        } else {
            setcookie('username', '', time() - 3600, "/"); // Eliminar cookie
            setcookie('password', '', time() - 3600, "/"); // Eliminar cookie
        }
        header('Location: ../../Frontend/html/guestView/spanish/guestLandingSpanish.html.php');
    } elseif ($permiso == "admin") {
        $_SESSION['usuario'] = $username;
        $_SESSION['permisos'] = 3;
        if ($recordar) {
            setcookie('username', $username, time() + (86400 * 30), "/"); // 30 días
            setcookie('password', $contrasena, time() + (86400 * 30), "/"); // 30 días
        } else {
            setcookie('username', '', time() - 3600, "/"); // Eliminar cookie
            setcookie('password', '', time() - 3600, "/"); // Eliminar cookie
        }
        header('Location: ../../Frontend/html/guestView/spanish/guestLandingSpanish.html.php');
    }
} else {
    // Autenticación fallida
    header('Location: ../../Frontend/html/guestView/spanish/guestLandingSpanish.html.php');
}
