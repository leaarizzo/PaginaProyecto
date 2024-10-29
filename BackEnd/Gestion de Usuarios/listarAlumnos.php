<?php

require_once 'BaseDatos.php';

$servidor = "localhost";
$usuario = "root";
$password = "";
$base_datos = "luxurydriving";


try {
    $conn = mysqli_connect($servidor,$usuario,$password,$base_datos);
} catch (Exception $ex) {
    die($ex->getMessage());
}

$consulta = "SELECT * FROM TablaAlumnos";


$resultado = mysqli_query($conn , $consulta);
$arreglo = mysqli_fetch_all($resultado,MYSQLI_ASSOC);

echo json_encode($arreglo);

?>