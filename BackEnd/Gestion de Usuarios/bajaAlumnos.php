<?php

require_once 'Controlador.php';

$controla = new Controlador();
var_dump($_POST);

$cedula = $_POST['dato'];  

$controla->bajaAlumno($cedula);



?>