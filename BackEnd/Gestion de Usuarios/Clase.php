<?php
require_once 'Curso.php';

class Clase extends Curso
{
    private int $codigoClase;

    public function __construct(int $codigoClase, int $documentoInstructor, int $documentoAlumno, int $matricula, String $hora, String $fecha, String $tipoLibreta, String $estado, int $precio)
    {
        parent::__construct($documentoInstructor, $documentoAlumno, $matricula, $hora, $fecha, $tipoLibreta, $estado, $precio);

        $this->codigoClase = $codigoClase;
    }

    /* Getters */

    public function getCodigoClase()
    {
        return $this->codigoClase;
    }

    /* Setters */

    public function setCodigoClase(int $cc)
    {
        $this->codigoClase = $cc;
    }
}
