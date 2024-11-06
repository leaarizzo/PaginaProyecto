<?php
require_once 'Usuario.php';
require_once 'Administrador.php';
require_once 'Alumno.php';
require_once 'Instructor.php';
require_once 'Controlador.php';
session_start();
$controla = new Controlador();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $recaptchaSecret = '6LeyN3YqAAAAAPbSQGlAc8VE90YF7r1pyCuZn6Hw'; 
    $recaptchaResponse = $_POST['g-recaptcha-response'];

    // Verificar el reCAPTCHA
    $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$recaptchaSecret&response=$recaptchaResponse");
    $responseKeys = json_decode($response, true);

    if (intval($responseKeys["success"]) !== 1) {
        // reCAPTCHA falló
        $_SESSION['error_message'] = "No pasaste el CAPTCHA";
        header('Location: ../../Frontend/html/guestView/spanish/loginNoCaptcha.html.php');
        exit;
    } else {
        // reCAPTCHA exitoso
        $username = $_POST['txtUsername'];
        $password = $_POST['txtPassword'];
        $recordar = isset($_POST['remember']);

        $usuario = $controla->comprobarPermiso($username);
        $permiso = $usuario[0]['permisos'];

        if ($username == "admin" && $password == "admin") {
            $_SESSION['usuario'] = $username;
            $_SESSION['permisos'] = 4;
            if ($recordar) {
                setcookie('username', $username, time() + (86400 * 30), "/"); // 30 días
                setcookie('password', $contrasena, time() + (86400 * 30), "/"); // 30 días
            } else {
                setcookie('username', '', time() - 3600, "/"); // Eliminar cookie
                setcookie('password', '', time() - 3600, "/"); // Eliminar cookie
            }
            header('Location: ../../Frontend/html/ownerView/spanish/ownerIndex.html.php');
            exit;
        } else if ($controla->logIn($username, $password) == 1) {
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
                header('Location: ../../Frontend/html/ownerView/spanish/ownerIndex.html.php');

            } elseif ($permiso == "usuario") {
                $_SESSION['usuario'] = $username;
                $_SESSION['permisos'] = 1;
                if ($recordar) {
                    setcookie('username', $username, time() + (86400 * 30), "/"); // 30 días
                    setcookie('password', $contrasena, time() + (86400 * 30), "/"); // 30 días
                } else {
                    setcookie('username', '', time() - 3600, "/"); // Eliminar cookie
                    setcookie('password', '', time() - 3600, "/"); // Eliminar cookie
                }
                header('Location: ../../Frontend/html/studView/spanish/studIndex.html.php');

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
                header('Location: ../../Frontend/html/instView/spanish/instIndex.html.php');

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
                header('Location: ../../Frontend/html/adminView/spanish/adminIndex.html.php');
            }
        } else {
            header('Location: ../../Frontend/html/guestView/spanish/loginError.html.php');
        }
    }
}
?>