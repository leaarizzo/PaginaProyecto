<?php

require_once 'Controlador.php';

$controla = new Controlador();

$cedula = $_POST['dato'];  

$controla->bajaAlumno($cedula);

?>